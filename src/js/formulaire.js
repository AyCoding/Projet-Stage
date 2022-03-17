let xhr = new XMLHttpRequest();

xhr.onload = function () {
    console.log(this.responseText);
}

xhr.open("GET", "run.bat", true);
xhr.responseType = "text";
xhr.send();