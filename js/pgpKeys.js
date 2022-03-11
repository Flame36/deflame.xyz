fetch("/data/public.pgp")
    .then(response => response.text())
        .then(key => handleKeys(key));

function handleKeys(key)
{
    console.log(key);
    var mainKey = document.getElementById("main-key-text");
    mainKey.innerHTML = escapeHtml(key);
}

function escapeHtml(unsafe)
{
    return unsafe.replaceAll('&', '&amp;').replaceAll('<', '&lt;').replaceAll('>', '&gt;').replaceAll('"', '&quot;').replaceAll("'", '&#039;').replaceAll('\n', "<br>");
}