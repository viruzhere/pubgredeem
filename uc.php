<!DOCTYPE html>
<html>
<head>
	<title>Choose What You Want!!</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">

	body{
		padding: 0;
		margin: 0;
		font-family: 'Chakra Petch', sans-serif;
		text-align: center;
    background-color: #6fabe3;  
	}
    .subsa{
      padding: 10px 30px;
      margin: 10px;
      background-color: #fff;
      color: #6fabe3;
      border: none;
      outline: none;
    }
    .subsa:hover{
     border: none;
      outline: none;
      background-color: #407cd6;
      color: #fff;
    }
	.im{
		height: 150px;
		width: 150px;
	}
	.al{
		padding: 10px 30px;
		margin-top: 20px;
		color: #000;
		border-radius: 50px;

	}
// Base Colors
$shade-10: #2c3e50 !default;
$shade-1: #d7dcdf !default;
$shade-0: #fff !default;
$teal: #1abc9c !default;

// Reset
* {
  &,
  &:before,
  &:after {
    box-sizing: border-box;
  }
}

body {
  font-family: sans-serif;
  padding: 60px 20px;
  
  @media (min-width: 600px) {
    padding: 60px;
  }
}

.range-slider {
  margin: 60px 0 0 0%;
}


// Range Slider
$range-width: 100% !default;

$range-handle-color: $shade-10 !default;
$range-handle-color-hover: $teal !default;
$range-handle-size: 20px !default;

$range-track-color: $shade-1 !default;
$range-track-height: 10px !default;

$range-label-color: $shade-10 !default;
$range-label-width: 60px !default;

.range-slider {
  width: $range-width;
}

.range-slider__range {
  -webkit-appearance: none;
  width: calc(100% - (#{$range-label-width + 200px}));
  height: $range-track-height;
  border-radius: 5px;
  background: $range-track-color;
  outline: none;
  padding: 0;
  margin: 0;

  // Range Handle
  &::-webkit-slider-thumb {
    appearance: none;
    width: $range-handle-size;
    height: $range-handle-size;
    border-radius: 50%;
    background: $range-handle-color;
    cursor: pointer;
    transition: background .15s ease-in-out;

    &:hover {
      background: $range-handle-color-hover;
    }
  }

  &:active::-webkit-slider-thumb {
    background: $range-handle-color-hover;
  }

  &::-moz-range-thumb {
    width: $range-handle-size;
    height: $range-handle-size;
    border: 0;
    border-radius: 50%;
    background: $range-handle-color;
    cursor: pointer;
    transition: background .15s ease-in-out;

    &:hover {
      background: $range-handle-color-hover;
    }
  }

  &:active::-moz-range-thumb {
    background: $range-handle-color-hover;
  }
  
  // Focus state
  &:focus {
    
    &::-webkit-slider-thumb {
      box-shadow: 0 0 0 3px $shade-0,
                  0 0 0 6px $teal;
    }
  }
}


// Range Label
.range-slider__value {
  display: inline-block;
  position: relative;
  width: $range-label-width;
  color: $shade-0;
  line-height: 20px;
  text-align: center;
  border-radius: 3px;
  background: $range-label-color;
  padding: 5px 10px;
  margin-left: 8px;

  &:after {
    position: absolute;
    top: 8px;
    left: -7px;
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-right: 7px solid $range-label-color;
    border-bottom: 7px solid transparent;
    content: '';
  }
}


// Firefox Overrides
::-moz-range-track {
    background: $range-track-color;
    border: 0;
}

input::-moz-focus-inner,
input::-moz-focus-outer { 
  border: 0; 
}
</style>
</head>
<body>

<div id="no" style="display: block; margin-left: 20%;" class="container">
  <div class="row">
    <div class="col-LG">
     <img class="im"  src="./img/uc.png"><br>
     <button id="btnSubmita" onclick="return bt()" style="border: none; outline: none; background-color: #bbb;" class="al" href="#">Unknown Cash (UC)</button>
   
     <div>
  	<img style="height: 300px; width: 300px;" src="./img/fuck.gif">
  </div> </div>
    <div class="col-LG">
      <img class="im"  src="./img/bp.png"><br>
      <button id="btnSubmitb" onclick="return btx()" style="border: none; outline: none; background-color:#fcff4d;" class="al" href="#">Battle Points(BP)</button>
    
     <div>
  	<img style="height: 300px; width: 300px;" src="./img/fuck.gif">
  </div></div>
    <div class="col-LG">
      
      <img class="im"  src="./img/sil.png"><br>
      <button id="btnSubmitc" onclick="return btc()" style="border: none; outline: none; background-color: #8a8a8a;" class="al" href="#">Silver Fragment</button>
    
  
  <div>
  	<img style="height: 300px; width: 300px;" src="./img/fuck.gif">
  </div>
	</div>

</div>
</div>

<div style="display: none;" id="ceta" class="container">
      <h2>Choose UC Amount</h2>
    

          <div class="range-slider">
  <input class="range-slider__range" type="range" value="0" min="0" max="200">
  <span class="range-slider__value">0</span>
</div>
         <button id="btnSubmit"  class="subsa btn float-center login_btn" type="submit">Submit</button>
        </div>
      
    </div>
  
<div style="display: none;" id="cetb" class="container">
      <h2>Choose Battle Point(BP) Amount</h2>
    

          <div class="range-slider">
  <input class="range-slider__range" type="range" value="0" min="0" max="200">
  <span class="range-slider__value">0</span>
</div>
         <button id="btnSubmit"  class="subsa btn float-center login_btn" type="submit">Submit</button>
        </div>
      
    </div>
    <div style="display: none;" id="cetc" class="container">
      <h2>Choose Silver Fragment Amount</h2>
    
 <div class="range-slider">
  <input class="range-slider__range" type="range" value="0" min="0" max="200">
  <span class="range-slider__value">0</span>
</div>
         <button id="btnSubmit"  class="subsa btn float-center login_btn" type="submit">Submit</button>
        </div>
      
    </div>






    <script type="text/javascript">  
  			
  			function bt(id,visible) {
  				
  				document.getElementById('no').style.display="none";
  				document.getElementById('ceta').style.display="block";
  				return false;
  			}
 		
   
    </script>
<script type="text/javascript">
		function btx(id,visible) {
  				
  				document.getElementById('no').style.display="none";
  				document.getElementById('cetb').style.display="block";
  				return false;
  			}
</script>
<script type="text/javascript">
		function btc(id,visible) {
  				
  				document.getElementById('no').style.display="none";
  				document.getElementById('cetc').style.display="block";
  				return false;
  			}
</script>
<script>
  // I've added annotations to make this easier to follow along at home. Good luck learning and check out my other pens if you found this useful


// First let's set the colors of our sliders
const settings={
  fill: '#1abc9c',
  background: '#d7dcdf'
}

// First find all our sliders
const sliders = document.querySelectorAll('.range-slider');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders,(slider)=>{
  // Look inside our slider for our input add an event listener
//   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider.querySelector('input').addEventListener('input', (event)=>{
    // 1. apply our value to the span
    slider.querySelector('span').innerHTML = event.target.value;
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill(slider.querySelector('input'));
});

// This function applies the fill to our sliders by using a linear gradient background
function applyFill(slider) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
  slider.style.background = bg;
}

</script>

</body>
</html>