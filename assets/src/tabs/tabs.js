$(".plugin-form-tabs__nav").on("click", ".plugin-form-tabs__nav__link:not(.plugin-form-tabs__nav__link--active)", function () {
    $(this).addClass("plugin-form-tabs__nav__link--active").siblings().removeClass("plugin-form-tabs__nav__link--active");
    $("div.plugin-form-tabs__content").removeClass("plugin-form-tabs__content--active").eq($(this).index()).addClass("plugin-form-tabs__content--active");
});
