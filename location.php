<html>
        <head>
            <link rel="stylesheet" href="css/page.css">
            <link rel="stylesheet" href="css/Footer.css">
          <script src = "https://maps.googleapis.com/maps/api/js"></script>
          <script>
             function loadMap() {
                var mapOptions = {
                   center:new google.maps.LatLng(22.0719, 82.1566), zoom:18,
                   mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                    
                var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
             }
          </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=
            AIzaSyDX4vpKhQLqmSr2l8piXezkQCCZI4FwgMc &callback=initMap">
            </script>
          </style>
       </head>
       
       <body onload = "loadMap()">
         
          <div id='cssmenu'> <!-- Drop down menu -->  
            <ul>
              <li><a href='home.php'><span>Home</span></a></li>
              <li class='active has-sub'><a href='#'><span>Department</span></a>
                  <ul>
                    <li class='has-sub'><a href='sec.php'><span>Science</span></a></li>
                    <li class='has-sub'><a href='com.php'><span>Commerce</span></a></li>
                    <li class='has-sub'><a href='art.php'><span>Arts</span></a></li>
                  </ul>
              </li>
              <li class='last'><a href='contact.php'><span>Contact</span></a></li>
            </ul>
        </div> <!-- drop down menu closed -->

        <div id="upleft"> <!-- Left body -->
          <h1 align="center">J</h1>
          <h1 align="center">O</h1>
          <h1 align="center">U</h1>
          <h1 align="center">R</h1>
          <h1 align="center">N</h1>
          <h1 align="center">A</h1>
          <h1 align="center">L</h1>
        </div>  <!-- Left body closed -->
            <div id="con" align="center" style=" background-color:rgb(231, 243, 237);">
           <img src="images/loa.jpg"><br><br><br><br><br>  <br><br><br><br><br> <br><br>
          <div id = "sample" style = "width: 1180px; height:350px;"></div>
        
        </div></body> 
       
            </html>