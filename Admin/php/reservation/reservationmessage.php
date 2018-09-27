<?php 
    include '../../../User/includes/db.php';
    $id = $_POST['uid'];
    $sql = mysqli_query($con,"");
    $row = mysqli_fetch_array($sql);
    $cnumber = $row[0];
    $firstname = $row[1];
    $datetime = $row[2];
    $date = date("F d Y",strtotime($datetime));
    $time = date("g:i A",strtotime($datetime));
    $message = "Hi $firstname, This is the confirmation of your appointment on $date at $time \n\n --Metro Focus--";
    // Hi (name ng customer)! This message is the confirmation that your item which is/are the (item name) is already reserved for you and costs (presyo). We remind that you will get the item on (date at time nila kukunin)
    // itexmo.com
    // function itexmo($number,$message,$apicode){
    // $url = 'https://www.itexmo.com/php_api/api.php';
    // $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
    // $param = array(
    // 'http' => array(
    //     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    //     'method'  => 'POST',
    //     'content' => http_build_query($itexmo),
    // ),
    // );
    // $context  = stream_context_create($param);
    // return file_get_contents($url, false, $context);}
    // $result = itexmo($cnumber,$message,"TR-METRO406141_A22UN");
    // if ($result == ""){
    // echo "iTexMo: No response from server!!!
    // Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.  
    // Please CONTACT US for help. ";  
    // }else if ($result == 0){
    // echo "Confirmation Sent!";
    // }
    // else{   
    // echo "Error Num ". $result . " was encountered!";
    // }

    // https://semaphore.co/docs

    // $ch = curl_init();
    // $parameters = array(
    //     'apikey' => '54b32b387e1973390e6a5617c2e54f38', //Your API KEY
    //     'number' => $cnumber,
    //     'message' => $message,
    //     'sendername' => 'SEMAPHORE'
    // );
    // curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages' );
    // curl_setopt( $ch, CURLOPT_POST, 1 );

    // //Send the parameters set above with the request
    // curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

    // // Receive response from server
    // curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    // $output = curl_exec( $ch );
    // curl_close ($ch);

    // //Show the server response
    // //echo $output;
    // echo "Confirmation Sent!";

    // https://smsgateway.me/

    require '../sms/autoload.php';

    use SMSGatewayMe\Client\ApiClient;
    use SMSGatewayMe\Client\Configuration;
    use SMSGatewayMe\Client\Api\MessageApi;
    use SMSGatewayMe\Client\Model\SendMessageRequest;

    // Configure client
    $config = Configuration::getDefaultConfiguration();
    $config->setApiKey('Authorization', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzNzk2MjE5MCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjYxNzUxLCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.fZ11G2HZ6QvIh2WjaGH63XsWyIBjbRItuuNwIPCfGiU');
    $apiClient = new ApiClient($config);
    $messageClient = new MessageApi($apiClient);

    // Sending a SMS Message
    $sendMessageRequest1 = new SendMessageRequest([
        'phoneNumber' => $cnumber,
        'message' => $message,
        'deviceId' => 102592
    ]);
    // $sendMessageRequest2 = new SendMessageRequest([
    //     'phoneNumber' => '07791064781',
    //     'message' => 'test2',
    //     'deviceId' => 2
    // ]);
    $sendMessages = $messageClient->sendMessages([
        $sendMessageRequest1
        // $sendMessageRequest2
    ]);
    // print_r($sendMessages);

    echo "Message Sent!";
 ?>