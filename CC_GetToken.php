<?PHP
//Specify URL + Field Names + Values	
$postURL = "https://webservice.paymentxp.com/wh/GetToken.aspx?CardNumber=4111111111111111ExpirationDateMMYY=1218&MerchantID=10012";
	//See http://php.net/manual/en/book.curl.php for a list of available cURL commands	
	$request = curl_init($postURL); 
        curl_setopt($request, CURLOPT_HEADER, 0);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_POSTFIELDS, $postString); 
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);
        $post_response = curl_exec($request); 
        curl_close ($request); 
        echo ($post_response); //Display response
    ?>
