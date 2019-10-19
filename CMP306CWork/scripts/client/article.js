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

        document.getElementById('inputEditId').value = user_id;
        $.post('scripts/server/view/show_comment.php', { comment: user_id }, function (data)
        {
            document.getElementById('inputEditOriginal').value = data.content;
            //console.log('Flag');
            //console.log(data.content);
            document.getElementById('inputEditReplace').value = data.content;
            $('#modalEdit').modal('show');
        }, 'json');

        //$('#modalEdit').modal('show');
    });

    $('#btnEditSubmit').click(function ()
    {
        let original = document.getElementById('inputEditOriginal').value;
        let replacement = document.getElementById('inputEditReplace').value;

        if (replacement === original) $('#btnEditCancel').click();
        else document.getElementById('formEdit').submit();
    });
});