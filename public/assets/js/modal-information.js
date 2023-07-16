$(document).ready(function () {
    let $infoTexts = ``;
    if ($.cookie('dontshow')) {
        $infoTexts = '';
    }
    if ($infoTexts) {
        $("#modalInformations").modal('show');
        if (localStorage.getItem("lightSwitch") && localStorage.getItem("lightSwitch") !== "dark") {
            $infoTexts = $infoTexts.replace(/bg-dark/g, "bg-light");
        }
        $("#modalInformations").find("#textInfo").html($infoTexts);
    }
    $("button[name='read_popup_news_b2c']").click(function () {
        if ($("#dontshowinfo").is(":checked")) {
            var date = new Date();
            date.setTime(date.getTime() + (6 * 60 * 60 * 1000)); // jam * menit * detik * milidetik
            $.cookie('dontshow', true, {
                expires: date
            });
        }
        $("#modalInformations").modal('hide');
    });
})