$(".form-tabs__nav").on("click", ".form-tabs__nav__link:not(.form-tabs__nav__link--active)", function () {
    $(this).addClass("form-tabs__nav__link--active").siblings().removeClass("form-tabs__nav__link--active");
    $("div.form-tabs__content").removeClass("form-tabs__content--active").eq($(this).index()).addClass("form-tabs__content--active");
});
