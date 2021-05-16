(function ($) {
    'use strict';
    $(function () {
        $('[data-toggle="offcanvas"]').on("click", function () {
            $('.sidebar-offcanvas').toggleClass('active')
        });
    });
})(jQuery);


var ChartColor = ["#5D62B4", "#54C3BE", "#EF726F", "#F9C446", "rgb(93.0, 98.0, 180.0)", "#21B7EC", "#04BCCC"];
var primaryColor = getComputedStyle(document.body).getPropertyValue('--primary');
var secondaryColor = getComputedStyle(document.body).getPropertyValue('--secondary');
var successColor = getComputedStyle(document.body).getPropertyValue('--success');
var warningColor = getComputedStyle(document.body).getPropertyValue('--warning');
var dangerColor = getComputedStyle(document.body).getPropertyValue('--danger');
var infoColor = getComputedStyle(document.body).getPropertyValue('--info');
var darkColor = getComputedStyle(document.body).getPropertyValue('--dark');
var lightColor = getComputedStyle(document.body).getPropertyValue('--light');
if ($('body').hasClass("dark-theme")) {
    var chartFontcolor = '#b9c0d3';
    var chartGridLineColor = '#383e5d';

} else {
    var chartFontcolor = '#6c757d';
    var chartGridLineColor = 'rgba(0,0,0,0.08)';
}
if ($('canvas').length) {
    Chart.defaults.global.tooltips.enabled = false;
    Chart.defaults.global.defaultFontColor = '#354d66';
    Chart.defaults.global.defaultFontFamily = '"Poppins", sans-serif';
    Chart.defaults.global.tooltips.custom = function (tooltipModel) {
        // Tooltip Element
        var tooltipEl = document.getElementById('chartjs-tooltip');




        // `this` will be the overall tooltip
        var position = this._chart.canvas.getBoundingClientRect();

        // Display, position, and set styles for font
        tooltipEl.style.opacity = 1;
        tooltipEl.style.position = 'absolute';
        tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX + 'px';
        tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY + 'px';
        tooltipEl.style.fontFamily = tooltipModel._bodyFontFamily;
        tooltipEl.style.fontSize = tooltipModel.bodyFontSize + 'px';
        tooltipEl.style.fontStyle = tooltipModel._bodyFontStyle;
        tooltipEl.style.padding = tooltipModel.yPadding + 'px ' + tooltipModel.xPadding + 'px';
        tooltipEl.style.pointerEvents = 'none';
    }
    Chart.defaults.global.legend.labels.fontStyle = "italic";
    Chart.defaults.global.tooltips.intersect = false;
}

(function ($) {
    'use strict';
    $(function () {
        var body = $('body');
        var contentWrapper = $('.content-wrapper');
        var scroller = $('.container-scroller');
        var footer = $('.footer');
        var sidebar = $('#sidebar');

        //Add active class to nav-link based on url dynamically
        //Active class can be hard coded directly in html file also as required
        if (!$('#sidebar').hasClass("dynamic-active-class-disabled")) {
            var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
            $('#sidebar >.nav > li:not(.not-navigation-link) a').each(function () {
                var $this = $(this);
                if (current === "") {
                    //for root url
                    if ($this.attr('href').indexOf("index.html") !== -1) {
                        $(this).parents('.nav-item').last().addClass('active');
                        if ($(this).parents('.sub-menu').length) {
                            $(this).addClass('active');
                        }
                    }
                } else {
                    //for other url
                    if ($this.attr('href').indexOf(current) !== -1) {
                        $(this).parents('.nav-item').last().addClass('active');
                        if ($(this).parents('.sub-menu').length) {
                            $(this).addClass('active');
                        }
                        if (current !== "index.html") {
                            $(this).parents('.nav-item').last().find(".nav-link").attr("aria-expanded", "true");
                            if ($(this).parents('.sub-menu').length) {
                                $(this).closest('.collapse').addClass('show');
                            }
                        }
                    }
                }
            })
        }


        //Close other submenu in sidebar on opening any
        $("#sidebar > .nav > .nav-item > a[data-toggle='collapse']").on("click", function () {
            $("#sidebar > .nav > .nav-item").find('.collapse.show').collapse('hide');
        });




        $('[data-toggle="minimize"]').on("click", function () {
            if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
                body.toggleClass('sidebar-hidden');
            } else {
                body.toggleClass('sidebar-icon-only');
            }
        });


    });



    $(".sidebar .sidebar-inner > .nav > .nav-item").not(".brand-logo").attr('toggle-status', 'closed');
    $(".sidebar .sidebar-inner > .nav > .nav-item").on('click', function () {
        $(".sidebar .sidebar-inner > .nav > .nav-item").removeClass("active");
        $(this).addClass("active");
        $(".sidebar .sidebar-inner > .nav > .nav-item").find(".submenu").removeClass("open");
        $(".sidebar .sidebar-inner > .nav > .nav-item").not(this).attr('toggle-status', 'closed');
        var toggleStatus = $(this).attr('toggle-status');
        if (toggleStatus == 'closed') {
            $(this).find(".submenu").addClass("open");
            $(this).attr('toggle-status', 'open');
        } else {
            $(this).find(".submenu").removeClass("open");
            $(this).not(".brand-logo").attr('toggle-status', 'closed');
        }
    });
})(jQuery);
