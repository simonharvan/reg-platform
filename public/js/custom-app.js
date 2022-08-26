$(window).ready(() => {
    let height = $("#navbar").css('height')
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $(".upper-margin-div").css("margin-top", height)
    }
    $("#page-wrapper").css("margin-top", height)
})
