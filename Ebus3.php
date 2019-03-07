<!DOCTYPE html>
<html>
    <style>
      #container {
             text-align:center;
             font-family: Times, Serif;
             font-size: 40px;
           
             
        }
       
               body{
                background-color: rgb(277,210,111);
                background-image: url(cityscapesilhouetteedit.jpg);
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
    <body>
 <!-- //Starting the session to get the session variable from the last page-->
 <div id="container">
<?php

session_start();
@$totalValue2 = @$_POST['txtTotal'];
@$fullNameValue = @$_POST['txtName'];
@$Phonenum = $_POST['txtNum'];
@$email = $_POST['txtEmail'];
echo "<br><br>";
echo "The name is : ".@$fullNameValue;
print "<br></br>";
echo "Phone Number: ".@$Phonenum;
print"<br></br>";
echo "Email: ".@$email;
echo "<br></br>";
echo "The total value is : ".@$totalValue2;
?>
     </div>
    </body>
</html>


