function update()
{
    $.get("scripts/server/view/get_current_reading.php", function (data)
    {
        //alert(data.device);
        $('#textDevice').text(data.device);
        $('#textVoltage').text(data.voltage + 'V');
        $('#textInternal').text(data.internal + '\xB0C Internal');
        $('#textExternal').text(data.external + '\xB0C External');
        $('#textLight').text(data.light);
    }, 'json');
    //alert('Checked');
};

$(document).ready(function ()
{
    //$.get("scripts/server/view/get_current_reading.php", function (data)
    //{
    //    //alert(data.device);
    //    $('#textDevice').text(data.device);
    //    $('#textVoltage').text(data.voltage + 'V');
    //    $('#textInternal').text(data.internal + '\xB0C Internal');
    //    $('#textExternal').text(data.external + '\xB0C External');
    //    $('#textLight').text(data.light);
    //}, 'json');
    update();
    setInterval(update, 3000);
});