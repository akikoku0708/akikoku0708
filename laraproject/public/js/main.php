<!doctype html>
<head>

<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="nmenu3.css">
 <script src="jquery-1.11.2.js"></script> 
<script src="nmenu.js"></script>

<script>

jQuery(function(){
	nmenu.init({		menuid: 'myside'	})
})

</script>

</head>

<body>




<?php



echo '<nav id="myside" class="nmenu">';
echo '<ul>';
	echo '<li>XXX';
			echo '<ul>';
					echo '<li>AAA';
					echo '</li>';
			echo '</ul>';
	echo '</li>';
echo '</ul>';
echo '</nav>';



?>






</body>

</html>


<style>

.cak{ float: left;}
.nmenu > ul{ width: 200px;height: 540px; }
.nmenu ul li > div, .nmenu ul li > ul{  padding-top:0px;  top:-2px;
  left:180px;width: 1000px;	height: 540px; 
}

</style>
