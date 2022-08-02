<html>
<HEAD>
<title>Canon - Tranportal</title>
</HEAD>
<LINK href="css/main.css" type=text/css rel=stylesheet>
<BODY class="bg">
<SCRIPT LANGUAGE="JAVASCRIPT">
function trandetail(form){
	
	
if(document.form1.udf5.value == "PaymentID"){
document.getElementById('tran').style.display='none';
document.getElementById('track').style.display='none';
document.getElementById('pymt').style.display='';
document.getElementById('text').style.display='';
}
else if(document.form1.udf5.value == "TrackID"){
document.getElementById('pymt').style.display='none';
document.getElementById('tran').style.display='none';
document.getElementById('track').style.display='';
document.getElementById('text').style.display='';

}
else if(document.form1.udf5.value == "TRANID"){
document.getElementById('tran').style.display='';
document.getElementById('text').style.display='';
document.getElementById('pymt').style.display='none';
document.getElementById('track').style.display='none';
}
else if(document.form1.udf5.value == "Select"){
document.getElementById('tran').style.display='none';
document.getElementById('text').style.display='none';
document.getElementById('pymt').style.display='none';
document.getElementById('track').style.display='none';
}
}
</SCRIPT>
<table width="100%" height="100%" cellpadding="1" cellspacing="1">
	
	<!--  BODY -->
	<tr>
		<td>
			<DIV align="center">
  <font size=5>Tranportal http transaction</font>
</DIV>
<CENTER>
<P>
<FONT size="5"><B>Transaction Details</B></FONT>
<FORM name="form1" ACTION="TranPipeBuyHttp.php" METHOD="POST">
<TABLE align=center border=0  bordercolor=black><tr><td>
<TABLE align=center border=1  bordercolor=black>
	<tr>
		<td width="40%">Action Type</td>
		<td>
			<select name="action" class="select">
			<option value="1"> 1 - Purchase </option> 
			<option value="2"> 2 - Credit  </option> 
            <option value="3"> 3 - Void Purchase </option> 
	        <option value="4"> 4 - Authorization </option> 
			<option value="5"> 5 - Capture   </option> 
			<option value="6"> 6 - Void Credit </option> 
			<option value="7"> 7 - Void Capture </option> 
			<option value="8"> 8 - Inquiry </option> 
			<option value="9"> 9 - Void Authorization </option> 
			</select>
		</td>
    </tr>

   <tr>
		<td>Card Number:</td>
		<td><input size="20" type="text" name="pan" value=""></td>
	</tr>

	<tr>
		<td>Amount:</td>
		<td><input size="20" type="text" name="AMOUNT" value=""></td>
	</tr>
	
	<tr>
		<td>CVV:</td>
		<td><input size="3" type="text" name="cvv" maxlength=4 value=""></td>
	</tr> 


	<tr>
		<td>Expiry Month &amp; Year</td>
		<td>
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
			<option value="12">12</option> 
			<option value="11" selected>11</option> 
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
		</td></tr>
		<tr>
		<td>Cardholder's Name</td>
		<td><input size="20" type="text" name="name" value="Test"></td>
		</tr>
		<tr>
			<td width="40%">Transaction ID</td>
			<td><input size="20" type="text" name="comment"></td>
		</tr>
		<tr>
			<td width="40%">UDF1</td>
			<td><input size="20" type="text" name="udf1"></td>
		</tr>
		<tr>
			<td width="40%">UDF2</td>
			<td><input size="20" type="text" name="udf2"></td>
		</tr>
		<tr>
			<td width="40%">UDF3</td>
			<td><input size="20" type="text" name="udf3"></td>
		</tr>
		<tr>
			<td width="40%">UDF4</td>
			<td><input size="20" type="text" name="udf4"></td>
		</tr>
		<tr>
			<td width="40%">UDF5</td>
			<td>
				<select class="select" name="udf5" onchange="trandetail(this.value)"; >
			<option value="User defined value 5">Udf5</option>
			<option value="PaymentID">PaymentID</option> 
			<option value="TrackID">Merchant Track ID</option> 
			<option value="TRANID">Transaction ID</option> 
			</select>
			</td>
		</tr>
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
		<tr>
			<TD  id="pymt" class="text1" style="display: none;" >Payment ID</TD>
			<TD  id="track" class="text1" style="display: none;" >Merchant Track ID</TD>
			<TD  id="tran" class="text1" style="display: none;" >Transaction ID</TD>
			<TD  id="text" class="text1" style="display: none;"><input  class="tBox-medium" size="20" type="text" name="comment" ></TD>
			
		</tr>
		<tr>
			<td width="40%">Track ID</td>
			<td><input size="20" type="text" name="trckId" value="<?php echo substr(number_format(time() * rand(),0,'',''),0,10);?>"></td>
		</tr>
		<tr>
			<td width="40%">Customer ID</td>
			<td><input size="20" type="text" name="custId" value=""></td>
		</tr>
		<tr>
			<td>Select Type</td>
			<td>
				<select id="transacType" name="transacType">
				
					<option selected="selected" value="D">D</option>
					<option  value="C">C</option>
					<option  value="C">V</option>
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

<tr>
		<td></td>
		<td><input type="Submit" value="Buy"></td>
	</tr></table>
<P>
</FORM>
</CENTER>
		</td>
	</tr>
	
</table>

</BODY>

</html>