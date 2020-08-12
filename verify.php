<?PHP
//only run when form is submitted
if(isset($_POST['g-recaptcha-response'])) {
    $secretKey = '6LeDkdYUAAAAAC-ICf5fNB4ERbUB-wF4bB22n9G6';
    $response = $_POST['g-recaptcha-response'];
    $remoteIp = $_SERVER['REMOTE_ADDR'];


    $reCaptchaValidationUrl = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteIp");
    $result = json_decode($reCaptchaValidationUrl, TRUE);

    //get response along side with all results
    print_r($result);

    if($result['success'] == 1) {
        //True - What happens when user is verified
        $name = $_POST['online_name'];
        $phone = $_POST['phone_number'];
        $comp = $_POST['computer_status'];
        $comments = $_POST['comments'];
        //API Url
        $url = 'https://hwrescue.erpnext.com/api/resource/Online';
        //Initiate cURL.
        $ch = curl_init($url);
        //The JSON data.
        $jsonData = array(
          'online_name' => $name,
          'phone_number' => $phone,
          'computer_status' => $comp,
          'comments' => $comments
        );
        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($jsonData);
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        //Execute the request
        $result = curl_exec($ch);
        $userMessage = '<div>Success: you\'ve made it :)</div>';
        exit;
    } else {
        //False - What happens when user is not verified
        $userMessage = '<div>Fail: please try again :(</div>';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>reCAPTCHA Response</title>
    </head>
    <body>
        <?php
            if(!empty($userMessage)) {
                echo $userMessage;
            }
        ?>
    </body>
</html>
