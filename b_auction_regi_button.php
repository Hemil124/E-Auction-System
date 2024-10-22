<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="submit" value="Interested" name="btninterested" />
        </form> 
        <?php
        // put your code here
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            first chech user is login or not   if login so open auction regi page!!!!!!
            if (isset($_POST['btninterested'])) {
                header("location:b_auction_registration.php");
            }
        }
      
        ?>
    </body>
</html>
