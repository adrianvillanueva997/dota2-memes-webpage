$(document).ready(function () {

    $("#artifactcheck").change(function () {
        artifactReally();
    });


});

function artifactReally() {
    let checkBox = document.getElementById("artifactcheck");
    let really = document.getElementById("artifactreally");

    if (checkBox.checked === true) {
        really.style.display = "block";
    } else {
        really.style.display = "none";
    }
}