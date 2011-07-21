<!doctype html>
<!-- Explanation: http://www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->
<html dir="ltr" lang="en">
<head>
	<title></title>
   <meta charset="utf-8">
   <meta name="author" content="Storm Creative" />
	<link rel="stylesheet" media="screen" href="../Assets/Styles/admin.css" />
   <!--[if IE 8]>
   <link rel="stylesheet" media="screen" href="../Assets/Styles/admin-IE8.css" />
   <![endif]-->
   <!--[if IE 7]>
   <link rel="stylesheet" media="screen" href="../Assets/Styles/admin-IE7.css" />
   <![endif]-->
   <!--[if IE 6]>
   <link rel="stylesheet" media="screen" href="../Assets/Styles/admin-IE6.css" />
   <![endif]-->
</head>
<?php flush(); ?>
<body>
	<!-- IE6 Check -->
	<?php require '../Assets/Includes/IE6.php'; ?>
   <div id="container">
      <!-- HEADER -->
      <?php include 'Includes/Header-Login.php'; ?>  
      <!-- CONTENT -->       
      <div id="body">
         <div class="content">
            <form id="login" action="blank.php">
               <div class="ie">
                  <p class="title">Admin Login</p>
                  <table align="center">
                     <tr>
                        <td><label for="username">Username</label></td>
                        <td><input type="text" id="username"></td>
                     </tr>
                     <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" id="password"></td>
                     </tr>
                     <tr>
                        <td align="right" colspan="2"><a href="#">Forgotten your Password?</a></td>
                     </tr>
                     <tr>
                        <td align="right" colspan="2">Remember Me <input type="checkbox"></td>
                     </tr>
                  </table>
                  <p><input type="submit" id="login-button" value="Login"></p>
               </div>
            </form>
         </div>
      </div>
      <?php flush(); ?>
      <!-- FOOTER -->
      <?php include 'Includes/Footer.php'; ?>
   </div>
</body>
</html>