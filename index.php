<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Recyclapedia Home</title>
	  <link rel = "stylesheet" href="css/styles.css">
    <?php include 'database.php'; ?>

  </head>
  <body>
      <div class="container">
          <div class="row"> <!-- parent row. contains sidebar + rest of page -->
              <!-- Vertical navbar on side of page -->
                  <!-- navbar template from getbootstrap.com/docs/4.0/components/navbar/ -->
                  <!-- nav links will move to drop down menu on screens smaller than medium -->
              <div class="col-md-2">
                  <nav class="navbar navbar-dark" role="navigation">

                      <div class="navbar-header">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                      </div>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav nav-stacked">
                              <li class="nav-item active">
                                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="metal.php">Metal</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="plastics.php">Plastic</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="glass.php">Glass</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="paper.php">Paper/Carton</a>
                              </li>
                              </li>
                          </ul>
                      </div>

                    </nav>
              </div>

              <div class="content container col-md-10"> <!-- all of page besides sidebar -->
                  <div class="row">
                      <div class="container">
                          <div class="jumbotron jumbotron-fluid">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <h1 class="display-4 text-center">Recyclapedia</h1>
                                      <hr>
                                      <p class="lead text-center">A Simple Recycling Database</p>
                                  </div>
                                  <div class="col-lg-6">
                                      <hr>
                                      <p class="text-center">Welcome to Recyclapedia!</p>
                                      <p class="text-center">Is your item recyclable?</p>
                                      <p class="text-center">Click on the type of material below,</p>
                                      <p class="text-center">or use the nav bar, </p>
                                      <p class="text-center">and find your object on the next page!</p>
                                      <hr>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>



    <!-- This section is for the animated images-->

                  <div class="wrap container">
              	       <div class="tile mx-auto">
                	        <img src='images/cardboard-box.jpg'/>
                          <?php $carton = "Paper/Carton"; ?>
                	        <div class="text">
                      		    <h1>Paper/Cartons</h1>
                      		    <h2 class="animate-text"><?php getItemRecyclable($carton); ?></h2>
                		          <p class="animate-text"><?php getItemSpecifics($carton); ?></p>
                      		    <div class="dots">
                      		        <span></span>
                      		        <span></span>
                      		        <span></span>
                  		        </div>
              	        </div>
                        <a href="paper.php"></a>
                    </div>


                    <div class="tile mx-auto">
                        <img src='images/Glass.png'/>
                        <?php $glass = "Glass"; ?>
                        <div class="text">
                            <h1>Glass</h1>
                            <h2 class="animate-text"><?php getItemRecyclable($glass); ?></h2>
            		            <p class="animate-text"><?php getItemSpecifics($glass); ?></p>
                            <div class="dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <a href="glass.php"></a>
                    </div>

                    <div class="tile mx-auto">
                        <img src='images/metals.jpg'/>
                        <?php $metal = "Metals"; ?>
                        <div class="text">
                            <h1>Metals</h1>
                            <h2 class="animate-text"><?php getItemRecyclable($metal); ?></h2>
            		            <p class="animate-text"><?php getItemSpecifics($metal); ?></p>
                            <div class="dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <a href="metal.php"></a>
                    </div>

                    <div class="tile mx-auto">
                          <img src='images/PET-bottles2.jpg'/>
                          <?php $plastic = "Plastic"; ?>
                          <div class="text">
                              <h1>Plastics</h1>
                              <h2 class="animate-text"><?php getItemRecyclable($plastic); ?></h2>
            		              <p class="animate-text"><?php getItemSpecifics($plastic); ?></p>
                              <div class="dots">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                              </div>
                          </div>
                          <a href="plastics.php"></a>
                    </div>

                </div> <!-- close div for wrap -->

              </div> <!-- close div for entire page minus sidebar -->
          </div>  <!-- parent row close div. contains sidebar + rest of page -->
      </div>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="js/click_tiles.js"></script>
  </body>
</html>