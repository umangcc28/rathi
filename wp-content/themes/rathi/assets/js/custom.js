// Release the $ symbol

jQuery.noConflict();

jQuery(document).ready(function ($) {
  jQuery(
    ".hiring-accordion-item:first-child .hiring-accordion-header"
  ).addClass("active");

  jQuery(".hiring-accordion-item:first-child .hiring-accordion-content").show();

  jQuery(".acc-btn").click(function (event) {
    event.stopPropagation();

    PUM.open(346);
  });

  jQuery(".hiring-accordion-header").click(function () {
    let content = jQuery(this).next(".hiring-accordion-content");

    content.slideToggle();

    jQuery(this).toggleClass("active");

    jQuery(".hiring-accordion-content").not(content).slideUp();

    jQuery(".hiring-accordion-header").not(this).removeClass("active");
  });

  if (
    jQuery(
      ".category-link .sub-menu a, .category-products .sev-product, .page-template-category-page"
    ).length
  ) {
    function escapeSelector(selector) {
      return selector.replace(/([!"#$%&'()*+,./:;<=>?@[\\\]^`{|}~])/g, "\\$1");
    }

    function activateTabFromQuery() {
      var ProactiveTab = window.location.search.substring(1); // Extract query parameter (e.g., "attribute_pa_size=18g")

      if (!ProactiveTab) {
        ProactiveTab = "tab1";
      }

      var escapedTab = escapeSelector(ProactiveTab);

      jQuery(".recipe-tab").hide().removeClass("active");

      jQuery(`#${escapedTab}`).show().addClass("active");

      jQuery(".rsp-tab-links li").removeClass("active");

      jQuery(`.rsp-tab-links li a[rel='${ProactiveTab}']`)
        .parent()
        .addClass("active");
    }

    jQuery(".category-link .sub-menu a, .category-products .sev-product").click(
      function () {
        activateTabFromQuery();
      }
    );

    var isQueryChangeTriggeredByClick = false;

    if (
      jQuery(
        ".category-link .sub-menu a, .category-products .sev-product, .page-template-category-page"
      ).length
    ) {
      jQuery(window).on("load", function () {
        if (!isQueryChangeTriggeredByClick) {
          activateTabFromQuery();
        }

        isQueryChangeTriggeredByClick = false;
      });
    }

    jQuery(".rsp-tab-links li a").click(function (e) {
      e.preventDefault();

      var ProactiveTab = jQuery(this).attr("rel");

      jQuery(".rsp-tab-links li").removeClass("active");

      jQuery(this).parent().addClass("active");

      jQuery(".recipe-tab").hide().removeClass("active");

      jQuery(`#${escapeSelector(ProactiveTab)}`)
        .show()
        .addClass("active");

      isQueryChangeTriggeredByClick = true;

      history.pushState(
        null,
        null,
        `${window.location.pathname}?${ProactiveTab}`
      );
    });
  }

  jQuery(".sld-accordion-header").on("click", function () {
    const content = jQuery(this).next(".sld-accordion-content");

    // Close all other sections

    jQuery(".sld-accordion-header").not(this).removeClass("active");

    jQuery(".sld-accordion-content").not(content).slideUp();

    // Toggle the current section

    jQuery(this).toggleClass("active");

    content.slideToggle();
  });

  // Open the first section by default

  jQuery(".sld-accordion-header").first().addClass("active");

  jQuery(".sld-accordion-content").first().slideDown();

  // banner slider

  jQuery(".banner-slider").slick({
    // dots: true,

    infinite: true,

    speed: 300,

    slidesToShow: 1,

    adaptiveHeight: true,

    autoplay: true,

    autoplaySpeed: 5000,

    // arrows: true,
  });

  // homa product slider

  jQuery(".product-slider").slick({
    // dots: true,

    infinite: true,

    speed: 300,

    slidesToShow: 1,

    adaptiveHeight: true,

    autoplay: true,

    autoplaySpeed: 5000,

    arrows: true,
  });

 

  if (jQuery(".social-slider").length) {
    jQuery(".social-slider").slick({
      dots: false,

      infinite: false,

      speed: 300,

      slidesToShow: 4,

      adaptiveHeight: true,

      autoplay: true,

      autoplaySpeed: 5000,

      arrows: false, // Hide arrows for larger screens by default

      responsive: [
        {
          breakpoint: 1025,

          settings: {
            slidesToShow: 3,

            arrows: false, // No arrows for larger screens
          },
        },

        {
          breakpoint: 768,

          settings: {
            slidesToShow: 2,

            arrows: true, // Show arrows on mobile (screens under 767px)
          },
        },

        {
          breakpoint: 501,

          settings: {
            slidesToShow: 1,

            arrows: true, // Show arrows on very small screens (under 480px)
          },
        },
      ],
    });
  }

  jQuery(".bs-slider").slick({
    dots: false,

    infinite: false,

    speed: 300,

    slidesToShow: 3,

    adaptiveHeight: true,

    autoplay: true,

    autoplaySpeed: 5000,

    arrows: false, // Hidden arrows on large screens

    responsive: [
      {
        breakpoint: 1025,

        settings: {
          slidesToShow: 3,

          arrows: false,
        },
      },

      {
        breakpoint: 768,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },

      {
        breakpoint: 501,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },
    ],
  });

  jQuery(".recommendations-slider").slick({
    dots: false,

    infinite: false,

    speed: 300,

    slidesToShow: 3,

    adaptiveHeight: true,

    autoplay: false,

    autoplaySpeed: 5000,

    arrows: true,

    prevArrow: jQuery(".custom-prev1"),

    nextArrow: jQuery(".custom-next1"),

    responsive: [
      {
        breakpoint: 1025,

        settings: {
          slidesToShow: 2,

          arrows: true,
        },
      },

      {
        breakpoint: 768,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },

      {
        breakpoint: 501,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },
    ],
  });

  jQuery(".combo-slider").slick({
    dots: false,

    infinite: false,

    speed: 300,

    slidesToShow: 3,

    adaptiveHeight: true,

    autoplay: false,

    autoplaySpeed: 5000,

    arrows: true,

    responsive: [
      {
        breakpoint: 1025,

        settings: {
          slidesToShow: 2,

          arrows: true,
        },
      },

      {
        breakpoint: 768,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },

      {
        breakpoint: 501,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },
    ],
  });

  const $categorySlider = jQuery(".category-slider");

  const $progressBar = jQuery(".slider-progress-bar .progress");

  // Function to update the progress bar

  function updateProgressBar(slideIndex, slick) {
    const slidesToShow = slick.options.slidesToShow;

    const totalSlides = slick.slideCount;

    const totalPages = totalSlides - slidesToShow + 1;

    const currentPage = slideIndex + 1;

    const progressPercentage = (currentPage / totalPages) * 100;

    $progressBar.css("width", progressPercentage + "%");
  }

  // Set up the init event before initializing the slider

  $categorySlider.on("init", function (event, slick) {
    updateProgressBar(0, slick); // Set initial progress
  });

  // Update the progress bar on slide change

  $categorySlider.on(
    "beforeChange",

    function (event, slick, currentSlide, nextSlide) {
      updateProgressBar(nextSlide, slick);
    }
  );

  // Initialize the slick slider

  $categorySlider.slick({
    dots: false,

    infinite: false,

    speed: 300,

    slidesToShow: 3,

    adaptiveHeight: true,

    autoplay: false,

    autoplaySpeed: 5000,

    arrows: true,

    prevArrow: jQuery(".custom-prev"),

    nextArrow: jQuery(".custom-next"),

    responsive: [
      {
        breakpoint: 1025,

        settings: {
          slidesToShow: 3,

          arrows: true,
        },
      },

      {
        breakpoint: 768,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },

      {
        breakpoint: 501,

        settings: {
          slidesToShow: 1,

          arrows: true,
        },
      },
    ],
  });

  let isProductSliderInitialized = false;

  function initializeProductSlider() {
    if (!isProductSliderInitialized) {
      $(".rathi-experts").slick({
        infinite: true,

        speed: 300,

        slidesToShow: 1,

        adaptiveHeight: true,

        autoplay: true,

        autoplaySpeed: 5000,

        arrows: true,
      });

      isProductSliderInitialized = true;
    }
  }

  function destroyProductSlider() {
    if (isProductSliderInitialized) {
      $(".rathi-experts").slick("unslick");

      isProductSliderInitialized = false;
    }
  }

  // Check initial screen size

  if ($(window).width() <= 767) {
    initializeProductSlider();
  }

  // Handle screen resize

  $(window).resize(function () {
    if ($(window).width() <= 767) {
      initializeProductSlider();
    } else {
      destroyProductSlider();
    }
  });

  if (jQuery(".swiper-timeline").length) {
    jQuery(".swiper-timeline").slick({
      slidesToShow: 4,

      slidesToScroll: 1,

      infinite: false,

      speed: 800,

      adaptiveHeight: true,

      draggable: true, // Ensure dragging is enabled

      swipeToSlide: true, // Allow swiping to slide

      touchThreshold: 10, // Set lower threshold for more sensitive touch

      arrows: true,

      nextArrow: ".timeline-next",

      prevArrow: ".timeline-prev",

      responsive: [
        {
          breakpoint: 1367,

          settings: {
            slidesToShow: 3,
          },
        },

        {
          breakpoint: 992,

          settings: {
            slidesToShow: 2,
          },
        },

        {
          breakpoint: 768,

          settings: {
            slidesToShow: 1,
          },
        },

        {
          breakpoint: 0,

          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
  }

  if (jQuery(".page-template-Home").length) {
    /*===== Mouse-Move =======*/

    var rect = jQuery(".home2-banner")[0].getBoundingClientRect();

    var mouse = {
      x: 0,

      y: 0,

      moved: false,
    };

    jQuery(".home2-banner").mousemove(function (e) {
      mouse.moved = true;

      mouse.x = e.clientX - rect.left;

      mouse.y = e.clientY - rect.top;
    });

    // Ticker event will be called on every frame

    TweenLite.ticker.addEventListener("tick", function () {
      if (mouse.moved) {
        parallaxIt(".ts-move", 30);
      }

      mouse.moved = false;
    });

    function newFunction() {
      return 2560;
    }

    function parallaxIt(target, movement) {
      TweenMax.to(target, 0.5, {
        x: ((mouse.x - rect.width / 2) / rect.width) * movement,

        y: ((mouse.y - rect.height / 2) / rect.height) * movement,
      });
    }

    jQuery(window).on("resize scroll", function () {
      rect = jQuery(".home2-banner")[0].getBoundingClientRect();
    });
  }

  // Function to generate a random color

  function getRandomColor() {
    const letters = "0123456789ABCDEF";

    let color = "#";

    for (let i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }

    return color;
  }

  // Apply random background color to each .social-slide

  $(".social-slide").each(function () {
    $(this).css("background-color", getRandomColor());
  });

  // Accordion functionality

  jQuery(".accordion-store-header").on("click", function () {
    var $accordionItem = jQuery(this).parent(); // Get the clicked accordion item

    if (!$accordionItem.hasClass("active")) {
      // Close any open accordion

      jQuery(".accordion-store-item.active")
        .removeClass("active")

        .find(".accordion-store-content")

        .slideUp();

      // Open the clicked accordion

      $accordionItem

        .addClass("active")

        .find(".accordion-store-content")

        .slideDown();
    } else {
      // If clicked again on active item, collapse it

      $accordionItem

        .removeClass("active")

        .find(".accordion-store-content")

        .slideUp();
    }
  });

  // Tabs functionality inside the accordion

  jQuery(".store-tab-links a").on("click", function (e) {
    e.preventDefault();

    // Remove active class from all city links

    jQuery(".store-tab-links li").removeClass("active");

    // Change the active tab within the clicked accordion

    jQuery(this).parent("li").addClass("active");

    // Get the iframe URL from the clicked tab's data-iframe attribute

    var iframeSrc = jQuery(this).data("iframe");

    // Update the iframe source in the .map-display section

    jQuery("#store-map").attr("src", iframeSrc);
  });

  // State change functionality

  jQuery(".state-selector").on("change", function () {
    // Get the currently active accordion item

    var $activeAccordion = jQuery(".accordion-store-item.active");

    // Remove active class from all city links

    jQuery(".store-tab-links li").removeClass("active");

    // Optionally collapse the previously active accordion if desired

    $activeAccordion

      .removeClass("active")

      .find(".accordion-store-content")

      .slideUp();

    // Get the accordion item for the selected state

    var $selectedAccordion = jQuery(this).closest(".accordion-store-item");

    // Open the selected accordion

    $selectedAccordion

      .addClass("active")

      .find(".accordion-store-content")

      .slideDown();

    // Set the active class for the first city link of the newly selected state

    var $firstCityLink = $selectedAccordion.find(".store-tab-links li").first();

    $firstCityLink.addClass("active");

    // Load the iframe for the first city link of the selected state

    var iframeSrc = $firstCityLink.find("a").data("iframe");

    jQuery("#store-map").attr("src", iframeSrc);
  });

  // Set the first accordion-store item and first store-tab as active by default

  jQuery(".accordion-store-item")
    .first()

    .addClass("active")

    .find(".accordion-store-content")

    .show();

  jQuery(".accordion-store-item .store-tab-links li")
    .first()

    .addClass("active");

  // Load the first iframe by default

  var initialIframeSrc = jQuery(
    ".accordion-store-item .store-tab-links li.active a"
  ).data("iframe");

  jQuery("#store-map").attr("src", initialIframeSrc);

  // Open the first accordion by default

  const firstAccordion = $(".qlt-acc-item").first();

  firstAccordion.find(".qlt-acc-header").addClass("active");

  firstAccordion

    .find(".qlt-acc-content")

    .css(
      "max-height",

      firstAccordion.find(".qlt-acc-content").prop("scrollHeight") + "px"
    );

  $("#accordion-img").attr("src", firstAccordion.data("image"));

  // When any accordion header is clicked

  $(".qlt-acc-header").on("click", function () {
    const $content = $(this).next(".qlt-acc-content");

    const $accItem = $(this).closest(".qlt-acc-item");

    const newImage = $accItem.data("image");

    // Close all accordion sections and remove active classes

    $(".qlt-acc-content").css("max-height", "0");

    $(".qlt-acc-header").removeClass("active");

    // Open the clicked accordion section

    if ($content.css("max-height") === "0px") {
      $(this).addClass("active");

      $content.css("max-height", $content.prop("scrollHeight") + "px");

      // Change the image in the acc-img div

      $("#accordion-img").attr("src", newImage);
    }
  });

  $(document).on("pumBeforeClose", "#pum-537", function () {
    $("#pum-537").find("form")[0].reset();
  });

  $(document).on("pumBeforeClose", "#pum-346", function () {
    $("#pum-346").find("form")[0].reset();
  });

  $(".navTrigger").on("click", function () {
    $(".mobile-menu").toggleClass("active"); // Toggle 'active' class on .mobile-menu

    $(this).toggleClass("open"); // Toggle 'open' class on .navTrigger for animation
  });

  // Accordion toggle

  jQuery(".prod-acc-header").on("click", function () {
    const content = jQuery(this).next(".prod-acc-content");

    // Slide toggle the clicked item

    content.slideToggle(300);

    // Close other open contents

    jQuery(".prod-acc-content").not(content).slideUp(300);

    // Toggle active class

    jQuery(this).toggleClass("active");

    jQuery(".prod-acc-header").not(this).removeClass("active");
  });

  /* Single Page Hook- Variable Product price */

  jQuery("body").on(
    "found_variation",
    "form.variations_form",
    function (event, variation) {
      if (variation) {
        jQuery(".default-variation-price").html(variation.price_html);
      }
    }
  );

  if (jQuery(".single-product").length) {
    jQuery(".quantity, .single_add_to_cart_button ").wrapAll(
      "<div class='add-to-cart-box'></div>"
    );

    jQuery("#pin_code").val("");
  }

  /***************** plus-minus ******************/

  jQuery(document).on("click", ".plus, .minus", function () {
    var qty = $(this).closest(".quantity").find(".qty");

    var val = parseFloat(qty.val());

    var max = parseFloat(qty.attr("max"));

    var min = parseFloat(qty.attr("min"));

    var step = parseFloat(qty.attr("step"));

    if ($(this).is(".plus")) {
      if (max && val >= max) {
        qty.val(max);
      } else {
        qty.val(val + step);
      }
    } else {
      if (min && val <= min) {
        qty.val(min);
      } else if (val > 1) {
        qty.val(val - step);
      }
    }

    // Trigger change event to update cart totals

    qty.trigger("change");
  });

  /*======================================================= Tab (Recipe page)=======================================================*/

  jQuery(".recipe_content").hide();

  jQuery(".recipe_content:first").show().addClass("active");

  jQuery(".product-tabs li").click(function () {
    var ProactiveTab = jQuery(this).attr("rel");

    jQuery(".recipe_content").hide().removeClass("active");

    jQuery("#" + ProactiveTab)
      .show()
      .addClass("active");

    jQuery(".product-tabs li").removeClass("active");

    jQuery(this).addClass("active");

    initMobileOnlySlider("#" + ProactiveTab + " .recipe-grid-box .row"); // Reinitialize slider for active tab
  });

  /* For Mobile */

  jQuery(".accordion-title").click(function () {
    var pro_active_tab = jQuery(this).attr("rel");

    jQuery(".recipe_content").hide().removeClass("active");

    jQuery("#" + pro_active_tab)
      .show()
      .addClass("active");

    jQuery(".accordion-title").removeClass("active");

    jQuery(this).addClass("active");

    initMobileOnlySlider("#" + pro_active_tab + " .recipe-grid-box .row"); // Reinitialize slider for active tab

    setTimeout(() => {
      if (jQuery("#" + pro_active_tab).length) {
        var pro_target = jQuery("#" + pro_active_tab).offset().top - 100;

        jQuery("html, body").animate(
          {
            scrollTop: pro_target,
          },
          600
        );
      }
    }, 800);

    return false;
  });

  initMobileOnlySlider(".recipe_content.active .recipe-grid-box .row");

  /*======================================================= Popup--open (Recipe page) =======================================================*/

  jQuery(".recipe-box").on("click", function () {
    jQuery("html").toggleClass("popup-open");

    var postID = $(this).closest(".recipe-box").data("post-id");

    var categorySlug = $(this).closest(".recipe_content").attr("id");

    // Show loader when the request starts

    jQuery("#loader").show();

    // console.log("Post ID: " + postID);

    // console.log("Category Slug: " + categorySlug);

    jQuery.ajax({
      url: ajaxurl,

      method: "POST",

      data: {
        action: "recipe_popup",

        post_id: postID,

        category_slug: categorySlug,
      },

      success: function (response) {
        jQuery("#loader").hide();

        if (response.success) {
          // console.log(response);

          jQuery(".recipe-popup .post-title").html(response.data.post_title);

          jQuery(".recipe-popup .information").html(response.data.information);

          jQuery(".recipe-popup .recipe-feature-image img").attr(
            "src",
            response.data.feature_image
          );
        } else {
          console.log(
            response.data.message || "Failed to load recipe details."
          );
        }
      },

      error: function () {
        jQuery("#loader").hide();
        console.log("There was an error with the request.");
      },
    });
  });
  
  // Reset popup content and close the popup
  function resetPopupContent() {
    jQuery(".recipe-popup .post-title").html(""); 
    jQuery(".recipe-popup .information").html(""); 
    jQuery(".recipe-popup .recipe-feature-image img").attr("src", ""); 
    jQuery("html").removeClass("popup-open"); 
  }

  jQuery(document).on("click", function () {
    resetPopupContent();
  });

  jQuery(".popup-close").on("click", function () {
    resetPopupContent();
  });

  jQuery(".recipe-box,.recipe-popup-body").on("click", function (e) {
    e.stopPropagation();
  });

  //lets give a try slider of home page
  if (jQuery(".horizontal_scroll_swiper").length) {

  var giveTrySwiper = new Swiper(".horizontal_scroll_swiper", {
    slidesPerView: 1,
    spaceBetween: 14,
    freeMode: true,
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    mousewheel: true,
    on: {
      reachEnd: function () {
        // Disable Swiper's mousewheel to allow page scrolling after reaching the last slide
        giveTrySwiper.mousewheel.disable();
      },
      reachBeginning: function () {
        // Disable Swiper's mousewheel when at the first slide
        giveTrySwiper.mousewheel.disable();
      },
    },
  });

  let isSwiperActive = true;

  // scroll functionality
  window.addEventListener("wheel", function (e) {
    if (isSwiperActive) {
      if (e.deltaY > 0 && giveTrySwiper.isEnd) {
        // If scrolling down and at the last slide, enable page scroll
        giveTrySwiper.mousewheel.disable();
        isSwiperActive = false;
      } else if (e.deltaY < 0 && giveTrySwiper.isBeginning) {
        // If scrolling up and at the first slide, allow page scroll
        isSwiperActive = false;
      }
    } else {
      if (e.deltaY < 0 && !giveTrySwiper.isBeginning) {
        // Re-enable Swiper when scrolling back up from the page to the last slide
        giveTrySwiper.mousewheel.enable();
        isSwiperActive = true;
      } else if (e.deltaY > 0 && !giveTrySwiper.isEnd) {
        // Re-enable Swiper when scrolling back down from the page to the first slide
        giveTrySwiper.mousewheel.enable();
        isSwiperActive = true;
      }
    }
  });
  jQuery(".wrap-with-btn").on("click", function () {
    giveTrySwiper.slideNext();
  });
}
  jQuery('.menu-item-has-children').click(function () {
    if (jQuery(window).width() < 1026) {
        jQuery(this).toggleClass('active');
    }
  });



  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() >= 500) {
        jQuery('.scroll-top').fadeIn(200);
    } else {
        jQuery('.scroll-top').fadeOut(200);
    }
  });
  jQuery('.scroll-top').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 500);
  });

  

}); // end document.ready

document.addEventListener("DOMContentLoaded", function () {
  // First form handling

  const fileInput1 = document.querySelector(
    '.cv-file-design-btn input[type="file"]'
  );

  const fileNameDisplay1 = document.querySelector(
    ".cv-file-design-btn .file-name"
  );

  const chooseFileText1 = document.querySelector(".cv-file-design-btn .arrow");

  if (fileInput1 && fileNameDisplay1 && chooseFileText1) {
    fileInput1.addEventListener("change", function () {
      const selectedFile = fileInput1.files[0];

      if (selectedFile) {
        fileNameDisplay1.textContent = selectedFile.name;

        chooseFileText1.style.display = "none"; // Hide the "Choose File" text
      } else {
        fileNameDisplay1.textContent = "";

        chooseFileText1.style.display = "inline"; // Show the "Choose File" text if no file is selected
      }
    });
  }
});

jQuery(window).on("resize", function () {
  initMobileOnlySlider(".recipe_content.active .recipe-grid-box .row");
});

function initMobileOnlySlider(selector) {
  const jQueryslider = jQuery(selector);

  if (jQuery(window).width() < 767) {
    if (!jQueryslider.hasClass("slick-initialized")) {
      jQueryslider.slick({
        infinite: true,

        slidesToShow: 1,

        slidesToScroll: 1,

        autoplay: false,

        autoplaySpeed: 2000,

        centerMode: false,

        dots: false,

        arrows: true,
      });
    }
  } else {
    if (jQueryslider.hasClass("slick-initialized")) {
      jQueryslider.slick("unslick"); // Destroy Slick for desktop
    }
  }
}

