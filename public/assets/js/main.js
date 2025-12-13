$(document).ready(function () {
    (jQuery.event.special.touchstart = {
        setup: function (t, a, e) {
            this.addEventListener("touchstart", e, {
                passive: !1,
            });
        },
    }),
        (jQuery.event.special.touchmove = {
            setup: function (t, a, e) {
                this.addEventListener("touchmove", e, {
                    passive: !1,
                });
            },
        }),
        (jQuery.event.special.wheel = {
            setup: function (t, a, e) {
                this.addEventListener("wheel", e, {
                    passive: !0,
                });
            },
        }),
        (jQuery.event.special.mousewheel = {
            setup: function (t, a, e) {
                this.addEventListener("mousewheel", e, {
                    passive: !0,
                });
            },
        });
    var t = window.location.hash;
    t &&
        ($(window).scrollTop(0),
        setTimeout(function () {
            var a = $(t);
            a.length &&
                $("html, body").animate(
                    {
                        scrollTop: a.offset().top - 50,
                    },
                    1e3
                );
        }, 100)),
        $("#main-header .menu-button").on("click", function () {
            $(this).hasClass("active")
                ? ($(this).removeClass("active"),
                  $("header nav").removeClass("active"),
                  $("header .logo").removeClass("white"),
                  $("body").css("overflow", "visible"),
                  $("body").css("position", ""),
                  $("body").css("height", ""),
                  $("#main-header").removeClass("active"))
                : ($(this).addClass("active"),
                  $("header nav").addClass("active"),
                  $("header .logo").addClass("white"),
                  $("body").css("overflow", "hidden"),
                  $("#main-header").addClass("active"));
        }),
        -1 != navigator.appVersion.indexOf("Android") &&
            $(".download-app .icon").addClass("android"),
        -1 != navigator.appVersion.indexOf("iPhone") &&
            $(".download-app .icon").addClass("apple"),
        $(window).on("scroll", function () {
            var t = $(window).scrollTop();
            1 === $("main").find(".trigger-header-phone").length &&
                ($(".trigger-header-phone").offset().top - t < 0
                    ? $(".button-call").addClass("active")
                    : $(".button-call").removeClass("active"));
        }),
        $("a[href]").each(function () {
            var t = $(this).attr("href");
            t.startsWith("#") &&
                ($(this).removeAttr("rel"),
                $(this).removeAttr("target"),
                $(this).attr("data-toggle", "scrollspy"),
                $(this).attr("data-target", t),
                $(this).attr("data-top", 130));
        }),
        $("*[contenteditable]").each(function () {
            $(this).removeAttr("contenteditable");
        }),
        $("a[data-toggle=scroll-action]").on("click", function () {
            var t = $(this).attr("data-offset");
            window.location.pathname == $(this).attr("data-href")
                ? ($("html, body").animate(
                      {
                          scrollTop: $("#" + t).offset().top - 50,
                      },
                      1e3
                  ),
                  $("header .menu-button").removeClass("active"),
                  $("header nav").removeClass("active"),
                  $("header #main-header").removeClass("active"),
                  $("header .logo").removeClass("white"),
                  $("body").css("overflow", "visible"),
                  $("body").css("position", ""),
                  $("body").css("height", ""))
                : (window.location.href = $(this).attr("data-href") + "#" + t);
        }),
        $(".lazy").lazy({
            effect: "fadeIn",
            effectTime: 200,
            threshold: 0,
        }),
        (-1 == navigator.appVersion.indexOf("Android") &&
            -1 == navigator.appVersion.indexOf("iPhone")) ||
            (-1 != navigator.appVersion.indexOf("Android") &&
                ($(".download-app .icon").addClass("android"),
                $(".download-app a").attr(
                    "href",
                    "https://play.google.com/store/apps/details?id=com.getRehabrion .patient"
                ),
                $(".download-app a").attr("target", "_blank"),
                $(".download-app a").attr("rel", "noreferrer noopener"),
                $(".thank-you .download-app").attr(
                    "href",
                    "https://play.google.com/store/apps/details?id=com.getRehabrion .patient"
                ),
                $(".thank-you .download-app").attr("target", "_blank"),
                $(".thank-you .download-app").attr(
                    "rel",
                    "noreferrer noopener"
                ),
                $(".get-app").attr(
                    "href",
                    "https://play.google.com/store/apps/details?id=com.getRehabrion .patient"
                ),
                $(".get-app").attr("target", "_blank"),
                $(".get-app").attr("rel", "noreferrer noopener")),
            -1 != navigator.appVersion.indexOf("iPhone") &&
                ($(".download-app .icon").addClass("apple"),
                $(".download-app a").attr(
                    "href",
                    "https://apps.apple.com/us/app/Rehabrion -physical-therapy/id1434554640"
                ),
                $(".download-app a").attr("target", "_blank"),
                $(".download-app a").attr("rel", "noreferrer noopener"),
                $(".thank-you .download-app").attr(
                    "href",
                    "https://apps.apple.com/us/app/Rehabrion -physical-therapy/id1434554640"
                ),
                $(".thank-you .download-app").attr("target", "_blank"),
                $(".thank-you .download-app").attr(
                    "rel",
                    "noreferrer noopener"
                ),
                $(".get-app").attr(
                    "href",
                    "https://apps.apple.com/us/app/Rehabrion -physical-therapy/id1434554640"
                ),
                $(".get-app").attr("target", "_blank"),
                $(".get-app").attr("rel", "noreferrer noopener"))),
        $(function () {
            var t = location.pathname;
            $("#nav li a").each(function () {
                var a = $(this);
                a.attr("href") && a.attr("href") === t && a.addClass("active");
            });
        }),
        $("#nav .dropdown").on("click", function (t) {
            t.stopPropagation(),
                $(this).hasClass("active")
                    ? $(this).removeClass("active")
                    : $(this).addClass("active");
        }),
        $(document).click(function () {
            $("#nav .dropdown").removeClass("active");
        }),
        "/aarp" == window.location.pathname &&
            ($("a[href]").attr("href", function (t, a) {
                if (-1 !== a.indexOf("#")) {
                    var e = a.substring(a.indexOf("#"));
                    return (
                        (withoutRef = a.split("#")[0]),
                        withoutRef + "?utm_source=aarp_page" + e
                    );
                }
                return a + "?utm_source=aarp_page";
            }),
            $("a[href]").attr("target", "_blank"));
    var a = new URLSearchParams(window.location.search),
        e = a.get("utm_source");
    e &&
        ($("a[href]").each(function () {
            var t = $(this).attr("href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_source=" + e)
                : (t += "?utm_source=" + e),
                $(this).attr("href", t);
        }),
        $("a[data-href]").each(function () {
            var t = $(this).attr("data-href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_source=" + e)
                : (t += "?utm_source=" + e),
                $(this).attr("data-href", t);
        }));
    var r = a.get("utm_campaign");
    r &&
        ($("a[href]").each(function () {
            var t = $(this).attr("href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_campaign=" + r)
                : (t += "?utm_campaign=" + r),
                $(this).attr("href", t);
        }),
        $("a[data-href]").each(function () {
            var t = $(this).attr("data-href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_campaign=" + r)
                : (t += "?utm_campaign=" + r),
                $(this).attr("data-href", t);
        }));
    var o = a.get("utm_medium");
    o &&
        ($("a[href]").each(function () {
            var t = $(this).attr("href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_medium=" + o)
                : (t += "?utm_medium=" + o),
                $(this).attr("href", t);
        }),
        $("a[data-href]").each(function () {
            var t = $(this).attr("data-href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_medium=" + o)
                : (t += "?utm_medium=" + o),
                $(this).attr("data-href", t);
        }));
    var n = a.get("utm_term");
    n &&
        ($("a[href]").each(function () {
            var t = $(this).attr("href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_term=" + n)
                : (t += "?utm_term=" + n),
                $(this).attr("href", t);
        }),
        $("a[data-href]").each(function () {
            var t = $(this).attr("data-href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_term=" + n)
                : (t += "?utm_term=" + n),
                $(this).attr("data-href", t);
        }));
    var i = a.get("utm_content");
    i &&
        ($("a[href]").each(function () {
            var t = $(this).attr("href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_content=" + i)
                : (t += "?utm_content=" + i),
                $(this).attr("href", t);
        }),
        $("a[data-href]").each(function () {
            var t = $(this).attr("data-href");
            -1 !== t.indexOf("?")
                ? (t += "&utm_content=" + i)
                : (t += "?utm_content=" + i),
                $(this).attr("data-href", t);
        }));
}),
    document.addEventListener("DOMContentLoaded", function () {
        var t,
            a = document.querySelectorAll("img.lazyload"),
            e = document.querySelectorAll("div.lazyload");
        function r() {
            t && clearTimeout(t),
                (t = setTimeout(function () {
                    var t = window.pageYOffset;
                    a.forEach(function (a) {
                        a.offsetTop < window.innerHeight + t &&
                            ((a.src = a.dataset.src),
                            (a.onload = function () {
                                a.classList.remove("lazyload"),
                                    a.classList.add("fade-in");
                            }));
                    }),
                        e.forEach(function (a) {
                            a.offsetTop < window.innerHeight + t &&
                                ((a.style.backgroundImage = "url(".concat(
                                    a.dataset.src,
                                    ")"
                                )),
                                a.classList.remove("lazyload"),
                                a.classList.add("fade-in"));
                        }),
                        0 == e.length &&
                            0 == a.length &&
                            (document.removeEventListener("scroll", r),
                            window.removeEventListener("resize", r),
                            window.removeEventListener("orientationChange", r));
                }, 100));
        }
        document.addEventListener("scroll", r),
            window.addEventListener("load", r),
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
    }),
    ($.fn.updateDotsAppearance = function (t) {
        this.each(function (a) {
            var e = $(this),
                r = Math.abs(a - t);
            e.removeClass("dot-current dot-near dot-far dot-hidden"),
                0 === r
                    ? e.addClass("dot-current")
                    : 1 === r
                    ? e.addClass("dot-near")
                    : 2 === r
                    ? e.addClass("dot-far")
                    : e.addClass("dot-hidden");
        });
    });

// sl
