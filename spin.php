<!DOCTYPE html>
<html>
<head>
	
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Work+Sans:wght@300&display=swap" rel="stylesheet">

	<title>Spinner</title>
	<style type="text/css">
		body{
			height: 100vh;
			width: 100%;
			padding: 0;
			
background: rgb(0,196,196);
background: linear-gradient(0deg, rgba(0,196,196,1) 0%, rgba(255,217,135,1) 100%);
background-repeat: no-repeat;
position: relative;
animation: change 5s ease-in-out infinite;
			margin: 0;
			text-align: center;
		justify-content: center;
		font-family: 'Chilanka', cursive;
font-family: 'Work Sans', sans-serif;
		}

		.button{
			display: inline-block;
				
				border: 2px solid #fff;
				padding: 30px;
				font-size: 21px;
				
				text-transform: uppercase;
				text-align: center;
				text-decoration: none;
				line-height: 30px;
				box-sizing: border-box;
				border-radius: 100%;
				background-color: transparent;
				outline: none;
				transition: all ease 0.5s;
			
		}
.button:hover{
				background-color: #fff;
				color: #e8af89;}



				#app {
  width: 400px;
  height: 400px;
  margin: 0 auto;
  position: relative;
}

.marker {
  position: absolute;
  width: 60px;
  left: 172px;
  top: -20px;
  z-index: 2;
}

.wheel {
  width: 100%;
  height: 100%;
}



.blur {
  animation: blur 10s;
}
@keyframes change {
	0%{
		background-position: 0 50%;
	}
	50%{
		background-position: 100 0%;
	}
	100%{
		background-position: 0 50%;
	}

}
@keyframes blur {
  0% {
    filter: blur(1.5px);
  }
  80% {
    filter: blur(1.5px);
  }
  100% {
    filter: blur(0px);
  }
}


	</style>
</head>
<body>
 
<div id="hide" class="container">
	<div class="spinner">
		<h3>Spin The Wheel</h3>
		<div id="app">
      <img class="marker" src="https://1.bp.blogspot.com/-2bPGlfmm7Ak/XxVn1MeKniI/AAAAAAAAAWk/UyVQK2VO95gNTaHnB1KGWJb-9R-YAYdkACLcBGAsYHQ/s1600/marker.png" />
      <img class="wheel" src="https://1.bp.blogspot.com/-Ltg3vIHklpg/XxVn1VAeMqI/AAAAAAAAAWs/f2ifVk-NPNYyR5BLKH8zO9FWROoMsaTWACLcBGAsYHQ/s1600/wheel.png" />
  </div>
		<button id="btnSubmit" onclick="bt()" class="button">spin</button>

	</div>
</div>
<div id="show" style=" display: none;" class="container">
	<div class="cong">
		<h1 style="font-size: 50px;">Bingoo!!</h1>
		<h2>We sent your Gift in 2 working Days!! (on pubg mail box)</h2>
		<center>
		<div style="background-image: url(./img/z.gif); background-repeat: no-repeat; height: 500px; width: 500px;"></div></center>
		<p>Thanks for using our site</p>
		<p>For spin Again Refresh the page..</p>
		<p>NOTE: Don't be Greedy spin 2 or 3 time only othervise Your Account Is banned!</p>
	</div>
</div>
 
<script>
  // Immediately invoked function expression
// to not pollute the global scope
(function() {
  const wheel = document.querySelector('.wheel');
  const startButton = document.querySelector('.button');
  let deg = 0;

  startButton.addEventListener('click', () => {
    // Disable button during spin
    startButton.style.pointerEvents = 'none';
    // Calculate a new rotation between 5000 and 10 000
    deg = Math.floor(2000 + Math.random() *1000);
    // Set the transition on the wheel
    wheel.style.transition = 'all 5s ease-out';
    // Rotate the wheel
    wheel.style.transform = `rotate(${deg}deg)`;
    // Apply the blur
    wheel.classList.add('blur');
  });

  wheel.addEventListener('transitionend', () => {
    // Remove blur
    wheel.classList.remove('blur');
    // Enable button when spin is over
    startButton.style.pointerEvents = 'auto';
    // Need to set transition to none as we want to rotate instantly
    wheel.style.transition = 'none';
    // Calculate degree on a 360 degree basis to get the "natural" real rotation
    // Important because we want to start the next spin from that one
    // Use modulus to get the rest value from 360
    const actualDeg = deg % 360;
    // Set the real rotation instantly without animation
    wheel.style.transform = `rotate(${actualDeg}deg)`;
  });
})();

</script>
<script type="text/javascript">
	// after click..
	function bt(){
		setTimeout(function(){
			document.getElementById('hide').style.display="none";
		document.getElementById('show').style.display="block";	 

			}, 5000);
		
	}

</script> 

</body>
</html>