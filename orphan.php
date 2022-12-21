<html>
<head>
    <title> Orphanage Management system </title>
    <meta name="viewport" content "width=device-width,initial-scale=1">
    <link rel="stylesheet" href="orphan.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="hero">
    <div class="nav-bar">
            <div class="nav-logo">
                <img src="logo.jpg">
        </div>
              <div class="nav-links" id="nav-links">
                  <i class="fa fa-close" onclick="closemenu()"></i>
            <ul>
                <a href="#"><li>HOME</li></a>
                <a href="about.php"><li>ABOUT</li></a>
                
            </ul>
        </div> 
        <i class ="fa fa-bars" onclick="showMenu"></i>
        <i class=fa fa-bars></i> 
        </div>
        <div class="banner-title">
            <h1><span>Orphanage Management System</span></h1>
         
            <div class="btn">
                <button type="button" class="btn"> <a href="log.php">Admin</a></button>
                <button type="button" class="btn"><a href="http://localhost:8080/orphan/signup.php">Donor </a></button>
            </div>
        </div>
        <div class="vertical-bar">
            <div class="search-icon">
            <i class="fa fa-th-list"></i>
            <i class="fa fa-search"></i>
            </div>
            <div class="social-icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-whatsapp"></i>
            </div>
        </div>
       
        <div class="notification">
            <div class="contents">
                <p><a href="#">PREV</a><a href="#">NEXT</a></p>
        </div>
    </div>
    <script>
        var show = document.getElementById("nav-links")
        function showMenu(){
            show.style.right = "0";
        }
        function closemenu(){
            show.style.right ="-200px";
        }
    </script>

</body>
</html>