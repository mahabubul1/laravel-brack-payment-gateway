<?php 


try {
			require('../libfiles/iPayPipe.php');
			$ini_array = parse_ini_file("vbvtranportalhttp.ini");
 			$currency	= $ini_array['currency'];
 			$receiptURL	= $ini_array['receiptURL'];
 			$errorURL	= $ini_array['errorURL'];
			$keystorePath = $ini_array['keystorePath'];
			$resourcePath = $ini_array['resourcePath'];
			$aliasName = $ini_array['aliasName'];
			$myObj =new iPayPipe();
			$amount =$_POST['amount'];
			$action=$_POST['action'];
			$comment = $_POST['comment'];
			$pan    = $_POST['pan'];
			$cvv    = $_POST['cvv'];
			$expmm  = $_POST['expmm'];
			$expyy  = $_POST['expyy'];
			$siflag = $_POST['siflag'];
			$myObj->setTrackId(trim($_POST['trckId']));
			$myObj->setAlias(trim($aliasName));
			$myObj->setResourcePath(trim($resourcePath));
			$myObj->setAction(trim($_POST['action']));
			$myObj->setAmt(trim($_POST['amount']));
			$myObj->setCurrency(trim($currency));
			$myObj->setCard($_POST['pan']);
			$myObj->setCvv2($_POST['cvv']);
			$myObj->setExpMonth($_POST['expmm']);
			$myObj->setExpYear($_POST['expyy']);
			$myObj->setMember($_POST['names']);
			$myObj->setType($_POST['transacType']);
			$myObj->setTransId($comment);
			//standing instruction
			$myObj->setSiflag(trim($siflag));
			if(trim($_POST['siflag']) == "on"){
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
			if(trim($myObj->performVbVTransaction()) != 0) 
			{
				$url = $myObj->getErrorURL()."?result=".$myObj->getError();
			}
			else
			{
				$url = trim($myObj->getWebAddress());
			}
			echo "<meta http-equiv='refresh' content='0;url=$url'>";
		} catch(Exception $e) {
			echo 'Message: ' .$e->getFile();
	  		echo 'Message1 : ' .$e->getCode();
		}
?>
