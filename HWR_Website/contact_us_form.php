<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $name = htmlspecialchars($_POST['inputName']);
  $phone  = htmlspecialchars($_POST['inputPhone']);
  $radio = htmlspecialchars($_POST['gridRadios1']);
  $radio2  = htmlspecialchars($_POST['gridRadios2']);
  $comment  = htmlspecialchars($_POST['comment']);

  echo  $name, ' ', $phone, ' ', $radio, ' ', $radio2, ' ', $comment;

  $postObj = (object) ["online_name" => "hardcodetest"];

  $r = new HttpRequest();
  $r->setUrl('https://hwrescue.erpnext.com/api/resource/Online');
  $r->setMethod(HTTP_METH_POST);
  $r->setHeaders(array('Content-Type' => 'application/json', 'cache-control' => 'no-cache');
  $r->setBody(json_encode($postObj));
  try {
  	$response = $r->send();
      echo $response->getBody();
  } catch (HttpException $ex) {
      echo $ex;
  }
?>