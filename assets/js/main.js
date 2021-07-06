//header sticky
window.addEventListener("scroll", function () {
  var header = this.document.querySelector("header");
  header.classList.toggle("sticky", this.window.scrollY > 0);
});

jQuery(function ($) {
  //mmenu
  function check_show_mobile_menu() {
    let width = $(window).width();

    if (width < 992) {
      $("#mobile_menu").mmenu({
        // slidingSubmenus: false,
        extensions: [
          "border-full",
          "position-front",
          "position-right",
          "pagedim-black",
        ],
        wrappers: ["wordpress"],
        navbar: {
          title: "Menü",
        },
      });
    }
  }

  $(document).ready(function () {
    check_show_mobile_menu();
  });
  $(window).on("resize", function () {
    check_show_mobile_menu();
  });
  $(window).on("load", function () {
    check_show_mobile_menu();
  });

  //cookie Accept
  $(document).ready(function () {
    $.cookieConsent({
      message:
        "Wir verwenden Cookies um Ihnen den bestmöglichen Service zu gewährleisten. Mit Klick auf den Erlauben-Button oder durch Fortsetzen der Navigation auf dieser Webseite, stimmen Sie der Verwendung von Cookies zu",
      style:
        "position: fixed; width:100%; z-index:9999;bottom:0;padding: 10px 20px",
      consentMessage: "I understand",
      consentStyle: "",
      acceptClass: "cookieAccept",
      // 10 years
      consentTime: 3650,
      // cookie, local, or session
      storage: "cookie",
      onInit: function () {},
      onConsent: function () {},
      onTemplate: function () {
        console.log(this);
      },
    });
  });
  //find
  $(function () {
    $(".toggle-overlay").click(function () {
      $("aside").toggleClass("open");
    });
  });

  //toggle button totop
  mybutton = document.getElementById("scrollToTopBtn");
  window.onscroll = function () {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  };

  //click go to top
  $(function () {
    $("#scrollToTopBtn").click(function () {
      $("html, body").animate({ scrollTop: 0 }, "slow");
    });
  });
  ///////
  $(function () {
    $("#lieferdatum").on("change", function () {
      var selected = $(this).val();
      var day = new Date(selected);
      if (day.getDay() == 1) {
        alert("Montag ist Ruhetag!");
        $("#lieferdatum").val(null);
      }
    });
  });
});

/////lieferdatum
