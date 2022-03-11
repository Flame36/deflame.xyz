fetch("https://api.github.com/users/Flame36/repos")
    .then(response => response.json())
        .then(data => handleRepositories(data));

function handleRepositories(repositories)
{
    var template = document.getElementById("template");
    template.removeAttribute("id");
    
    var list = document.getElementsByClassName("projects")[0];
    list.innerHTML = "";

    repositories.forEach(repos => {
        var toAdd = template;

        var description = repos["description"];
        if (description == null)
            description = "";

        toAdd.innerHTML = toAdd.innerHTML
        .replace("{NAME}", escapeHtml(repos["name"]))
        .replace("{DESC}", escapeHtml(description))
        .replace("{URL}", escapeHtml(repos["html_url"]));

        list.appendChild(toAdd);
    });
}

function escapeHtml(unsafe)
{
    return unsafe.replaceAll('&', '&amp;').replaceAll('<', '&lt;').replaceAll('>', '&gt;').replaceAll('"', '&quot;').replaceAll("'", '&#039;');
}