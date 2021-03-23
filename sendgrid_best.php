<?php 
   
   $to='php.emp30891@gmail.com'; // you can dinamically fetch this address from your database, whom you want to send email.
   $data['fname']='Navdeep'; // demo FirstName
   
   $url = 'https://sendgrid.com/';
  
		$user='##########';  //Your sendgrid username
		$pass='##########'; //your sendgrid password

		$params = array(
			'api_user'  => $user,
			'api_key'   => $pass,
			'to'        => $to,
			'subject'   => 'Subject - Your Site',
			'html'      => '<p>Hello Programmer, This mail is sent with SendGrid!</p>',
			'text'      => 'Hello Programmer, This mail is sent with SendGrid!',
			'from'      => 'info@yourdomain.com'
			
		  );
		 
		 
		$request =  $url.'api/mail.send.json';
		 
		// Generate curl request
		$session = curl_init($request);
		// Tell curl to use HTTP POST
		curl_setopt ($session, CURLOPT_POST, true);
		// Tell curl that this is the body of the POST
		curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
		// Tell curl not to return headers, but do return the response
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		 
		// obtain response
		$response = curl_exec($session);
		curl_close($session);
        echo $response;

?>		