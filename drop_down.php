<!DOCTYPE html>
<html>
<head>
	<title> .:: Drop Down ::. </title>

	<style type="text/css">
			
		/*ul{
			list-style: none;
			margin: 0;
			padding: 0;
			background-color: lightgreen;
		}

		ul li{
			float: left;
			display: block;
			background-color: lightgreen;
			position: relative;
		}

		li ul{
			display: none;
		}

		ul li a{
			padding: 20px;
			text-decoration: none;
			display: block;
			white-space: nowrap;
		}

		li a:hover{
			background-color: lightpink;
		}

		li:hover >ul{
			position: absolute;
			display: block;
		}

		li:hover li{
			float: none;
		}

		ul ul ul{
			position: relative;
			top: 0;
			left: 100%;
		}

		ul::after{
			clear: both;
		}

		ul::before, ul::after{
			display: block;
			display: table;
			content: " ";
		}*/



		ul{
			list-style: none;
			padding: 0;
			margin: 0;
			background-color: lightblue;
		}

		ul li {
			float: left;
			display: block;
			position: relative;
			background-color: lightblue;
		}

		li ul{
			display: none;
		}

		ul li a{
			padding: 1em;
			text-decoration: none;
			display: block;
			white-space: nowrap;
		}

		li a:hover{
			background-color: lightpink;
		}

		li:hover >ul{
			position: absolute;
			display: block;
		}

		li:hover li{
			float: none;
		}

		ul ul ul{
			position: relative;
			top: 0;
			left: 100%;
		}

		ul::after{
			clear: both;
		}

		ul::before, ul::after{
			display: block;
			content: " ";
		}








	</style>
</head>
<body>

	<ul>
		<li><a href=""> Home </a></li>
		<li><a href="#"> Basic </a>
			<ul>
				<li><a href="#"> PHP </a>
					<ul>
						<li><a href="#"> Looping & Branching </a></li>
						<li><a href="#"> HTML </a></li>
						<li><a href="#"> IDE </a></li>
						<li><a href="#"> CSS </a>
							<ul>
								<li><a href="#"> Looping & Branching </a></li>
								<li><a href="#"> HTML </a></li>
								<li><a href="#"> IDE </a>
									<ul>
										<li><a href="#"> Looping & Branching </a></li>
										<li><a href="#"> HTML </a></li>
										<li><a href="#"> IDE </a></li>
										<li><a href="#"> CSS </a></li>
									</ul>
								</li>
								<li><a href="#"> CSS </a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#"> Bootstrap </a></li>
				<li><a href="#"> JavaScrip </a></li>
				<li><a href="#"> Ajax </a></li>
			</ul>
		</li>
		<li><a href="#"> Advance </a></li>
		<li><a href="#"> About Us </a></li>
		<li><a href="#"> Contect Us </a></li>
	</ul>

</body>
</html>