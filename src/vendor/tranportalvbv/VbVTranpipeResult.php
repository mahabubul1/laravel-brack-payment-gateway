<HTML>
	<BODY class="bg">
		<br><br>
		<TABLE align=center border=1 bordercolor=black>
			<tr>
				<td>

					<TABLE align=center border=0 bordercolor=black>
						<TR>
							<TD colspan="2" align="center">
								<FONT size="4"><B>Transaction Details</B></FONT>
							</TD>
						</TR>
				<?php 
				
				require('../libfiles/iPayPipe.php');
				$ini_array = parse_ini_file("vbvtranportalhttp.ini");
				$resourcePath = $ini_array['resourcePath'];
				$aliasName = $ini_array['aliasName'];
				//$keystorePath = $ini_array['keystorePath'];
				
				$myObj =new iPayPipe();
				$rnd = substr(number_format(time() * rand(),0,'',''),0,10);
				$trackid = $rnd;
				$myObj->setResourcePath(trim($resourcePath));
	
				$myObj->setAlias(trim($aliasName));
				 $myObj->setKeystorePath(trim($resourcePath));
				//$myObj->setKey("222222222222222222222222");
				
			
				if(!empty(($_SERVER["QUERY_STRING"])))
				{
					parse_str($_SERVER["QUERY_STRING"]);	 
				}
				else 
				{
					$trandata =  isset($_GET["trandata"]) ? $_GET["trandata"] : isset($_POST["trandata"]) ? $_POST["trandata"] : "";
				}
			
				if(isset($trandata) && trim($myObj->parseEncryptedResult(trim($trandata)))!=0) {
					echo '<TR>';
						echo '<TD>';
							echo 'Error';
						echo '</TD>';
					echo '<TD>';
					echo '	&nbsp;&nbsp;';
						echo $myObj->getError();
							echo '</b>';
						echo '</TD>';
					echo '</TR>';
							
				}else if(isset($_POST["ErrorText"]) || isset($_GET["ErrorText"])) {?>
					<TR>
									<TD>
										Transaction Status
									</TD>
									<TD>
										&nbsp;&nbsp;
										<b><font size="2" color="red"><?php echo trim(isset($_GET["result"]) ? $_GET["result"] : isset($_POST["result"]) ? $_POST["result"] : "");?></font>
										</b>
									</TD>
								</TR>
								<TR>
									<TD>
										Issuer Response Code
									</TD>
									<TD>
										&nbsp;&nbsp;
										<?php
										if($myObj->getAuthRespCode()!=""){
										?>
										<b><font size="2" ><?php echo $myObj->getAuthRespCode();?></font>
										</b>
										<?php
										}else{?>
										<b><font size="2" ><?php echo trim(isset($_GET["authRespCode"]) ? $_GET["authRespCode"] : isset($_POST["authRespCode"]) ? $_POST["authRespCode"] : "");?></font>
										</b>	
										<?php
										}
										?>
										</TD>
								</TR>
								
								<TR>
									<TD>
										Post Date
									</TD>
									<TD>
										&nbsp;&nbsp;<?php echo trim(isset($_GET["postdate"]) ? $_GET["postdate"] : isset($_POST["postdate"]) ? $_POST["postdate"] : "");?></TD>
								</TR>
								<TR>
									<TD>
										Transaction Reference ID
									</TD>
									<TD>
										&nbsp;&nbsp;<?php echo trim(isset($_GET["ref"]) ? $_GET["ref"] : isset($_POST["ref"]) ? $_POST["ref"] : "");?></TD>
								</TR>
								<TR>
									<TD>
										Mrch Track ID
									</TD>
									<TD>
										&nbsp;&nbsp;<?php echo trim(isset($_GET["trackid"]) ? $_GET["trackid"] : isset($_POST["trackid"]) ? $_POST["trackid"] : "");?></TD>
								</TR>
								<TR>
									<TD>
										<b>Transaction ID</b>
									</TD>
									<TD>
										&nbsp;&nbsp;<?php echo trim(isset($_GET["tranid"]) ? $_GET["tranid"] : isset($_POST["tranid"]) ? $_POST["tranid"] : "");?></TD>
										
								</TR>
								<TR>
									<TD>
										Transaction Amount
									</TD>
									<TD>
										&nbsp;&nbsp;<?php echo trim(isset($_GET["amt"]) ? $_GET["amt"] : isset($_POST["amt"]) ? $_POST["amt"] : "");?></TD>
										
								</TR>
								
								<TR>
									<TD>
										Payment ID
									</TD>
									<TD>
										&nbsp;&nbsp;<?php echo trim(isset($_GET["paymentid"]) ? $_GET["paymentid"] : isset($_POST["paymentid"]) ? $_POST["paymentid"] : "");?></TD>
								</TR>
								<TR>
						<TD> ErrorText: </TD>
						<TD> &nbsp;&nbsp;<?php echo $_POST["ErrorText"];?></TD>
					</TR>
					<?php } else { ?>
					<TR>
						<TD> Transaction Status </TD>
						<TD>&nbsp;&nbsp;<b><font size="2" color="red"><?php echo $myObj->getResult();?></font></b></TD>
					</TR>
					<TR>
									<TD>
										Auth Code
									</TD>
									<TD>
										&nbsp;&nbsp;<?php echo $myObj->getAuth();?></TD>
								</TR>
								
					<TR>
					
					<TR>
						<TD>Transaction Reference ID</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getRef();?></TD>
					</TR>
					<TR>
						<TD>Mrch Track ID</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getTrackId();?></TD>
					</TR>
					<TR>
						<TD><b>Transaction ID</b></TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getTransId();?></TD>
					</TR>
					<TR>
						<TD>Transaction Amount</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getAmt();?></TD>
					</TR>
					<TR>
						<TD>ECI</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->geteci();?></TD>
					</TR>
					<TR>
						<TD>Card Number</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getCardNumber();?></TD>
					</TR>
					<TR>
									<TD>
										Issuer Response Code
									</TD>
									<TD>
										&nbsp;&nbsp;
										<?php
										if($myObj->getAuthRespCode()!=""){
										?>
										<b><font size="2" ><?php echo $myObj->getAuthRespCode();?></font>
										</b>
										<?php
										}else{?>
										<b><font size="2" ><?php echo trim(isset($_GET["authRespCode"]) ? $_GET["authRespCode"] : isset($_POST["authRespCode"]) ? $_POST["authRespCode"] : "");?></font>
										</b>	
										<?php
										}
										?>
										</TD>
								</TR>
					<TR>
						<TD>UDF1</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf1();?></TD>
					</TR>
					<TR>
						<TD>UDF2</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf2();?></TD>
					</TR>
					<TR>
						<TD>UDF3</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf3();?></TD>
					</TR>
					<TR>
						<TD>UDF4</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf4();?></TD>
					</TR>
					<TR>
						<TD>UDF5</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf5();?></TD>
					</TR>
					<TR>
						<TD>UDF6</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf6();?></TD>
					</TR>
					<TR>
						<TD>UDF7</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf7();?></TD>
					</TR>
					<TR>
						<TD>UDF8</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf8();?></TD>
					</TR>
					<TR>
						<TD>UDF9</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf9();?></TD>
					</TR>
					<TR>
						<TD>UDF10</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf10();?></TD>
					</TR>
					<TR>
						<TD>UDF11</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf11();?></TD>
					</TR>
					<TR>
						<TD>UDF12</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf12();?></TD>
					</TR>
					<TR>
						<TD>UDF13</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf13();?></TD>
					</TR>
					<TR>
						<TD>UDF14</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf14();?></TD>
					</TR>
					<TR>
						<TD>UDF15</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getUdf15();?></TD>
					</TR>
					<TR>
						<TD>Payment ID</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getPaymentId();?></TD>
					</TR>
					<TR>
						<TD>Customer ID :</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getcustId();?></TD>
					</TR>
					<TR>
						<TD>ErrorText</TD>
						<TD>&nbsp;&nbsp;<?php echo $myObj->getError();?></TD>
					</TR>
				<?php 
				} ?>
		</table>
	</BODY>
</HTML>