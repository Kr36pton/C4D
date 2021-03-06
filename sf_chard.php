<!DOCTYPE html>
<html>
    <head>
        <title>Combos 4 Dummies</title>
        <link rel="icon" href="assets/img/icon/icon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style5.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    </head>
    <header id="header">
        <div id="logopag1">
            <img src="img/logo/logo.png" alt="">
        </div>
        <div id="navegacion">
            <ul class="nav">
                <li><a href="index.html">HOME</a></li>
                <li><a href="games.html">GAMES</a>
                    <ul>
                        <li><a href="smash_chard.html"><i class="fas fa-fist-raised"></i> Smash Bros</a></li>
                        <li><a href="kof_chard.html"><i class="fas fa-fist-raised"></i> King Of Fighters</a></li>
                        <li><a href="sf_chard.html"><i class="fas fa-fist-raised"></i> Street Fighter</a></li>
                        <li><a href="sg_chard.html"><i class="fas fa-fist-raised"></i> SkullGirls</a></li>
                        <li><a href="dbfz_chard.html"><i class="fas fa-fist-raised"></i> Dragon Ball Z Fighter</a></li>
                        <li><a href="t_chard.html"><i class="fas fa-fist-raised"></i> Tekken</a></li>
                        <li><a href="mk_chard.html"><i class="fas fa-fist-raised"></i> Mortal Kombat 11</a></li>
                        <li><a href="i_chard.html"><i class="fas fa-fist-raised"></i> Injustice </a></li>
                    </ul>
                </li>
                <li><a href="news.html">NEWS</a></li>
                <li><a href="social.html">SOCIAL</a>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </li>
            </ul>
        </div>            
    </header>
    <body bgcolor="#3A103E">
        <section>
            <br>
            <br>
            <div id="primerpedazo">
                <div id="texto1">
                    <h1>Street Fighter V<br> Characters</h1>
                </div>
                <div id="sisaspa">
                    <img src="assets/img/elements/sfcaratula.jpg" id="sgimg" width="290" height="390" alt="">
                </div>
                <div id="personajessf">
                <?php
					include("conexion.php");
					$query = "SELECT * FROM personajessf";
					$resultado = $conexion->query($query);
					while ($row = $resultado->fetch_assoc()) {
				?>		
                    <a href="characters_sf.php?id=<?php echo $row['id'];?>"><img id="whit" height="44px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></a>

                    <?php
					}
				?>
                </div>
            </div>
        </section>
        <footer id="pater">
            <div id="logocacho"><img src="assets/img/logo/logo2_footer.png" alt=""></div>
            <div id="redescacho">
                <center><h1>Redes</h1></center>
                <div class="redsocial"><a href="#"><i class="fab fa-facebook fa-3x" style="color: white;"></i></a></div><br>  
                <div class="redsocial"><a href="#"><i class="fab fa-twitter fa-3x" style="color: white;"></i></a></div><br>
                <div class="redsocial"><a href="#"><i class="fab fa-instagram fa-3x" style="color: white;"></i></a></div>  
            </div>
            <div id="copirai">
                <i class="far fa-copyright"></i>ManeStudios 2021
            </div>
        </footer>
    </body>
</html>