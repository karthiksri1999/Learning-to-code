<!--php-->

<?php 
session_start();
if(!$_SESSION["userid"]){
    header("Location: login.php");
}else{ 
?>
<?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        window.addEventListener("load", function() 
        {
            var load_screen = document.getElementById("load_screen");
            document.body.removeChild(load_screen);
        });
    </script>

    <body>
        <div id="load_screen">
            <div id="loading"><img src="images/logo.png" width="100px"></div>
        </div>

        <title>GameZone </title>
        <link rel="icon" href="images/logo.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
</head>

<!--<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a> -->

<header>

    <!-- NAVBAR -->

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div>
                        <h5>
                            <span>G</span>
                            <span>a</span>
                            <span>m</span>
                            <span>e</span>
                            <span>Z</span>
                            <span>o</span>
                            <span>n</span>
                            <span>e</span>
                            <span class="glow"><i class='fas fa-headset' style="font-size: 25px; color: red; margin-left: 10px; margin-top: 7px;"></i></span>
                        </h5>
                        <h4>
                            <span>E</span>
                            <span>s</span>
                            <span>c</span>
                            <span>a</span>
                            <span>p</span>
                            <span>e</span>
                            <span>R</span>
                            <span>e</span>
                            <span>a</span>
                            <span>l</span>
                            <span>i</span>
                            <span>t</span>
                            <span>y</span>
                        </h4>
                    </div>
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#"><img src="images/home.svg" width="20">Home</a>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Accessories<span class="caret"></span></a>
                <ul class="dropdown-menu">
                        <li><a href="https://www.amazon.in/Gaming-Consoles/b?ie=UTF8&node=4092115031">Consoles</a></li>
                        <li><a href="https://www.amazon.in/s?k=gaming+pc&crid=368PIT1QOJ3RU&sprefix=gaming+%2Caps%2C330&ref=nb_sb_ss_i_5_7">Gaming PC's</a></li>
                        <li><a href="https://www.amazon.in/s?k=gaming+headphones&crid=2OZW43XUNW4Z9&sprefix=gaming+he%2Caps%2C288&ref=nb_sb_ss_i_1_9">Headsets</a></li>
                        <li><a href="https://www.amazon.in/s?k=gaming+keyboards&crid=1V34CAEKGG4B9&sprefix=gaming+key%2Caps%2C297&ref=nb_sb_ss_i_1_10">Keyboards</a></li>
                        <li><a href="https://www.amazon.in/s?k=gaming+mouse&rh=n%3A4092115031&ref=nb_sb_noss">Mouses</a></li>
                        <li><a href="https://www.amazon.in/s?k=gaming+controller&crid=1W2YAPP2AHEIN&sprefix=gaming+contr%2Caps%2C290&ref=nb_sb_noss_2">Controllers</a></li>
                        <li><a href="https://www.amazon.in/s?k=gaming+cases&crid=12VANFOURWQE9&sprefix=gaming+cases%2Caps%2C282&ref=nb_sb_ss_i_1_12">Cases & Covers</a></li>
                        <li><a href="https://www.amazon.in/s?k=gaming+assessories+kits&ref=nb_sb_noss">Accessory Kits</a></li>
                        <li><a href="https://www.amazon.in/s?k=batteries+and+chargers&ref=nb_sb_noss_2">Batteries & Chargers</a></li>
                        <li><a href="https://www.amazon.in/s?k=controllers+skins&ref=nb_sb_noss_2">Skins</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Genres<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www-oceanofgames.com/action/">Action</a></li>
                        <li><a href="https://www-oceanofgames.com/adventure/">Adventure</a></li>
                        <li><a href="https://www-oceanofgames.com/arcade/">Arcade</a></li>
                        <li><a href="https://www-oceanofgames.com/fantasy/">Fantasy</a></li>
                        <li><a href="https://www-oceanofgames.com/fighting/">Fighting</a></li>
                        <li><a href="https://www-oceanofgames.com/racing/">Racing</a></li>
                        <li><a href="https://www-oceanofgames.com/shooting-games/">Shooting</a></li>
                        <li><a href="https://www-oceanofgames.com/sports/">Sports</a></li>
                        <li><a href="https://www-oceanofgames.com/strategy/">Strategy</a></li>
                        <li><a href="https://www-oceanofgames.com/war/">War</a></li>
                    </ul>
                </li>
                <li><a href="#month">This month's pick</a></li>
                <li><a href="#up">Upcoming Games</a></li>
                <li><a href="#new">New Releases</a></li>
                <li><a href="#all">All Time Favorites</a></li>
                
            <!-- CART -->
                <li>
                    <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#cart" style="background-color: transparent; color: #9d9d9d; font-size: 13px; margin-top: 4px;"> <i class="glyphicon glyphicon-shopping-cart"></i>Cart</button>

                    <!-- Modal -->
                    <div id="cart" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="font-size: 37px; font-family: Alegreya SC;">Your Cart</h4>
                        </div>
                        <div class="modal-body modalbody">
                        </div>
                        <div class="modal-footer">
                            <a href="cart.html"><button type="button" class="btn btn-success">Checkout Cart</button></a>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                    </div>
                </li>
                <li>

                <!-- ABOUT ME -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal0" style="background: transparent; font-size: 13px; border-color: transparent; margin-top: 4px; color: #9d9d9d;"><i class='fas fa-headset' style='font-size:17px'></i>About Me</button>
                    <div class="modal fade" id="myModal0" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <center>
                                        <h4 class="modal-title" style="font-size: 30px;">Karthik Srikanth</h4>
                                    </center>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <img src="uploads/karthik.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
                                        <h3 style="color: black; font-family: greatvibes;">I'm an Adventurer</h3>
                                        <h3 style="color: black; font-family: greatvibes;">Web Developer</h3>
                                        <h3 style="color: black; font-family: greatvibes;">Gamer</h3>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <center>
                                        <h4 style="color: blue; font-family: greatvibes;">Follow me</h4><br>
                                        <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="facebook-icon" width="7%"></a>
                                        <a href="https://twitter.com/login?lang=en"><img src="images/twitter.png" alt="twitter-icon" width="7%"></a>
                                        <a href="https://www.pinterest.com/"><img src="images/pinterest.png" alt="pinterest-icon" width="7%"></a>
                                        <a href="https://www.instagram.com/?hl=en"><img src="images/instagram.png" alt="instagram-icon" width="7%"></a>
                                    </center>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- END OF NAVBAR -->

</header>

<!--PHP-->

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reg_login";

  $conn = new mysqli($servername, $username, $password, $dbname) or die("Unable to connect");

  $userid = $_SESSION["userid"];
  $sql = "SELECT * FROM register where e_mail = '$userid'";
  $result = $conn->query($sql);
  $imageName = "";
  $username="";

if ($result->num_rows==1) {
  $row = $result->fetch_assoc();
  $imageName= $row['image'];
  $username= $row['name'];
}
?>

    <!--profile picture-->

    <!-- <p align="right"><img src="uploads/<?php echo $imageName; ?>" class="img-circle" alt="avatar" width="150" height="150">

<?php
    echo " Welcome ".$_SESSION["userid"];
?> -->

    <!--CAROUSEL-->
    
    <div class="container">          
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="img-fluid" src="images/breakpoint.jpg">
            <div class="carousel-caption">
              <a class="buttonmore" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -120px;">Read More +</a>
              <div class="collapse" id="collapse4">
                  <div class="card card-body">
                      <p>The game is set in an open world environment called Auroa, a fictional island chain in the Pacific Ocean. The player takes on the role of Lieutenant Colonel Anthony "Nomad" Perryman a U.S. Special Operation Forces service member sent to the island to investigate a series of disturbances involving Skell Technology, a military contractor based on Auroa. Upon release, Tom Clancy's Ghost Recon Breakpoint received mixed reviews from critics and underperformed commercially. </p>
                  </div>
              </div>
              <a href="https://www.youtube.com/embed/6dl96_-ehbI" class="buttonmore" id="videolink">
                  watch Trailer <i class="fa fa-play-circle" aria-hidden="true"> &nbsp;</i>
              </a>
              <h3>Tom Clancy's Ghost Recon Breakpoint</h3>
            </div>  
          </div>
          <div class="item">
            <img class="img-fluid" src="images/rdr2.png">
            <div class="carousel-caption">
              <a class="buttonmore" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -120px;">Read More +</a>
              <div class="collapse" id="collapse5">
                  <div class="card card-body">
                      <p>The game is presented through both first and third-person perspectives, and the player may freely roam in its interactive open world. Gameplay elements include shootouts, heists, hunting, horseback riding, interacting with non-player characters (NPCs), and maintaining the character's honor rating through moral choices and deeds. A bounty system similar to the "wanted" system from the Grand Theft Auto franchise governs the response of law enforcement and bounty hunters to crimes committed by the player.</p>
                  </div>
              </div>
              <a href="https://www.youtube.com/embed/eaW0tYpxyp0" class="buttonmore" id="videolink">
                  watch Trailer <i class="fa fa-play-circle" aria-hidden="true"> &nbsp;</i>
              </a>
              <h3>Red Dead Redemption 2</h3>
            </div>
          </div>
          <div class="item">
            <img src="images/cyberpunk.jpg">
            <div class="carousel-caption">
              <a class="buttonmore" data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -120px;">Read More +</a>
              <div class="collapse" id="collapse6">
                  <div class="card card-body">
                      <p>Cyberpunk 2077 is an upcoming RPG from CD Projekt RED, the makers of critically acclaimed The Witcher series. The developer has been working on this new game for half a decade and we now have a better understanding as to what players will be able to do. Based on the pen-and-paper tabletop of the same name, this is expected to be one of the best games released for 2020.</p>
                  </div>
              </div>
              <a href="https://www.youtube.com/embed/UjxS9ciNlII" class="buttonmore" id="videolink">
                  watch Trailer <i class="fa fa-play-circle" aria-hidden="true"> &nbsp;</i>
              </a>  
              <h3>Cyberpunk 2077</h3>
          </div>
          </div>
          <div class="item">
            <img src="images/got.jpg">
            <div class="carousel-caption">
              <a class="buttonmore" data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -120px;">Read More +</a>
              <div class="collapse" id="collapse7">
                  <div class="card card-body">
                      <p>Ghost of Tsushima is an open world action adventure set during the Mongol invasion of Tsushima Island. Taking place in 1274, the game tells the tale of Jin, a samurai who barely survives a battle with the Mongol Empire. In order to fight back, Jin adopts new strategies and develops new techniques to catch his enemies off-guard. He becomes known as the titular Ghost of Tsushima, striking fear into his foes from the shadows.</p>
                  </div>
              </div>
              <a href="https://www.youtube.com/embed/FESJUA0_KR8" class="buttonmore" id="videolink">
                  watch Trailer <i class="fa fa-play-circle" aria-hidden="true"> &nbsp;</i>
              </a>   
              <h3>Ghost Of Tsushima</h3>
          </div>
          </div>
          <div class="item">
            <img src="images/sottr.jpg">
            <div class="carousel-caption">
              <a class="buttonmore" data-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -120px;">Read More +</a>
              <div class="collapse" id="collapse8">
                  <div class="card card-body">
                      <p>Set shortly after the events of Rise of the Tomb Raider, its story follows Lara Croft as she ventures through the tropical regions of the Americas to the legendary city Paititi, battling the paramilitary organization Trinity and racing to stop a Mayan apocalypse she has unleashed. Lara must traverse the environment and combat enemies with firearms and stealth as she explores semi-open hubs. In these hubs she can raid challenge tombs to unlock new rewards, complete side missions, and scavenge for resources which can be used to craft useful materials.</p>
                  </div>
              </div>
              <a href="https://www.youtube.com/embed/XYtyeqVQnRI" class="buttonmore" id="videolink">
                  watch Trailer <i class="fa fa-play-circle" aria-hidden="true"> &nbsp;</i>
              </a>   
              <h3>Shadow Of The Tomb Raider</h3>
          </div>
          </div>
        </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
      </a>
      </div>
  </div>

    <!-- END OF CAROUSEL -->

    <!-- JAVASCRIPT -->

    <script>

        // smooth scroll 

        function goToByScroll(id) {
            // Reove "link" from the ID
            id = id.replace("link", "");
            // Scroll
            $('html,body').animate({
                    scrollTop: $("#" + id).offset().top
                },
                'slow');
        }
        $("#sidebar > ul > li > a").click(function(e) {
            // Prevent a page reload when a link is pressed
            e.preventDefault();
            // Call the scroll function
            goToByScroll($(this).attr("id"));
        });
    </script>

    <!--THIS MONTH'S PICK-->
    
    <div class="container">
    <center>
        <h1 id="month" style="font-size: 37px; font-family: Alegreya SC;">This Month's Pick</h1>
    </center><br>
    <div class="cards">
        <div class="card">
            <a href="#" class="game-title">Grand Theft Auto V</a>
            <div class="meta-data">
                <a href="#">User: 9.1/10</a><br>
                <a href="#">Action</a>
            </div>
            <img src="bg-img/50.jpg" width="182px" height="300px">
        </div>
        <div class="card">
            <a href="#" class="game-title">Doom</a>
            <div class="meta-data">
                <a href="#">User: 8.8/10</a><br>
                <a href="#">Action</a>
            </div>
            <img src="bg-img/51.jpg" width="182px" height="300px">
        </div>
        <div class="card">
            <a href="#" class="game-title">God of War</a>
            <div class="meta-data">
                <a href="#">User: 8.1/10</a><br>
                <a href="#">Adventure</a>
            </div>
            <img src="bg-img/52.jpg" width="182px" height="300px">
        </div>
        <div class="card">
            <a href="#" class="game-title">Bloodborne</a>
            <div class="meta-data">
                <a href="#">User: 7.9/10</a><br>
                <a href="#">Action</a>
            </div>
            <img src="bg-img/53.jpg" width="182px" height="300px">
        </div>
        <div class="card">
            <a href="#" class="game-title">Persona 5</a>
            <div class="meta-data">
                <a href="#">User: 8.3/10</a><br>
                <a href="#">Adventure</a>
            </div>
            <img src="bg-img/54.jpg" width="182px" height="300px">
        </div>
        <div class="card">
            <a href="#" class="game-title">Need For Speed: Heat</a>
            <div class="meta-data">
                <a href="#">User: 9/10</a><br>
                <a href="#">Racing</a>
            </div>
            <img src="bg-img/55.jpg" width="182px" height="300px">
        </div>
        <div class="card">
            <a href="#" class="game-title">Anthem</a>
            <div class="meta-data">
                <a href="#">User: 8.4/10</a><br>
                <a href="#">Action/RPG</a>
            </div>
            <img src="bg-img/56.jpg" width="182px" height="300px">
        </div>
    </div>
    </div>

    <!-- END OF THIS MONTH'S PICK-->

    <!-- LATEST ARTICLES -->

    <br>
    <center style="font-size: 37px; font-family: Alegreya SC;">Latest Articles</center>

    <div class="container-fluid" style="background-image: url('bg-img/5.jpg');">

        <div class="w3-container">
            <h2 style="font-family: Alegreya SC">Gadgets</h2>

            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <center>
                        <h3 style="font-family: Alegreya SC">Xbox Series X</h3>
                    </center>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="https://compass-ssl.xbox.com/assets/85/8b/858b94d4-0ca6-4e74-ac9f-38565c49f2df.jpg?n=Xbox-Series-X_Image-0_1083x1400_02.jpg" alt="Avatar" class="w3-left img-rounded w3-margin-right" style="width:160px">
                    <p style="font-size: 17px; color: white; font-family: 'Open Sans', sans-serif;">Xbox Series X is the next-generation Xbox, releasing in late 2020. Previously known by its codename 'Xbox Project Scarlett', the Xbox Series X was officially revealed at The Game Awards 2019 with a trailer that showed off the next
                        Xbox in all its glory........</p><br>
                </div>
                <p>
                    <center><a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -120px;">Read More +</a></center>
                </p>
                <div class="collapse" id="collapse">
                    <div class="card card-body">
                        <p>So far we know when the next Xbox will release, its official name, a few of the specs on offer, as well as what it's going to look like. It seems like Xbox Series X will be a bit of a departure both design-wise and name-wise from
                            its predecessors, sporting a blockier style that's similar to that of a small gaming PC. More importantly, the specs Microsoft has revealed so far suggest the new Xbox going to be an absolute powerhouse.</p>
                        <br>
                        <img src="images/xbox-card.jpg" alt="xbox-card" width="50%">
                        <br>
                        <h3 style="font-family: Julee; color: #eb7734;"> Xbox Series X: key facts </h3>
                        <br>
                        <ul class="b">
                            <li><strong> What is it?</strong> Xbox Series X will be the next-gen Xbox console (previously known as Xbox Project Scarlett)</li>
                            <li><strong> Xbox Series X release date:</strong> "Holiday 2020" (So between October and December 2020)</li>
                            <li><strong> What will the Xbox Series X cost?</strong> No prices yet, and we're not expecting it to be cheap. But Microsoft has said it won't be making the same pricing mistakes as last generation so perhaps we'll be pleasantly
                                surprised.
                            </li>
                            <li><strong> Will Xbox Series X have VR?</strong> Microsoft doesn't have anything to say about VR on the Xbox yet, though Sony has confirmed that PSVR will work on its own incoming console.</li>
                            <br>
                            <h3 style="font-family: Julee; color: #eb7734;"> Xbox Series X Specs </h3>
                            <li>Custom-designed processor from AMD (making use of Zen 2 and Navi architecture)</li>
                            <li>Twice as powerful than Xbox One X</li>
                            <li>Capable of running games at 120Hz frame rates</li>
                            <li>Potential 8K resolutions</li>
                            <li>Ray-tracing technology</li>
                            <li>SSD storage system</li>
                            <li>Compatible with Xbox one accessories</li>
                            <li>Physical disc drive</li>
                    </div>
                </div>
            </div>
            <br>

            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <center>
                        <h3 style="font-family: Alegreya SC">Playstation 5</h3>
                    </center>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="https://pbs.twimg.com/media/EGWvqO9XkAELKED.jpg:large" alt="Avatar" class="w3-left img-rounded w3-margin-right" style="width:160px">
                    <p style="font-size: 17px; color: white; font-family: 'Open Sans', sans-serif;">PS5 is the next-generation PlayStation, releasing in late 2020, So what do we know about the PS5 so far? The hysteria started in early 2019, when Mark Cerny, the chief architect on Sony's next console, confirmed that the company wasworking
                        on the successor to the PS4 Slim and PS4 Pro........</p><br>
                </div>
                <p>
                    <center><a class="btn btn-primary" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -60px;">Read More +</a></center>
                </p>
                <div class="collapse" id="collapse1">
                    <div class="card card-body">
                        <p>So what do we know about the PS5 so far? The hysteria started in early 2019, when Mark Cerny, the chief architect on Sony's next console, confirmed that the company was working on the successor to the PS4 Slim and PS4 Pro.</p>
                        <br>
                        <p>There are rumors that Sony is planning a PS5 reveal event in the near future, although this hasn't been confirmed.</p>
                        <br>
                        <img src="images/ps5-card.png" alt="ps5-card" width="50%">
                        <br>
                        <h3 style="font-family: Julee; color: #eb7734;"> Playstation 5: key facts </h3>
                        <br>
                        <ul class="b">
                            <li><strong> What is it?</strong> The Sony PS5 is the next-gen PlayStation console, replacing the PS4 Slim and PS4 Pro.</li>
                            <li><strong> PS5 release date:</strong> "Holiday 2020" (So between October and December 2020)</li>
                            <li><strong> What will the PS5 cost?</strong> The PS4 and PS4 Pro were both $399 / £349 at launch, but we expect the PS5 will cost somewhat more. Leaks have suggested around the $499 mark.</li>
                            <li><strong> Will PS5 have VR?</strong> The next-gen console will be compatible with current PSVR hardware, and there are also rumors of PSVR 2.</li>
                            <br>
                            <h3 style="font-family: Julee; color: #eb7734;"> Playstation 5 Specs </h3>
                            <li>Bespoke 8-core AMD chipset (based on third-generation Ryzen architecture and with Navi GPU)</li>
                            <li>SSD storage system</li>
                            <li>Capable of running games at 120Hz frame rates</li>
                            <li>Backwards compatibility with PS4 games and PSVR hardware</li>
                            <li>3D audio</li>
                            <li>8K TV support</li>
                    </div>
                </div>
            </div>
            <br>

            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <center>
                        <h3 style="font-family: Alegreya SC">Nintendo Switch Pro</h3>
                    </center>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="https://img.huffingtonpost.com/asset/5d562c043b0000a912dc4e55.png?ops=scalefit_630_noupscale" alt="Avatar" class="w3-left img-rounded w3-margin-right" style="width:160px">
                    <p style="font-size: 17px; color: white; font-family: 'Open Sans', sans-serif;">Rumors about a more potent Nintendo Switch “Pro” console have been circulating since early 2019. Despite some claims that an upgraded console might release this year, Nintendo has confirmed that's not the case. Here's the reason why........</p><br>
                </div>
                <p>
                    <center><a class="btn btn-primary" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -60px;">Read More +</a></center>
                </p>
                <div class="collapse" id="collapse2">
                    <div class="card card-body">
                        <p>The Nintendo Switch family could soon get a more powerful sibling. Rumors have long been flying about a Nintendo Switch Pro (or Nintendo Switch 2), which would bring beefier internals and potentially new features to Nintendo’s
                            beloved hybrid games console. We could even see this rumored new Switch as soon as late 2020, setting it up to compete with the PS5 and Xbox Series X.</p>
                        <br>
                        <img src="images/switch-card.jpg" alt="switch-card" width="50%">
                        <br>
                        <h3 style="font-family: Julee; color: #eb7734;"> Nintendo Switch Pro: key facts </h3>
                        <br>
                        <ul class="b">
                            <li><strong> What is it?</strong> The Nintendo Switch is the next-gen PlayStation console, replacing the Nintendo Switch and Nintendo Switch lite.</li>
                            <li><strong> Nintendo Switch Pro release date:</strong> The fabled Nintendo Switch Pro or Nintendo Switch 2 could be released as soon as mid-2020</li>
                            <li><strong> What will the Nintendo Switch Pro cost?</strong> While there’s no official price set for Nintendo’s next Switch, it seems safe to assume it’ll cost more than the $299 base model.</li>
                            <br>
                            <h3 style="font-family: Julee; color: #eb7734;"> Nintendo Switch Pro Specs </h3>
                            <li>A custom Nvidia Tegra Xavier processor</li>
                            <li>64GB SSD</li>
                            <li>4K video support</li>
                            <li>Backwards compatibility with Nintendo Switch games and PSVR</li>
                            <li>Two USB-C ports</li>
                    </div>
                </div>
            </div>
            <br>

            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <center>
                        <h3 style="font-family: Alegreya SC">Nvidia RTX 3080 series</h3>
                    </center>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="https://cdn.mos.cms.futurecdn.net/KsxFDFxQ59SQ3pHckPnJpJ-320-80.jpg" alt="Avatar" class="w3-left img-rounded w3-margin-right" style="width:160px">
                    <p style="font-size: 17px; color: white; font-family: 'Open Sans', sans-serif;">We heard about the purported GeForce RTX 3000 series cards not too long ago now, with NVIDIA reportedly preparing the GeForce RTX 3080 Ti, GeForce RTX 3080, and GeForce RTX 3070 graphics cards for 2020. But the big question is when
                        exactly, in 2020?........</p><br>
                </div>
                <p>
                    <center><a class="btn btn-primary" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -60px;">Read More +</a></center>
                </p>
                <div class="collapse" id="collapse3">
                    <div class="card card-body">
                        <p>It’s been nearly two years since Nvidia debuted its GeForce RTX 20-series graphics cards, which delivered a big power bump from the GTX 10-series line and introduced advanced AI features as well as ray tracing for ultra-immersive
                            lighting. These cards got a minor refresh in 2019 as part of the RTX 20 Super series, but now all eyes are on the next generation: The rumored GeForce RTX 3080, based on Nvidia’s new Ampere architecture. </p>
                        <br>
                        <p>With leaks already coming fast, most signs are pointing to the Nvidia RTX 3080 series launching sometime in 2020. Here’s everything we know about the card that will power the next generation of gaming PCs, including the RTX 3080’s
                            potential release date, price, specs and more. </p>
                        <br>
                        <img src="images/nvidia-card.jpg" alt="nvidia-card" width="50%">
                        <br>
                        <h3 style="font-family: Julee; color: #eb7734;"> Nvidia RTX 3080: key facts </h3>
                        <br>
                        <ul class="b">
                            <li><strong> What is it?</strong> The next Gen Nvidia GeForce flagship Graphics Card</li>
                            <li><strong> RTX 3080 release date:</strong> TBA</li>
                            <li><strong> What will the RTX 3080 cost?</strong> Likely around the same price as the Nvidia GeForce RTX 2080</li>
                            <br>
                            <h3 style="font-family: Julee; color: #eb7734;"> Nvidia RTX 3080 Specs </h3>
                            <li>It'll be 7nm and will be faster than the RTX 2080</li>
                            <li>Boost performance - up to 50%</li>
                            <li>4K & 8k Graphics support</li>
                            <li>10GB/20GB Graphics Memory</li>
                            <li>60 SM , 320-bit</li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF LATEST ARTICLES -->

    <!-- UPCOMING TITLES -->

    <div class="container" style="  align-items: center;">
    <center>
        <h1 id="up" style="font-size: 37px; font-family: Alegreya SC;">Upcoming Titles</h1>
    </center>
    <div class="w3-display-bottomleft w3-padding-large">
    </div>
    <div class="row">
        <div class="column" style="background-color:#aaa;">
            <img src="upcoming titles/cyberpunk.png" alt="avatar" width="135px;" height="70%">  
            <p>Cyberpunk 2077</p>
        </div>
        <div class="column" style="background-color:#aaa;">
            <img src="upcoming titles/doom.jpg" alt="avatar" width="135px;" height="70%">
            <p>Doom Eternal</p>
        </div>
        <div class="column" style="background-color:#aaa;">
            <img src="upcoming titles/got.jpg" alt="avatar" width="135px;" height="70%">
            <p>Ghost of <br>Tsushima</p>
        </div>
        <div class="column" style="background-color:#aaa;">
            <img src="upcoming titles/watch dogs.jpg" alt="avatar" width="135px;" height="70%">
            <p>Watch Dogs <br>Legion</p>
        </div>
        <div class="column" style="background-color:#aaa;">
            <img src="upcoming titles/dying light.jpg" alt="avatar" width="135px;" height="70%">
            <p>Dying Light 2</p>
        </div>
        <div class="column" style="background-color:#aaa;">
            <img src="upcoming titles/halo.jpg" alt="avatar" width="135px;" height="70%">
            <p>Halo Infinite</p>
        </div>
    </div>
    </div>

    <!--END OF UPCOMING TITLES -->

    <!-- NEW RELEASES -->

    <div class="container" style=" align-items: center;">
    <center>
        <h1 id="new" style="font-size: 37px; font-family: Alegreya SC;">New Releases</h1>
    </center>

    <div class="w3-display-bottomleft w3-padding-large">
    </div>
    <div class="row">

        <!--rdr2-->
        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal" src="new releases/rdr2.jpg" alt="avatar" width="135px;" height="70%">

            <!-- Modal-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Red Dead Redemption 2</h4><br></center>
                        </div>

                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com</center>
                        <div class="modal-body">
                            <img src="https://pmcvariety.files.wordpress.com/2018/12/Red-Dead-Redemption-2.png?w=1000&h=563&crop=1" width="100%">
                            <p>Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game Red Dead Redemption. The story is set in
                                1899 in a fictionalized representation of the Western, Midwestern and Southern United States and follows outlaw Arthur Morgan, a member of the Van der Linde gang. Arthur must deal with the decline of the Wild West whilst
                                attempting to survive against government forces, rival gangs, and other adversaries. The story also follows fellow gang member John Marston, the protagonist of Red Dead Redemption.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $40</p>
                            <div align="left"><a href="https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Red Dead Redemption 2','$40','rdr2.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Red Dead <br>Redemption II</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Rockstar Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--Watch Dogs 2-->
        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal1" src="new releases/watch dogs.jpg" alt="avatar" width="135px;" height="70%">
            <!-- Modal-->
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Watch Dogs 2</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://ubistatic19-a.akamaihd.net/ubicomstatic/en-us/global/search-thumbnail/watchdogs2-ubicom-searchthumb_mobile_254005.jpg" width="100%">
                            <p>Watch Dogs 2 is a 2016 action-adventure game developed by Ubisoft Montreal and published by Ubisoft. It is the sequel to 2014's Watch Dogs and was released for the PlayStation 4, Xbox One and Microsoft Windows. Set within a
                                fictionalized version of the San Francisco Bay Area, the game is played from a third-person perspective and its open world is navigated on-foot or by vehicle. Players control Marcus Holloway, a hacker who works with the
                                hacking group DedSec to take down the city's advanced surveillance system known as ctOS. There are multiple ways to complete missions, and each successful assignment increases the follower count of DedSec. Cooperative multiplayer
                                allows for competitive one-on-one combat and connecting with other players in order to neutralize a player who is causing havoc.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $35</p>
                            <div align="left"><a href="https://store.steampowered.com/app/447040/Watch_Dogs_2/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Watch Dogs 2','$35','watch dogs.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Watch Dogs 2</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--Division 2-->
        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal2" src="new releases/division 2.jpg" alt="avatar" width="135px;" height="70%">
            <!-- Modal-->
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Tom Clancy's The Division 2</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://ubistatic19-a.akamaihd.net/marketingresource/sv-se/the-division/the-division-2/news/images/get_started_345615.jpg" width="100%">
                            <p>Tom Clancy's The Division 2 is an online action role-playing video game developed by Massive Entertainment and published by Ubisoft. The sequel to Tom Clancy's The Division (2016), it is set in a near-future Washington, D.C.
                                in the aftermath of a smallpox pandemic, and follows an agent of the Strategic Homeland Division as they try to rebuild the city. The game was released for Microsoft Windows, PlayStation 4 and Xbox One on March 15, 2019.
                                It received generally favorable reviews from critics, with most noting it as an improvement over the first installment. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $50</p>
                            <div align="left"><a href="https://store.steampowered.com/app/365590/Tom_Clancys_The_Division/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('The Division 2','$50','division 2.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Tom Clancy's <br>The Division 2</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){    
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--Breakpoint-->
        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal3" src="new releases/breakpoint.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Tom Clancy's Ghost Recon: Breakpoint</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://i.ytimg.com/vi/2MOS30S8cJI/maxresdefault.jpg" width="100%">
                            <p>Tom Clancy's Ghost Recon Breakpoint (commonly referred to as Ghost Recon Breakpoint) is an online tactical shooter video game developed by Ubisoft Paris and published by Ubisoft. The game was released worldwide on 4 October
                                2019, for Microsoft Windows, PlayStation 4 and Xbox One, and on 18th December 2019, for Stadia. The game is the eleventh installment in the Tom Clancy's Ghost Recon franchise and is a narrative sequel to the 2017 video
                                game Tom Clancy's Ghost Recon Wildlands. The game is set in an open world environment called Auroa, a fictional island chain in the Pacific Ocean. The player takes on the role of Lieutenant Colonel Anthony "Nomad" Perryman
                                a U.S. Special Operation Forces service member sent to the island to investigate a series of disturbances involving Skell Technology, a military contractor based on Auroa. Upon release, Tom Clancy's Ghost Recon Breakpoint
                                received mixed reviews from critics and underperformed commercially. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $42</p>
                            <div align="left"><a href="https://www.epicgames.com/store/en-US/product/ghost-recon-breakpoint/home"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Tom Clancys Ghost Recon Breakpoint','$42','breakpoint.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Ghost Recon <br>Breakpoint</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--fifa 20-->
        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal4" src="new releases/fifa 20.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal4" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">FIFA 20</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://specials-images.forbesimg.com/imageserve/5de83c13b269e900075d6eb2/960x0.jpg?fit=scale" width="100%">
                            <p>FIFA 20 is a football simulation video game published by Electronic Arts as part of the FIFA series. It is the 27th installment in the FIFA series, and was released on 27 September 2019 for Microsoft Windows, PlayStation 4,
                                Xbox One, and Nintendo Switch. Real Madrid winger Eden Hazard was named the new cover star of the Regular Edition, with Liverpool defender Virgil van Dijk on the cover of the Champions Edition. Former Juventus and Real
                                Madrid midfielder Zinedine Zidane was later named as the cover star for the Ultimate Edition. The game features VOLTA Football for the first time, a new mode that provides a variance on the traditional 11v11 gameplay and
                                focuses on small-sided street and futsal games. The mode is believed to be focused on the former FIFA Street series. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $45</p>
                            <div align="left"><a href="https://www.origin.com/ind/en-us/store/fifa/fifa-20"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('FIFA 20','$45','fifa 20.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>FIFA 20</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">EA Sports</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--crew 2-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal5" src="new releases/crew 2.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal5" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">The Crew 2</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://ubistatic19-a.akamaihd.net/resource/en-us/game/thecrew-game/the-crew-2/og-the-crew-2-home.jpg" width="100%">
                            <p>The Crew 2 is an open world racing video game developed by Ivory Tower and published by Ubisoft for Microsoft Windows, PlayStation 4 and Xbox One. It is the sequel to 2014's The Crew. It features a persistent open world environment
                                for free-roaming across a scaled-down recreation of the United States. The game allows players to control a variety of vehicles including cars, motorcycles, boats, and airplanes. The game was released on June 29, 2018.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $30</p>
                            <div align="left"><a href="https://store.steampowered.com/app/646910/The_Crew_2/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Crew 2','$30','crew 2.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>The Crew 2</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){        
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--Just Cause 4-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal6" src="new releases/just cause 4.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal6" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Just Cause 4</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="http://getwallpapers.com/wallpaper/full/2/0/8/956932-download-free-just-cause-3-wallpapers-1920x1200-samsung-galaxy.jpg" width="100%">
                            <p>Just Cause 4 is an action-adventure game developed by Avalanche Studios and published by Square Enix. It is the fourth game in the Just Cause series and the sequel to 2015's Just Cause 3 and was released for Microsoft Windows,
                                PlayStation 4, and Xbox One on December 4, 2018. Just Cause 4 is an action-adventure game played from a third-person perspective. The player assumes the role of series protagonist Rico Rodriguez. The game takes place in
                                Solis, a large open world consisting of different biomes including snowy mountains and deserts. Rico can transverse in the game's world using his wingsuit and grappling hook, whose functions are expanded to include the
                                ability to attach hot air balloons and rocket boosters on objects.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $34</p>
                            <div align="left"><a href="https://store.steampowered.com/bundle/12348/Just_Cause_4_Complete_Edition/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Crew 2','$34','just cause 4.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Just Cause 4</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Square Enix</p>
        </div>
        <script>
            function addtoCart(name,price,picture){  
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--forza horizon 4-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal7" src="new releases/forza horizon 4.png" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal7" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Forza Horizon 4</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://s2.best-wallpaper.net/wallpaper/3840x2160/1812/Forza-Horizon-4-Lamborghini-Urus-SUV-car-front-view_3840x2160.jpg" width="100%">
                            <p>Forza Horizon 4 is an open world racing video game developed by Playground Games and published by Microsoft Studios. It was released on 2 October 2018 on Xbox One and Microsoft Windows after being announced at Xbox's E3 2018
                                conference. The game is set in a fictionalised representation of areas of Great Britain. It is the fourth Forza Horizon title and eleventh instalment in the Forza series. The game is noted for its introduction of changing
                                seasons to the series.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $28</p>
                            <div align="left"><a href="https://www.microsoft.com/en-us/p/forza-horizon-4/9pnqkhfld2wq?activetab=pivot:overviewtab"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Crew 2','$28','forza horizon 4.png')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Forza <br>Horizon 4</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Microsoft Studios</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--god of war-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal8" src="new releases/god of war.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal8" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">God Of War</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="http://images.pushsquare.com/67dd021de64cd/555x385.jpg" width="100%">
                            <p>God of War is an action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment (SIE). Released on April 20, 2018, for the PlayStation 4 (PS4), it is the eighth installment in the God
                                of War series, the eighth chronologically, and the sequel to 2010's God of War III. Unlike previous games, which were loosely based on Greek mythology, this installment is rooted in Norse mythology, with the majority of
                                it set in ancient Norway in the realm of Midgard. For the first time in the series, there are two protagonists: Kratos, the former Greek God of War who remains the only playable character, and his young son Atreus. Following
                                the death of Kratos' second wife and Atreus' mother, they journey to fulfill her request that her ashes be spread at the highest peak of the nine realms. Kratos keeps his troubled past a secret from Atreus, who is unaware
                                of his divine nature. Along their journey, they encounter monsters and gods of the Norse world. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $37</p>
                            <div align="left"><a href="https://godofwar.playstation.com/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('God Of War','$37','god of war.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>God Of War</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Sony Interactive</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--far cry new dawn-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal9" src="new releases/far cry new dawn.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal9" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">FarCry New Dawn</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://cdn2us.denofgeek.com/sites/denofgeekus/files/styles/main_wide/public/2019/02/far-cry-new-dawn-review.jpg?itok=GSXaswG8" width="100%">
                            <p>Far Cry New Dawn is a 2019 first-person shooter developed by Ubisoft Montreal and published by Ubisoft. The game is a spin-off of the Far Cry series and a narrative sequel to Far Cry 5. As a result, it features many pre-existing
                                gameplay elements from the series, including a large open world, capturing of outposts, and AI or co-op companions; but also introduces several elements from RPG gameplay, including an upgradeable home base and increased
                                reliance of crafting from limited supplies. It was released for Microsoft Windows, PlayStation 4 and Xbox One in February 2019, and received generally mixed reviews from critics. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $30</p>
                            <div align="left"><a href="https://store.steampowered.com/app/939960/Far_Cry_New_Dawn/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Far Cry New Dawn','$30','far cry new dawn.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>FarCry <br>New Dawn</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--sottr-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal10" src="new releases/sottr.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal10" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Shadow Of The Tomb Raider</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://i.ytimg.com/vi/euLTTV0jp4U/maxresdefault.jpg" width="100%">
                            <p>Shadow of the Tomb Raider is an action-adventure video game developed by Eidos Montréal and published by Square Enix. It continues the narrative from the 2015 game Rise of the Tomb Raider and is the twelfth mainline entry in
                                the Tomb Raider series. The game was released worldwide on 14 September 2018 for Microsoft Windows, PlayStation 4 and Xbox One. A macOS and Linux version of the game was released by Feral Interactive on 5 November 2019,
                                followed by a Stadia release on 19 November 2019.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $20</p>
                            <div align="left"><a href="https://store.steampowered.com/app/750920/Shadow_of_the_Tomb_Raider_Definitive_Edition/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Shadow Of The Tomb Raider','$20','sottr.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Shadow Of The <br>Tomb Raider</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p style="font-size: 15px;">Square Enix</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--assassins creed odyssey-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal11" src="new releases/assassins creed odyssey.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal11" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Assassin's Creed Odyssey</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fdavidthier%2Ffiles%2F2018%2F10%2Fhttps_2F2Fblogs-images.forbes.com2Finsertcoin2Ffiles2F20182F102Fac-odyssey6.jpg" width="100%">
                            <p>Assassin's Creed Odyssey is an action role-playing video game developed by Ubisoft Quebec and published by Ubisoft. It is the 11th major installment, and 21st overall, in the Assassin's Creed series and the successor to 2017's
                                Assassin's Creed Origins. Set in the year 431 BC, the plot tells a fictional history of the Peloponnesian War between Athens and Sparta. Players control a male or female mercenary who fights for both sides as they attempt
                                to unite their family. The game was released worldwide for Microsoft Windows, PlayStation 4, Xbox One, and (in Japan only) for Nintendo Switch on October 5, 2018, with a Stadia version launching alongside the service in
                                2019. It generally received positive reviews with praise directed to its visuals, combat, story, and characters, while receiving criticism for some reliance on grinding, microtransactions, and for feeling bloated.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $30</p>
                            <div align="left"><a href="https://store.steampowered.com/app/812140/Assassins_Creed_Odyssey/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Assassins Creed Odyssey','$30','assassins creed odyssey.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Assassins Creed<br>Odyssey</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){        
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>
    </div>
    </div>

    <!-- END OF NEW RELEASES -->

    <!-- ALL TIME FAVOURITES -->

    <div class="container" style="  align-items: center;">
    <center>
        <h1 id="all" style="font-size: 37px; font-family: Alegreya SC;">All Time Favorites</h1>
    </center>
    <div class="w3-display-bottomleft w3-padding-large">
    </div>
    <div class="row">

        <!--gta 5-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal12" src="all time favourites/gta 5.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal12" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Grand Theft Auto V</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://img4.goodfon.com/wallpaper/nbig/a/b5/grand-theft-auto-v-gta-5-game-city-landscape.jpg" width="100%">
                            <p>Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008's Grand Theft Auto IV. Set within the fictional
                                state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency and powerful crime figures. The open world
                                design lets players freely roam San Andreas' open countryside and the fictional city of Los Santos, based on Los Angeles. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $20</p>
                            <div align="left"><a href="https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Grand Theft Auto V','$20','gta 5.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Grand Theft <br>Auto V</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p style="font-size: 15px;">Rockstar Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='all time favourites/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--witcher 3-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal13" src="all time favourites/witcher 3.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal13" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">The Witcher III Wild Hunt</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://gamehostel.com/gamehostel_files/2018/02/sa_1519730759_THE%20WITCHER%203.jpg" width="100%">
                            <p>The Witcher 3: Wild Hunt is a 2015 action role-playing game developed and published by CD Projekt and based on The Witcher series of fantasy novels by Andrzej Sapkowski. It is the sequel to the 2011 game The Witcher 2: Assassins
                                of Kings, played in an open world with a third-person perspective. Players control protagonist Geralt of Rivia, a monster hunter (known as a witcher) who is looking for his missing adopted daughter on the run from the Wild
                                Hunt, an otherworldly force determined to capture her and use her powers. Players battle the game's many dangers with weapons and magic, interact with non-player characters, and complete main-story and side quests to acquire
                                experience points and gold, which are used to increase Geralt's abilities and purchase equipment. Its central story has several endings, determined by the player's choices at certain points in the game. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $20</p>
                            <div align="left"><a href="https://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('The Witcher 3','$20','witcher 3.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>The Witcher III <br>Wild Hunt</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p style="font-size: 15px;">CD Project Red</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--call of duty-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal14" src="all time favourites/cod ww3.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal14" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Call Of Duty World War II</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallpapercave.com/wp/wp2259850.jpg" width="100%">
                            <p>Call of Duty: WWII is a first-person shooter video game developed by Sledgehammer Games and published by Activision. It was released worldwide on November 3, 2017 for Microsoft Windows, PlayStation 4 and Xbox One. It is the
                                fourteenth main installment in the Call of Duty series and the first title in the series to be set primarily during World War II since Call of Duty: World at War in 2008. The game's campaign is set in the European theatre
                                and is centered around a squad in the 1st Infantry Division following their battles on the Western Front and set mainly in the historical events of Operation Overlord. The player controls Ronald "Red" Daniels, who has squadmates
                                who can supply the player with extra ammunition, health, or grenades as well as a targeted grenade and target spotting; none of these are automatically replenished in the campaign.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $26</p>
                            <div align="left"><a href="https://store.steampowered.com/app/476600/Call_of_Duty_WWII/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Call Of Duty WWII','$26','cod ww3.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Call Of Duty <br>World War II</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Activision Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--pubg-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal15" src="all time favourites/pubg.webp" alt="avatar" width="135px;"
                height="70%">
            <div class="modal fade" id="myModal15" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">PlayerUnknown's Battlegrounds</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallpaperaccess.com/full/1186818.jpg" width="100%">
                            <p>PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that
                                were created by Brendan "PlayerUnknown" Greene for other games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under Greene's creative direction. In the game, up to one hundred players
                                parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game's map decreases in size over time, directing surviving players
                                into tighter areas to force encounters. The last player or team standing wins the round. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $26</p>
                            <div align="left"><a href="https://store.steampowered.com/app/578080/PLAYERUNKNOWNS_BATTLEGROUNDS/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('PlayerUnknowns Battlegrounds','$20','pubg.webp')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>PUBG</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Tencent Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){     
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--Minecraft-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal16" src="all time favourites/minecraft.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal16" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Minecraft</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallpapercave.com/wp/NjGW245.jpg" width="100%">
                            <p>Minecraft is a sandbox video game created by Swedish developer Markus Persson, released by Mojang in 2011 and purchased by Microsoft in 2014. It is the single best-selling video game of all time, selling over 180 million copies
                                across all platforms by late 2019, with over 112 million monthly active players. In Minecraft, players explore an intentionally blocky, pixelated, procedurally-generated 3D world, and may discover and extract raw materials,
                                craft tools, build structures or earthworks, and, depending on game mode, can fight computer-controlled foes, as well as either cooperate with or compete against other players in the same world. These modes include a survival
                                mode, in which players must acquire resources to build the world and maintain health, and a creative mode, where players have unlimited resources. In the Java Edition, players can modify the game with mods to create new
                                gameplay mechanics, items, textures and assets. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $18</p>
                            <div align="left"><a href="https://www.minecraft.net/en-us/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Minecraft','$18','minecraft.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Minecraft</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p style="font-size: 15px;">Microsoft Studios</p>
        </div>
        <script>
            function addtoCart(name,price,picture){       
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--splinter cell-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal17" src="all time favourites/splinter cell.jpeg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal17" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Splinter Cell Blacklist</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://ksassets.timeincuk.net/wp/uploads/sites/54/2013/08/Blacklist-1-2.jpg" width="100%">
                            <p>Tom Clancy's Splinter Cell: Blacklist is an action-adventure stealth video game developed by Ubisoft Toronto and published by Ubisoft. The seventh installment of the Tom Clancy's Splinter Cell series, it is the sequel of Splinter
                                Cell: Conviction. The game was released worldwide for Microsoft Windows, PlayStation 3, Wii U, and Xbox 360 in August 2013. In the game, players control Sam Fisher, a spymaster working for the Fourth Echelon, in a mission
                                to stop the Engineers, a group of terrorists which is trying to coerce the United States into recalling all of its troops stationed abroad. Blacklist's gameplay is similar to its predecessors, with players tasked with completing
                                objectives and defeating enemies. Blacklist marks the return of the asymmetrical multiplayer mode Spies vs. Mercs, which was introduced in Pandora Tomorrow. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $10</p>
                            <div align="left"><a href="https://store.steampowered.com/app/235600/Tom_Clancys_Splinter_Cell_Blacklist/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Tom Clancys Splinter Cell Blacklist','$10','splinter cell.jpeg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Splinter Cell<br>Blacklist</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){        
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--fortnite-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal18" src="all time favourites/fortnite.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal18" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Fortnite</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://www.toornament.com/disciplines/fortnite/img/background-1280x720-medium.jpg?1576506933" width="100%">
                            <p>Fortnite is an online video game developed by Epic Games and released in 2017. It is available in three distinct game mode versions that otherwise share the same general gameplay and game engine: Fortnite: Save the World, a
                                cooperative shooter-survival game for up to four players to fight off zombie-like creatures and defend objects with fortifications they can build; Fortnite Battle Royale, a free-to-play battle royale game where up to 100
                                players fight to be the last person standing; and Fortnite Creative, where players are given complete freedom to create worlds and battle arenas. The first two-game modes were released in 2017 as early access titles and
                                Creative was released on December 6, 2018. Save the World is available only for Windows, macOS, PlayStation 4, and Xbox One, while Battle Royale and Creative released for those platforms, in addition for Nintendo Switch,
                                iOS and Android devices. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: Free</p>
                            <div align="left"><a href="https://www.epicgames.com/fortnite/en-US/download"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Fortnite','Free','fortnite.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Fortnite</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Epic Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--gta sa-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal19" src="all time favourites/gta sa.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal19" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Grand Theft Auto San Andreas</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallpapercave.com/wp/wp2375533.jpg" width="100%">
                            <p>Grand Theft Auto: San Andreas is a 2004 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh title in the Grand Theft Auto series, and the first main entry since 2002's Grand
                                Theft Auto: Vice City. San Andreas is played from a third-person perspective in an open world environment, allowing the player to interact with the game world at their leisure. Players use firearms and melee weapons to
                                combat hostile enemies.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $8</p>
                            <div align="left"><a href="https://store.steampowered.com/app/12120/Grand_Theft_Auto_San_Andreas/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Grand Theft Auto San Andreas','$8','gta sa.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Grand Theft<br> Auto SA</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p style="font-size: 15px;">Rockstar Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--assassins creed syndicate-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal20" src="all time favourites/assassins creed syndicate.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal20" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Assassin's Creed Syndicate</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://store-images.s-microsoft.com/image/apps.36603.68110492958721383.14682bce-2fe5-4251-af68-6e9bb106c54a.5a679160-f690-49be-9cd0-fc1842404ab0?mode=scale&q=90&h=1080&w=1920&background=%23FFFFFF" width="100%">
                            <p>Assassin's Creed Syndicate is an action-adventure video game developed by Ubisoft Quebec and published by Ubisoft. It was released on October 23, 2015, for PlayStation 4 and Xbox One, and on November 19, 2015, for Microsoft
                                Windows. It is the ninth major installment in the Assassin's Creed series, and the successor to 2014's Assassin's Creed Unity. The plot is set in a fictional history of real-world events and follows the centuries-old struggle
                                between the Assassins, who fight for peace with liberty, and the Templars, who desire peace through order. The story is set in Victorian era London and follows twin assassins Jacob and Evie Frye as they navigate the corridors
                                of organized crime, and take back the city from Templar control. Its open world design lets players freely roam London. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $15</p>
                            <div align="left"><a href="https://store.steampowered.com/app/368500/Assassins_Creed_Syndicate/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Assassins Creed Syndicate','$15','assassins creed syndicate.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Assassins <br>Syndicate</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='all time favourites/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--rottr-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal21" src="all time favourites/rottr.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal21" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Rise Of The Tomb Raider</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://store-images.s-microsoft.com/image/apps.6674.66252867926858756.3a7bf113-281b-4dec-9089-240261b0e96c.4ffb9287-3f5a-4d4a-8a1e-e4ea150abc78?mode=scale&q=90&h=1080&w=1920&format=jpg" width="100%">
                            <p>Rise of the Tomb Raider is an action-adventure video game developed by Crystal Dynamics. It is the sequel to the 2013 video game, Tomb Raider, and the eleventh entry in the Tomb Raider series. The game was released by Microsoft
                                Studios for Xbox One and Xbox 360 in 2015. Square Enix released the game for Microsoft Windows and PlayStation 4 in 2016. In April 2018 Feral Interactive published the game for Linux and Mac, with a Stadia release in November
                                2019. Its story follows Lara Croft as she ventures into Siberia in search of the legendary city of Kitezh while battling the paramilitary organization Trinity, which intends to uncover the city's promise of immortality.
                                Lara must traverse the environment and combat enemies with firearms and stealth as she explores semi-open hubs. In these hubs she can raid challenge tombs to unlock new rewards, complete side missions, and scavenge for
                                resources which can be used to craft useful materials. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $18</p>
                            <div align="left"><a href="https://store.steampowered.com/app/391220/Rise_of_the_Tomb_Raider/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Rise of the Tomb Raider','$18','rottr.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Rise Of The<br>Tomb Raider</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Square Enix</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--watch dogs-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal22" src="all time favourites/watch dogs.jpg" alt="avatar" width="135px;"
                height="70%">
            <div class="modal fade" id="myModal22" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Watch Dogs</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://images7.alphacoders.com/415/415518.jpg" width="100%">
                            <p>Watch Dogs (stylized as WATCH_DOGS) is a 2014 action-adventure game developed by Ubisoft Montreal and published by Ubisoft. Set in a fictionalized version of Chicago, the plot follows hacker Aiden Pearce's search for revenge
                                after the killing of his niece. The game is played from a third-person perspective, and the world is navigated on foot or by vehicle. An online multiplayer mode allows up to eight players to engage in cooperative and competitive
                                gameplay. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $12</p>
                            <div align="left"><a href="https://store.steampowered.com/app/243470/Watch_Dogs/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Watch Dogs','$12','watch dogs.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Watch Dogs</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--far cry 3-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal23" src="all time favourites/far cry 3.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal23" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Far Cry 3</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://www.10wallpaper.com/wallpaper/1366x768/1210/2012_Far_Cry_3_Game_HD_Wallpaper_12_1366x768.jpg" width="100%">
                            <p>Far Cry 3 is a 2012 first-person shooter developed by Ubisoft Montreal and published by Ubisoft. It is the third main installment in the Far Cry series. The game takes place on the fictional Rook Islands, a tropical archipelago
                                which can be freely explored by players. Gameplay focuses on combat and exploration. Players can use a variety of weapons to defeat human enemies and hostile wildlife, and the game features elements found in role-playing
                                games such as skill trees and experience. After a vacation goes awry, protagonist Jason Brody must save his friends, who have been kidnapped by pirates, and escape from the island and its unhinged inhabitants. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $10</p>
                            <div align="left"><a href="https://store.steampowered.com/app/220240/Far_Cry_3/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Far Cry 3','$10','far cry 3.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Far Cry 3</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--battlefield 4-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal24" src="all time favourites/battlefield 4.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal24" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Battlefield 4</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://store-images.s-microsoft.com/image/apps.17834.69077081978590253.117591b6-0dfc-4b63-993b-dc63ef8f4c59.3184eafd-35d9-4b35-84d4-4571f4057318?mode=scale&q=90&h=1080&w=1920&format=jpg" width="100%">
                            <p>Battlefield 4 is a first-person shooter video game developed by video game developer EA DICE and published by Electronic Arts. It is a sequel to 2011's Battlefield 3 and was released in October 2013 for Microsoft Windows, PlayStation
                                3, and Xbox 360; then later in November for PlayStation 4 and Xbox One. Battlefield 4 was met with positive reception. It was praised for its multiplayer mode, gameplay and graphics, but was also criticized for its short
                                and shallow single-player campaign mode, and for its numerous bugs and glitches. It was a commercial success, selling over 7 million copies.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $20</p>
                            <div align="left"><a href="https://www.origin.com/ind/en-us/store/battlefield/battlefield-4"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Battlefield 4','$20','battlefield 4.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>BattleField 4</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Electronic Arts</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--csgo-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal25" src="all time favourites/cs go.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal25" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Counter-Strike: Global Offensive</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://dreamteam.gg/blog/wp-content/uploads/2019/03/1170x658_HUUUGE_CS_GO_UPDATE_1552564894493_HJeUsMTvw4-768x432.png" width="100%">
                            <p>Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter developed by Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series and was released for Windows, OS X, Xbox 360,
                                and PlayStation 3 in August 2012, while the Linux version was released in 2014. The game pits two teams against each other: the Terrorists and the Counter-Terrorists. Both sides are tasked with eliminating the other while
                                also completing separate objectives. The Terrorists, depending on the game mode, must either plant the bomb or defend the hostages, while the Counter-Terrorists must either prevent the bomb from being planted, defuse the
                                bomb, or rescue the hostages.</p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: Free/$18</p>
                            <div align="left"><a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Counter-Strike Global Offensive','Free/$18','cs go.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>CS:GO</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Valve Corporation</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--nfs most wanted-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal26" src="all time favourites/nfs most wanted.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal26" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Need For Speed Most Wanted</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallup.net/wp-content/uploads/2016/01/195050-Need_for_Speed_Most_Wanted-BMW-car-video_games-Need_for_Speed.jpg" width="100%">
                            <p>Need for Speed: Most Wanted is a 2005 open world racing video game, and the ninth installment in the Need for Speed series. Developed by EA Canada and published by Electronic Arts, it was released on November 11, 2005, for
                                PlayStation 2, Xbox, GameCube, Nintendo DS, Microsoft Windows, Game Boy Advance and Xbox 360. An additional version, entitled Need for Speed: Most Wanted 5-1-0, was released in the same year for PlayStation Portable. The
                                game focus on street racing-oriented game play involving a selection of events and racing circuits found within the fictional city of Rockport, with the game's main story involving players like Hope Hazeltyne Masola taking
                                on the city's most elite street racers to become the most wanted racer of the group. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $8</p>
                            <div align="left"><a href="https://www.origin.com/ind/en-us/store/need-for-speed/need-for-speed-most-wanted"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Need for Speed Most Wanted','$8','nfs most wanted.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Need For Speed <br>Most Wanted</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Electronic Arts</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--assassins creed black flag-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal27" src="all time favourites/assassins creed 4.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal27" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Assassin's Creed IV Black Flag</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallpapercave.com/wp/wp2116018.jpg" width="100%">
                            <p>Assassin's Creed IV: Black Flag is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. It is the sixth major installment in the Assassin's Creed series. Its historical timeframe precedes that
                                of Assassin's Creed III (2012), though its modern-day sequences succeed III's own. Black Flag was first released for PlayStation 3, Xbox 360, and Wii U in October 2013 and a month later for PlayStation 4, Xbox One, and
                                Microsoft Windows. It was released on the Nintendo Switch as part of Assassin's Creed: The Rebel Collection alongside Assassin's Creed Rogue in December 2019. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $14</p>
                            <div align="left"><a href="https://store.steampowered.com/app/242050/Assassins_Creed_IV_Black_Flag/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Assassins Creed IV Black Flag','$14','nfs most wanted.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Assassin's Creed <br>IV Black Flag</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--crysis 3-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal28" src="all time favourites/crysis 3.webp" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal28" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Crysis 3</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallup.net/wp-content/uploads/2017/11/17/178640-Crysis_3.jpg" width="100%">
                            <p>Crysis 3 is a first-person shooter video game developed by Crytek and published in 2013 by Electronic Arts for Microsoft Windows, PlayStation 3, and Xbox 360. It is the third main installment of the Crysis series, a sequel
                                to the 2011 video game Crysis 2. The multiplayer portion of the game was developed by Crytek UK. Crysis 3's story revolves around Prophet, a Nanosuit holder who is on a quest to take revenge on the Alpha Ceph, the leader
                                of the Ceph alien race. The game's story serves as the end of the Crysis trilogy. Gameplay revolves around the use of the Nanosuit, which grants players a variety of abilities such as being invisible. New features introduced
                                in Crysis 3 include a new Nanosuit ability called "Rip & Throw", a compound bow and the "hacking" feature, which allows players to hack into enemies' equipment, drones, and security defenses. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $24</p>
                            <div align="left"><a href="https://www.origin.com/ind/en-us/store/crysis/crysis-3"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Crysis 3','$24','crysis 3.webp')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Crysis 3</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Crytek</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>

        <!--far cry 4-->

        <div class="column" style="background-color:#aaa;">
            <img id="myImg" data-toggle="modal" data-target="#myModal29" src="all time favourites/far cry 4.jpg" alt="avatar" width="135px;" height="70%">
            <div class="modal fade" id="myModal29" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center>
                                <h4 style="font-size:35px; font-family:'Alegreya SC';" class="modal-title">Far Cry 4</h4><br></center>
                        </div>
                        <center> 93% - Metacritic &ensp;&ensp; 5/5 - Common Sense Media &ensp;&ensp; 10/10 - IGN.com </center>
                        <div class="modal-body">
                            <img src="https://wallpaperaccess.com/full/1726985.jpg" width="100%">
                            <p>Far Cry 4 is a 2014 first-person shooter game developed by Ubisoft Montreal and published by Ubisoft. It is the successor to the 2012 video game Far Cry 3, and the fourth main installment in the Far Cry series. The game takes
                                place in Kyrat, a fictional Himalayan country. The main story follows Ajay Ghale, a young Kyrati-American, as he is caught in a civil war involving Kyrat's Royal Army, controlled by tyrannical king Pagan Min, and a rebel
                                movement called the Golden Path. Gameplay focuses on combat and exploration; players battle enemy soldiers and dangerous wildlife using a wide array of weapons. The game features many elements found in role-playing games,
                                such as a branching storyline, and side quests. The game also features a map editor, a co-operative multiplayer mode, and an asymmetrical competitive multiplayer mode. </p>
                        </div>
                        <div class="modal-footer">
                            <p align="left">Price: $18</p>
                            <div align="left"><a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"><button type="button" class="btn btn-success">Buy Now</button></a>
                                <button type="button" class="btn btn-success" onclick="addtoCart('Far Cry 4','$18','far cry 4.jpg')">Add to cart</button> 
                            </div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>Far Cry 4</p><br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p style="font-size: 15px;">Ubisoft Games</p>
        </div>
        <script>
            function addtoCart(name,price,picture){      
                    var cart = "<h4 align='left' style='font-size:20px' style='font-family:Alegreya SC' 'color:#000'>"+name+"</h4><br><p align='left' style='color:#000'>Price: "+price+"</p><br><img id='myImg'  src='new releases/"+picture+"' alt='avatar' width='135px' height='70%'>";
                    $(".modalbody").append(cart);
                    alert("Added Successfully");
                    }
        </script>
    </div>
    </div>
    </div>
    </div>

<!-- END OF ALL TIME FAVOURITES -->

    <!-- FOOTER -->

    <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget subscribe no-box">
                            <h3 class="widget-title">GameZone<span></span></h3>
                            <p><strong>GameZone</strong>, Explore a large variety of games, Enjoy Gaming.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <h3 class="widget-title">More<span></span></h3>
                            <ul class="thumbnail-widget">
                                <li>
                                    <div class="thumb-content"><a href="#.">Get Started</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Genres</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">News</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Lifestyle</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">About</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <h3 class="widget-title">Get Started<span></span></h3>
                            <p>Get Started with Immersive Gaming Experience.</p>
                            <a class="btn" href="register.html">Register Now</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="widget no-box">
                            <h3 class="widget-title">Contact Us<span></span></h3>

                            <p><a href="mailto:karthiksrikanth.techunicorns@gmail.com" title="glorythemes" style="color: orange;">karthiksrikanth.techunicorns@gmail.com</a></p>
                            <ul class="social-footer2">
                                <li class="">
                                    <a title="youtube" target="_blank" href="https://www.youtube.com/"><img alt="youtube" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                                <li class="">
                                    <a href="https://www.facebook.com/" target="_blank" title="Facebook"><img alt="Facebook" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                                <li class="">
                                    <a href="https://twitter.com" target="_blank" title="Twitter"><img alt="Twitter" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                                <li class="">
                                    <a title="instagram" target="_blank" href="https://www.instagram.com/"><img alt="instagram" width="30" height="30" src="data:image/png;base64,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"></a>
                                </li>
                            </ul>
                            <p>Give us your <a href="feedback.html" style="color: orange;">Feedback</a>
                                <p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <center>
                            <p>Copyright GameZone © 2020. All rights reserved.</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!-- END OF FOOTER -->

<!-- SCRIPT LINKS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

    </body>

</html>