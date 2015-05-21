jQuery(function($) {

    $.fn.validate = function(options) {
        return this.each(function(index, el) {
            var $this = $(this).on('submit', options.submit);

            $.each(options.fields, function(index, val) {
                $this.find(index).on('blur', function() {
                    console.log($(this).val());
                    $(this).setValidLabel(val.test($(this).val()));
                });
            });
        });
    };

    $.fn.setValidLabel = function(valid) {
        return this.each(function() {
            $(this).removeClass('valid invalid')
                .addClass(valid ? 'valid' : 'invalid')
                .closest('td')
                .removeClass('valid invalid')
                .addClass(valid ? 'valid' : 'invalid');
        });
    };

    $('.booking-inform-form').validate({
        fields: {
            '.validate-name': /^[A-Za-z\s]{3,20}$/,
            '.validate-email': /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i,
            '.validate-phone': /^[(]{0,1}[0-9+]{2,4}[)]{0,1}[0-9\-\s\.]{3,14}$/,
            '.validate-address': /^[A-Za-z0-9,\s\.\-\/]{3,}$/,
            '.validate-select': /.+/
        },
        submit: function(e, params) {
            console.log(params);
            var invalid = $(this).find('[required]:not(.valid)').first();
            console.log(invalid);
            if (invalid.length) {
                e.preventDefault();
                invalid.focus();
            } else if ($('#tnc-agree-checkbox').prop('checked') === false) {
                e.preventDefault();
                $('#tnc-dialog-button').click();
            } else {
                console.log('submit');
                // $(this).submit(true);
            }
        }
    });

    if ((paymentForm = $('#payment-form')).length) {
        paymentForm.find('#card-number')
            .payment('formatCardNumber')
            .on('blur', function() {
                $(this).setValidLabel($.payment.validateCardNumber($(this).val()));
            })
            .on('keyup', function() {
                if ($(this).hasClass('identified')) {
                    $(this).closest('label').addClass(this.className);
                } else {
                    $(this).closest('label').removeAttr('class');
                }
            });
        paymentForm.find('#card-expiry')
            .payment('formatCardExpiry')
            .on('blur', function() {
                var expiry = $(this).val().split(' / ');$('#card-expiry-month').val(expiry[0]);
$('#card-expiry-year').val(expiry[1]);

                $(this).setValidLabel($.payment.validateCardExpiry(expiry[0], expiry[1]));
            });
        paymentForm.find('#card-cvv')
            .payment('formatCardCVC')
            .on('blur', function() {
                $(this).setValidLabel($.payment.validateCardCVC($(this).val()));
            });
        paymentForm.find('#card-holder')
            .on('blur', function() {
                var pattern = /^[A-Za-z ]{3,20}$/;
                $(this).setValidLabel(pattern.test($(this).val()));
            });
    }

});
