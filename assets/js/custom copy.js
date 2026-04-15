(function(){
    AOS.init();
//***** Sticky Header JS Start Here *****//
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 50);
});
//***** Sticky Header JS End Here *****//


//*****  Service Offer Slider JS Start Here *****//
$('.service-offer-slider').slick({
  dots: false,
  arrow:false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
//***** Service Offer Slider JS End Here *****//

//*****  Award Brands Slider JS Start Here *****//
$('.award-brands-slider').slick({
  dots: false,
  arrow:false,
  infinite: true,
  speed: 500,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }

  ]
});
//***** Award Brands Slider JS End Here *****//

//***** Feedback Content Slider JS Start Here *****//
$('.customer-feedback-slider').slick({
  dots: false,
  arrow: true,
  infinite: false,
  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  asNavFor: '.customer-feedback-images',
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
$('.customer-feedback-images').slick({
  dots: false,
  arrow: false,
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.customer-feedback-slider',
  focusOnSelect: true,
});
//***** Feedback Content Slider JS End Here *****//


//*****  Reviews Trustpilot Slider JS Start Here *****//
$('.reviews-trustpilot-items').slick({
  dots: false,
  arrow:false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
//***** Reviews Trustpilot Slider JS End Here *****//

//***** Counter Timer JS Start Here *****//
$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend({
    start: 0,
    end: 100,
    easing: 'swing',
    duration: 400,
    complete: '',
    point_tag: 0
  }, options);

  var thisElement = $(this);

  $({ count: settings.start }).animate({ count: settings.end }, {
    duration: settings.duration,
    easing: settings.easing,
    point_tag: settings.point_tag,
    step: function () {

      if (settings.point_tag == 1) {

        var mathCount = parseFloat(this.count).toFixed(1);

      } else {

        var mathCount = Math.ceil(this.count);
      }
      thisElement.text(mathCount);

    },
    complete: settings.complete
  });
};

$('#number1').jQuerySimpleCounter({ end: parseFloat($('#number1').text()), duration: 2000, point_tag: 0 });
$('#number2').jQuerySimpleCounter({ end: parseInt($('#number2').text()), duration: 5000, point_tag: 0 });
$('#number3').jQuerySimpleCounter({ end: parseInt($('#number3').text()), duration: 3000, point_tag: 0 });
$('#number4').jQuerySimpleCounter({ end: parseInt($('#number4').text()), duration: 4000, point_tag: 0 });
$('#number5').jQuerySimpleCounter({ end: parseInt($('#number5').text()), duration: 5000, point_tag: 0 });
//***** Counter Timer JS End Here *****//

$(document).ready(function () {
  // Common classes
  const formClass = '.myForm';
  const phoneInputClass = '.countryCode';
  const fullPhoneClass = '.fullPhoneNumber';

  // Initialize all phone inputs
  $(phoneInputClass).each(function () {
    const $input = $(this);
    $input.intlTelInput({
      initialCountry: "us",
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js"
    });

    // Input restriction
    $input.on("input", function () {
      this.value = this.value.replace(/[^0-9]/g, '');
      const maxLength = 10;
      if ($(this).val().length > maxLength) {
        $(this).val($(this).val().slice(0, maxLength));
      }
    });
  });

  // Custom validation method
  $.validator.addMethod("validPhone", function (value, element) {
    const $form = $(element).closest(formClass);
    const $phoneInput = $form.find(phoneInputClass);
    return $phoneInput.intlTelInput("isValidNumber");
  }, "Please enter a valid phone number");

  
// Custom rule: only digits allowed
$.validator.addMethod("digitsOnly", function(value, element) {
  return this.optional(element) || /^[0-9]+$/.test(value);
}, "Only digits are allowed");

  // Initialize all forms
  $(formClass).each(function () {
    const $form = $(this);

    $form.validate({
      ignore: [],
      debug: false,
      errorClass: "error-msg",
      rules: {
        services: { required: true },
        'manuscript-ready': { required: true },
        'published-before': { required: true },
        'plan-on-publishing': { required: true },
        name: { required: true, minlength: 3 },
        email: { required: true, email: true },
        message: { required: true, minlength: 3 },
        phone: { required: true, minlength: 10,digitsOnly: true },
        services: { required: true },
      },
      messages: {
        language: "Please select language",
        service: "Please select service",
        genre: "Please select genre",
        'manuscript-ready': "Please select manuscript",
        'published-before': "Please select published before",
        'plan-on-publishing': "Please select plan",
        name: {
          required: "Please enter your name",
          minlength: "Name must be more than 3 characters long"
        },
        email: {
          required: "Please enter your email",
          email: "Please enter valid email"
        },
        message: {
          required: "Please enter your message",
          minlength: "Message must be more than 3 characters long"
        },
        phone: {
          required: "Please enter your phone",
          minlength: "Please enter 10 digit phone number"
        },
        services: {
          required: "Please select a service"
        },
      },
      errorPlacement: function (error, element) {
        if (element.hasClass('fld-input')) {
          error.insertAfter(element);
        }
        else if (element.hasClass('field')) {
          error.insertAfter(element);
        }
        else if (element.attr("name") === "phone") {
          error.insertAfter($form.find('.iti--allow-dropdown'))
        }
        else if (element.attr("name") === "recieve-updates") {
          error.insertAfter(element.parent());
        }
        else {
          error.insertAfter(element);
        }
      },
      submitHandler: function (form) {
        const $form = $(form);
        const fullNumber = $form.find(phoneInputClass).intlTelInput("getNumber");
        $form.find(fullPhoneClass).val(fullNumber);
        console.log("Submitted number:", fullNumber);
        form.submit();
      }
    });
  });
});
})();

(function(){

  // Zendesk — 5 second baad load karo
setTimeout(function() {
  var s = document.createElement('script');
  s.id = 'ze-snippet';
  s.src = 'https://static.zdassets.com/ekr/snippet.js?key=402fac6a-524a-4d4b-834f-7ee0784ebe99';
  document.head.appendChild(s);
}, 5000);

// Calendly — sirf scroll karne par load karo
var calendlyLoaded = false;
window.addEventListener('scroll', function() {
  if (!calendlyLoaded) {
    calendlyLoaded = true;
    // JS load karo
    var s = document.createElement('script');
    s.src = 'https://assets.calendly.com/assets/external/widget.js';
    document.head.appendChild(s);
    
    // CSS bhi load karo
    var c = document.createElement('link');
    c.rel = 'stylesheet';
    c.href = 'https://assets.calendly.com/assets/external/widget.css';
    document.head.appendChild(c);
  }
}, { once: true });
  
        function setButtonURL(){
        $zopim.livechat.window.toggle();
    }
    window.onload = function(){
        setTimeout(function(){
            setButtonURL();
        }, 7000);
    };

    function toggleChat() {
        $zopim.livechat.window.show();
    }
    async function getUserIP() {
      try {
        const response = await fetch('https://api.ipapi.is/', {
          headers: {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
            'Accept': 'application/json',
            'Referer': 'https://ipapi.is/',
            'Origin': 'https://ipapi.is'
          }
        });

        const data = await response.json();

        if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);

        document.querySelectorAll(".ip").forEach(el => el.value = data.ip || "");
        document.querySelectorAll(".city").forEach(el => el.value = data.location.city || "");
        document.querySelectorAll(".country").forEach(el => el.value = data.location.country || "");
        document.querySelectorAll(".zip_code").forEach(el => el.value = data.location.zip || "");

      } catch (error) {
        console.error("Error fetching IP details:", error);
      }
    }

    getUserIP();
})();

