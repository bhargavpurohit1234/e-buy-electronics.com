<? session_start(); ?>
<html>
<head>
	
	
<script type="text/javascript">
function validateRegister(f1)
{
	var re_mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z])+$/;
	if (!f1.logonId.value.length) 
	{
	   alert("You Must Enter Username");
	   f1.logonId.focus();
	   return false;
	}
	if (!f1.logonPassword.value.length) 
	{
	   alert("You Must Enter Password");
	   f1.logonPassword.focus();
	   return false;
	}
	if (!f1.logonPasswordVerify.value.length) 
	{
	   alert("You Must Enter Verification Password");
	   f1.logonPasswordVerify.focus();
	   return false;
	}
	if(f1.logonPassword.value.length<6 && f1.logonPasswordVerify.value.length<6)
	{
		alert("Password Length Should Be Minimum 6");
		f1.logonPassword.focus();
		return false;
	}
	if(f1.logonPassword.value!=f1.logonPasswordVerify.value)
	{
		alert("Both Password Must Be Same");
		f1.logonPassword.focus();
		return false;
	}
	if (!f1.firstName.value.length) 
	{
	   alert("You Must Enter Your First Name");
	   f1.firstName.focus();
	   return false;
	}
	if (!f1.middleName.value.length) 
	{
	   alert("You Must Enter Your Middle Name");
	   f1.middleName.focus();
	   return false;
	}
	if (!f1.lastName.value.length) 
	{
	   alert("You Must Enter Your Last Name");
	   f1.lastName.focus();
	   return false;
	}
	if (!f1.Email.value.length) 
	{
	   alert("You Must Enter Your Email-id");
	   f1.Email.focus();
	   return false;
	}
	if (!re_mail.test(f1.Email.value))	
	{
			alert( "Enter Your Email-id correctly" );
			f1.Email.focus();
			return false;
	}
	if(f1.phone.value=='') 
	{
			alert("Please enter phone number.");
			f1.phone.focus();
	        return false;
	}
	var re2 = /^[0-9 _-]+$/;
	if (!re2.test(f1.phone.value)) 
	{
	   alert("Phone no. can be numeric or - only");
	   f1.phone.focus();
	   return false;
	}	
	if(f1.address.value=='') 
	{
		alert("Please enter your address.");
		f1.address.focus();
		return false;
	}	
	if(f1.city.value=='') 
	{
		alert("Please enter your city.");
		f1.city.focus();
		return false;
	}
	if(f1.state.value=='') 
	{
		alert("Please enter your state.");
		f1.state.focus();
		return false;
	}
	if(f1.country.value=='') 
	{
		alert("Please enter your country.");
		f1.country.focus();
		return false;
	}
	if(f1.zipCode.value=='') 
	{
		alert("Please enter your zipcode.");
		f1.zipCode.focus();
		return false;
	}
}

</script>
<title>New Register</title>
<link href="../Style.css" rel="stylesheet" type="text/css">
</head>

<?php include("MENU.php");?>




<FORM name="Register" id="Register" method="POST" action="submit121.php" onSubmit="return validateRegister(this);"><pre>
<font color="#FF0000" size="4">					  welcome to the registration page!
	the username, password, email, first name and last name fields are required!</font><br><br>
      <fieldset style="margin-left:10%; margin-right:10%;"><legend><font size="3" color="#0000FF">Personal Information</font></legend>
        <TABLE cellSpacing=1 cellPadding=1 align=center border=0>
          <TBODY>
             <TR> 
                <TD>Username</TD>  <td>&nbsp;:&nbsp;</td>
                <TD><input maxlength=20 size=25 name=logonId id="logonId">
                        <?php 
							if(isset($_GET['flag']) && $_GET['flag']==1)
							{
								echo "<br><FONT face=Arial size=2 color='#FF0000'>Duplicate User Name!</font>";
							}
						?></TD>
            </TR> 
			<TR> 	
               <TD>Password</TD> <td> &nbsp;:&nbsp;</td>
               <TD><INPUT type=password maxLength=20 size=25 name=logonPassword id="logonPassword"> (Minimum 6 characters.)</TD>
            </TR>
            <TR> 
               <TD>Retype Password</TD> <td> &nbsp;:&nbsp;</td>
               <TD ><INPUT type=password maxLength=20 size=25 name=logonPasswordVerify id="logonPasswordVerify"></TD>
            </TR>
            <TR> 
                    <TD>First Name</TD> <td>&nbsp;:&nbsp;</td>
                    <TD>
					   <select size=1 name=personTitle>
                        <option value=Mr. selected>Mr.</option>
                        <option value=Mrs.>Mrs.</option>
                        <option value=Ms.>Ms.</option>
                      </select> 
                      <INPUT maxLength=30 size=15 name=firstName id="firstName"> </TD>
          </TR>
          <TR> 
              <TD>Middle Name</TD> <td>&nbsp;:&nbsp;</td>
              <TD><input maxlength=59 size=25 name=middleName id="middleName"> </TD>
          </TR>
           <TR> 
                    <TD>Last Name</TD>  <td>&nbsp;:&nbsp; </td>
                    <TD><input maxlength=30 size=25 name=lastName id="lastName"> </TD>
           </TR></TBODY>
      </TABLE>
  </fieldset><BR>
		   <fieldset style="margin-left:10%; margin-right:10%;"><legend><font size="3" color="#0000FF">Contact Details</font></legend>
		   <table cellSpacing=1 cellPadding=1 align=center border=0>
                  <TR> 
                    <TD>E-Mail ID</TD>  <td>&nbsp;:&nbsp; </TD>
                    <TD><INPUT maxLength=100 size=25 name=Email id="Email">&nbsp; 	(jonacena@yahoo.com)</TD>
                  </TR>
                  <TR> 
                    <TD>Mobile/Phone No.</TD>  <td>&nbsp;:&nbsp; </TD>
                      <TD><input onKeyPress=CheckKeys();  maxlength=10 size=25 name=phone id="phone"> 
					  <!--<br>(Please give the correct  mobile no. As this would be used to keep you informed about the bid status.)</TD>-->
                  </TR>
		   </table>
  </fieldset><br>
				  <fieldset style="margin-left:10%; margin-right:10%;"><legend><font size="3" color="#0000FF">Contact Address</font></legend>
				  <table cellSpacing=1 cellPadding=1 align=center border=0>                  
				  <TR> 
                    <TD align="left">Resident Address</TD>
					<td>&nbsp;:&nbsp;</td>
                    <TD><textarea name="address" id="address"></textarea>&nbsp;(Permanent Address)</TD>
                  </TR>
                  <TR> 
                    <TD>City</TD>
					<td>&nbsp;:&nbsp;</td>
                    <TD><input type="text" maxlength="15" size=25 name="city" id="city"></TD>
                  </TR>
                  <TR> 
                    <TD>State</TD>
					<td>&nbsp;:&nbsp;</td>
                    <TD><input type=text name=state size=25 maxlength=15 id="state"></TD>                    
                  </TR>
                  <TR> 
                    <TD>Country</TD>
					<td>&nbsp;:&nbsp;</td>
                    <TD><input type="text" size=25 name="country" id="country"></TD>
                  </TR>
                  <TR> 
                    <TD>Pin</TD>
					<td>&nbsp;:&nbsp;</td>
                    <TD><INPUT onkeypress=CheckKeys();  maxLength=6 size=25 name=zipCode id="zipCode"></TD>                    
                  </TR>
                  </table>
				  </fieldset><br>
				  <fieldset style="margin-left:10%; margin-right:10%;"><legend><font size="3" color="#0000FF">More about Yourself</font></legend>
				  <table cellSpacing=1 cellPadding=2 align=center border=0>
				  <TR> 
                      <TD>Date of Birth  &nbsp;&nbsp; </TD><td>&nbsp;:&nbsp;</TD>                        
                      <TD>DD:<select name="day"> <option value=01>01</option>
                        <option value=02>02</option>
                        <option value=03>03</option>
                        <option value=04>04</option>
                        <option value=05>05</option>
                        <option 
              value=06>06</option>
                        <option value=07>07</option>
                        <option 
              value=08>08</option>
                        <option value=09>09</option>
                        <option 
              value=10>10</option>
                        <option value=11>11</option>
                        <option 
              value=12>12</option>
                        <option value=13>13</option>
                        <option 
              value=14>14</option>
                        <option value=15>15</option>
                        <option 
              value=16>16</option>
                        <option value=17>17</option>
                        <option 
              value=18>18</option>
                        <option value=19>19</option>
                        <option 
              value=20>20</option>
                        <option value=21>21</option>
                        <option 
              value=22>22</option>
                        <option value=23>23</option>
                        <option 
              value=24>24</option>
                        <option value=25>25</option>
                        <option 
              value=26>26</option>
                        <option value=27>27</option>
                        <option 
              value=28>28</option>
                        <option value=29>29</option>
                        <option 
              value=30>30</option>
                        <option value=31>31</option></select>
					  MM:<select name="month"> <OPTION value=Jan>Jan</OPTION>
                        <OPTION value=Feb>Feb</OPTION>
                        <OPTION value=Mar>Mar</OPTION>
                        <OPTION value=Apr>Apr</OPTION>
                        <OPTION value=May>May</OPTION>
                        <OPTION value=Jun>Jun</OPTION>
                        <OPTION value=Jul>Jul</OPTION>
                        <OPTION value=Aug>Aug</OPTION>
                        <OPTION value=Sep>Sep</OPTION>
                        <OPTION value=Oct>Oct</OPTION>
                        <OPTION value=Nov>Nov</OPTION>
                        <OPTION value=Dec>Dec</OPTION>
                      </SELECT>
					  YYYY:<select name="year"> <option value=1930>1930</option>
                          <option value=1931>1931</option>
                          <option value=1932>1932</option>
                          <option value=1933>1933</option>
                          <option value=1934>1934</option>
                          <option value=1935>1935</option>
                          <option value=1936>1936</option>
                          <option value=1937>1937</option>
                          <option value=1938>1938</option>
                          <option value=1939>1939</option>
                          <option value=1940>1940</option>
                          <option value=1941>1941</option>
                          <option value=1942>1942</option>
                          <option value=1943>1943</option>
                          <option value=1944>1944</option>
                          <option value=1945>1945</option>
                          <option value=1946>1946</option>
                          <option value=1947>1947</option>
                          <option value=1948>1948</option>
                          <option value=1949>1949</option>
                          <option value=1950>1950</option>
                          <option value=1951>1951</option>
                          <option value=1952>1952</option>
                          <option value=1953>1953</option>
                          <option value=1954>1954</option>
                          <option value=1955>1955</option>
                          <option value=1956>1956</option>
                          <option value=1957>1957</option>
                          <option value=1958>1958</option>
                          <option value=1959>1959</option>
                          <option value=1960>1960</option>
                          <option value=1961>1961</option>
                          <option value=1962>1962</option>
                          <option value=1963>1963</option>
                          <option value=1964>1964</option>
                          <option value=1965>1965</option>
                          <option value=1966>1966</option>
                          <option value=1967>1967</option>
                          <option value=1968>1968</option>
                          <option value=1969>1969</option>
                          <option value=1970>1970</option>
                          <option value=1971>1971</option>
                          <option value=1972>1972</option>
                          <option value=1973>1973</option>
                          <option value=1974>1974</option>
                          <option value=1975>1975</option>
                          <option value=1976>1976</option>
                          <option value=1977>1977</option>
                          <option value=1978>1978</option>
                          <option value=1979>1979</option>
                          <option value=1980>1980</option>
                          <option value=1981>1981</option>
                          <option value=1982>1982</option>
                          <option value=1983>1983</option>
                          <option value=1984>1984</option>
                          <option value=1985>1985</option>
                          <option value=1986>1986</option>
                          <option value=1987>1987</option>
                          <option value=1988>1988</option>
                          <option value=1989>1989</option>
                          <option value=1990>1990</option>
                          <option value=1991>1991</option>
                          <option value=1992>1992</option>
                          <option value=1993>1993</option>
                          <option value=1994>1994</option>
                          <option value=1995>1995</option>
                          <option value=1996>1996</option>
                          <option value=1997>1997</option>
                          <option value=1998>1998</option>
                          <option value=1999>1999</option>
                          <option value=2000>2000</option>
                          <option value=2001>2001</option>
                        </select><input type="hidden" name="dob"></TD>
                  </TR>
                  <TR> 
            		  <td>Gender</td><td>&nbsp;:&nbsp;</td> 
                      <TD><select name=gender id="gender">
                          <option value=0 
              selected>Select</option>
                          <option value=Male>Male</option>
                          <option 
              value=F>Female</option>
                        </select> </TD>
                  </TR>
                  <TR> 
                    <TD>Education &nbsp;&nbsp; </TD><td>&nbsp;:&nbsp;</td>
                    <TD><select name=education>
                        <option value=0 selected>Select</option>              
                        <option value="Graduated/Post Graduate - Professional">Graduated/Post Graduate - Professional</option>                                      
                        <option value="Graduated / Post Graduated">Graduated / Post Graduated</option>              
                        <option value=College>College</option>
                        <option value="SSC / HSC">SSC / HSC</option>              
                        <option value="School 5 - 9 Years&nbsp;:&nbsp;">School 5 - 9 Years&nbsp;:&nbsp;</option>              
                      </select></TD>
                  </TR>
                  <TR> 
                    <TD>Occupation / Industry</TD> <td>&nbsp;:&nbsp;</td>
                    <TD><SELECT name=occupation>
                        <OPTION value=0 selected>Select</OPTION>              
                        <OPTION value="Officer / Senior Executive">Officer / Senior Executive</OPTION>               
                        <OPTION value="Officer / Executive Middle">Officer / Executive Middle</OPTION>              
                        <OPTION value="Officer / Executive Junior">Officer / Executive Junior</OPTION>                        
                        <OPTION value="Software Professional">Software Professional</OPTION>              
                        <OPTION value="Suprevisor">Suprevisor</OPTION>
                        <OPTION value="Clerical / Sales Person">Clerical / Sales Person</OPTION>              
                        <OPTION value="Self Employed Professional">Self Employed Professional</OPTION>                        
                        <OPTION value="Business Industiralist with over 10+ Employees">Business Industiralist with over 10+ Employees</OPTION>                                      
                        <OPTION value="Businessmen with 1-9 Employees">Businessmen with 1-9 Employees</OPTION>              
                        <OPTION value="Shopowner:">Shopowner&nbsp;:&nbsp;</OPTION>            
                      </SELECT> </TD>
                  </TR></table></fieldset><br>
				  
      <TABLE cellSpacing=0 cellPadding=0 align=center border=0>        
        <TR>
            <TD align=middle><input type=submit value=Submit name="Submit"> 
               &nbsp;&nbsp;&nbsp; <input name="reset" type=reset value=Reset>
		  </TD>
        </TR>
	  </TABLE>
  </tr>
 
</table>
</form>

</center>
<br>
<br>

<table align="center">
<tr>
	<td><font face="monospace" size="3" color="#FF0000"><b>Copyright © 2009 E-Buy Electronics Private  Limited. All rights reserved.</td>
</tr>
</table>
</body>
</html>