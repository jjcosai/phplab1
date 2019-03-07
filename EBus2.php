<?php
session_start();
$fullNameValue= "";
$totalValue2 = "";
$phonenum = "";
$email = "";
/*
 * Create a session variable for the mobile number
 */
@$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = @$fullNameValue;
$_SESSION['txtTotal'] = @$totalValue2;
$_SESSION['txtNum'] = @$Phonenum;
$_SESSION['txtEmail'] = @$email;
/* 
 * Allocate the mobile number session variable to a text box
 */ 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        <style>
             body{
                 
                background-color: rgb(277,210,111);
                background-image: url(cityscapesilhouette.jpg);
                     
                
            }
                       .button {
  background-color: #Bf211E;
  border: none;
  color: #070707;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family: Times, serif;
  font-weight: Bold;
        </style>
    </head>
    
    <body style="background-image: url(cityscapesilhouette.jpg);">
        <div class="form">
            <form name="Details" method="post" action="Ebus3.php">
                <center>
                    <br><br><br><br><br><br>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td style="background-color: #Bf211E;"><b>Enter in your details below</b></td>
                        </tr>
                        
                            <td style="background-color: #Bf211E;">Name</td>
                            <td><input type="text" id="txtName" name="txtName"  value="" /></td>
                        
                        <tr>
                            <td style="background-color: #Bf211E;">Phone Number</td>
                            <td><input  type="number" id="txtNum" name="txtNum" value="" /></td>
                        </tr>
                        <tr>
                            <td style="background-color: #Bf211E;">Email</td>
                            <td><input  type="email" id="txtEmail" name="txtEmail" value="" /></td>
                        </tr>
                         <tr>
                            <td style="background-color: #Bf211E;">Password</td>
                            <td><input  type="password" id="txtPassword" name="txtPassword" value="" /></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                            
                    </table>
                </center>
                <center>   
                <input style="background-color: #Bf211E;" class="button" type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                <center>
                    </div>
        
            </form>
        </div>
    </body>
</html>

