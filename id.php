
 <!DOCTYPE html>
 <html>
 <head>
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 	

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<title>Enter PUBG ID</title>
 	<style type="text/css">
 		body {
  margin: 100px 0 0 0;
  text-align: center;
}
p {
  margin: 20px 0 20px 0;
  padding: 20px 0 20px 0;
}

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 40px;
margin-left: 10px;
margin-top: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
 	</style>
 </head>
 <body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div id="no" class="card">
			<div  class="card-header">
				<h3>Join The Team</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i style="height: 50px; width: 50px;" class="fab fa-facebook-square"></i></span>
					<span><i style="height: 50px; width: 50px;" class="fab fa-google-plus-square"></i></span>
					<span><i style="height: 50px; width: 50px;" class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div  class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input id="txtPassportNumber" onkeyup="EnableDisable(this)" class="inp form-control" type="number" placeholder="Enter Your Pubg ID"><br>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="text" class="form-control" placeholder="Redeem Code(optional)">
					</div>
					<div class="form-group">
						<button disabled="disabled" onclick="return bt()" id="btnSubmit"  class="subs btn float-left login_btn" type="submit">Submit</button>

					</div>

					<div class="form-group">
						<a class="btn float-right login_btn" href="Logout.php">Logout</a>
					</div>
			
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<h3 style="font-size: 20px;">Thanks For Login:)<br>Please Enter Your Valid PUBG Player ID</h3>
									</div>
				
			</div>
		</div>
	</div>
</div>	</form>
			</div>
<center>
<div style="margin-top: -50%; color: #fff; font-family: arial; display:none;" id="cet" class="container">
	<div><h1>We Are Checking Your Information:</h1>
			<h3>Please Wait!!</h3>
	</div>
	<div style="width: 50%;" class="progress">
  <div id="progressTimer" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div>
</div></center>
<script type="text/javascript">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">  
  
 
    function EnableDisable(txtPassportNumber) {
        //Reference the Button.
        var btnSubmit = document.getElementById("btnSubmit");
      
        //Verify the TextBox value.
        if (txtPassportNumber.value.trim() != "") {
            //Enable the TextBox when TextBox has value.
            btnSubmit.disabled = false;
            
        }
         else {
            //Disable the TextBox when TextBox is empty.
            btnSubmit.disabled = true;
        }

    };

    function bt(id, visibility){
    	document.getElementById("cet").style.display="block";
    		document.getElementById("no").style.display="none";
    	return false;

    }
</script>
<script>
    $("#progressTimer").progressTimer({
        timeLimit: 20,
        warningThreshold: 10,
        baseStyle: 'progress-bar-warning',
        warningStyle: 'progress-bar-danger',
        completeStyle: 'progress-bar-info',
        onFinish: function() {
            console.log("I'm done");
        }
    });
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $("#btnSubmit").click(function () {
        var seconds = 3;
        setInterval(function () {
            seconds--;
            $("#lblCount").html(seconds);
            if (seconds == 0) {
                $("#dvCountDown").hide();
                window.location = "choose.php";
            }
        }, 1000);
    });
});
</script>
</body>
 </html>