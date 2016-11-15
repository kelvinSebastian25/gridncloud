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
			<h1>Friends</h1>
		</div>
		<div data-role="content">
			<ul data-role="listview" data-filter="true" data-filter-placeholder="Search">
				<li data-role="list-divider" data-theme="b">A</li>
				<li><a href="ali.php?1">Ali</a></li>
				<li><a href="#">Aina</a></li>

				<li data-role="list-divider" data-theme="b">B</li>
				<li><a href="#">Bali</a></li>
				<li><a href="#">Baina</a></li>

				<li data-role="list-divider" data-theme="b">C</li>
				<li><a href="#">Cali</a></li>
				<li><a href="#">Caina</a></li>

				<li data-role="list-divider" data-theme="b">D</li>
				<li><a href="#">Dali</a></li>
				<li><a href="#">Daina</a></li>

				<li data-role="list-divider" data-theme="b">E</li>
				<li><a href="#">Eli</a></li>
				<li><a href="#">Eina</a></li>
			</ul>
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