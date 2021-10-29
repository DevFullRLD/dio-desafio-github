<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Último Gole | Bebidas? Xáconóis!</title>
<link rel="shortcut icon" type="image/x-icon" href="img/fav.ico"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
</head>
<div class="js">
<body>
  <!-- Preloader section -->
<div id="preloader"></div>
 <!-- Preloader section -->
<div class="container"> 
  <!-- AccessBox section -->
  <div id="accessbox"class="animated bounceInDown"> <img class="profile-img" src="img/logo.png" width="72px"/>
    <h2 class="text-center" style="color: aliceblue;">Por favor, entre com sua data de nascimento</h2>
    <!-- Form section-->
    <form action="php/access.php" method="post" class="access-form">
	  <input type="text" name="dd" class="access-input" placeholder="DD" required autofocus>
	  <input type="text" name="mm" class="access-input" placeholder="MM" required>
      <input type="text" name="yy" class="access-input-lg" placeholder="AAAA" required>
      <input type="submit" name="submit" class="access-btn" value="OK" >
      <div id="remember" class="checkbox text-center">
        <label class="text-center" style="color: aliceblue;">
          <input type="checkbox" value="remember-me">
          Lembrar-me</label>
      </div>
    </form>
    <!-- Form section-->
    <h1 class="text-center"><i class="glyphicon glyphicon-warning-sign"></i>  Site destinado somente a maiores de idade</h1>
  </div>
  <!-- AccessBox section --> 
</div>
<!-- /container --> 
<!-- JS files--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Pre Loader--> 
<script type="text/javascript">
jQuery(document).ready(function($) {  

$(window).load(function(){
	$('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});
</script>
</body>
</div>
</html>