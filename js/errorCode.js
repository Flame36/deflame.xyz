var description = document.querySelector('#description');
fetch("/data/errorDescriptions.json")
    .then(response =>  response.json())
        .then(descriptionTexts => {
            if (code in descriptionTexts)
                description.innerHTML = descriptionTexts[code];
            else
                description.innerHTML = "";
        });