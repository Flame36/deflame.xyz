var tor = false;
fetch("https://check.torproject.org/torbulkexitlist")
    .then(function(response) {
        return response.text();
    })
    .then(function(text) {
        tor = text.split('\n').includes(ip);
    })