<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexStyle.css">
    <title>Vizito Ferizajin</title>
</head>
<body>
    <header>
        <div class="topnav">
            <a class="home" href="index.html">Vizito Ferizajin</a>
            <a class="navi" href="rrethnesh.html" >Rreth Nesh</a>
            <div class="container">
            <a class="navi" >User: <span><?php echo $_SESSION['user_name'] ?></span></a>
            <a class="navi" href="logout.php" ></a>
                <div class="dropdown">
                    <button>Pikat Tursitike</button>
                    <div class="dropdown-options">
                    <a href="bifurkacioni.html">Bifurkacioni</a>
                    <a href="pishat.html">Parku i Lirisë</a>
                    <a href="jezerc.html">Fshati Jezerc</a>
                    <a href="village.html">The Village</a>
                    <a href="xhamiakisha.html">Xhamia dhe Kisha</a>
                    <a href="biblioteka.html">Biblioteka</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <video src="video/main.mp4" autoplay loop muted></video> 
            <div class="overlay">
                <div class=grow>
                    <a href="bifurkacioni.html"><img class="foto" src="img/bifurkacioni1.png" alt="Bifurkacioni"></img></a>
                    <a href="pishat.html"> <img class="foto" src="img/pishat1.png" alt="Parku i Lirise"></img></a>
                    <a href="jezerc.html"><img class="foto" src="img/jezerci1.png" alt="description"></img></a>
                    <br>
                    <a href="village.html"><img class="foto" src="img/village1.png" alt="Bifurkacioni"></img></a>
                    <a href="xhamiakisha.html"><img class="foto" src="img/kishaxhamia1.png" alt="Parku i Lirise"></img></a>
                    <a href="biblioteka.html"><img class="foto" src="img/bibliotekaslider(1)5.jpg" alt="BIBLIOTEKA"></img></a>
                </div>
                <hr>
                <div class="teksti">
                    <p>Këtu mund të informoheni më shumë rreth qytetit të Ferizajt !</p>
                    <br>
                    <pre>
                        Ferizaji është qytet në pjesën jugore të Kosovës. Po ashtu Ferizaji është qendër e komunës dhe
                        rajonit me të njëjtin emër. Ferizaj ka qenë i populluar që në epokën parahistorike nga kultura e 
                        Starçevës, Vinçës dhe Badenit. Gjatë periudhës osmane, Ferizaji shërbeu si qendër tregtare në 
                        rrugën ndërmjet Beogradit dhe Selanikut. Ferizaj gjithmonë është konsideruar si një qytet ku 
                        toleranca dhe bashkëjetesa në aspektin fetar dhe kulturor ka qenë pjesë e shoqërisë në shekujt
                        e fundit. Gjatë dhe pas Luftës së Kosovës në vitin 1999, baza e ushtrisë amerikane Kampi Bondsteel 
                        u krijua jashtë qytetit, tani duke u përdorur nga forcat që i përkasin KFOR-it. Është baza më e 
                        madhe dhe më e shtrenjtë ushtarake e huaj e ndërtuar nga amerikanët në Evropën Juglindore, 
                        që nga Lufta e Vietnamit. Ferizaji ndodhet në pjesën juglindore të Kosovës, rreth gjysmës së rrugës 
                        ndërmjet qyteteve të Prishtinës dhe Shkupit. Është rreth 230 kilometra në veri-lindje të Tiranës, 
                        55 kilometra në veri të Shkupit, 300 kilometra në perëndim të Sofjes, 35 kilometra në jug të 
                        Prishtinës dhe 300 kilometra në lindje të Podgoricës. 
                        Ferizaj është i famshëm edhe për një fenomen gjeografik të njohur si bifurkacioni i lumit. 
                        Lumi i Nerodimës është i ndarë në dy degë dhe ato përfundojnë në dy dete të ndryshme.
                    </pre>
                </div>
                <hr>
                <div class="text-map">
                    <h1>
                        KU GJENDET QYTETI I FERIZAJT ?
                    </h1>
                </div>
                <div class="gmap">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="700" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ferizaj&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://putlocker-is.org"></a><br>
                            <style>.mapouter{height:500px;width:700px;}</style>
                            <a href="https://www.embedgooglemap.net"></a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:700px;}</style>
                        </div>
                    </div>
                </div>

                <!-- Footer -->

                <div class="footer">
                    <div class="container">
                        <div class="left">
                            <p>Na Kontaktoni</p>
                            <br>
                            <pre>

af58102@ubt-uni.net

va57264@ubt-uni.net
                            </pre>
                        </div>
                        <div class="center">
                        <img src="img/logo-ferizaj.png" alt="Logo e Ferizajit">
                        <p>@2022 | Të gjitha të drejtat e rezervuara</p>

                        </div>
                        <div class="right">
                            <pre>
                                    Website zyrtar i Komunës se Ferizajt:

                                    https://kk.rks-gov.net/ferizaj/

                                    Kontakti i drejtorisë për turizëm:
                                    
                                    038 200 46010
                            </pre>
                        </div>
                    </div>
                </div>

                <!-- Footer -->

            </div>
        </div>
        
    </main>
</body>
</html>
