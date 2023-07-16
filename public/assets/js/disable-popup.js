var cookie = document.cookie.split("; ");

if (cookie.length < 2) {
    $(document).ready(function () {
        $("#popup").modal("show");

    })
}

function disablePopup() {
    var checkBox = document.getElementById("dontShow");
    var date = new Date();
    date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));

    if (checkBox.checked) {
        document.cookie = "popup=0; expires=" + date.toGMTString();
    }
}