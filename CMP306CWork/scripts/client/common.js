$(document).ready(function ()
{
    $('#updateSubmit').click(function ()
    {
        let eno = document.forms['update_employee']['eno'].value;
        let ename = document.forms['update_employee']['ename'].value;
        let ejob = document.forms['update_employee']['ejob'].value;

        let update = new Object();

        if (!ename == null && !ename == '') update.ename = ename;
        if (!ejob == null && !ejob == '') update.ejob = ejob;


    })
})