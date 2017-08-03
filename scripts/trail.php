<html>
	<head>
	<link rel="stylesheet" href="../includes/css/jquery.sidr.dark.css" />
		<script src="../includes/js/sidebar.js"></script>
		<script type="text/javascript" src="../includes/js/jquery.sidr.min.js"></script>
	</head>
	<body>
		
<a id="simple-menu" href="#sidr">Toggle menu</a>
 
<div id="sidr">
  <!-- Your content -->
  <ul>
    <li><a href="#">List 1</a></li>
    <li class="active"><a href="#">List 2</a></li>
    <li><a href="#">List 3</a></li>
  </ul>
</div>
 
<script>
$(document).ready(function() {
  $('#simple-menu').sidr();
});
</script>
	</body>
</html>
