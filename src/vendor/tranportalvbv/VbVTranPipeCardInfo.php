
<HTML>
<HEAD>
<TITLE>Canon - Tranportal 3D Secure</TITLE>
</HEAD>
<LINK href="css/main.css" type=text/css rel=stylesheet>
<BODY class="bg">

<table width="100%" height="100%" cellpadding="1" cellspacing="1">
	
	<!--  BODY -->
	<tr>
		<td>
			<DIV align="center">
  <font size=5>Plug-in Test Tool</font>
</DIV>



<CENTER>
<P>
<FONT size="5"><B>Transaction Details</B></FONT>
<FORM name="form1" ACTION="VbVTranPipeBuyHttp.php" METHOD="POST">
<TABLE align=center border=0  bordercolor=black><tr><td>
<TABLE align=center border=1  bordercolor=black>
	<TR>
		<TD width="40%">Action Type</TD>
		<TD>
			<select name="action" class="select">
			<option value="1"> 1 - Purchase </option> 
			<option value="4"> 4 - Authorize  </option> 
			</select>
		</TD>
    </TR>

   <TR>
		<TD >Card Number:</TD>
		<TD><input size="20" type="text" name="pan" value="4000000000000002"></TD>
	</TR>

	<TR>
		<TD >CVV:</TD>
		<TD><input size="3" type="text" name="cvv" maxlength=4 value="123"></TD>
	</TR> 
	<TR>
		<TD>Amount:</TD>
		<TD><input size="20" type="text" name="amount" value="100"></TD>
	</TR>

	<TR>
		<TD >Expiry Month &amp; Year</TD>
		<TD>
			<select class="select" name="expmm" >
			<option value="">SELECT</option>
			<option value="1">1</option> 
			<option value="2">2</option> 
			<option value="3">3</option> 
			<option value="4">4</option> 
			<option value="5">5</option> 
			<option value="6">6</option> 
			<option value="7">7</option> 
			<option value="8">8</option> 
			<option value="9">9</option> 
			<option value="10">10</option> 
			<option value="11">11</option> 
			<option value="12" selected>12</option> 
			</select>
			&nbsp;
			<select class="select" name="expyy" >
			<option value="">SELECT</option>
			<option value="2020" selected="selected" >2020</option> 
			<option value="2021">2021</option> 
			<option value="2022">2022</option> 
			<option value="2023">2023</option> 
			<option value="2024">2024</option> 
			<option value="2025">2025</option> 
			<option value="2026">2026</option> 
			<option value="2027">2027</option> 
			<option value="2028">2028</option> 
			<option value="2029">2029</option> 
			<option value="2030">2030</option> 
			</select>
		</TD></tr>
		<TR>
		<TD >Cardholder's Name</TD>
		<TD><input size="20" type="text" name="names" value="Test"></TD>
		</TR>
		<TR>
			<TD width="40%">Transaction ID</TD>
			<TD><input size="20" type="text" name="comment"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF1</TD>
			<TD><input size="20" type="text" name="udf1"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF2</TD>
			<TD><input size="20" type="text" name="udf2"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF3</TD>
			<TD><input size="20" type="text" name="udf3"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF4</TD>
			<TD><input size="20" type="text" name="udf4"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF5</TD>
			<TD>
				<select class="select" name="udf5" >
			<option value="">SELECT</option>
			<option value="PaymentID">PaymentID</option> 
			<option value="TrackID">TrackID</option> 
			<option value="SeqNum">SeqNum</option>
			<option value="HostTranID">HostTranID</option> 
			<option value="Test">Test</option>
			</select>
			</TD>
		</TR>
		
		<TR>
			<TD width="40%">UDF6</TD>
			<TD><input size="20" type="text" name="udf6"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF7</TD>
			<TD><input size="20" type="text" name="udf7"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF8</TD>
			<TD><input size="20" type="text" name="udf8"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF9</TD>
			<TD><input size="20" type="text" name="udf9"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF10</TD>
			<TD><input size="20" type="text" name="udf10"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF11</TD>
			<TD><input size="20" type="text" name="udf11"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF12</TD>
			<TD><input size="20" type="text" name="udf12"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF13</TD>
			<TD><input size="20" type="text" name="udf13"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF14</TD>
			<TD><input size="20" type="text" name="udf14"></TD>
		</TR>
		<TR>
			<TD width="40%">UDF15</TD>
			<TD><input size="20" type="text" name="udf15"></TD>
		</TR>
		<TR>
			<TD width="40%">Track ID</TD>
			<TD><input size="20" type="text" name="trckId" value="<?php echo substr(number_format(time() * rand(),0,'',''),0,10);?>"></TD>
		</TR>
		<tr>
			<td width="40%">Customer ID</td>
			<td><input size="20" type="text" name="custId" value=""></td>
		</tr>
				<tr>
			<td>Select Type</td>
			<td>
				<select id="transacType" name="transacType">
					<option value="D">D</option>
					<option selected="selected" value="C">C</option>
				</select>
			</td>
		</tr>
		<TR>
		 <td></td>
		  <TD align="left" style="text-align: left;padding-left: 0px">
		  <table border="0" width="350" height="39" align="left" style="padding-left: 0px;text-align: left">
		  <tr>
		  <td class="text1" align="left" style="padding-left: 0px;text-align: left">
		  <input type="checkbox" name="siflag" id="siflag" > &nbsp;&nbsp;I Agree to Register for Standing Instruction
		</TD>
		 </tr>
		 <tr>
		 <td style="font-size: 10px">&nbsp;&nbsp;&nbsp;&nbsp; (Cardnumber will be stored for future reference)
		 </td>
		 </tr>
		 </table>
		 </TD>
		</TR>
	</TABLE> 
	</td></tr></table>

<TABLE align=center border=0  bordercolor=black>

<TR>
		<TD ></TD>
		<TD><input type="Submit" value="Buy"></TD>
	</TR></table>
<P>
<input type=hidden name=InstituteID value="<?php echo $instituteId;?>" >
<!--<input type=hidden name=action value="1" > -->
<input type=hidden name=type value="C" >
<input type=hidden name=currcd value="356" >
<input type=hidden name=AMOUNT value="<?php echo $amt;?>" >
<input type=hidden name="name"  value="<?php echo $name;?>">
<input type=hidden name="addr1"  value="<?php echo $addr1;?>">
<input type=hidden name="addr2"  value="<?php echo $addr2;?>">
<input type=hidden name="addr3"  value="<?php echo $addr3;?>">
<input type=hidden name="city"  value="<?php echo $city;?>">
<input type=hidden name="state"  value="<?php echo $state;?>">
<input type=hidden name="country"  value="<?php echo $country;?>">
<input type=hidden name="postalcd"  value="<?php echo $postalCd;?>">

</FORM>
</CENTER>
		</td>
	</tr>
	
</table>

</BODY>

</HTML>
