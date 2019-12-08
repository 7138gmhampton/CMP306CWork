function setRowClass(index, class_setting)
{
    let table = document.getElementById('tableReads');

    table.rows[index].setAttribute('class', class_setting);
    table.rows[index].cells[1].setAttribute('class', class_setting);
}

$(document).ready(function ()
{
    let table = document.getElementById('tableReads');
    let greatest = 0.0;
    let most_index = 0;
    let least = Number.MAX_VALUE;
    let least_index = 0;

    for (let iii = 1; iii < table.rows.length; ++iii) {
        let temp_cell = table.rows[iii].cells[1].lastChild;
        let both_temps = temp_cell.nodeValue.split("/");
        let internal = parseFloat(both_temps[0]);
        let external = parseFloat(both_temps[1]);
        //alert(temp_cell.nodeValue);

        let difference = Math.abs(external - internal);

        if (difference > greatest) {
            greatest = difference;
            most_index = iii;
        }
        if (difference < least) {
            least = difference;
            least_index = iii;
        }
    }

    //alert('Most: ' + greatest + ' | Least: ' + least);
    //alert('Most at: ' + most_index + ' | Least at: ' + least_index);
    setRowClass(most_index, 'most-row');
    setRowClass(least_index, 'least-row');
});