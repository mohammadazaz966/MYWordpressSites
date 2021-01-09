!(function ($) {
  "use strict";

    document.addEventListener('DOMContentLoaded', function () {
        jQuery("#menu-toggle").on('click', function () {
            $('#sidenavbar').toggleClass('active');
        });
        jQuery('.menu-toggle-close').on('click', function () {
            $('#sidenavbar').toggleClass('active');
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        $('#sidenavbar nav ul li.menu-item-has-children').on('click', function () {
            $('ul').toggleClass('visible');
        });
    });
	
  document.addEventListener("DOMContentLoaded", function () {
    jQuery(".search-open").on("click", function () {
      $(".topbar-search-form").fadeIn("slow");
      $(".search-close").show("slow");
      $(".search-open").hide("slow");
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    jQuery(".search-close").on("click", function () {
      $(".topbar-search-form").fadeOut("slow");
      $(".search-open").show("slow");
      $(".search-close").hide("slow");
    });
    $(".search-close").hide("slow");
  });

  document.addEventListener("DOMContentLoaded", function () {
    if ($("#preloader").length) {
      $("#preloader")
        .delay(100)
        .fadeOut("slow", function () {
          $(this).remove();
        });
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    $("#topnavbar nav ul li").on("click", function () {
      $(this).siblings().removeClass("active");
      $(this).addClass("active");
    });
    $("#sidenavbar nav ul li").on("click", function () {
      $(this).siblings().removeClass("active");
      $(this).addClass("active");
    });
  });
  

})(jQuery);
