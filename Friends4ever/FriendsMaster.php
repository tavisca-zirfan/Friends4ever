<html>
	<head>
		<title><?php echo $Title; ?></title>
		<?php require 'IncStyles.php';
			echo $script;
		?>
		
	</head>
	<body>
		<div id="page">
			<?php require 'Header.php';
				require 'Sidebar.php';
			?>
			<div id="main">
				<?php echo $Content; ?>
			</div>
		</div>
	</body>
</html>