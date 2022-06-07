<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio avec bootstrap</title>

	<!----------Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--Link Reseaux sociaux font awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--feuille de style-->
    <link rel="stylesheet" href="css/styles.css">
   
   <title> hello World</title>
</head>
	
<body class="body">
	<header class="py-4">
		<nav class="navbar navbar-expand-md fixed-top navbar-light">
     
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#johndoe">Qui suis-je ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#expertise">Expertises</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	</header>
	<main>
		<section class="intro">
			<div class="container-fluid p-0">
					<div class="col-12 col-md-6  introduction">
						<a href="index.php#expertise"><i class="bi bi-arrow-down bounce"></i></a>
					</div>
				</div>
			</div>
		</section>

		<!--Expertise et experience-->
	<section id="expertise" class="py-5 bg-light">
      <div class="container">
        <h2 class="mb-0">Mon expertise</h2>
        <h3 class="fw-light fs-5" id="expertise">Développement web et design</h3>
        <!-- Developpement -->
        <div class="row align-items-center gy-4 mt-4">
          <div class="col-12 col-md-7">

            <!-- Progress bar -->
            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-html5 fa-2x me-3 text-success"></i>
                    <p class="fw-bold m-0">HTML5</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="75%">
                    <div class="progress-bar bg-info w-75 " role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-css3-alt fa-2x me-3 text-success"></i>
                    <p class="fw-bold m-0">CSS3</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="100%">
                    <div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-js fa-2x me-3 text-success"></i>
                    <p class="fw-bold m-0">JS</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="75%">
                    <div class="progress-bar bg-warning w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-php fa-2x me-3 text-primary"></i>
                    <p class="fw-bold m-0">PHP</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="75%">
                    <div class="progress-bar bg-warning w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-sass fa-2x me-3 text-primary"></i>
                    <p class="fw-bold m-0">REACT</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="50%">
                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 offset-md-1 col-md-4">
            <img src="./assets/images/code.jpg" alt="écran montrant du code php" width="100%" class="rounded-3 shadow">
          </div>
        </div>

         <!-- Design -->
        <div class="row align-items-center gy-4 mt-4">
          <div class="col-12 col-md-4">
            <img src="./assets/images/design.JPG" alt="écran montrant des designs" width="100%" class="rounded-3 shadow">
          </div>
          <div class="col-12 order-first offset-md-1 col-md-7 order-md-last">

            <!-- Progress bar -->
            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-figma fa-2x me-3 text-primary"></i>
                    <p class="fw-bold m-0">Figma</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="75%">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-photo-video fa-2x me-3 text-primary"></i>
                    <p class="fw-bold m-0">Suite Adobe</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="100%">
                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-palette fa-2x me-3 text-primary"></i>
                    <p class="fw-bold m-0">Design UI</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="75%">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white rounded-3 shadow-sm">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-vial fa-2x me-3 text-primary"></i>
                    <p class="fw-bold m-0">Design UX</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress" data-bs-toggle="tooltip" title="75%">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>

	</section>
		<!--Porfolio-->
	<section id="portfolio" class="py-5">
		<div class="container">
        <h2 class="mb-0">Mon portfolio</h2>
        <h3 class="fw-light fs-5">Projets perso et pro</h3>

        <div class="row gy-4 gy-md-0 mt-4">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <img src="./assets/images/pharmacopéechinoisenb.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Acupuncture LEE</h5>
                <p class="card-text">Remise a neuf d'un Site web pour une Clinique d'acupuncture a Montreal</p>
                <a class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#infoProjet1"
                   aria-controls="infoProjet1">En savoir plus</a><a href="#"><i class="fa fa-github"></i></a>
              </div>
             
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoProjet1"
                   aria-labelledby="titelProjet1">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titelProjet1">Projet 1</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselProject1" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item h-100 active" data-bs-interval="10000">
                        <img src="https://picsum.photos/1920/1080?random=1" class="d-block w-100" alt="Image slide 1">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100" data-bs-interval="2000">
                        <img src="https://picsum.photos/1920/1080?random=2" class="d-block w-100" alt="Image slide 2">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100">
                        <img src="https://picsum.photos/1920/1080?random=3" class="d-block w-100" alt="Image slide 3">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject1"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProject1"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <img src="./assets/images/coolboxred.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Projet CoolBox</h5>
                <p class="card-text">Création d'un site Web pour Site CoolBox Sépaq province de Québec</p>
                <a class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#infoProjet2"
                   aria-controls="infoProjet2">En savoir plus</a><a href="#"><i class="fa fa-github"></i></a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoProjet2"
                   aria-labelledby="titelProjet2">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titelProjet1">Projet 2</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselProject2" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item h-100 active" data-bs-interval="10000">
                        <img src="https://picsum.photos/1920/1080?random=4" class="d-block w-100" alt="Image slide 1">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100" data-bs-interval="2000">
                        <img src="https://picsum.photos/1920/1080?random=5" class="d-block w-100" alt="Image slide 2">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100">
                        <img src="https://picsum.photos/1920/1080?random=6" class="d-block w-100" alt="Image slide 3">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject2"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProject2"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <img src="./assets/images/café-mexicain.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Site personnel Cafe Chiapas (En Cours)</h5>
                <p class="card-text">Projet personnel Boutique en ligne Cafe Chaipaneco</p>
                <a class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#infoProjet3"
                   aria-controls="infoProjet3">En savoir plus</a><a href="#"><i class="fa fa-github"></i></a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoProjet3"
                   aria-labelledby="titelProjet3">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titelProjet1">Projet 3</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselProject3" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item h-100 active" data-bs-interval="10000">
                        <img src="./assets/images/chiapascafe.webp" class="d-block w-100" alt="Image slide 1">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100" data-bs-interval="2000">
                        <img src="./assets/images/chiapas1.jpg" class="d-block w-100" alt="Image slide 2">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100">
                        <img src="./assets/images/cafechiapas.jpg" class="d-block w-100" alt="Image slide 3">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject3"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProject3"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <img src="./assets/images/thermalisme.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Projet Centre Thermal Absalon (En Attente)</h5>
                <p class="card-text">Centre Thermale de Remise en Forme Martinique</p>
                <a class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#infoProjet4"
                   aria-controls="infoProjet4">En savoir plus</a><a href="#"><i class="fa fa-github"></i></a>
              </div>
              <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoProjet4"
                   aria-labelledby="titelProjet4">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="titelProjet1">Projet 4</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Carousel -->
                  <div id="carouselProject4" class="carousel slide shadow h-100" data-bs-ride="carousel"
                       data-bs-touch="true">
                    <div class="carousel-inner h-100">
                      <div class="carousel-item h-100 active" data-bs-interval="10000">
                        <img src="./assets/images/absalon2.jpg" class="d-block w-100" alt="Image slide 1">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 1</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100" data-bs-interval="2000">
                        <img src="./assets/images/absalon1.jpg" class="d-block w-100" alt="Image slide 2">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 2</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                      <div class="carousel-item h-100">
                        <img src="./assets/images/Villagecréol.jpg" class="d-block w-100" alt="Image slide 3">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide 3</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            sollicitudin.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject4"
                            data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProject4"
                            data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="py-5  bg-light">
      <div class="container">
        <h2 class="mb-0">Un projet de création web ?</h2>
        <h3 class="fw-light fs-5">Allons en discuter autour d'un café</h3>

        <div class="row gy-4 mt-4">
          <div class="col-12 col-md-5 coffee">
            <img src="./assets/images/grabacoffee.jpg" alt="Image d'une tasse de café" width="75%" class="rounded-3 shadow">
          </div>
          <div class="col-12 offset-md-1 col-md-6">
            <!-- Formulaire -->
            <form class="row" action="https://formsubmit.co/tlatoani.moctezuma11@gmail.com" method="POST">
              <div class="col-6 my-2">
                <label for="firstname" class="form-label">Prénom</label>
                <input name="firstname" type="text" class="form-control" id="firstname">
              </div>
              <div class="col-6 my-2">
                <label for="name" class="form-label">Nom</label>
                <input name="name" type="text" class="form-control" id="name">
              </div>
              <div class="col-12 my-2">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email">
              </div>
              <div class="col-12 my-2">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="col-12 my-2">
                <button type="submit" class="btn btn-success w-100">Envoyer</button></a>
              </div>
            </form>

          </div>
        </div>
       
      </div>
		</section>
		<section class="py-5 bg-light"></section>
	</main>
	<footer class="border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 reseau">
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                   
    </footer>

    
<!-- Bootstrap JS bundle →-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
     return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>

</body>
</html>