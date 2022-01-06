<?php
session_start();
if (isset($_SESSION["user"]))
{
?>

<h1>Welcome
<?php
echo $_SESSION["user"];
?>
</h1>
<?php
}
else
{
	?>
	<script>
	alert("You must login to access this page");
	window.location="index.php";
	</script>
	<?php
	
}
?>