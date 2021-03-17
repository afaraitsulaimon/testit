<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<style>

.downAdvertImage {
    height: 250px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>


<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Title</title>
</head>
<body>

    <!-- header starts from here -->

               <?php 
                   require_once("utilities/header.php");
               ?>
    <!-- header ends here -->




    <!-- slider starts from here -->

      <div class="container-fluid">
          <div class="row">
              <div class="col-12">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                       <div class="carousel-inner">
                                <div class="carousel-item active" style="height:700px">
                                  <img class="d-block w-100" src="images/slider-home1.jpg" alt="First slide" style="height:700px;">
                                  <div class="centered h1">Prepare for your coming examination here <br>Pass in one sitting!</div>
                             
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="images/slider-home2.jpg" alt="Second slide" style="height:700px;">
                                  <div class="centered h1">Let's make you prepare ahead of your exam and <br> give you the best experience ever!</div>

                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="images/slider-home3.jpg" alt="Third slide" style="height:700px;">
                                  <div class="centered h1">All around A's and the making it to the top <br> You are good to go.</div>

                                </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>


                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>


              </div>
          </div>
      </div>
    <!-- slider ends here -->


            <!-- news flash starts from here -->

            <div class="container">
                <div class="row ">
                    <div class="col-12 " style="margin-top:10px;">

                    <marquee style="font-Size:2em;">UTME for 2021/2022 Admission is available at all outlets in Nigeria</marquee>

                    </div>

                </div>

            </div>

            <!-- news flash ends here -->



    
            <!-- Up Advert boxes start from here -->



            <div class="container-fluid" style="margin-top:50px;">
                <div class="row justify-content-around">
                    <div class="col-3 upperAdvertImage bg-primary">
                        <p>Up Advert Image 1</p>
                    </div>

                    <div class="col-3 upperAdvertImage bg-primary">
                    <p>Up Advert Image 2</p>
                    </div>

                    <div class="col-3 upperAdvertImage bg-primary">
                    <p>Up Advert Image 3</p>
                    </div>

                </div>

            </div>

            <!-- Up Advert boxes ends here -->



            <!-- featured Exams starts from here -->

            <div class="container mt-4">
                 <div class="row justify-content-around">
                      <h2 class="pt-3 text-center pb-3">Available Tests</h2>
                      

                      <a class="col-5 bg-primary featured-exam text-decoration-none" href=""><div>
                         <p class="text-light featured-exam-text text-center">WAEC</p>
                      </div></a>

                      <a class="col-5 bg-secondary featured-exam text-decoration-none" href=""><div>
                         <p class="text-light featured-exam-text text-center">JAMB</p>
                      </div></a>


                 </div>

            </div>


            <div class="container mt-4">
                 <div class="row justify-content-around">

                      <a class="col-5 bg-secondary featured-exam text-decoration-none" href=""><div>
                         <p class="text-light featured-exam-text text-center">NECO</p>
                      </div></a>

                      <a class="col-5 bg-primary featured-exam text-decoration-none" href=""><div>
                         <p class="text-light featured-exam-text text-center">POST UTME</p>
                      </div></a>

                 </div>

            </div>
            <!-- featured Exams ends here -->



            <!-- Testimonies start from here -->

            <div class="container mt-4">
                 <div class="row">
                 <h1 class="text-center pt-4 pb-3">Testimonies</h1>

                     <div class=" col-3 testimonies">
                        <img src="images/indexBackground-image.jpg" style="width:150px; height:150px; border-radius:50%;">
                     </div>

                     <div class=" col-6 testimonies">
                        <p>
                        "My name is Bolarinwa, I Passed my Jamb after 3 times trial. 
                        Am using this Opportunity to tell everybody that the test 
                        i took on testit is just like a wonder that made my dream come 
                        through and really prepared me more for the exam. 
                        Thank you so much for given us the opportunity to practice on this web app".
                        </p>
                     </div>

                     <div class=" col-3 testimonies" align=center>
                        <button class="btn btn-lg btn-primary">View More...</button>
                     </div>
                 </div>
            </div>

            <!-- Testimonies end here -->



            

           <!-- Down Advert boxes start from here -->


           <div class="container-fluid" style="margin-top:50px;">
                <div class="row justify-content-around">
                    <div class="col-3 downAdvertImage bg-primary">
                        <p>Down Advert Image 1</p>
                    </div>

                    <div class="col-3 downAdvertImage bg-primary">
                       <p>Down Advert Image 2</p>
                    </div>

                    <div class="col-3 downAdvertImage bg-primary">
                        <p>Down Advert Image 3</p>
                    </div>
                </div>
            </div>

            <!-- Down Advert boxes ends here -->





            <!-- footer starts from here -->

               <?php 
                   require_once("utilities/footer.php");
               ?>
            <!-- footer ends here -->




       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
