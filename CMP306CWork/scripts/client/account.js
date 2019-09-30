$(document).ready(function ()
{
    $('#btnLogin').click(function ()
    {

    });

    $('#btnRegister').click(function ()
    {
        let password = document.getElementById('inputRegisterPassword');
        let confirmation = document.getElementById('inputRegisterConfirm');

        if (password !== confirmation)
            document.getElementById('txtRegisterPasswordError').innerText = 'Password and ' +
                'confirmation do not match!';
        else document.getElementById('formRegister').submit();
    });

    $('#inputRegisterUsername').change(function ()
    {

    });
});