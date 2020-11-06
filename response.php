<?php
$host        = "host = ec2-52-73-199-211.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d8h0u8kh19dh36";
   $credentials = "user = qownjuhbawznbz password=368dd7b964487933e40c9d030fd89399ae054c69a15b3f210ad7eea2917bebde";

   $db = pg_connect( "$host $port $dbname $credentials"  );

$sql = "UPDATE customers SET current_balance = current_balance+ '$_POST[amount]' WHERE email = '$_POST[emailto]'";

   		$ret = pg_query( $sql);
$sql2 = "UPDATE customers SET current_balance = current_balance -'$_POST[amount]' WHERE email = '$_POST[emailfrom]'";

   		$ret2 = pg_query( $sql2);

   		if(!$ret) {
   		   echo "Updation failed";
   		} 
		 else {		 
   		   	header("location:customer.php ");
   			}




?>
