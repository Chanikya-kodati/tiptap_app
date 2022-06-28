<?php
//include "connection.php";



    function sendPushNotification($message, $deviceId,$type=NULL,$postId=NULL) {
		
// set time limit to zero in order to avoid timeout
        set_time_limit(0);

// charset header for output
        header('content-type: text/html; charset: utf-8');

// this is the pass phrase you defined when creating the key
        $passphrase = 'secure';

// you can post a variable to this string or edit the message here
       if (!isset($_POST['msg'])) {
            $_POST['msg'] = "Notification message here!";
        }

// tr_to_utf function needed to fix the Turkish characters
//        $message = tr_to_utf($_POST['msg']);
         $message = tr_to_utf($message);
//        $message = $message;
// load your device ids to an array
        $deviceIds = array(
            $deviceId
        );

    //   print_r($deviceIds);
    //  die();
// this is where you can customize your notification
        $payload = '{"aps":{"alert":"' . $message . '","sound":"default"},"type":"' . $type . '","postid":"' . $postId . '"}';

//        $result = 'Start' . '<br />';

////////////////////////////////////////////////////////////////////////////////
// start to create connection
        $ctx = stream_context_create();
        stream_context_set_option($ctx, 'ssl', 'local_cert', 'CertificateName.pem');
        stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

//        echo count($deviceIds) . ' devices will receive notifications';

        foreach ($deviceIds as $deviceId) {
            
        
// wait for some time
            sleep(1);

            // Open a connection to the APNS server
            //ssl://gateway.sandbox.push.apple.com:2195
//            ssl://gateway.push.apple.com:2195
            $fp = stream_socket_client('ssl://gateway.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);

            if (!$fp) {
//                exit("Failed to connect: $err $errstr" );
            } else {
//                echo 'Apple service is online. ';
            }

            // Build the binary notification
            $msg = chr(0) . pack('n', 32) . pack('H*', $deviceId) . pack('n', strlen($payload)) . $payload;

            // Send it to the server
            $result = fwrite($fp, $msg, strlen($msg));

            if (!$result) {
//                echo 'Undelivered message count: ' . $deviceId ;
//                return 0;
            } else {
                                
//                return 1;

//                echo 'Delivered message count: ' . $deviceId ;
            }

            if ($fp) {
                fclose($fp);
//                echo 'The connection has been closed by the client' . '<br />';
            }
        }

//        echo count($deviceIds) . ' devices have received notifications.<br />';

// function for fixing Turkish characters
// set time limit back to a normal value
        set_time_limit(30);
        return 1;
    }

    function tr_to_utf($text) {
        $text = trim($text);
        $search = array('Ü', 'Þ', 'Ð', 'Ç', 'Ý', 'Ö', 'ü', 'þ', 'ð', 'ç', 'ý', 'ö');
        $replace = array('Ãœ', 'Åž', '&#286;ž', 'Ã‡', 'Ä°', 'Ã–', 'Ã¼', 'ÅŸ', 'ÄŸ', 'Ã§', 'Ä±', 'Ã¶');
        $new_text = str_replace($search, $replace, $text);
        return $new_text;
    }
	
	function androidPushNotificationFCM($message, $target) {
		/*
		  Parameter Example
		  $data = array('post_id'=>'12345','post_title'=>'A Blog post');
		  $target = 'single tocken id or topic name';
		  or
		  $target = array('token1','token2','...'); // up to 1000 in one request
		 */
		//FCM api URL
		$url = 'https://fcm.googleapis.com/fcm/send';

		//api_key available in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
		$server_key = 'AAAAWL7Y2Io:APA91bG1xiWaGdGJsaHTN4HhVABG3vK9OILUuTiuSAlkEmfYEx37Qc161nteHNOVjwBJGEIXs5r2EaRFPtqHJ8FSLblUQfzrjMyyNnZplSpESETo1i2lYT_ZyOCKNLGXz5Srcg0Tzy8r';

		$fields = array();
		$fields['notification'] = array('body' => $message, 'title' => 'Dozan', 'sound' => 'default', 'priority' => 'high');
		$fields['data'] =array('id' => '');
//                        $fields['data'] = $data;
		if (is_array($target)) {
			$fields['registration_ids'] = $target;
		} else {
			$fields['to'] = $target;
		}
		//header with content_type api key
		$headers = array(
						'https://fcm.googleapis.com/fcm/send',
						'Content-Type:application/json',
						'Authorization:key=' . $server_key
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		$result = curl_exec($ch);
		if ($result === FALSE) {
			die('FCM Send Error: ' . curl_error($ch));
		}
		curl_close($ch);
//                        echo $result;
	}

?>