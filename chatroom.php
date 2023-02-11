<!DOCTYPE html>
<html>
<head>
  <title>Students Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/jquery/jquery-3.3.1.min.js"></script>
	<script>
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myText div").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
<style type="text/css">
	img {
		width: 100%;
		max-height: 300px;
		height: auto;
		border-radius: 21px;
	}
	.sidenav {
    width: 30px;
    position: fixed;
    z-index: 1;
    top: 50%;
    left: 0px;
    border: 1px solid blueviolet;
    background: rgba(0, 0, 0, 0.8);
    overflow-x: hidden;
    padding: 1px 0;
  }

  .sidenav a {
    padding: 3px 0px 6px 1px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    text-shadow:  1px 1px 0px blueviolet;
    display: block;
  }

  .sidenav a:hover {
      color: blueviolet;
    text-shadow:  1px 1px 0px white;
  }

  .main {
    margin-left: 10px; 
    font-size: 28px;
    padding: 0px 10px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
</style>
</head>
<body style="background: #012">
	<div class="container">
		<div class="navbar fixed-top" style="background-color: #000;">
			<div class="Search col-auto">
				<span class="text-primary">Discussion</span>
				<input id="myInput" type="text" placeholder="Search..." class="form-control bg-transparent border-top-0 border-left-0 border-right-0 border-light">
			</div>
		</div>
		<div class="sidenav border-left-0">
		  <a href="#" class="fa fa-reply" onclick="window.history.back();"></a>
		  <a href="chatroom.php" class="fa fa-commenting-o"></a>
		  <a href="past_papers.php" class="fa fa-cloud-download"></a>
		  <a href="blogs.php" class="fa fa-file"></a>
		  <a href="challenge.php" class="fa fa-superscript"></a>
		  <a href="index.php" class="fa fa-home"></a>
		</div>
		<div class="" style=" font-family: monospace; font-weight: bolder; margin: 80px auto;">
			<div class="row" style="">
				<div class="col-md-3">
					
				</div>
				<!-- Start Discussions -->
				<div class="col-md-6">
					<div class="row" id="myText" style="background: transparent;">
						<div class="col-md-12">
							<div class="p-2 mb-2 text-left" style="width: 80%; font-size: 12px; background: rgba(0, 0, 0, 0.4); border-radius: 10px; border:1px solid blueviolet; color: whitesmoke; box-shadow: 0px 1px 3px 0px red;"><span class="text-primary font-weight-bold"><i class="fa fa-user"></i> @Jack:<br></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam<br><span class="float-left mb-2" style="font-size: 10px; font-family: cursive;">2/8/2023</span> <br>
							</div>

							<div class="p-2 mb-2 text-left" id="images" style="width: 80%; font-size: 12px; background: rgba(0, 0, 0, 0.4); border-radius: 10px; border:1px solid blueviolet; color: whitesmoke; box-shadow: 0px 1px 3px 0px red;">
								<span class="text-primary font-weight-bold">
									<i class="fa fa-user"></i> @Mr_Robot:
								</span>
								<i class="fa fa-angle-down text-danger font-weight-bold p-2 float-right btn"></i><br>
								Lets break down all the answers that we have in 3 ways: <br>
								<img src="assets/img/message.jpg" id="imga" load="lazy"> <br>
								<span class="float-left mb-2" style="font-size: 10px; font-family: cursive;">12/19/2023</span> <br>
							</div>

							<div class="p-2 mb-2 " style="width: 80%; margin-left: 60px; font-size: 12px; background: rgba(0, 0, 0, 0.3); border-radius: 10px; border:1px solid red; color: whitesmoke; box-shadow: 0px 1px 3px 0px blueviolet;">
								<span class="text-success text-right font-weight-bold"> me 
									<i class="fa fa-user-o"></i>
								</span><br> 
								<span class="p-4">"Is the sun disturbing you?" Belinda asked</span> <br>
								<span class="float-right mb-2" style="font-size: 10px; font-family: cursive;">12/19/2023            
								</span> <br> 
							</div>
							<div class="p-2 mb-2 text-left" style="width: 80%; font-size: 12px; background: rgba(0, 0, 0, 0.4); border-radius: 10px; border:1px solid blueviolet; color: whitesmoke; box-shadow: 0px 1px 3px 0px red;"><span class="text-primary font-weight-bold"><i class="fa fa-user"></i> @Mr_Robot:<br></span> TF! is that? Text me ukikamua kukua dem<br><span class="float-left mb-2" style="font-size: 10px; font-family: cursive;">12/19/2023</span> <br>
							</div>

							<div class="p-2 mb-2" style="width: 80%; margin-left: 60px; font-size: 12px; background: rgba(0, 0, 0, 0.4); border-radius: 10px; border:1px solid red; color: whitesmoke; box-shadow: 0px 1px 3px 0px blueviolet;">
								<i class="fa fa-angle-down text-danger font-weight-bold p-2 float-left btn" id="im"></i>
								<span class="text-success font-weight-bold float-right">
									me <i class="fa fa-user"></i><br>
								</span>
								<br>
								Got all the answers that <span class="text-dark">@brian</span> had asked <br>
								<span style="height: 50px; width: 100%; border: 1px solid grey; font-size: 11px;" class="p-3 mr-4 text-light btn">
									Image here Click to <a href="#" class="fa fa-eye">view</a>
								</span>
							<br><span class="float-right mb-2" style="font-size: 10px; font-family: cursive;">12/19/2023</span> <br>
							</div>

							<div class="p-2 mb-2 text-left" style="width: 80%; font-size: 12px; background: rgba(0, 0, 0, 0.4); border-radius: 10px; border:1px solid blueviolet; color: whitesmoke; box-shadow: 0px 1px 3px 0px red;"><span class="text-primary font-weight-bold"><i class="fa fa-user"></i> @Jack:<br></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam<br><span class="float-left mb-2" style="font-size: 10px; font-family: cursive;">2/8/2023</span> <br>
							</div>
						</div>
					</div>
					<div class="row fixed-bottom p-2" style="background: rgba(0, 0, 0, 0.4);">
						<div class="col-12">
							<table width="100%">
								<tr>
									<td>
										<input name="message" class="" placeholder="Comment Here!" autocomplete="off" onwaiting="width: 20%;" style="background-color: rgba(0, 0, 0, 0.5); color: white; border: 1px solid whitesmoke; border-radius: 12px; height: 50px; width: 100%">
									</td>
									<td>
										<button class="btn fa fa-telegram bg-transparent text-light" style="font-size: 28px" name=""></button>							
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<!-- End Discussions -->
				<div class="col-md-3">
					
				</div>
			</div>
		</div>
</div>
<script>
$(document).ready(function(){
	$("img").hide();
	$("#images").click(function(){
		$("img").toggle(800);
	})
});
</script>
</body>
</html>