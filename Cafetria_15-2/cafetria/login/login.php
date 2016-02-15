<!DOCTYPE html>
<html>
<head>



	
	<link type="text/css" rel="stylesheet" href="css/style.css"  />

<script>


	$(document).ready(function(){
 
	$("#submit1").hover(
	function() {
	$(this).animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).animate({"opacity": "1"}, "slow");
	});
 	});


</script>
	
</head>
<body>

	<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<h2>Login</h2>

			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				<form>
					<input type="text" name="link" id="url" value="E-mail Address" onclick="this.value = ''">
					
				</form>
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
				<form>
					<input type="password" name="link" id="url" value="Password" onclick="this.value = ''">
					
				</form>
				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
				<form>
				<input type="image" src="./images/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="./images/submit.png" id="submit2" value="Sign In">
				</form>
			</div>


			<div id="links_left">

			<a href="#">Forgot your Password?</a>

			</div>

		</div>

	

</body>
</html>
