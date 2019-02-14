<?php?>
<DOCTYPE html>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<html>

<head>
    <title> Calculator </title>
    
    <script language="javascript" type="text/javascript">
        function packagetotal() {
            //Enter in prices here
            var x = 5;
            var y = 10;
            var p = x+ y *12;
            var b = y * 12;
            
            if (document.getElementById('basicProgram').checked) {
                //Basic package is checked
                document.calculator.total.value = b;
                
            } else if (document.getElementById('proProgram').checked) {
                //Pro Package is checked
                document.calculator.total.value = p;
            }
        }
       </script>
</head>

<body>
    
    <form name="Calculator">
        <br/>
        <input type="radio" name="programType" id="basicprogram" value="Basic" />Basic
        <input type="radio" name="programType" id="proprogram" value="Pro" checked />Pro
        
        <br/>
        Your total price is: <input type="text" name="total">
        
        <input type="button" value="Submit" onclick="javascript:packageTotal();"
    </form>
</body>

</html>