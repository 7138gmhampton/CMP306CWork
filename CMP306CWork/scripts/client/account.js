$(document).ready(function ()
{
    $('#btnLogin').click(function ()
    {
        let email = document.getElementById('inputLoginEmail').value;
        let password = document.getElementById('inputLoginPassword').value;

        if (email == null || password == null)
            document.getElementById('txtLoginError').innerText = 'Please enter ALL fields...';
        else document.getElementById('formLogin').submit();
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