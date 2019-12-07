function getIntTemps()
{
    $.get('scripts/server/view/get_ten_latest.php', function (data)
    {
        var internal_temps = new Array();
        //for (reading in data)
            //alert(reading.internal);
            //internal_temps.push(reading.internal);
        for (let iii = 0; iii < data.length; ++iii)
            //alert(data[iii].internal);
            internal_temps.push(data[iii].internal);

        alert(data[0].internal);
        alert(internal_temps[0]);
        return internal_temps;
    }, 'json');

    //return internal_temps;
}

function setupGraph(canvas)
{
    $.get('scripts/server/view/get_ten_latest.php', function (data)
    {
        var internal_temps = new Array();
        var external_temps = new Array();
        for (let iii = 0; iii < data.length; ++iii) {
            internal_temps.push(data[iii].internal);
            external_temps.push(data[iii].external);
        }

        let graph_data = {
            labels: [10, 9, 8, 7, 6, 5, 4, 3, 2, 1],
            datasets: [{ label: 'internal', data: internal_temps },
            { label: 'external', data: external_temps }]
        };

        console.log(internal_temps);

        let line_chart = new Chart(canvas, {
            type: 'line',
            data: graph_data,
            options: { scales: { xAxes: { type: 'linear' } } }
        });
    }, 'json');
}

$(document).ready(function ()
{
    let canvas = $('#canvasGraph');
    //let internals = getIntTemps();
    //let chart = new Chart(canvas, {
    //    type: 'line',
    //    data: getIntTemps()
    //});
    setupGraph(canvas);
});