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
    <?php require 'database.php'; ?>

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
                                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                                          <div class="container">
                                              <h1 class="display-3 text-center">Glass</h1>
                                          </div>
                                          <hr>
                                          <p class="text-center">Find your item or a similar item below.</p>
                                          <p class="text-center">Mouse over the images to reveal more information,</p>
                                          <p class="text-center">such as where you can recycle the object</p>
                                          <p class="text-center">and how to prepare it for recycling.</p>
                                          <hr>
                                      </div>
                                  </div>
                                  <div class="mx-auto">
                                      <div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>


        <!-- This section is for the animated images-->

                <div class="wrap">
          	        <div class="tile mx-auto">
          	            <img src='images/glass-bottle.jpg'/>
                        <?php $bottles = "Glass Bottles"; ?>
          	            <div class="text">
                		        <h1>Plastic Bottles</h1>
                		        <h2 class="animate-text"><?php getItemRecyclable($bottles); ?></h2>
                		        <p class="animate-text"><?php getItemSpecifics($bottles); ?></p>
                		        <div class="dots">
                		            <span></span>
                		            <span></span>
                		            <span></span>
            		            </div>
          	            </div>
                    </div>
                    

                    <div class="tile mx-auto">
                        <img src='images/wine-bottle.jpg'/>
                        <?php $wine = "Wine Bottles"; ?>
                        <div class="text">
                            <h1>Wine Bottles</h1>
                            <h2 class="animate-text"><?php getItemRecyclable($wine); ?></h2>
                		        <p class="animate-text"><?php getItemSpecifics($wine); ?></p>
                            <div class="dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    

                    <div class="tile mx-auto">
                        <img src='images/soda-bottle.jpg'/>
                        <?php $soda = "Soda Bottles"; ?>
                        <div class="text">
                            <h1>Soda Bottles</h1>
                            <h2 class="animate-text"><?php getItemRecyclable($soda); ?></h2>
                		        <p class="animate-text"><?php getItemSpecifics($soda); ?></p>
                            <div class="dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    
                    
                    <div class="tile mx-auto">
                        <img src='images/glass-jar.jpg'/>
                        <?php $jars = "Glass Jars"; ?>
                        <div class="text">
                            <h1>Glass Jars</h1>
                            <h2 class="animate-text"><?php getItemRecyclable($jars); ?></h2>
                		        <p class="animate-text"><?php getItemSpecifics($jars); ?></p>
                            <div class="dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div> <!-- close div for wrap -->

            </div> <!-- close div for entire page minus sidebar -->
        </div>  <!-- parent row close div. contains sidebar + rest of page -->


      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>