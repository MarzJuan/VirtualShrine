$(document).ready(function() {

    var getUrl = window.location;
    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

    $('#pax').on('change', function() {
      $("#applicants").empty();
      $("#butsave").show();
      var pax = +this.value + 1;
      var app = "";
      var i;
      for (i = 1; i < pax; i++) {
        app += '<div class="card mt-3">';
        app +=   '<div class="card-header"><strong>Visitor '+ i +' Information</strong></div>';
        app +=   '<div class="card-body">';
        app +=      '<div class="row">';

        app +=        '<div class="col-md-4 col-12"> ';            
        app +=          '<div class="form-group">';
        //app +=            '<label for="email">First Name:</label>';
        app +=            '<input type="text" name="fname" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="First Name" autocomplete="off" data-parsley-required="" data-parsley-required-message="First Name is required">';
        app +=          '</div>';
        app +=        '</div>';

        app +=        '<div class="col-md-4 col-12"> ';            
        app +=          '<div class="form-group">';
        //app +=            '<label for="email">Last Name:</label>';
        app +=            '<input type="text" name="lname" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Last Name" autocomplete="off" data-parsley-required="" data-parsley-required-message="Last Name is required">';
        app +=          '</div>';
        app +=        '</div>'; 

        app +=        '<div class="col-md-4 col-12"> ';            
        app +=          '<div class="form-group">';
        //app +=            '<label for="email">Email:</label>';
        app +=            '<input type="text" name="email" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Email" autocomplete="off" data-parsley-required="" data-parsley-type="email" data-parsley-error-message="Invalid Email">';
        app +=          '</div>';
        app +=        '</div>';  

        app +=        '<div class="col-md-4 col-12"> ';            
        app +=          '<div class="form-group">';
        //app +=            '<label for="email">Mobile Number:</label>';
        app +=            '<input type="text" name="phone_no" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Mobile Number" autocomplete="off" data-parsley-required="" data-parsley-type="digits" data-parsley-required-message="Mobile Number is required" data-parsley-type="digits">';
        app +=          '</div>';
        app +=        '</div>';  

        app +=        '<div class="col-md-4 col-6">'; 
        app +=          '<div class="form-group">';
        //app +=            '<label>Sex</label>';
        app +=            '<select class="form-control" name="m-sex[]" data-parsley-required="" data-parsley-required-message="Sex is required">';
        app +=              '<option value="">Select sex</option>';
        app +=              '<option value="M">Male</option>';
        app +=              '<option value="F">Female</option>';
        app +=            '</select>';
        app +=          '</div>';
        app +=        '</div>'; 
        app +=        '<div class="col-12"> ';            
        app +=          '<div class="form-group">';
        //app +=            '<label for="email">Complete Address:</label>';
        app +=            '<textarea name="m-address[]" value="" class="form-control input-md" aria-required="true" aria-invalid="false" placeholder="Address" autocomplete="off" data-parsley-required="" data-parsley-required-message="Complete Address is required"></textarea>';
        app +=          '</div>';
        app +=        '</div>';  

        app +=      '</div>';
        app +=   '</div>';
        app += '</div>';
      }

      $("#applicants").append(app).fadeIn(2000);

      $('html, body').animate({
          scrollTop: $("#applicants").offset().top
      }, 1000);

      $( ".birthdate" ).datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: '-100:-0',
          minDate: '-100Y',
          dateFormat: 'yy-mm-dd', 
          maxDate: '-0Y'
      });  
    });

    /*crating new click event for save button*/
    $('#butsave').click(function () {
                        
            if(!$('form#form1').parsley().validate()) {
                alert("Please enter all required fields.");
                return;
            }

            var preAppData = $("#form1").serialize();

            $(".modal-footer").hide();
            $("#no-slot").modal('show');
            $("#loading-msg").html('Please wait...');

            $.ajax({
                type: 'POST',
                url: "booking-processing.php",
                data: preAppData
                ,success: function (result) {
                    var json = $.parseJSON(result);
                    var origin   = window.location.origin;
                    if(json.code == 0) {
                       console.log(json.message);
                       window.location.replace(origin+"/confirmation");
                    } else {;
                      $(".modal-footer").show();
                      $("#no-slot").modal('show');
                      $("#loading-msg").html(json.message);
                    }
                },
                error: function () {
                    alert("Internal error. Please try again.");
                    $('[name="btnGetStarted"]').html('get started now');
                    $('[name="btnGetStarted"]').removeAttr('disabled');
                }
            });

    });

  });