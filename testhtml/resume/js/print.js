function choosefile() {
  document.querySelector('input[type=file]').click();
}

function check_multifile_logo(file) {
  var extension = file.substr((file.lastIndexOf('.') + 1)).toLowerCase();
  if (extension === 'jpg' || extension === 'jpeg' || extension === 'gif' || extension === 'png' || extension === 'bmp') {
    return true;
  } else {
    return false;
  }
}

function readURL(input) {
  if (input.files && input.files[0]) {
    if (check_multifile_logo(input.files[0]['name'])) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var preview = $('#thumb');
        preview.attr('src', e.target.result);
        preview.css('display', 'initial');
        $('#text_thumb').css('display', 'none');
        $('.thumb').css('border', 0);
        $('#img_64').attr('value', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    } else {
      alert('We only accept JPG, JPEG, PNG, GIF and BMP files');
    }
  }
}

$(document).on('change', '#img_file', function() {
  readURL(this);
});

$(document).ready(function() {
  $('#resume_form input').keydown(function(event) {
    if (event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
  Age();
  $(window).ready(function() {
    $('#zip').jpostal({
      postcode: [
        '#zip'
      ],
      address: {
        '#address': '%3%4%5',
        '#phonetic_3': '%ASHV8%ASHV9'
      }
    });
  });
});

function cbChange(obj) {
  var cbs = document.getElementsByClassName("form-check-input");
  for (var i = 0; i < cbs.length; i++) {
    cbs[i].checked = false;
  }
  obj.checked = true;
  obj.prop('checked', 'checked');
}

function nl2br (str, is_xhtml) {
  var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
  return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
}

$(document).on('change', '.form-check-input', function() {
  var obj = $(this);
  $('.form-check-input').each(function(index, value) {
    $(this).prop('checked', false);
    $(this).attr('check', 'false');
  });
  obj.prop('checked', 'checked');
  $(this).attr('check', 'true');
});

$(document).on('change', '.birthdate input, .birthdate select', function() {
  Age();
});

$(document).on('click', '#example-basic-p-0 #img_upload', function() {
  choosefile();
});

function Age() {
  var birth_date_year = $('input[name="birth_date_year"]').val();
  var birth_date_month = $('select[name="birth_date_month"]').val();
  var birth_date_day = $('select[name="birth_date_day"]').val();
  if (parseInt(birth_date_year) > 1000 && parseInt(birth_date_month) > 0 && parseInt(birth_date_day) > 0) {
    birth = new Date(birth_date_year, birth_date_month, birth_date_day, 0, 0, 0, 0);
    today = new Date(today_y, today_m, today_d, 0, 0, 0, 0);
    var age = _calculateAge(birth, today);
    $("#old_calc").html(age);
    $("input[name='birth_age']").val(age);
  } else {
    $("#old_calc").html('**');
    $("input[name='birth_age']").val(null);
  }
}

function _calculateAge(birthday, today) {
  var ageDifMs = today.getTime() - birthday.getTime();
  var ageDate = new Date(ageDifMs);
  return Math.abs(ageDate.getUTCFullYear() - 1970);
}

function auto_complete() {
  if ($('#example-basic ul li:first-child ').hasClass('current')) {
    var clone_html = $("#example-basic-p-0").html();
    $('#step2').html(clone_html);

    $("#step2 input").each(function() {
      if ($(this).attr('type') == 'hidden' || $(this).attr('type') == 'file') {
        $(this).replaceWith('');
      } else {
        var clone_name = '#example-basic-p-0 input[name="' + $(this).attr('name') + '"]';
        switch ($(this).attr('name')) {
          case 'gender':
            if ($(this).attr('check') == 'true') {
              $(this).replaceWith('<img src="/resume/img/check1.png">');
            } else {
              $(this).replaceWith('<img src="/resume/img/check2.png">');
            }
            break;
          case 'birth_date_year':
            if ($(clone_name).val() == '') {
              $(this).replaceWith('&nbsp;&nbsp;&nbsp;&nbsp;');
              break;
            }
          case 'birth_date_month':
            if ($(clone_name).val() == '') {
              $(this).replaceWith('&nbsp;&nbsp;');
              break;
            }
          case 'birth_date_day':
            if ($(clone_name).val() == '') {
              $(this).replaceWith('&nbsp;&nbsp;');
              break;
            }
          default:
            $(this).replaceWith($(clone_name).val());
        }
      }
    });

    $("#example-basic-p-1 textarea").each(function() {
      var clone_name = '#example-basic-p-0 textarea[name="' + $(this).attr('name') + '"]';
      $(this).replaceWith(function () {
        return $('<p/>', {
          html: nl2br($(clone_name).val().trim())
        });
      });
    });

    $("#example-basic-p-1 select").each(function() {
      var clone_name = '#example-basic-p-0 select[name="' + $(this).attr('name') + '"]';
      if($(clone_name).val()){
        $(this).replaceWith($(clone_name).val());
      }else{
        $(this).replaceWith('&nbsp;&nbsp;');
      }
    });

    if ($('#step2 #old_calc').html() == '**') {
      $('#step2 #old_calc').html('&nbsp;&nbsp;');
    }

    $('#example-basic').attr('class', 'wizard clearfix step2');

    if ($("#export_pdf").length == 0) {
      $('#example-basic .actions ul').append('<li class="step2_btn"><a id="export_pdf" class="btn btn-success" href="javascript:void(0);">印刷</a></li>');
      $('#example-basic .actions ul').append('<li class="step2_btn"><a id="resume_send_mail" class="btn btn-success" href="javascript:void(0);">送信する</a></li>');
    }
  } else {
    $('#example-basic').attr('class', 'wizard clearfix');
  }
}

$("#example-basic").steps({
  headerTag: "h3",
  bodyTag: "section",
  transitionEffect: "slideLeft",
  autoFocus: false,
  enableAllSteps: false,
  enablePagination: true,
});

$(document).on('click', '#export_pdf', function() {
  $('#resume_form').submit();
});

$(document).on('click', '#resume_send_mail', function(e) {
  if ($("input[name='email']").val().trim() == ''){
    alert('メールアドレスを入力ください');
    return false;
  }
  e.preventDefault();
  $(this).append(' <span class="spinner-border spinner-border-sm"></span>');

  $(this).prop('disabled', true);
  $('#resume_action').attr('value', 'send_mail');

  var form = $("#resume_form");
  var url = form.attr('action');
  var data = form.serialize() + "&resume_action=send_mail";

  $.ajax({
    type: 'POST',
    url: url,
    data: data,
    success: function(data) {
      $('#step3').html(data);
      $('a[href="#next"]').click();
      $('#example-basic').attr('class', 'wizard clearfix step3');
    }
  });
});
