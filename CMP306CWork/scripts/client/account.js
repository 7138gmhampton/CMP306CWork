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
        let password = document.getElementById('inputRegisterPassword').value;
        let confirmation = document.getElementById('inputRegisterConfirm').value;
        let special = /[!"#\$%&'\(\)\*\+,-\.:;<=>\?@\[\\\]\^_`\{\|\}~]/;
        let number = /\w/;
        let capital = /[A-Z]/;
        let letter = /[a-z]/;
        let errors = document.getElementById('txtRegisterPasswordError');

        //console.log('Password: ' + password);
        //console.log('Confirm: ' + confirmation);

        //console.log('Special: ' + special.test(password));
        //console.log('Number: ' + password.test(number));
        //console.log('Capital: ' + password.test(capital));
        //console.log('Letter: ' + password.test(letter));

        errors.innerText = '';

        if (password !== confirmation)
            errors.innerText = 'Password and confirmation do not match!';
        else if (password.length < 8)
            errors.innerText = 'Password must be at least 8 characters long.';
        else if (!(special.test(password) && number.test(password) && capital.test(password) && 
            letter.test(password) || password.length > 14))
            errors.innerText = 'Password MUST contain at least one lowercase, Uppercase, ' +
                'number and special character (#, !, ...) OR be at least 15 characters long.';
        else document.getElementById('formRegister').submit();
    });

    $('#inputRegisterUsername').change(function ()
    {

    });
});