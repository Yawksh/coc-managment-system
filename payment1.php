
<?php
$_SESSION['ORDER_ID']="";
$_SESSION['FGT']="";
	$ord=$_SESSION['ORDER_ID'];
	$fgt=$_SESSION['FGT'];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Web based kebele management system</title>
<style>
	h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     {
	font-family:Verdana,Arial,sans-serif;
	font-size:11px;
	color:#08185A;
	background-color: #FFFFFF;
}
	th 		 { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
	td 		 { font-size:12px;background:#DDE8F3}
	.pageTitle { font-size:24px;}
.style2 {color: #FFFFFF}
a:link {
	color: #FFFFFF;
}
body,td,th {
	color: #003399;
}
.style10 {color: #FFFFFF; font-style: italic; }
.style11 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;}
</style>
</head>
<script language="JavaScript">
function validate(){
	
	var frm = document.frmTransaction;
	var aName = Array();
	aName['account_id'] = 'Account ID';
	aName['reference_no'] = 'Reference No';
	aName['amount'] = 'Amount';
	aName['description'] = 'Description';
	aName['name'] = 'Billing Name';
	aName['address'] = 'Billing Address';
	aName['city'] = 'Billing City';
	aName['state'] = 'Billing State';
	aName['postal_code'] = 'Billing Postal Code';
	aName['country'] = 'Billing Country';
	aName['email'] = 'Billing Email';
	aName['phone'] = 'Billing Phone Number';
	aName['ship_name']='Shipping Name';
	aName['ship_address']='Shipping Address';
	aName['ship_city']='Shipping City';
	aName['ship_state']='Shipping State';
	aName['ship_postal_code']='Shipping Postal code';
	aName['ship_country']='Shipping Country';
	aName['ship_phone']='Shipping Phone';
	aName['return_url']='http://resume2naukri.com/response.php?DR={DR}';
	

	for(var i = 0; i < frm.elements.length ; i++){
		if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="Select Country")){
						if((frm.elements[i].name=='country')||(frm.elements[i].name=="ship_country"))
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			if(frm.elements[i].name=='account_id'){
			
			if(!validateNumeric(frm.elements[i].value)){
					alert("Account Id must be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}
			
			if(frm.elements[i].name=='amount'){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Amount should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}
			if((frm.elements[i].name=='postal_code')||(frm.elements[i].name == 'ship_postal_code'))
			{
			if(!validateNumeric(frm.elements[i].value)){
					alert("Postal code should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}	
			
			if((frm.elements[i].name=='phone')||(frm.elements[i].name =='ship_phone')){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Enter a Valid CONTACT NUMBER");
			frm.elements[i].focus();
			return false;
			}
			}		
    	
    
	
		if((frm.elements[i].name == 'name')||(frm.elements[i].name == 'ship_name'))
		{
		
		if(validateNumeric(frm.elements[i].value)){
					alert("Enter your Name");
			frm.elements[i].focus();
			return false;
			}
		}
		
				
		if(frm.elements[i].name=='ship_postal_code'){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Postal code should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}		
    
			
							
		if(frm.elements[i].name == 'email'){
				if(!validateEmail(frm.elements[i].value)){
					alert("Invalid input for " + aName[frm.elements[i].name]);
					frm.elements[i].focus();
					return false;
				}		
			}
			
	}  
	return true;
}

	function validateNumeric(numValue){
		if (!numValue.toString().match(/^[-]?\d*\.?\d*$/)) 
				return false;
		return true;		
	}

function validateEmail(email) {
    //Validating the email field
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//"
    if (! email.match(re)) {
        return (false);
    }
    return(true);
}


Array.prototype.inArray = function (value)
// Returns true if the passed value is found in the
// array.  Returns false if it is not.
{
    var i;
    for (i=0; i < this.length; i++) {
        // Matches identical (===), not just similar (==).
        if (this[i] === value) {
            return true;
        }
    }
    return false;
};

</script>
<div class="form-content">
<body>
<center>
<form  method="post" action="payment2.php" name="frmTransaction" id="frmTransaction" onSubmit="return validate()">
  <table width="600" height="600" cellpadding="6" cellspacing="6" border="0">
<div>
  
    <th colspan="2"><span class="style2">Payment FORM</span></th>
  </tr></div>
 <div> <tr>
    <td class="fieldName"><span class="error">*</span>Name</td>
    <td align="left">
	<input name="name" type="text" maxlength="255" /> </td>
  </tr></div>
  
  <div>
  <tr>
    <td class="fieldName"><span class="error">*</span>AccountNumber</td>
    <td align="left"><input name="accout" type="text" />    </td>
  </tr></div>
 <div> <tr>
    <td class="fieldName"><span class="error">*</span>password</td>
    <td align="left"><input name="password" type="password" />    </td>
  </tr></div>
 <div> <tr>
    <td class="fieldName"><span class="error">*</span>Amount</td>
    <td align="left"><input name="bb" type="text" readonly value="50" />    </td>
  </tr></div>
  <div> <tr>
    <td valign="top" align="center" colspan="2"><input name="submitted" value="submit" type="submit" />
      &nbsp;
      <input name="reset" type="reset" value="reset" />    </td>
  </tr></div>
  
    </table>
</form>
</center>
</table>
</body>
</html></div>
<!?php include("residentfooter.php");?>