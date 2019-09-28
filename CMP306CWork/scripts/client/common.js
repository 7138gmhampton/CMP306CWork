$(document).ready(function ()
{
    let url = location.href.replace(/\/$/, '');

    if (location.hash) {
        const hash = url.split('#');

        $('#navTutorials a[href="#' + hash[1] + '"]').tab('show');
    }
    else $('#navTutorials a[href="#tabWeekOne"]').tab('show');

    $(window).scrollTop(0);
})