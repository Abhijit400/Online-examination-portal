<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>
<style>
	.main{
		
		
	}
	.main h1{
		font-family: "Sofia", Georgia, Serif;
		font-size: 35px;
		color:#0000FF;
	}
	.adminpanel{
		width:550px;
		color:#8B0000;
		margin:30px auto 0;
		padding:50px;
		border:2px solid #ddd;
		font-family: "Sofia", Georgia, Serif;
		font-size: 20px;
		}
</style>
<div class="main">
<h1>Admin Panel</h1>
	<div class = "adminpanel">
		<h2>Welcome to  Admin Control Panel</h2>
		<p>You can manage User and Online Exam from here.......</p>
	</div>
</div>
<?php include 'inc/footer.php'; ?>