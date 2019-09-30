$(document).ready(function ()
{
    $('#btnLogin').click(function ()
    {

    });

    $('#btnRegister').click(function ()
    {
        let password = document.getElementById('inputRegisterPassword').textContent;
        let confirmation = document.getElementById('inputRegisterConfirm').textContent;

        if (password !== confirmation)
            document.getElementById('txtRegisterPasswordError').innerText = 'Password and ' +
                'confirmation do not match!';
        else document.getElementById('formRegister').submit();
    });

    $('#inputRegisterUsername').change(function ()
    {

    });
});