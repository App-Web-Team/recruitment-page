$("#btn-1").click(function () {
    $(".container > div:nth-child(2) p").removeClass("hide-jd");
    $(".container > div:nth-child(4) p").addClass("hide-jd");
});
$("#btn-2").click(function () {
    $(".container > div:nth-child(2) p").addClass("hide-jd");
    $(".container > div:nth-child(4) p").removeClass("hide-jd");
});