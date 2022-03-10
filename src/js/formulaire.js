let httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {
    // instructions de traitement de la réponse
    httpRequest.open('GET', 'http://www.example.org/some.file', true);
    httpRequest.send();
};