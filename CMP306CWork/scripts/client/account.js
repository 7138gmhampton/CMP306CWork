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

        console.log('Password: ' + password);
        console.log('Confirm: ' + confirmation);

        console.log('Special: ' + special.test(password));
        console.log('Number: ' + password.test(number));
        console.log('Capital: ' + password.test(capital));
        console.log('Letter: ' + password.test(letter));

        if (password !== confirmation)
            document.getElementById('txtRegisterPasswordError').innerText = 'Password and ' +
                'confirmation do not match!';
        else if (!(password.test(special) && password.test(number) && password.test(capital) && 
            password.test(letter) || password.length() > 14))
            document.getElementById('txtRegisterPasswordError').innerText = 'Password MUST ' +
                'contain at least one lowercase, Uppercase, number and special character ' +
                '(#, !, ...) OR be at least 15 characters long.';
        //else document.getElementById('formRegister').submit();
    });

    $('#inputRegisterUsername').change(function ()
    {

    });
});