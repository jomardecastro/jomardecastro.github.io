<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <title>Contact Form | Argent</title>

  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    id='jquery-cdn-js'></script>
  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
    id='bootstrap.min.js-cdn-js'></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <link rel='stylesheet' id='bootstrap.min-css'
    href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' type='text/css' media='all' />
  <link rel="stylesheet" href="assets/css/pages.css" />
  <script src="assets/scripts/contact.js"></script>

  <style>
    h1 {
      font-size: 64px !important;
      line-height: 100px;
      color: #1E293B;
    }

    .g-recaptcha div {
      margin: auto;
    }

    input,
    textarea,
    select {
      padding: 10px 20px !important;
      font-family: 'Hellix' !important;
    }
  </style>
</head>

<body class="font-cairo">

  <?php include '../layout/header.php'; ?>

  <main>
    <section class="banner inner">
      <div class="container">
        <div class="text-center">
          <h1>Contact Request Form</h1>
        </div>
      </div>
    </section>
    <section class="contact-form section-padding">
      <div class="container">
        <div class="form">
          <div class="d-flex">

            <div class="wpcf7 js" id="wpcf7-f204-o1" lang="en-US" dir="ltr">
              <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
              </div>
              <form method="POST" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate"
                data-status="init">
                <div class="field-wrap half">
                  <label for="">Account Manager/Reseller:</label>
                  <span class="wpcf7-form-control-wrap" data-name="account_manager">
                    <input size="40" aria-invalid="false" value="" type="text"
                      name="account_manager"></span>
                </div>
                <div class="field-wrap half">
                  <label for="">Company Name</label>
                  <span class="wpcf7-form-control-wrap" data-name="company_name">
                    <input size="40" aria-required="true" aria-invalid="false" value="" type="text" name="company_name"></span>
                    <span id="company_name_error" class="wpcf7-not-valid-tip" aria-hidden="true"></span>
                </div>
                <div class="field-wrap half">
                  <label for="">Contact Name</label>
                  <span class="wpcf7-form-control-wrap" data-name="contact_name">
                    <input size="40" aria-required="true" aria-invalid="false" value="" type="text" name="contact_name"></span>
                    <span id="contact_name_error" class="wpcf7-not-valid-tip" aria-hidden="true"></span>

                </div>
                <div class="field-wrap half">
                  <label for="">Email To</label>
                  <span class="wpcf7-form-control-wrap" data-name="email">
                    <input size="40" aria-required="true" aria-invalid="false" value="" type="email" name="email"></span>
                    <span id="email_error" class="wpcf7-not-valid-tip" aria-hidden="true"></span>
                </div>
                <div class="field-wrap half">
                  <label for="">Phone Number</label>
                  <span class="wpcf7-form-control-wrap" data-name="phone">
                    <input size="40" aria-required="true" aria-invalid="false" value="" type="tel" name="phone"></span>
                    <span id="phone_error" class="wpcf7-not-valid-tip" aria-hidden="true"></span>

                </div>
                <div class="field-wrap half">
                  <label for="">Product</label>
                  <span class="wpcf7-form-control-wrap" data-name="product">
                    <select aria-invalid="false" name="product">
                      <option value="None">None</option>
                      <option value="Argent Advanced Technology Suite">Argent Advanced Technology Suite</option>
                      <option value="Argent Guardian Ultra" selected="selected">Argent Guardian Ultra</option>
                      <option value="Argent Commander">Argent Commander</option>
                      <option value="Argent Global Manager">Argent Global Manager</option>
                      <option value="Argent Reports">Argent Reports</option>
                      <option value="Argent Job Scheduler">Argent Job Scheduler</option>
                      <option value="Argent Omega">Argent Omega</option>
                      <option value="Argent SIEM-Complete">Argent SIEM-Complete</option>
                    </select>
                  </span>
                </div>
                <div class="field-wrap">
                  <label for="">Type:</label>
                  <span class="wpcf7-form-control-wrap" data-name="type">
                    <span class="wpcf7-radio">
                      <span class="wpcf7-list-item first">
                        <label>
                          <input type="radio" name="type" value="Sales/Maintenance" checked="checked">
                          <span class="wpcf7-list-item-label">Sales/Maintenance</span>
                        </label>
                      </span>
                      <span class="wpcf7-list-item">
                        <label>
                          <input type="radio" name="type" value="Technical Support">
                          <span class="wpcf7-list-item-label">Technical Support</span>
                        </label>
                      </span>
                      <span class="wpcf7-list-item last">
                        <label>
                          <input type="radio" name="type" value="General Information">
                          <span class="wpcf7-list-item-label">General Information</span>
                        </label>
                      </span>
                    </span>
                  </span>
                </div>
                <div class="field-wrap">
                  <label for="">Details</label>
                  <span class="wpcf7-form-control-wrap" data-name="details"><textarea cols="40" rows="10"
                      class="rea" aria-invalid="false"
                      name="details"></textarea></span>
                </div>
                <div class="field-wrap mb-0 text-center">
                  <div class="g-recaptcha" data-sitekey="6LcZxvgnAAAAABmDPFhDgvxGsJVcQpx5qXooUe5w" data-callback="captchaSuccess"></div>
                  <div id="captcha_error" class="wpcf7-not-valid-tip" aria-hidden="true"></div>

                  <input class="has-spinner wpcf7-submit btn submit my-2" type="submit"
                    value="Send Contact Request"><span class="wpcf7-spinner"></span>
                </div>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include '../layout/footer.php'; ?>



</body>

</html>