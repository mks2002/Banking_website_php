<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>MY Bank-website | Login</title>



   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Inter+Tight&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="../css/index.css">



</head>

<body>
   <nav class="nav nav_top">
      <div class="logo">
         <div class="ms2">
            <div class="mayuk">
               <img src="../images_videos/logo.png" alt="image not found" width="120" height="120">
            </div>
            <div class="sarkar">
               <h1>
                  national BANK
               </h1>
            </div>
         </div>
      </div>

      <div class="nav_side">
         <a href="../index.html">Home</a>
         <a href="../about.html"> About us</a>
         <a href="../service.html"> Services</a>
         <a href="../blogs.html"> Blogs</a>
         <a href="../contact.html"> Contact</a>
         <a href="#" class="active"> login</a>
         <a href="signup.php"> Account Open</a>
      </div>
   </nav>


   <div class="login_main">

      <h2> Login into profile</h2>

      <form action="login_check.php" method="post">

         <input type="text" name="name" id="firstname1" placeholder="enter username" />

         <input type="password" name="name2" id="firstname2" placeholder="enter password" />

         <div class="form2">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
         </div>


      </form>
   </div>


   <footer>
      <div class="footer_logo">
         <a href="../index.html">
            <div class="mayuk">
               <img src="../images_videos/logo.png" alt="image not found" width="150" height="150">
            </div>

         </a>
      </div>

    <div class="pages">
         <a href="../index.html">Home</a>|
         <a href="../about.html"> About us</a>|
         <a href="../service.html"> Services</a>|
         <a href="../blogs.html"> Blogs</a>|
         <a href="../contact.html"> Contact</a>|
         <a href="login.php"> login</a>|
         <a href="signup.html"> signup</a>

      </div>
      <div class="doc">
         <h3>Documentsnts</h3>
         <a href="#">Privacy Policy</a>|
         <a href="#">Terms ofUse</a>|
         <a href="#">Refund Policy</a>
      </div>
      <div class="social">
         <h3>Follow Us</h3>
         <a href="#">


            <i class="fa-brands fa-facebook"></i>
            facebook </a>|
         <a href="#"><i class="fa-brands fa-instagram"></i> instagram </a>|
         <a href="#"><i class="fa-brands fa-linkedin"></i> Linkedin </a>|
         <a href="#" target="_blank"> <i class="fa-brands fa-twitter"></i> Twitter </a> <!-- open in new page -->
      </div>

      <div class="contact">
         <h3>Contact Us </h3>
         <a href="#"> <i class="fa-brands fa-whatsapp"></i> Whatsapp</a>|
         <a href="#"> <i class="fa-solid fa-phone"></i> Phone</a>|
         <a href="#"> <i class="fa-regular fa-envelope"></i> Email</a>
      </div>


      <hr>
      <p> Copyright &copy; 2021 National_Bank. All rights reserved</p>
   </footer>


   <script src="https://kit.fontawesome.com/17d03ae9d0.js" crossorigin="anonymous"></script>

   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>





</body>

</html>