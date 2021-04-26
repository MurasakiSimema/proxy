<?php
$url = "http://extra.isii.it:40081/donatori/paypal/payments.php";
$ch = curl_init( $url );
# Setup request to send json via POST.
$payload = json_encode( {"payment_type":"echeck","payment_date":"16:33:47 Apr 25, 2021 PDT","payment_status":"Completed","address_status":"confirmed","payer_status":"verified","first_name":"John","last_name":"Smith","payer_email":"buyer@paypalsandbox.com","payer_id":"TESTBUYERID01","address_name":"John Smith","address_country":"United States","address_country_code":"US","address_zip":"95131","address_state":"CA","address_city":"San Jose","address_street":"123 any street","business":"seller@paypalsandbox.com","receiver_email":"seller@paypalsandbox.com","receiver_id":"seller@paypalsandbox.com","residence_country":"US","item_name":"something","item_number":"AK-1234","quantity":"1","shipping":"3.04","tax":"2.02","mc_currency":"USD","mc_fee":"0.44","mc_gross":"12.34","mc_gross_1":"12.34","txn_type":"web_accept","txn_id":"621758935","notify_version":"2.1","custom":"xyz123","invoice":"abc1234","test_ipn":"1","verify_sign":"AUcIJTJrK2jNIr0cTeeSAX2Uq4HAA3crtadW35-fgXGgAq1zjHgJeXo0"} );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>$result</pre>";
?>
