﻿function populateList()
{
    $.get('rest/articles.php', function (data)
    {
        let list = document.getElementById('listArticles');

        for (let iii = 0; iii < data.length; ++iii) {
            let button = document.createElement('button');
            let title = document.createTextNode(data[iii].title);

            button.setAttribute('value', data[iii].article);
            button.setAttribute('class', 'list-group-item list-group-item-action');

            button.appendChild(title);
            list.appendChild(button);
        }

        clickListen();
    }, 'json');
}

function formHeader(title_text, author_text)
{
    let header = document.createElement('header');

    let title = document.createElement('h2');
    title.setAttribute('class', 'h2');
    title.appendChild(document.createTextNode(title_text));
    let author = document.createElement('p');
    author.appendChild(document.createTextNode(author_text));

    header.appendChild(title);
    header.appendChild(author);
    return header;
}

function formArticle(title_text, author_text, body_text)
{
    let article = document.createElement('article');
    article.setAttribute('class', 'h-100');

    article.appendChild(formHeader(title_text, author_text));
    let article_body = document.createElement('p');
    article_body.append(body_text);
    article.append(article_body);

    return article;
}

function displayArticle(id)
{
    $.get('rest/articles.php?id=' + id, function (data)
    {
        let summary = document.getElementById('divSummary');
        while (summary.firstChild) summary.removeChild(summary.firstChild);

        summary.append(formArticle(data.title, data.author, data.text));
    }, 'json');
}

function clickListen()
{
    $('#listArticles button').click(function ()
    {
        console.log($(this).attr('value'));
        displayArticle($(this).attr('value'));
    });
}

$(document).ready(function ()
{
    populateList();

    $('#btSubmit').click(function ()
    {
        let article_submission = {
            'title': $('#txtTitle').val(),
            'author': $('#txtAuthor').val(),
            'video': $('#txtVideo').val(),
            'text': $('#txtText').val()
        }

        $.post('rest/articles.php', { data: article_submission });
    });

    $('#formArticleCreate').submit(function (sender)
    {
        sender.preventDefault();
        $.post('rest/articles.php', $(this).serialize());
    })
});