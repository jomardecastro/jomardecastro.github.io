var captcha_valid = false

$(document).ready(() =>
{
  $("form").submit(function (e)
  {
    
    e.preventDefault();
    var formData = $(this).serialize();
    let error_array = ["company_name_error","contact_name_error","email_error","phone_error",'captcha_error']
    for(let i in error_array)
    {
        $("#"+error_array[i]).text('')
    }

    if(captcha_valid)
    {
      $.ajax({
        type: "POST",
        url: "/backend/contact_submit.php",
        data: formData,
        success: function (response) 
        {
          for(let i in response.data)
          {
            let errors = response.data[i]
            if(errors == "domain_error")
            {
              $("#email_error").text('This email domain is not allowed.')
            }
            else if(errors == "email_invalid")
            {
              $("#email_error").text('Please enter an email address.')
            }
            else
            { 
              $("#"+errors).text('Please fill out this field.')
            }
          }
        }
      });
    }
    else
    {
      $("#captcha_error").text('Invalid captcha.')
    }
    
  });
});

function captchaSuccess() 
{
  captcha_valid = true;
}