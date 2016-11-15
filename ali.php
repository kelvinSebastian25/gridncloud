<html>
<head>
	<title>Project UTS</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="JS/jquery.mobile-1.4.0.min.css"/>
	<script src="JS/jquery-1.8.3.min.js"></script>
	<script src="JS/jquery.mobile-1.4.0.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>Ali</h1>
			<button data-inline="true" data-icon="back">
				<a href="chat.php">Back</a>
			</button>	
		</div>
		<div data-role="content">
			<?php
				include("misal.php");
			?>

		</div>
		<div>
			<?php 
				echo '<form method="GET" enctipe="multipart/form-data" action="">';
				echo "<textarea cols='40' rows='1' name='1' id='1'></textarea>";
				//echo '<submit data-icon="navigation"><a href="ali.php">Send</a></submit>';
				echo '<input type="submit" value="Kirim">';
				echo '</form>';
			
				$handle = fopen("aw.txt", "a");
				foreach($_GET as $variable => $value) {
				fwrite($handle, $variable);
				fwrite($handle, "|");
				fwrite($handle, $value);
				fwrite($handle, "\r\n");
				}
				//fwrite($handle, "\r\n");
				fclose($handle);
				exit;
			?>
		</div>
		
		<div data-role="footer" class="ui-btn">
			<div data-role="navbar">
				<ul>
					<li><a href="projectuts.php" data-icon="user">Friends</a></li>
					<li><a href="chat.php" data-icon="mail">Chats</a></li>
					<li><a href="#" data-icon="power">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>