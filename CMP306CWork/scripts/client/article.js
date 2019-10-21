$(document).ready(function ()
{
    $('#btnComment').click(function ()
    {
        document.getElementById('formComment').submit();
    });

    //Edit Functions
    $('button[id^="btnEdit"]').click(function (event)
    {
        let button_id = event.target.id;
        //console.log('Comment ' + button_id);
        let comment_id = button_id.substring(7);
        //console.log('Comment ' + user_id);

        document.getElementById('inputEditId').value = comment_id;
        $.post('scripts/server/view/show_comment.php', { comment: comment_id }, function (data)
        {
            document.getElementById('inputEditOriginal').value = data.content;
            //console.log('Flag');
            //console.log(data.content);
            document.getElementById('inputEditReplace').value = data.content;
            //$('#modalEdit').modal('show');
        }, 'json');

        $('#modalEdit').modal('show');
    });

    $('#btnSubmitEdit').click(function ()
    {
        let original = document.getElementById('inputEditOriginal').value;
        let replacement = document.getElementById('inputEditReplace').value;
        let comment_id = document.getElementById('inputEditId').value;

        if (replacement === original) $('#btnEditCancel').click();
        //else document.getElementById('formEdit').submit();
        $.post('scripts/server/controller/edit_comment.php', {
            comment: comment_id,
            content: replacement
        }, function ()
            {
                location.reload();
            });
    });

    $('#btnCancelEdit').click(function ()
    {
        document.getElementById('inputEditId').value = '';
        document.getElementById('inputEditOriginal').value = '';
        document.getElementById('inputEditReplace').value = '';
        $('#modalEdit').modal('hide');
    });

    //Delete Functions
    $('button[id^="btnDelete"]').click(function (event)
    {
        let button_id = event.target.id;
        let comment_id = button_id.substring(9);
        //let user_id = getCookie('uid');
        let user_id = document.getElementById('inputUserId').value;
        //console.log('comment_id: ' + comment_id);
        //console.log('user_id: ' + user_id);

        document.getElementById('inputDeleteCommentId').value = button_id.substring(9);

        $('#modalDelete').modal('show');

        //let confirmation = (document.getElementById('inputDeleteConfirm').value == 'true');

        //if (confirmation) console.log('Check!');
    });

    $('#btnNoDelete').click(function ()
    {
        //document.getElementById('inputDeleteConfirm').value = 'false';
        $('#modalDelete').modal('hide');
    });

    $('#btnYesDelete').click(function ()
    {
        //document.getElementById('inputDeleteConfirm').value = 'true';
        //$('#modalDelete').modal('hide');
        let comment_id = document.getElementById('inputDeleteCommentId').value;
        let user_id = document.getElementById('inputUserId').value;

        $.post('scripts/server/controller/erase_comment.php', {
            comment: comment_id,
            user: user_id
        }, function () { location.reload(); });
    });
});