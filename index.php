<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<!--<meta name="viewport" content="user-scalable=false;">
	<meta name="viewport" content="user-scalable=no">
	<meta name="viewport" content="user-scalable=0">
	<meta name="viewport" content="width=device-width, user-scalable=-1;" />
	<meta name="viewport" user-scalable="0;" />
	<meta name="viewport" content="maximum-scale=1.0, user-scalable=2.0;" />
	<meta name="viewport" content="maximum-scale=3.0, user-scalable=3;"/>-->

	<title>Bienvenido a aitv</title>

	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/datepicker.css" type="text/css">
	<link href="images/bootstrap-glyphicons-master/css/bootstrap.icon-large.min.css" rel="stylesheet">
	
	<!--DEVICES RESOLUTIONS STYLES****-->
	<!--<link rel="stylesheet" media="all and (orientation:portrait)" href="css/css/styleAitvPortrait.min.css" type="text/css">-->
	<link rel="stylesheet" href="css/styles/css/aitvStyles.min.css" type="text/css">
	<!--END DEVICES RESOLUTIONS STYLES-->

</head>


<body>

	<?php include'inc/navSection.php'; ?>

	<?php include'inc/principalSection.php'; ?>

	<?php include'inc/fullSection.php'; ?>
			
	<?php include'inc/formSection.php'; ?>

	<?php include'inc/testimonioSection.php'; ?>

	<?php include'inc/footerSection.php'; ?>




	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$(document).ready(function(){
						$('a[href^="#"]').on('click',function (e) {
				   		 e.preventDefault();

				    var target = this.hash;
				    var $target = $(target);

				    $('html, body').stop().animate({
				        'scrollTop': $target.offset().top
				    }, 900, 'swing', function () {
				        window.location.hash = target;
				    });
				});
			});
	</script>

	<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        

            /*::::::::::::::::::::::::::::::::*/

            $(function () {
				  $('[data-toggle="tooltip"]').tooltip()
				})

 	</script>
	
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/angular.min.js" type="text/javascript"></script>	
	<script src="js/scriptAngularAitv.js"></script>
</body>
</html>