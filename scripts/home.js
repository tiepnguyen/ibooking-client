jQuery(function($) {

<<<<<<< HEAD
    var availableDates = {
        '2015-06-01': '$150',
        '2015-06-02': '$150',
        '2015-06-03': '$150',
        '2015-06-04': '$150',
        '2015-06-05': '$150',
        '2015-06-06': '$150',
        '2015-06-07': '$150',
        '2015-06-08': '$150',
        '2015-06-09': '$150',
        '2015-06-10': '$150',
        '2015-06-11': '$150',
        '2015-06-12': '$150',
        '2015-06-13': '$150',
        '2015-06-14': '$150',
        '2015-06-15': '$150',
        '2015-06-16': '$150',
        '2015-06-17': '$150',
        '2015-06-18': '$150',
        '2015-06-19': '$150',
        '2015-06-20': '$150',
        '2015-06-21': '$150',
        '2015-06-22': '',
        '2015-06-23': '',
        '2015-06-24': '',
        '2015-06-25': '$150',
        '2015-06-26': '$250',
        '2015-06-27': '$250',
        '2015-06-28': '$250',
        '2015-06-29': '$250',
        '2015-06-30': '$250',
    };
=======
    var availableDates = window.availableDates;
>>>>>>> master

    function checkAvailable(date) {
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
        var dateString = y + '-' + m + '-' + d;
        var label = '';
        var rate = '';
        // now go through the array to see if the date is in the array of unavailable dates or not
        for (var i in availableDates) {
            if (dateString == i) {
                if (availableDates[i] === '') {
                    return [false];
                } else {
                    label = 'ui-ibooking-rate';
                    rate = availableDates[i];
                }
            }
        }

        // if the date is not unavailable, let's see do we need to color it
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();
        var fromParts = fromDate.split('-');
        fromDate = new Date(fromParts[0], fromParts[1] - 1, fromParts[2]);
        var toParts = toDate.split('-');
        toDate = new Date(toParts[0], toParts[1] - 1, toParts[2]);

        if (date.valueOf() >= fromDate.valueOf() && date.valueOf() <= toDate.valueOf()) {
            // return true with highlighted class
            label = 'ui-ibooking-highlight';
        }

        return [true, label, rate];
    }

    function selectDate(date) {
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
        var selDate = new Date(selParts[0], selParts[1] - 1, selParts[2]);

        // are we setting from or to? This is the third hidden field
        // we use it to store what we are currently setting. It should be populated with "from" by default
        var currentlySetting = current.val();
        var currentDay = new Date(selParts[0], selParts[1] - 1, selParts[2]);
        var nextDay = new Date(currentDay.valueOf() + 86400000);

        // figure out where to set (hidden field)
        if (currentlySetting == 'from' || selDate < fromDate) {
            // selDate is "from"
            from.val(selParts[0] + '-' + selParts[1] + '-' + selParts[2]);
            to.val(nextDay.getFullYear() + '-' + (nextDay.getMonth() + 1) + '-' + nextDay.getDate());
            $('#arrival').datepicker('setDate', currentDay);
<<<<<<< HEAD
            $('#departure').datepicker('setDate', nextDay);
=======
            $('#departure')
                .datepicker('option', 'minDate', currentDay)
                .datepicker('setDate', nextDay);
>>>>>>> master
        } else {
            // selDate is "to"
            to.val(selParts[0] + '-' + selParts[1] + '-' + selParts[2]);
            $('#departure').datepicker('setDate', currentDay);
        }

        currentlySetting = (currentlySetting == 'from') ? 'to' : 'from';
        current.val(currentlySetting);
    }

    function changeMonthyear(year, month) {
        // Make ajax call here to get rate for requested year/month
        console.log(year, month);
    }

    /**
     * Inline datepicker for home page
     */
    $('#master-datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        numberOfMonths: 2,
        minDate: '0',
        maxDate: '+1y',
        onSelect: selectDate,
        onChangeMonthYear: changeMonthyear,
        beforeShowDay: checkAvailable
    });


    $('#alt_submit_button').on('click', function() {
        $('#booking-search-form').submit();
    });

});
