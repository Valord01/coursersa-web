<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>GetAPet</title>
    <script src="srjs.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/parsley.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />

    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/index3.css" />
  </head>

  <body onload="checkCookie()">
    <div id="header" class="header">
      <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
        <div class="container">
          <a class="navbar-brand" id="logohome"
            ><img src="imgs/logo.png" alt="#"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#show-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span
              style="
                margin: unset;
                line-height: normal;
                animation: none;
                justify-content: unset;
                align-items: unset;
                font-family: none;
                font-size: unset;
              "
              class="navbar-toggler-icon"
            ></span>
          </button>
          <div class="collapse navbar-collapse" id="show-menu">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" id="home1">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="register01" href="#hiw">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#wcs">Testimonies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="aboutus" href="#">Contact Us</a>
              </li>
              <li class="nav-item .search-container">
                <a class="nav-link search" href="#"
                  ><i class="fas fa-search"></i
                ></a>
                <form>
                  <input type="search" placeholder="Search" />
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="copyright text-center">
      <p>Copyright ... <a href="#"> </a></p>
    </div>

    <div class="b2">
      <div class="container">
        <h3 style="color: #86c232; font-size: 3em">Register Today</h3>
        <form
          class="custom-form"
          name="basic"
          data-parsley-validate=""
          data-parsley-trigger="keyup"
          onsubmit="ssetCookie()"
          method="post"
          action=""
        >
          <div class="form-right">
            <div class="row">
              <div class="col-md-6 wb rrl pp">
                <h2 style="padding-bottom: 25px; font-size: 1.7em">
                  General information
                </h2>

                <input
                  placeholder="Email"
                  type="email"
                  class="form-control olb wb"
                  name="email"
                  required=""
                  id="em"
                />
              </div>

              <div class="col-md-6 gb rrr pp">
                <h2 style="padding-bottom: 25px; font-size: 1.7em">
                  Contact details
                </h2>
                <input
                  class="olb form-control gb"
                  name="yolo"
                  id="ad1"
                  placeholder="Address line 1"
                  type="text"
                  data-parsley-length="[10, 50]"
                  data-parsley-group="block1"
                  required=""
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 wb pp">
                <input
                  type="text"
                  class="form-control olb wb"
                  name="firstname"
                  data-parsley-length="[1, 50]"
                  data-parsley-group="block1"
                  required=""
                  placeholder="First Name"
                  id="fn"
                />
              </div>
              <div class="col-md-3 wb pp">
                <input
                  type="text"
                  class="form-control olb wb"
                  name="lastname"
                  data-parsley-length="[1, 50]"
                  data-parsley-group="block1"
                  id="ln"
                  required=""
                />
              </div>
              <div class="col-md-6 gb pp">
                <input
                  class="olb form-control gb"
                  name="yolo"
                  id="ad2"
                  placeholder="Address line 2"
                  type="text"
                  data-parsley-length="[10, 50]"
                  data-parsley-group="block1"
                  required=""
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 wb pp">
                <input
                  type="digit"
                  class="form-control olb wb"
                  name="contact"
                  placeholder="Phone Number"
                  pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$"
                  data-parsley-group="block1"
                  required=""
                  id="pn"
                />
              </div>

              <div class="col-md-6 gb pp">
                <input
                  class="olb form-control gb"
                  type="text"
                  name="yolo"
                  id="coun"
                  placeholder="Country"
                  required=""
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 wb pp">
                <input
                  class="olb form-control wb"
                  type="text"
                  name="yolo"
                  data-parsley-group="block1"
                  placeholder="User Interest"
                  id="yo1"
                />
              </div>

              <div class="col-md-3 gb pp">
                <input
                  class="olb form-control gb"
                  data-parsley-type="digits"
                  name="yolo"
                  pattern="^\d{6}$"
                  id="zip"
                  data-parsley-group="block1"
                  placeholder="Zipcode"
                  required=""
                />
              </div>
              <div class="col-md-3 gb pp">
                <input
                  class="olb form-control gb"
                  type="text"
                  name="yolo"
                  id="stat"
                  placeholder="State"
                  required=""
                  data-parsley-group="block1"
                />
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 wb rrbl pp">
                <input
                  class="olb form-control wb"
                  type="text"
                  name="yolo"
                  placeholder="User Type"
                  id="yo1"
                  data-parsley-group="block1"
                />
              </div>

              <div class="col-md-6 gb rrbr pp">
                <button
                  type="submit"
                  style="margin-top: 8px"
                  class="btn btn-primary"
                  name="bb"
                  id="bb"
                >
                  Register
                </button>
                <p id="p"></p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <script>
      $(function () {
        document.getElementById("aboutus").onclick = function () {
          location.href = "index2.html";
        };
        document.getElementById("logohome").onclick = function () {
          location.href = "index.html";
        };
        document.getElementById("home1").onclick = function () {
          location.href = "index.html";
        };
        document.getElementById("register01").onclick = function () {
          location.href = "index3.html";
        };
        document.getElementById("bb").onclick = function () {
         console.log("yoooooooooooo"); 
    /*       let zc=document.basic.zip.value;
            let ad1=document.basic.ad1.value;
            let ad2=document.basic.ad2.value;
            let fname=document.basic.fn.value;
            let lname=document.basic.ln.value;
            let email=document.basic.em.value;
            let coun=document.basic.coun.value;
            let stat=document.basic.stat.value;
            let pn=document.basic.pn.value;
            var cars = [zc,ad1,ad2,fname,lname,stat,coun,pn,email];
            fLen = cars.length;
for (i = 0; i < fLen; i++) {
  console.log(cars[i]);
} */
        };
      });

      $(function () {
        $(".custom-form")
          .parsley()
          .on("form:validate", function (formInstance) {
            var ok =
              formInstance.isValid({ group: "block1", force: true }) ||
              formInstance.isValid({ group: "block2", force: true });

            if (!ok) formInstance.validationResult = false;
          });
      });



      function ssetCookie()
        {  console.log("yoooooooooooooooooooooooooooooooooo"); 
           let zip=document.basic.zip.value;
            let ad1=document.basic.ad1.value;
            let ad2=document.basic.ad2.value;
            let fn=document.basic.fn.value;
            let ln=document.basic.ln.value;
            let em=document.basic.em.value;
            let coun=document.basic.coun.value;
            let stat=document.basic.stat.value;
            let pn=document.basic.pn.value;
            var cars = [zip,ad1,ad2,fn,ln,stat,coun,pn,em];
            var cars1 = ["zip","ad1","ad2","fn","ln","stat","coun","pn","em"];
            fLen = cars.length;
for (i = 0; i < fLen; i++) {
  console.log(cars[i]);
  document.cookie=cars1[i]+"="+cars[i];
} 
           
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
   console.log("i got called");
   var cars2 = ["zip","ad1","ad2","fn","ln","stat","coun","pn","em"];
  for(i=0;i<cars2.length;i++)
{  var c=getCookie(cars2[i]);

  if (c != "") {
   $('form').find("input[id="+cars2[i]+"]").each(function(ev)
  {
      if(!$(this).val()) { 
     $(this).attr("value", c);
  }
  });
  /*
    document.getElementById(cars2[i]).attr.value=c;*/
  } else { console.log("didnt get data");}
 }
}
    </script>
    
  </body>
  <?php
if(isset($_POST["bb"]))
{
mysqli_query($link,"insert into mca10 values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]')");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
?>
</html>
