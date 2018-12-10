<?php


require_once('app/database/connection.php');
require_once('app/models/user.php');

$id = $_GET['id'];
$user = user::getObjJSON($id);
$url="http://192.168.1.116:9001/email";


    $json = json_encode($user);
    $data = array('users' =>$json);

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { /* Handle error */ }

    var_dump($result);


?>


<h4>
  <?php if (isset($json)) {
      echo $json;
  }else{
    echo "..";
  }?>
</h1>
