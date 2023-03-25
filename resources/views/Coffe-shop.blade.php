<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="{{asset('data/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
 
    <title>Coffee Shop Website</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(document).ready(function()
      {
          $("#show1").click(function(){
            $("#result1").text("Thanks For ordering us your order has been given!");
          });
      });
      $(document).ready(function()
      {
          $("#show2").click(function(){
            $("#result2").text("Thanks For ordering us your order has been given!");
          });
      });
      $(document).ready(function()
      {
          $("#show3").click(function(){
            $("#result3").text("Thanks For ordering us your order has been given!");
          });
      });
      $(document).ready(function()
      {
          $("#show4").click(function(){
            $("#result4").text("Thanks For ordering us your order has been given!");
          });
      });
      $(document).ready(function()
      {
          $("#show5").click(function(){
            $("#result5").text("Thanks For ordering us your order has been given!");
          });
      });
      $(document).ready(function()
      {
          $("#show6").click(function(){
            $("#result6").text("Thanks For ordering us your order has been given!");
          });
      });
      $(document).ready(function()
      {
          $("#show7").click(function(){
            $("#result7").text("Thanks For Registration");
          });
      });
    </script>
</head>
<body style="background-color:rgb(190, 184, 184);">
<div class="container-fluid">
  <div class="row">
<div class="col-md-12">
   
             <!-- navbar start -->
             <nav class="navbar navbar-expand-lg navbar-light fixed-top"  style="background-color:rgba(70, 39, 39, 0.973);color: white;">
              <a class="navbar-brand" href="#"><i class="fa-solid fa-mug-saucer" style="font-size: 50px;color: white"></i></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                    Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#" >What we provide</a>
                      <a class="dropdown-item" href="#" >Another action</a>
                
           
                      <a class="dropdown-item" href="#" >Espresso</a>
                      <a class="dropdown-item" href="#" >Americano</a>
                      <a class="dropdown-item" href="#" >Latte</a>
                      <a class="dropdown-item" href="#">Cappuccino</a>
                      <a class="dropdown-item" href="#">Mocca</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
</div>

  </div>
</div>
         <!--navbar end  -->

         <!-- first div start -->
         <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
             
            <div class="bim" class="img-fluid"style="background-image:url(https://cdn.luxe.digital/media/2020/05/07203610/best-coffee-beans-luxe-digital.jpg); background-size:cover;background-size:100% 100vh">
             
             
              <h4 class="display-5 " style="color:white;font-size:100px;margin-left:4vw;padding-top: 30vh;font-family: 'Oleo Script Swash Caps', cursive;">COFFEE</h4>
              <h3 class="display-5" style="color:white;font-weight: bold;margin-left:4vw;padding-top:2vh;padding-bottom:30vh;">______Fresh And Healthy______</h3>
                   </div>
               </div>
            </div>
          </div>
        
         <!-- first div end -->
         <!-- second div -->
         <div class="container" style="margin-top:4vh;margin-bottom: 4vh;">
          <div class="row">
            <div class="col-md-6" >
              <img src="https://images.pexels.com/photos/302901/pexels-photo-302901.jpeg?auto=compress&cs=tinysrgb&w=600"  class="img-fluid a">
             <center> <h3 style="font-family:'Oleo Script Swash Caps', cursive;">Rs 800</h3>
              <button  id="show2" type="btn"  style="border:3px solid rgba(97, 53, 53, 0.973);border-radius:5px;color: white;background-color: brown;">Add to card</button></center>
              <div id="result2"></div>
            </div>
               <div class="col-md-6">
                
                <img src="https://images.pexels.com/photos/685527/pexels-photo-685527.jpeg?auto=compress&cs=tinysrgb&w=600"  class="img-fluid">
              <center> <h3 style="font-family:'Oleo Script Swash Caps', cursive;">Rs 750</h3>
                
              <button id="show1" type="btn" style="border:3px solid rgba(97, 53, 53, 0.973);border-radius:5px;color: white;background-color: brown;">Add to card</button></center> 
               <div id="result1"></div>
            </div>
          </div>
         </div>
         <!-- end -->
           <!-- third div -->
           <div class="container" style="margin-top:4vh;margin-bottom: 4vh;">
            <div class="row">
              <div class="col-md-6" >
                <img src="https://wallpaper.dog/large/5545263.jpg"  class="img-fluid">
               <center> <h3 style="font-family:'Oleo Script Swash Caps', cursive;">Rs 900</h3>
                
              <button  id="show3" type="btn" style="border:3px solid rgba(97, 53, 53, 0.973);border-radius:5px;color: white;background-color: brown;">Add to card</button></center>
              <div id="result3"></div>  
            </div>
                 <div class="col-md-6">
                  
                  <img src="https://c4.wallpaperflare.com/wallpaper/933/27/721/coffee-cup-foam-drink-coffee-beans-wood-desktop-wallpaper-preview.jpg"  class="img-fluid">
                <center> <h3 style="font-family:'Oleo Script Swash Caps', cursive;">Rs 750</h3>
                  <button id="show4" type="btn" style="border:3px solid rgba(97, 53, 53, 0.973);border-radius:5px;color: white;background-color: brown;">Add to card</button></center> 
                  <div id="result4"></div>
                </div>
            </div>
           </div>
           <!-- end -->
                <!-- fourth div -->
         <div class="container" style="margin-top:4vh;margin-bottom: 4vh;">
          <div class="row">
            <div class="col-md-6" >
              <img src="https://wallpaperaccess.com/full/3844586.jpg"  class="img-fluid">
             <center> <h3 style="font-family:'Oleo Script Swash Caps', cursive;">Rs 1000</h3>
              <button id="show5" type="btn" style="border:3px solid rgba(97, 53, 53, 0.973);border-radius:5px;color: white;background-color: brown;">Add to card</button></center>
              <div id="result5"></div>
            </div>
               <div class="col-md-6">
                
                <img src="https://c4.wallpaperflare.com/wallpaper/430/585/278/food-coffee-coffee-beans-cookie-wallpaper-preview.jpg"  class="img-fluid">
              <center> <h3 style="font-family:'Oleo Script Swash Caps', cursive;">Rs 1050</h3>
                <button  id="show6" type="btn" style="border:3px solid rgba(97, 53, 53, 0.973);border-radius:5px;color: white;background-color: brown;">Add to card</button></center> 
              <div id="result6"></div> 
              </div>
          </div>
         </div>
         <!-- end -->
         <!-- div start sixth -->
         <div class="container" style="padding-top: 4vh;padding-bottom:4vh">
          <div class="row">
            <div class="col-md-12 img-fluid" style="background-image:url(https://img.freepik.com/free-photo/background-roasted-fresh-brown-coffee-beans-perfect-cool-wallpaper_181624-13741.jpg?w=2000);background-size:cover;">
                
          
         <center>    <h1 style="color:white;padding-top:5vh;padding-bottom:5vh;font-family:'Oleo Script Swash Caps', cursive;">"Never trust anyone who doesn't drink coffee"</h1></center> 
            </div>
          </div>
         </div>
         <!-- div end sixth -->
          <!-- fifth div -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4" style="background-color:rgba(136, 86, 86, 0.973);">
           <center>   <h1 style="font-family:'Oleo Script Swash Caps', cursive;color: white;">About Us</h1></center>  
               <center>   <p class="justify-content">Like sommeliers of wine, Q graders are similar in the coffee world. It ensures experts across the globe can objectively
                   examine coffee and score them on their many attributes and therefore overall quality</p></center>
              </div>
              <div class="col-md-4" style="background-color:rgba(161, 78, 78, 0.973);">
                <center>   <h1 style="font-family:'Oleo Script Swash Caps', cursive;color: white">Client Reviews</h1></center>  
                <center>   <p class="justify-content"> Our coffee is coffee that has been graded above 80. Much like a movie, its quality isn't dependent on the acting you see on screen, but the writing, production, directing, and everything else that went into making the movie </p></center>   
              </div>
              <div class="col-md-4" style="background-color:rgba(136, 86, 86, 0.973);">
                <center>   <h1 style="font-family:'Oleo Script Swash Caps', cursive;color: white;"">Our Services</h1></center>  
                <center>   <p class="justify-content"> The system quantifies taste attributes such as acidity, body, flavour, aftertaste, uniformity, balance and sweetness to ensure all participants are identifying flavour characteristics in the same way the Q grader</p></center>
 
              </div>
            </div>
           </div>f
           <!-- fifth div end -->
         <!-- seven div start -->
         <div class="container-fluid" style="padding-top: 4vh;padding-bottom:4vh">
          <div class="row">
            <div class="col-md-6">
               <img src="https://images7.alphacoders.com/394/thumb-1920-394204.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
          <div class="last">

                 
          <h1 style="color:rgba(136, 86, 86, 0.973) ;font-family:'Oleo Script Swash Caps', cursive;">Creat Your Account</h1>
                 
          <form class="forms-sample" name="Coffe-shop" action="element" method="post">
                 @csrf
              <input  name="name" id="name" type="text" placeholder="your name"  style="width:30vw;color:black">
              <br>
              
              <input name="email" id="email" type="email" placeholder="your email id.."  style="width:30vw;color:blacke;margin-top:3vh;">
              <br>
              <input name="number" id="number" type="tel" placeholder="your phone..."  style="width:30vw;color:black;margin-top:3vh;">
              <br>
              
              
             <button id="show7" type="btn" style="border:3px solid rgba(97, 53, 53, 0.973);border-radius:5px;color: white;background-color: brown; margin-top:3vh;">Submit</button>
    </form>
             <div id="result7"></div>
              </div>   </div>
          </div>
         </div>
         <!-- seven div end -->
         <!-- footer -->
         <div class="container-fluid">
          <div class="row" style="background-color:rgba(70, 39, 39, 0.973);">
            <div class="col-md-8">
                  <div class="l" style="display:flex;margin-bottom: 1vh;padding-left:2vw;padding-top: 2vh;">
                  <h4 style="font-weight:bold;color: white;">PUT YOUR ORDER HERE!</h4>
              <button type="but" style="border-radius: 5px;margin-left:2vw ;">BOOK NOW </button></div></div>
              <div class="col-md-4">
            <div class="la" style="padding-top:1vh;font-size:30px;color:white">  <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-square-instagram"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-brands fa-twitter"></i></div></div>
              </div>
          </div>
      </div>
        
</body>
</html>