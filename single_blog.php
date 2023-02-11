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
  <style>
    .rom {
      background: transparent;
      border: 1px solid;
      height: 30px;
      border-radius: 10px;
      padding: 4px;
      color: white;
      box-shadow: inset 1px 1px 1px red, inset -1px -1px 1px blueviolet;
    }
    .links {
        text-shadow: 0px 0px 2px white, 0px 0px 4px blueviolet;
        box-shadow: 0px 1px 1px 0 gray;
        width: 100%;
        background: rgba(0, 0, 0, 0.2);
    }
    .links:hover {
      cursor: pointer;
      text-decoration: none;  
      text-shadow: 0px 0px 10px red;        
    }
    .card-body{
      background-color: rgba(0, 0, 0, 0.6); font-size: 12px;
    }
  .card-body a {
    cursor: pointer;
    color: white;
    text-decoration: none;
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
<body style="background-color: #012;">
 <div class="sidenav border-left-0">
  <a href="#" class="fa fa-reply" onclick="window.history.back();"></a>
  <a href="chatroom.php" class="fa fa-commenting-o"></a>
  <a href="past_papers.php" class="fa fa-cloud-download"></a>
  <a href="blogs.php" class="fa fa-file"></a>
  <a href="challenge.php" class="fa fa-superscript"></a>
  <a href="index.php" class="fa fa-home"></a>
</div>
    <div class="navbar fixed-top" style="background-color: #000;">
      <div class="Search col-auto">
        <span class="text-warning col-6">Taste of Power</span>
        <input id="myInput" type="text" placeholder="&#xf002; Search..." class="col-6 w-100 text-light rom bg-transparent border-top-0 border-left-0 border-right-0 border-light">
      </div>
    </div>

    <div class="container" id="myText" style="margin: 60px auto;">
      <div class="row">
        <div class="col-md-2 mb-2">
          <img src="assets/img/21.jpg" load="lazy" class="" style="width: 100%; height: auto; max-height: 300px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>
        </div>
        <div class="col-md-7">
          <div class="card cardm w-100 mb-3 m-1 bg-transparent border-info"   style="border-radius: 21px;">
            <div class="card-body" style="border-radius: 21px;">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">A Taste of Power</span> <i class="text-danger text-lowercase">~ Mr. Robot</i></center> <br>
                <p style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.<br>
                </p>
                <p style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.<br>
                </p>
                <p style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                </p>
              </p>  
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 1</i>
                <i class="fa fa-commenting-o text-success p-2"> 3</i>
              </p>
              <i class="fa float-right muted">2 weeks ago</i>
              <br>
              <div class="card-footer text-muted d-flex justify-content-start align-items-center" style="width:100%">
                <div class="input-group border-info mb-0" style="border: 1px solid; border-radius: 14px">
                  <input type="text" class="form-control bg-transparent border-0" placeholder="Add Comment"
                    aria-label="comment " aria-describedby="button-addon2" />
                  <button class="btn btn-warning fa fa-paper-plane text-light bg-transparent border-0" type="button" style="padding-top: .55rem;">
                    
                  </button>
                </div>
              </div>

            </div>
          </div>          
        </div>
        <div class="col-md-3 text-center">
          <span class="text-light text-uppercase">**** Comment Section ****</span>
          <div class="col-auto mb-2">
            <div class="d-flex justify-content-between">
              <p class="small text-warning mb-1">Odero Gogni</p>
              <p class="small text-muted float-right mb-1">21 days ago</p>
            </div>
            <div class="d-flex flex-row justify-content-start">
              <div class="border-0" style="background-color: rgba(0, 0, 0, .2); border-radius: 10px; border: 1px solid">
                <p class="small ms-3  justify-content-center rounded-3 p-2 text-light">For what reason would it be advisable for me to think about business content?</p>
              </div>
            </div>
          </div>
          <div class="col-auto mb-2">
            <div class="d-flex justify-content-between">
              <p class="small text-warning mb-1">Etyang' Geoffrey</p>
              <p class="small text-muted float-right mb-1">21 days ago</p>
            </div>
            <div class="d-flex flex-row justify-content-start">
              <div class="border-0" style="background-color: rgba(0, 0, 0, .2); border-radius: 10px; border: 1px solid">
                <p class="small ms-3  justify-content-center rounded-3 p-2 text-light">For what reason would it be advisable for me to think about business content?</p>
              </div>
            </div>
          </div>
          <div class="col-auto mb-2">
            <div class="d-flex justify-content-between">
              <p class="small text-warning mb-1">Jane Doe</p>
              <p class="small text-muted float-right mb-1">21 days ago</p>
            </div>
            <div class="d-flex flex-row justify-content-start">
              <div class="border-0" style="background-color: rgba(0, 0, 0, .2); border-radius: 10px; border: 1px solid">
                <p class="small ms-3  justify-content-center rounded-3 p-2 text-light">For what reason would it be advisable for me to think about business content?</p>
              </div>
            </div>
          </div>
          <div class="col-auto mb-2">
            <div class="d-flex justify-content-between">
              <p class="small text-warning mb-1">Creed De'Llacrues</p>
              <p class="small text-muted float-right mb-1">21 days ago</p>
            </div>
            <div class="d-flex flex-row justify-content-start">
              <div class="border-0" style="background-color: rgba(0, 0, 0, .2); border-radius: 10px; border: 1px solid">
                <p class="small ms-3  justify-content-center rounded-3 p-2 text-light">For what reason would it be advisable for me to think about business content?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
    </div>
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
</body>
</html>