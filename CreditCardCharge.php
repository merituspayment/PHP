<?PHP
//Specify URL + Field Names + Values	
$postURL = "https://webservice.paymentxp.com/wh/webhost.aspx?MerchantID=10012&MerchantKey=C22A63EE-2E7A-4ACE-96AC-0958DC8D953F&TransactionType=CreditCardCharge&CardNumber=4111111111111111&ExpirationDateMMYY=1218&TransactionAmount=1.00&BillingNameFirst=John&BillingNameLast=Doe";
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
