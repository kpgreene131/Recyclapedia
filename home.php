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
    <?php include 'home_info.php';?>
  </head>
  <body>
      <div class="row"> <!-- parent row. contains sidebar + rest of page -->
          <!-- Vertical navbar on side of page -->
              <!-- navbar template from getbootstrap.com/docs/4.0/components/navbar/ -->
              <!-- nav links will move to drop down menu on screens smaller than medium -->
          <nav class="navbar navbar-expand-md navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto flex-column">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Metal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Plastic</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Glass</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Paper/Carton</a>
                  </li>
                  </li>
                </ul>
              </div>
            </nav>

          <div class="col-10"> <!-- all of page besides sidebar -->
              <div class="row">
                  <div class="col-12">
                      <div class="jumbotron jumbotron-fluid">
                          <div class="container">
                              <h1 class="display-4">Recyclapedia</h1>
                          </div>
                      </div>
                  </div>
              </div>



<!-- This section is for the animated images-->

            <div class="wrap">
                <div class="tile">
                    <img src='images/cardboard.jpg'/>
                    <div class="text">
                        <h1><?=$cardboardTitle?></h1>
                        <h2 class="animate-text"><?=$cbRecyclable?></h2>
                        <p class="animate-text"> <?=$cbSpecifics?> </p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>


                <div class="tile">
                    <img src='images/Glass.png'/>
                    <div class="text">
                        <h1><?=$glassTitle?></h1>
                        <h2 class="animate-text"><?=$glRecyclable?></h2>
                        <p class="animate-text"> <?=$glSpecifics?> </p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="tile">
                    <img src='images/Aluminium-packaging-2015.jpg'/>
                    <div class="text">
                        <h1><?=$aluminumTitle?></h1>
                        <h2 class="animate-text"><?=$alRecyclable?></h2>
                        <p class="animate-text"> <?=$alSpecifics?> </p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>


                <div class="tile">
                    <img src='images/metals.jpg'/>
                    <div class="text">
                        <h1><?=$metalTitle?></h1>
                        <h2 class="animate-text"><?=$mRecyclable?></h2>
                        <p class="animate-text"><?=$mSpecifics?></p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="tile">
                    <img src='images/PET-bottles2.jpg'/>
                    <div class="text">
                        <h1><?=$plasticTitle?></h1>
                        <h2 class="animate-text"><?=$pRecyclable?></h2>
                        <p class="animate-text"> <?=$pSpecifics?> </p>
                        <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
       </div> <!-- close div for entire page minus sidebar -->
    </div> <!-- parent row close div. contains sidebar + rest of page -->

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
