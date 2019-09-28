<?php
session_start();
session_unset();
session_destroy();
echo "
		<script>
		alert('LOGOUT SUCCESSFULLY');
		window.location.href='index.php';
		</script>";
?>