﻿$(document).ready(function ()
{
    $('#btnLogin').click(function ()
    {
        let email_check = /\S{1,}@\S{1,}\.\S/;
        let email = document.getElementById('inputLoginEmail').value;
        let password = document.getElementById('inputLoginPassword').value;

        if (email == null || password == null)
            document.getElementById('txtLoginError').innerText = 'Please enter ALL fields...';
        else if (!email_check.test(email))
            document.getElementById('txtLoginError').innerText = 'Invalid email address.';
        else document.getElementById('formLogin').submit();
    });

    $('#btnRegister').click(function ()
    {
        let special = /[!"#\$%&'\(\)\*\+,-\.:;<=>\?@\[\\\]\^_`\{\|\}~]/;
        let number = /\w/;
        let capital = /[A-Z]/;
        let letter = /[a-z]/;
        let email_check = /\S{1,}@\S{1,}\.\S/;
        let errors = document.getElementById('txtRegisterPasswordError');
        let email = document.getElementById('inputRegisterEmail').value;
        let username = document.getElementById('inputRegisterUsername').value;
        let password = document.getElementById('inputRegisterPassword').value;
        let confirmation = document.getElementById('inputRegisterConfirm').value;

        errors.innerText = '';

        if (!(email && username && password))
            errors.innerText = 'Please complete all fields.';
        else if (password !== confirmation)
            errors.innerText = 'Password and confirmation do not match!';
        else if (password.length < 8)
            errors.innerText = 'Password must be at least 8 characters long.';
        else if (!(special.test(password) && number.test(password) && capital.test(password) && 
            letter.test(password) || password.length > 14))
            errors.innerText = 'Password MUST contain at least one lowercase, Uppercase, ' +
                'number and special character (#, !, ...) OR be at least 15 characters long.';
        else if (!email_check.test(email))
            errors.innerText = 'Invalid email address.';
        else document.getElementById('formRegister').submit();
    });

    $('#inputRegisterUsername').change(function ()
    {

    });
});