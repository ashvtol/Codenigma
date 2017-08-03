<?php
echo "<h1>You have already submitted the answer this question</h1>";
echo '<script>
		$(document).ready(function () {
    window.setTimeout(function () {
        location.href = "q-index.php";
    }, 0)
	});
		</script>';
?>