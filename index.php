<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>IcT Air</title>
</head>
<body id="home">
    <?php
        require_once("includes/navigation.php");
    ?>
    <header> 
        <div class="carousel">
            <i class="fa-solid fa-circle-left" id="prevBtn"></i>
            <form class="home_form" action="bestemmingen-search.php" method="GET">
                <h1>Waar wil je heen?</h1>
                <div class="elem-group">
                    <label for="name">Vanaf</label>
                    <input type="text" id="name" name="vluchthaven" placeholder="Vertrekluchthaven" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">Naar</label>
                    <input type="text" id="name" name="bestemming" placeholder="Bestemming" required>
                </div>
                <div class="elem-group">
                    <label for="meeting-time">Vertrek op</label>
                    <input type="date" id="date_selection" name="datum" value="" min="2022-04-07T00:00" max="2023-01-01T00:00"></label>
                </div>
                <div class="elem-group">
                    <label for="adult">Wie gaan er mee?</label>
                    <input type="number" id="adult" name="personen" placeholder="1 Volwassene" min="1" max="20">
                </div>
                <button type="submit" name="searchInput">Zoeken</button>
            </form>
            <i class="fa-solid fa-circle-right" id="nextBtn"></i>
            <div class="carousel_slide">
                <img src="img/carousel_vacation2.png" id="firstclone" alt="">
                <img src="img/carousel_plane.png" alt="">
                <img src="img/carousel_destenation.png" alt="">
                <img src="img/carousel_airport.png" alt="">
                <img src="img/carousel_vacation.png" alt="">
                <img src="img/carousel_vacation2.png" alt="">
                <img src="img/carousel_plane.png" id="lastclone" alt="">
            </div>
        </div>
    </header>
    <main> 
        <div class="intersection">
            <img src="img/intersection.png" alt="">
            <div class="intersection-text">
                <h3>Vlieg vanaf frankrijk met IcT Air</h3>
                <p>Vanaf komende zomer vlieg je vanaf frankrijk met IcT Air naar de mooiste bestemmingen in Europa. We bieden onder andere vluchten aan naar Faro, Alicante en Ibiza. Boek nu je ticket en geniet van een heerlijke vakantie. Waar ga jij naartoe?</p>
                <a href="pages/login-page.php">Boek nu</a>
            </div>
        </div>
        <div class="cards-home">
            <div class="card">
                <div class="card-img-left">
                    <i class="fa-solid fa-plane-circle-check"></i>
                </div>
                <h3>Boek met liefde</h3>
                <ul>
                    <li><a href="">Vliegen in klasse</a></li>
                    <li><a href="">Veilig en gezond vliegen</a></li>
                    <li><a href="">Geld terug bij anuleren</a></li>
                </ul>
            </div>
            <div class="card">
                <div class="card-img-right">
                    <i class="fa-solid fa-plane-circle-exclamation"></i>
                </div>
                <h3>Vlucht wijzigen</h3>
                <ul>
                    <li><a href="">Vlucht wijzigen</a></li>
                    <li><a href="">Vlucht anuleren</a></li>
                    <li><a href="">Geld terug bij anuleren</a></li>
                </ul>
            </div>
        </div>
        <div class="order-section">
            <div class="order-section-text">
                <h3>Bestel je maaltijd via Thuisbezorgd.nl</h3>
                <p>Je favoriete maaltijd aan boord? Vanaf nu kan het! Op alle vertrekkende vluchten vanaf Amsterdam kun je via Thuisbezorgd.nl eten bestellen dat aan boord geserveerd wordt. Van sushi tot Indian butter chicken: eet smakelijk! Wat ga jij bestellen?</p>
                <a href="">Meer informatie</a>
            </div>
            <img loading="lazy" src="img/order-section.png" alt="">
        </div>
        <div class="destinations">
            <h2>Onze mooiste rijzen!</h2>
            <div class="destinations-lists">
                <div class="destinations-list left">
                    <ul>
                        <li>
                            <a href="bestemmingen.php"> 
                                <img loading="lazy" src="img/destination-alicante.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                                <div class="destinations-list-text">
                                    <h4>Alicante</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <img loading="lazy" src="img/destination-athene.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                                <div class="destinations-list-text">
                                    <h4>Athene</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <img loading="lazy" src="img/destination-lissabon.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                                <div class="destinations-list-text">
                                    <h4>Lissabon</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <img loading="lazy" src="img/destination-milaan.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                                <div class="destinations-list-text">
                                    <h4>Milaan</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <img loading="lazy" src="img/destination-faro.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                                    <div class="destinations-list-text">
                                    <h4>Faro</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="destinations-list right">
                    <h3></h3>
                    <ul>
                        <li>
                            <a href="bestemmingen.php"> 
                                <div class="destinations-list-text">
                                    <h4>Malaga</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                                <img loading="lazy" src="img/destination-malaga.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <div class="destinations-list-text">
                                    <h4>Krakou</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                                <img loading="lazy" src="img/destination-krakou.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <div class="destinations-list-text">
                                    <h4>Riga</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                                <img loading="lazy" src="img/destination-riga.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <div class="destinations-list-text">
                                    <h4>Sardinië</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                                <img loading="lazy" src="img/destination-sardinië.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="bestemmingen.php"> 
                                <div class="destinations-list-text">
                                    <h4>Nice</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae velit aliquam quidem nihil, eos neque enim esse fugit optio qui, porro nobis corrupti dignissimos vel cupiditate in non praesentium alias?</p>
                                </div>
                                <img loading="lazy" src="img/destination-nice.png" style="width: 300px; height: 200px;" Loading="lazy" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
    </main>
    <?php
        require_once("includes/footer.php");
    ?>
    <script src="js/carousel.js"></script>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
</body>
</html>