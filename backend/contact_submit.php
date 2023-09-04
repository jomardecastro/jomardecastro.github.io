<?php
$blocked_domains = ['gmail.com', 'outlook.com', 'hotmail.com', 'testdomain.com'];
$error = [];

if (!isset($_POST['company_name']) || empty($_POST['company_name']))
{
  array_push($error, 'company_name_error');
}

if (!isset($_POST['contact_name']) || empty($_POST['contact_name']))
{
  array_push($error, 'contact_name_error');
}

if (!isset($_POST['email']) || empty($_POST['email']))
{
  array_push($error, 'email_error');
}
else
{
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
  {
    array_push($error, 'email_invalid');
  }
  else
  {
    list($username, $domain) = explode('@', $_POST['email']);
    if (in_array($domain, $blocked_domains))
    {
      array_push($error, 'domain_error');
    }
  }
}

if (!isset($_POST['phone']) || !preg_match("/^\d{10}$/", $_POST['phone']))
{
  array_push($error, 'phone_error');
}

if (count($error) == 0)
{
  $response = [
    "status" => "success",
    "message" => "Form submitted successfully!"
  ];
}
else
{
  $response = [
    "status" => "error",
    "data" => $error
  ];
}

sleep(1); //just to simulate post request loading

header("Content-Type: application/json");
echo json_encode($response);
?>