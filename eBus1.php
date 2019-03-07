<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
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
  
            td {
               
                font-family: Times, serif;
                color: rgb(37,38,39);
                font-size: 20px
                
            }
           
        </style>
    </head>
        <body>
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
        <h1 style="text-align:center;background-color: #Bf211E;">Shop Calculator</h1>    
        <hr/>
        <center>
            <table cellspacing="5">
                <tr>
                    <td style="color:black; font-size:50px; background-color: #Bf211E;"><b>Consulting Service</b></td> 
                </tr>
                <tr>
                    <td style="background-color: #Bf211E;">BlockChain</td>
                    <td><input type="radio" id="CocaCola" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td style="background-color: #Bf211E;">Autonomous Things</td>
                    <td><input type="radio" id="Sprite" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td style="background-color: #Bf211E;">Immersive Experience</td>
                    <td><input type="radio" id="Fanta" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="5">
            <tr>
                    <td><b></b></td>
                    <td style="background-color: #Bf211E;"><b>Amount</b></td>
            </tr>
                <tr>
                    <td style="background-color: #Bf211E;">Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td style="background-color: #Bf211E;">Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td style="background-color: #Bf211E;">+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td style="background-color: #Bf211E;">Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
            <input class="button" type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input class="button" type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input class="button" type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var CocaCola = parseFloat(document.getElementById('CocaCola').value);
                    var Sprite = parseFloat(document.getElementById('Sprite').value);
                    var Fanta = parseFloat(document.getElementById('Fanta').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('CocaCola').checked) {
                        document.intCalc.txtSubTot.value = CocaCola;
                        subAmount = CocaCola;
                        calculation(subAmount);
                        
                    }
                   else if (document.getElementById('Sprite').checked) {
                        document.intCalc.txtSubTot.value = Sprite;
                        subAmount = Sprite;
                        calculation(subAmount);
                        
                    }
                    else if (document.getElementById('Fanta').checked) {
                        document.intCalc.txtSubTot.value = Fanta;
                        subAmount = Fanta;
                        calculation(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
  
    </html>
