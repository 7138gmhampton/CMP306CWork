function getCookie(key)
{
    key += '=';
    let decoded_cookie = decodeURIComponent(document.cookie);
    let cookie_array = decoded_cookie.split(';');

    for (let iii = 0; iii < cookie_array.length; ++iii) {
        let each_entry = cookie_array[iii];
        while (each_entry.charAt(0) == ' ') each_entry = each_entry.substring(1);

        if (each_entry.indexOf(key) == 0)
            return each_entry.substring(key.length, each_entry.length);
    }

    return '';
}