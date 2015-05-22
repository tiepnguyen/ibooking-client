jQuery(function($) {

    $('.spinner').spinner();
    $('.slider').slider({
        range: true,
        values: [0, 100]
    });


    var datepicker = $('.datepicker');
    datepicker.each(function() {
        var $this = $(this);
        // var start_date_value, end_date_value;
        $this.datepicker({
            minDate: '0',
            dateFormat: 'DD, dd M yy',
            altField: $this.next('.datepicker-alt'),
            altFormat: 'yy-mm-dd',
            onClose: function(selectedDate, obj) {
                if ($this.is('#arrival')) {
                    $('#departure').datepicker('option', {
                        'minDate': selectedDate
                    }).focus();

                    console.log(obj);
                    $('#from_date').val(obj.selectedYear + '-' + (obj.selectedMonth + 1) + '-' + obj.selectedDay);
                } else if ($this.is('#departure')) {
                    $('#to_date').val(obj.selectedYear + '-' + (obj.selectedMonth + 1) + '-' + obj.selectedDay);
                }
                $('#master-datepicker').datepicker('refresh');
            }
        });
    });

    $('.component-title').on('click', function(e) {
        $(this).toggleClass('active').next('.component-body').slideToggle('fast');
    });

    $('.rate-name').on('click', function(e) {
        var $this = $(this);
        $this.next('.rate-item-content').slideToggle();
        $this.closest('li.rate-item').toggleClass('active');
    });

    $('.dialog-button').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var dialog = $(href);
        console.log(href);
        dialog.dialog($.extend(dialog.data(), {
            maxHeight: dialog.data('maxheight'),
            open: function(e, ui) {
                if (dialog.data('scrollable') === false) {
                    $('body').css('overflow', 'hidden');
                }
            },
            close: function(e, ui) {
                if (dialog.data('scrollable') === false) {
                    $('body').css('overflow', 'auto');
                }
            }
        }));
    });

    $('#dialog-tnc').on('dialogopen', function(e, ui) {
        var $this = $(this);
        $this.dialog('option', 'buttons', {
            Agree: function() {
                $('#tnc-agree-checkbox').prop('checked', true);
                $this.dialog('close');
            }
        });
    });

    $('.select-all-checkbox').on('change', function(e) {
        $(this).closest('.component-body')
            .find(':checkbox')
            .prop('checked', this.checked);
    });

});
