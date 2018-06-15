jQuery(function($) {
    "use strict";

    $('.navigation').singlePageNav({
        currentClass: 'active',
        changeHash: true,
        scrollSpeed: 750,
        offset: 0,
        filter: ':not(.external)',
        easing: 'swing',

    });

    $.noConflict();
    $('.nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });

    // prettyphoto
    $("a[data-rel^='prettyPhoto']").prettyPhoto();

    function getAge(date_1, date_2)
    {

        //convert to UTC
        var date2_UTC = new Date(Date.UTC(date_2.getUTCFullYear(), date_2.getUTCMonth(), date_2.getUTCDate()));
        var date1_UTC = new Date(Date.UTC(date_1.getUTCFullYear(), date_1.getUTCMonth(), date_1.getUTCDate()));


        var yAppendix, mAppendix, dAppendix;


        //--------------------------------------------------------------
        var days = date2_UTC.getDate() - date1_UTC.getDate();
        if (days < 0)
        {

            date2_UTC.setMonth(date2_UTC.getMonth() - 1);
            days += DaysInMonth(date2_UTC);
        }
        //--------------------------------------------------------------
        var months = date2_UTC.getMonth() - date1_UTC.getMonth();
        if (months < 0)
        {
            date2_UTC.setFullYear(date2_UTC.getFullYear() - 1);
            months += 12;
        }
        //--------------------------------------------------------------
        var years = date2_UTC.getFullYear() - date1_UTC.getFullYear();




        if (years > 1) yAppendix = " years";
        else yAppendix = " year";
        if (months > 1) mAppendix = " months";
        else mAppendix = " month";
        if (days > 1) dAppendix = " days";
        else dAppendix = " day";

        var final = []; 
        if (years != 0)
          final.push(years + yAppendix)
        if (months != 0)        
          final.push(months + mAppendix)
        if(days !=0)
          final.push(days + dAppendix)

        return final.join(', ');
    }


    function DaysInMonth(date2_UTC)
    {
        var monthStart = new Date(date2_UTC.getFullYear(), date2_UTC.getMonth(), 1);
        var monthEnd = new Date(date2_UTC.getFullYear(), date2_UTC.getMonth() + 1, 1);
        var monthLength = (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
        return monthLength;
    }

    var start_date = new Date(2017, 6, 1);
    var current_date = new Date();
    var diff = getAge(start_date, current_date);

    $('#resume-details > div > div:nth-child(3) > div:nth-child(3) > div > div:nth-child(1) > div').text(diff);
});