<?php
session_start();
include ('conn.php');
 if (isset($_POST['username'],$_POST['password']))
               {
                $username=$_POST['username'];
                $password=$_POST['password'];
                $pass=sha1($password);
                                      
                $login="select * from advisor where username='".$username."' and password ='".$pass."'";
                $result=mysqli_query($con,$login); 
                    if($row=mysqli_fetch_array($result)){
                         $_SESSION['logged_in']='true';
                         $_SESSION['user']='advisor';
                         $_SESSION['id']=$row['id'];
                         $_SESSION['username']=$row['username'];
                         $_SESSION['firstname'] = $row['firstname'];
                         $_SESSION['lastname'] = $row['lastname'];
                         header('location:advisor/select_program.php');
                         exit();
                    } 
                   

                    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head><title>LOG-IN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }


    </script>
</head>
<body><!-- HEADER-->
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-register rlp">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table"><a href="#"><h1>ADVISOR LOG-IN</h1></a>

                                <div>&nbsp</div>
                                <form action="adv_login.php" method="POST" > 
                                    <table align="center">
                                        <tr>
                                            <td style="color:#23527C"> Username: &nbsp&nbsp&nbsp</td>
                                            <td>  <input type="text" name="username" placeholder="Username" required oninvalid="setCustomValidity('Please enter username')" oninput="setCustomValidity('')"/></td>
                                        </tr>
                                        <tr>
                                             <td>&nbsp</td>
                                             <td>&nbsp</td>
                                        </tr>   
                                        <tr>
                                             <td style="color:#23527C">Password: &nbsp&nbsp&nbsp</td>
                                             <td> <input type="password" name="password" placeholder="Password" required oninvalid="setCustomValidity('Please enter password')" oninput="setCustomValidity('')"/></td>
                                        </tr>
                                        <tr>
                                             <td>&nbsp</td>
                                             <td>&nbsp</td>
                                        </tr>    
                                        <tr>
                                            <td colspan="2" align="center"><input type="submit" class="btn btn-green" value="Log-In"/></td>
                                        </tr>
                                    </table> 
                                </form>
								
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer></footer>

<!-- LOADING--><!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
}</script>
<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE--></body>
</html>