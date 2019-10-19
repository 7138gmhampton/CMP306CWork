$(document).ready(function ()
{
    $('#btnComment').click(function ()
    {
        document.getElementById('formComment').submit();
    });

    $('button[id^="btnEdit"]').click(function (event)
    {
        let button_id = event.target.id;
        //console.log('Comment ' + button_id);
        let user_id = button_id.substring(7);
        //console.log('Comment ' + user_id);
        $('#modalEdit').modal('show');
    });

    $('#btnEditSubmit').click(function ()
    {
        let original = document.getElementById('inputOriginal').value;
        let replacement = document.getElementById('inputReplace').value;

        //if (replacement === original) $('#btnEditCancel').click();
        document.getElementById('formEdit').submit();
    });
});