<HTML>
	<HEAD>
		<META name="GENERATOR" content="IBM WebSphere Studio">
		<LINK href="css/main.css" type=text/css rel=stylesheet>
		<TITLE>Canon - Tranportal</TITLE>
	</HEAD>
	<?php 
        
		try {
            require('../libfiles/iPayPipe.php');
			$ini_array = parse_ini_file("tranportalhttp.ini");
 			$currency	= $ini_array['currency'];
 			$receiptURL	= $ini_array['receiptURL'];
 			$errorURL	= $ini_array['errorURL'];
			$resourcePath = $ini_array['resourcePath'];
			//standing instruction changes
			
			$siflag = isset($_POST['siflag']);
			
			//$keystorePath = $ini_array['keystorePath'];
			
			$aliasName = $ini_array['aliasName'];
			$myObj = new iPayPipe();
			$amount =$_POST['AMOUNT'];
			$action=$_POST['action'];
			$comment = $_POST['comment'];
			$pan    = $_POST['pan'];
			$cvv    = $_POST['cvv'];
			$expmm  = $_POST['expmm'];
			$expyy  = $_POST['expyy'];
			$transacType = $_POST['transacType'];
			
			$myObj->setTrackId(trim($_POST['trckId']));
			$myObj->setAlias(trim($aliasName));
			$myObj->setResourcePath(trim($resourcePath));
			//standing instruction
			$myObj->setSiflag(trim($siflag));
			
	
			
			//echo $action;
			//die();
			
			$myObj->setAction(trim($action));
			$myObj->setAmt(trim($amount));
			$myObj->setCurrency(trim($currency));
			$myObj->setCard($pan);
			$myObj->setCvv2($cvv);
			$myObj->setExpMonth($expmm);
			$myObj->setExpYear($expyy);
			$myObj->setMember($_POST['name']);
			$myObj->setTransId($comment);
			
			$myObj->setType($transacType);
			
			if(trim($siflag) == "on"){
				$myObj->setUdf1(1);
			}else{
				$myObj->setUdf1($_POST['udf1']);
			}
			$myObj->setUdf2($_POST['udf2']);
			$myObj->setUdf3($_POST['udf3']);
			$myObj->setUdf4($_POST['udf4']);
			$myObj->setUdf5($_POST['udf5']);
			$myObj->setUdf6($_POST['udf6']);
			$myObj->setUdf7($_POST['udf7']);
			$myObj->setUdf8($_POST['udf8']);
			$myObj->setUdf9($_POST['udf9']);
			$myObj->setUdf10($_POST['udf10']);
			$myObj->setUdf11($_POST['udf11']);
			$myObj->setUdf12($_POST['udf12']);
			$myObj->setUdf13($_POST['udf13']);
			$myObj->setUdf14($_POST['udf14']);
			$myObj->setUdf15($_POST['udf15']);
			$myObj->setcustId($_POST['custId']);
		
			 $myObj->setKeystorePath(trim($resourcePath));
           
			$myObj->setResponseURL(trim($receiptURL));
			$myObj->setErrorURL(trim($errorURL));
			
			
			$resval=0;
			
			//if(trim($myObj->performPaymentInitializationHTTP())!=0)  {
			if(trim($myObj->performTransactionHTTP())!=0)  {
				$url = $myObj->getErrorURL()."?result=".$myObj->getError();
			} else {
			
			//echo $myObj->getWebAddress();
			//die();
			$url =trim($myObj->getWebAddress());
			
			}
			echo($url);
			echo "<meta http-equiv='refresh' content='0;url=$url'>";
			
			
		} catch(Exception $e) {
			echo 'Message: ' .$e->getFile();
	  		echo 'Message1 : ' .$e->getCode();
		}
?>

</HTML>