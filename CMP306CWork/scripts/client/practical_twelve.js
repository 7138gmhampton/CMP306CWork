function populateList()
{
    $.get('rest/articles.php', function (data)
    {
        let list = document.getElementById('listArticles');

        for (let iii = 0; iii < data.length; ++iii) {
            let item = document.createElement('li');
            let button = document.createElement('button');
            let title = document.createTextNode(data[iii].title);

            button.setAttribute('value', data[iii].article);
            button.setAttribute('class', 'list-group-item list-group-item-action');

            button.appendChild(title);
            item.appendChild(button);
            list.appendChild(item);
        }
    }, 'json');
}

$(document).ready(function ()
{
    populateList();
});