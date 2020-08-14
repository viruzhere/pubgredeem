<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
	<title>Choose!!</title>
	<style type="text/css">
		body{
			text-align: center;
			justify-content: center;
			align-items: center;
			margin-top: 10%;
			background-color: #e8af89;
			font-family: 'Work Sans', sans-serif;
			overflow: hidden;
			}
			.button,.button1{
				display: inline-block;
				width: 120px;
				height: 40px;
				border: 2px solid #fff;
				color: #fff;
				font-size: 15px;
				font-weight: bold;
				text-transform: uppercase;
				text-align: center;
				text-decoration: none;
				line-height: 30px;
				box-sizing: border-box;
				border-radius: 50px;
				background-color: transparent;
				outline: none;
				transition: all ease 0.5s;
			}
			button:hover{
				background-color: #fff;
				color: #e8af89;
			}
			.active{
				font-size: 0;
				width: 50px;
				height: 50px;
				border-radius: 50%;
				border-left-color: transparent;
				animation: rotate 0.5s ease 0.5s infinite;

			}
			@keyframes rotate{
				0%{
					transform: rotate(360deg);
				}
			}
			
	</style>
</head>
<body>
<h2>Choose What You Want!!</h2>

<button class="button">Earn</button><br><br>
<button class="button1">Spin</button>

<p>If You Want To Earn BP ,UC ,Silver Fragment so Click ON Earn Button</p>
<p>If you Want to Eanr Legendary Outfit, Glaciar M416 etc.., So click On Spin</p>
<script type="text/javascript">
	$(document).ready(function(){
		$(".button1").click(function(){
			$(this).addClass("active");

			setTimeout(function(){
				 window.location.href = "spin.php";

			}, 3000);
		});
	});
</script>
</body>
</html>