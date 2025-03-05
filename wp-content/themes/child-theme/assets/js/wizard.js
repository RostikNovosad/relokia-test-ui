jQuery(document).ready(function ($) {});

jQuery(document).ready(function ($) {
  let name = null;
  let email = null;
  let phone = null;
  let quantity = null;
  let price = null;

  $('.contact-btn').on('click', function () {
    if ($('.name-input').val() === '') {
      alert("заповніть ім'я");
    } else if ($('.email-input').val() === '') {
      alert('заповніть електронну пошту');
    } else {
      name = $('.name-input').val();
      email = $('.email-input').val();
      phone = $('.phone-input').val();
      $(".step[data-step='1']").css('display', 'none');
      $(".step[data-step='2']").css('display', 'block');
    }
  });

  $('.back-info').on('click', function () {
    $(".step[data-step='2']").css('display', 'none');
    $(".step[data-step='1']").css('display', 'block');
  });
  $('.back-quantity').on('click', function () {
    $(".step[data-step='3']").css('display', 'none');
    $(".step[data-step='2']").css('display', 'block');
  });

  $('.quantity-btn').on('click', function () {
    if ($('.quantity-input').val() === '') {
      alert('заповніть кількість');
    } else {
      quantity = $('.quantity-input').val();
      $(".step[data-step='2']").css('display', 'none');
      $(".step[data-step='3']").css('display', 'block');

      $('.price').text(
        quantity < 11 ? (price = 10) : quantity < 100 ? (price = 100) : (price = 1000),
      );
    }
  });

  $('.quantity-input').on('input', function (e) {
    let value = e.target.value;
    if (value.length > 4) {
      value = value.slice(0, 4);
      e.target.value = value;
    }
  });

  $('.send-email').on('click', function () {
    $.ajax({
      url: my_ajax_object.ajax_url,
      type: 'POST',
      data: {
        action: 'send_form_email',
        name: name,
        email: email,
        quantity: quantity,
        phone: phone,
      },
      success: function (response) {
        if (response.success) {
          $(".step[data-step='3']").css('display', 'none');
          $(".step[data-step='4.1']").css('display', 'block');
        } else {
          $(".step[data-step='3']").css('display', 'none');
          $(".step[data-step='4.2']").css('display', 'block');
        }
      },
    });
  });

  $('.start-again').on('click', function () {
    const step = $(this).data('step');

    $('.step')
      .find('input')
      .each(function () {
        $(this).val('');
      });

    $(`.step[data-step='${step}']`).css('display', 'none');
    $(".step[data-step='1']").css('display', 'block');
  });

  let currentStep = 1;

  const $steps = $('.breadcrumb-item[data-step]');
  const $nextStepBtns = $('.next-btn');
  const $prevStepBtns = $('.prev-btn');

  function setActiveStep(stepNumber) {
    $steps.each(function () {
      const itemStep = parseInt($(this).data('step'));
      if (itemStep === stepNumber) {
        $(this).addClass('active').attr('aria-current', 'step');
      } else {
        $(this).removeClass('active').removeAttr('aria-current');
      }
    });
  }

  $nextStepBtns.on('click', function () {
    const nextStep = parseInt($(this).data('next'));
    if (nextStep) {
      currentStep = nextStep;
      setActiveStep(currentStep);
    }
  });

  $prevStepBtns.on('click', function () {
    const prevStep = parseInt($(this).data('prev'));
    if (prevStep) {
      currentStep = prevStep;
      setActiveStep(currentStep);
    }
  });

  setActiveStep(currentStep);
});
