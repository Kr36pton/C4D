<!DOCTYPE html>
<html>
    <head>
        <title>Combos 4 Dummies</title>
        <link rel="icon" href="assets/img/icon/icon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/css/style10.css">
    </head>
    <header id="header">
        <div id="logopag1">
            <img src="assets/img/logo/logo.png" alt="">
        </div>
        <div id="navegacion">
            <ul class="nav">
                <li><a href="index.html">HOME</a></li>
                <li><a href="games.html">GAMES</a>
                    <ul>
                    <li><a href="smash_chard.php"><i class="fas fa-fist-raised"></i> Smash Bros</a></li>
                        <li><a href="kof_chard.php"><i class="fas fa-fist-raised"></i> King Of Fighters</a></li>
                        <li><a href="sf_chard.php"><i class="fas fa-fist-raised"></i> Street Fighter</a></li>
                        <li><a href="sg_chard.php"><i class="fas fa-fist-raised"></i> SkullGirls</a></li>
                        <li><a href="dbfz_chard.php"><i class="fas fa-fist-raised"></i> Dragon Ball Z Fighter</a></li>
                        <li><a href="t_chard.php"><i class="fas fa-fist-raised"></i> Tekken</a></li>
                        <li><a href="mk_chard.php"><i class="fas fa-fist-raised"></i> Mortal Kombat 11</a></li>
                        <li><a href="i_chard.php"><i class="fas fa-fist-raised"></i> Injustice </a></li>
                    </ul>
                </li>
                <li><a href="news.html">NEWS</a></li>
                <li><a href="social.html">SOCIAL</a>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-instagram-square"></i> Instagram</a></li>
                    </ul>
                </li>
            </ul>
        </div>            
    </header>
    <body bgcolor="#3A103E">
        <section>
            <div id="primercachojuasjuas">
                <div id="text1_char">
                    <h1>
                    <?php
                        include("conexion.php");
                        $id = $_REQUEST['id'];
                        $query = "SELECT * FROM personajessf where id='$id'";
                        $resultado = $conexion->query($query);
                        while ($row = $resultado->fetch_assoc()) {
                        ?>	  
                            <?php echo $row['nombre'];?>
                        <?php
				    	}
				        ?>	
                    </h1>
                </div>
                <div id="movementstablecacho">
                    <div id="text2_char"><h2>Cool Fighting Moves</h2></div>
                    <table border="1" id="tablecharacters">
                        <thead>
                            <tr>
                                <th>- MOVE -</th>
                                <th>- INPUT -</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("conexion.php");
                            $id = $_REQUEST['id'];
                            $query = "SELECT * FROM personajessf where id='$id'";
                            $resultado = $conexion->query($query);
                            while ($row = $resultado->fetch_assoc()) {
                            ?>	
                            <tr>
                                <td><?php echo $row['poder1'];?></td>
                                <td><center><img height="50px" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($row['input1']); ?>"/></center></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['poder2'];?></td>
                                <td><center><img height="50px" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($row['input2']); ?>"/></center></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['poder3'];?></td>
                                <td><center><img height="50px" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($row['input3']); ?>"/></center></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['poder4'];?></td>
                                <td><center><img height="50px" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($row['input4']); ?>"/></center></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['poder5'];?></td>
                                <td><center><img height="50px" width="auto" src="data:image/jpg;base64,<?php echo base64_encode($row['input5']); ?>"/></center></td>
                            </tr>
                        </tbody>
                        <?php
					}
				?>	
                    </table>
                </div>
                <div id="datacharactertablecacho">
                <table border="1" id="datacharactertable">
                        <thead>
                        <?php
                        include("conexion.php");
                        $id = $_REQUEST['id'];
                        $query = "SELECT * FROM personajessf where id='$id'";
                        $resultado = $conexion->query($query);
                        while ($row = $resultado->fetch_assoc()) {
                        ?>	
                            <tr>
                                <th colspan="2"><?php echo $row['nombre'];?></th>
                            </tr>
                        <?php
				    	}
				        ?>	
                        </thead>
                        <tbody>
                        <?php
                        include("conexion.php");
                        $id = $_REQUEST['id'];
                        $query = "SELECT * FROM personajessf where id='$id'";
                        $resultado = $conexion->query($query);
                        while ($row = $resultado->fetch_assoc()) {
                        ?>	
                            <tr>
                                <td colspan="2"><center><img height="300px" width="300px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></center></td>
                            </tr>
                            <tr>
                                <td>NOMBRE</td>
                                <td><?php echo $row['nombre'];?></td>
                            </tr>
                            <tr>
                                <td>ALTURA</td>
                                <td><?php echo $row['altura'];?></td>
                            </tr>
                            <tr>
                                <td>TIPO</td>
                                <td><?php echo $row['tipo'];?></td>
                            </tr>
                            <tr>
                                <td>GENERO</td>
                                <td><?php echo $row['genero'];?></td>
                            </tr>
                            <tr>
                                <td>PESO</td>
                                <td><?php echo $row['peso'];?></td>
                            </tr>
                            <tr>
                                <td>EDAD</td>
                                <td><?php echo $row['edad'];?></td>
                            </tr>
                        </tbody>
                        <?php
					}
				?>	
                    </table>
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
        <script src="assets/js/script.js"></script>
        <script src="assets/fontawesome/js/all.js"></script>
    </body>
</html>