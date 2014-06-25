<?PHP
//Specify URL + Field Names + Values	
$postURL = "https://webservice.paymentxp.com/wh/webhost.aspx?MerchantID=10012&MerchantKey=c22a63ee-2e7a-4ace-96ac-0958dc8d953f&CardNumber=4111111111111111&DayOfMonthOption=15&MonthlyOption=1&OccurenceOption=2&WeekOption=0&WeekdayOption=0&StartDate=08152014&MonthOfYearOption=1&ExpirationDateMMYY=1218&TransactionAmount=1.00&TransactionType=CreditCardRecurringCharge";
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
