<!DOCTYPE html>
<html lang="en">
<head>
  
    
  <title>Alcatraz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
    
    
<script type="text/javascript">
       

    </script>
    
    
    
</head>
    
    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Alcatraz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="keystroke.html">HOME</a></li>
        <li><a href="register.php">REGISTER</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Form 1: Authentication required </h1> 
   
</div>



<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid" >
  <div class="text-center">
    <h1>Demo</h1>
   
  </div>
    
  <div class="row slideanim" style="margin:auto">
       <div class="col-sm-3 col-xs-12" >
      </div>
    <div class="col-sm-6 col-xs-12" >
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Login</h1>
        </div>
        
        <div class="panel-body">
            <form action="antikey.php" method="GET">
          <div class="col-sm-12 form-group">
          <input class="form-control" name="username" placeholder="User Name" type="text" required>
              <br>
          <input class="form-control"  name="password" placeholder="Password"  type="password" required>
              <br>
        <input class="form-control"  name="email" placeholder="Email"  type="email" >
              <br>
         <input class="form-control"  name="address" placeholder="Enter home address"  type="text" >
              <br>
              <input class="form-control"  name="form_name" type="hidden" value="form1" >
               <br><br>
              <button class="btn btn-lg">Submit</button>
              </form>
        </div>
          
        </div>
       
          <h3>New user? <a href="register.php">Register</a></h3>
      </div>      
    </div>     
      
      
  </div>
</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p style="background:#181a1b; color:white">Copyrights© reserved by CodeBlooded</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
