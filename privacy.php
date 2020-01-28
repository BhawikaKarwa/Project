<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Privacy :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Privacy Policy</li>
     </ul>
   </div>
   <div class="terms_1">
	    <h3>Our Commitment to Privacy</h3>	
	    <ul class="feature_list">
			<li><a href="#">1. Our Privacy Policy was developed as an extension of our commitment to combine the highest-quality products and services with the highest level of integrity in dealing with our clients and partners. </a></li>
			<li><a href="#">2. The Policy is designed to assist you in understanding how we collect, use and safeguard the personal information you provide to us and to assist you in making informed decisions when using. our site and our products and services. </a></li>
			<li><a href="#">3. This statement will be continuously assessed against new technologies, business practices and our customers' needs.</a></li>
			
		</ul>
	    <h5>How Do We Use the Information That You Provide to Us? </h5>   
	    <ul class="feature_list feature_list1">
			<li><a href="#">1. we use personal information for purposes of administering our business activities, providing customer service and making available other products and services to our customers and prospective customers.
</a></li>
			<li><a href="#">2.  we may also use the information we collect to notify you about important changes to our Web site, new services and special offers we think you will find valuable. The lists used to send you product and service offers are developed and managed under our traditional corporate standards designed to safeguard the security and privacy of our customers’ personal information.
</a></li>
			<li><a href="#">3. As a customer, you will be given the opportunity, through our website, to notify us of your desire not to receive these offers.</a></li>
			
		</ul>
		<h5>What Information Do We Collect? </h5>   
	    <ul class="feature_list feature_list1">
			<li><a href="#">1. Personal information you knowingly choose to disclose that is collected on an individual basis.
</a></li>
			<li><a href="#">2.  Web site use information collected on an aggregate basis as you and others browse our Web site.
			
		</ul>
     </div>
   </div>
</div>


<?php include_once("footer.php");?>
