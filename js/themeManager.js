var themes;
var currentTheme = "default";

fetch("/data/themes.json")
    .then(response =>  response.json())
        .then(_themes => {
            themes = _themes;
            loadFirstTheme();
        });

function loadTheme(name){
    var theme = themes[name];
    theme.forEach(element => {
        $(':root').css(element[0], element[1]);
    });
    currentTheme = name;
}

function loadFirstTheme(){
    var name = "default";
    if(window._isTor)
        name = "tor";
    //TODO: read cookies
    loadTheme(name);
}



