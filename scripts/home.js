jQuery(function($) {

    function checkUnavailable(date, unavailableDates) {
        // break the selected date to month, year and day to prepare MySQL format
        var m = date.getMonth(),
            d = date.getDate(),
            y = date.getFullYear();
        m = m + 1; // because months start from 0

        // add leading zeros
        m = m.toString();
        if (m.length < 2) m = '0' + m;
        d = d.toString();
        if (d.length < 2) d = '0' + d;
        // now go through the array to see if the date is in the array of unavailable dates or not
        for (i = 0, n = unavailableDates.length; i < n; i++) {
            if (jQuery.inArray(y + '-' + m + '-' + d, unavailableDates) != -1) {
                return [false];
            }
        }
        return [true];
    }

    function selectDate(date) {
        console.log(date);
        // is this date "from" or "to"?
        // the older date is always "from"
        var from = $('#from_date');
        var to = $('#to_date');
        var current = $('#current_setting');

        var fromDate = from.val();
        var toDate = to.val();

        // now convert them to Javascript date objects
        var fromParts = fromDate.split('-');
        fromDate = new Date(fromParts[0], fromParts[1] - 1, fromParts[2]);
        var toParts = toDate.split('-');
        toDate = new Date(toParts[0], toParts[1] - 1, toParts[2]);

        // convert also the user selected to date object to compare
        var selParts = date.split('-');
        var selDate = new Date(selParts[0], selParts[0] - 1, selParts[2]);

        // are we setting from or to? This is the third hidden field
        // we use it to store what we are currently setting. It should be populated with "from" by default
        var currentlySetting = current.val();

        // figure out where to set (hidden field)
        if (currentlySetting == 'from' || selDate < fromDate) {
            // selDate is "from"
            from.val(selParts[0] + '-' + selParts[1] + '-' + selParts[2]);
            $('#arrival').datepicker('setDate', new Date(selParts[0], selParts[1] - 1, selParts[2]));
        } else {
            // selDate is "to"
            to.val(selParts[0] + '-' + selParts[1] + '-' + selParts[2]);
            $('#departure').datepicker('setDate', new Date(selParts[0], selParts[1] - 1, selParts[2]));
        }

        currentlySetting = (currentlySetting == 'from') ? 'to' : 'from';
        current.val(currentlySetting);
    }

    /**
     * Inline datepicker for home page
     */
    $('#master-datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        numberOfMonths: 2,
        maxDate: '+1y',
        minDate: '0',
        appendText: 'test',
        beforeShowDay: function(date) {
            var unavailableDates = ['2015-06-23', '2015-06-24', '2015-06-25'];
            var result = checkUnavailable(date, unavailableDates); // here we pass the comparison to another function
            if (!result[0]) return result; // don't check further the unavailable dates

            // if the date is not unavailable, let's see do we need to color it
            var fromDate = $('#from_date').val();
            var toDate = $('#to_date').val();
            var fromParts = fromDate.split('-');
            fromDate = new Date(fromParts[0], fromParts[1] - 1, fromParts[2]);
            var toParts = toDate.split('-');
            toDate = new Date(toParts[0], toParts[1] - 1, toParts[2]);

            if (date.valueOf() >= fromDate.valueOf() && date.valueOf() <= toDate.valueOf()) {
                // return true with highlighted class
                return [true, 'ui-ibooking-highlight', null];
            }

            return [true];
        },
        onSelect: selectDate
    });


    $('#master-datepicker').find('.ui-datepicker-calendar .ui-state-default').each(function(index, el) {
        var $this = $(this);
        var date = $this.text();
        var parent = $this.closest('td');
        if (!parent.hasClass('ui-state-disabled')) {
            console.log(parent.data('year'), parent.data('month'), date);
            $this.append('<i>$250</i>');
        }
    });


    $('#alt_submit_button').on('click', function() {
        $('#booking-search-form').submit();
    });

});
