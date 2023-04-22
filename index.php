 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fisrt class vente en ligne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;1,400&family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,600&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&family=Roboto+Condensed:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0f4368432b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
     
 </head>
 <body>
    <header>
        <div class="logo">
            <div class="logogroup">
                    <div class="menue responsive_nav">
                        <i style=" font-size:1.7rem;" class="fa-solid fa-bars"></i>
                    </div>
                    <div class="menue croix">
                        <i style=" font-size:2rem;" class="fa-solid fa-xmark"></i>
                    </div>
                    <img src="image/logo_rogner.png" alt="logo first class">
            </div>   
            <div class="menue responsive_id">
                <a href=""><i style="color:black; font-size:1.5rem;" class="fa-solid fa-cart-shopping"></i></a>
                <a href=""><i style="color:black; font-size:1.5rem;" class="fa-solid fa-user"></i></a>
            </div>
        </div>
        <div class="recherche">
            <form id="recherche" action="">
                <input  id="serch" type="serch" placeholder="Recherche sur First Class">
                <button id="bttn" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

        </div>
        <div class="nav">
            <ul>
                <li><a href="">accueil</a></li>
                <li>
                    <form action="">
                    <select name="categorie" id="">
                        <option value="" disebled selected hidden >categories</option>
                        <option value="femme">Femme</option>
                        <option value="homme">Homme</option>
                        <option value="bijoux">Bijoux</option>
                        <option value="vetements">vetements</option>
                        <option value="chaussures">Chaussures</option>
                        <option value="accessoirs">accessoirs</option>
                    </select>
                    </form>
                                       
                </li>
                <li><a href=""><i style="color:black;" class="fa-solid fa-user"></i></a></li>
                
            </ul>
        </div>
    </header>

    <div class="menue-bar">
        <div class="categories">
        <!-- <img style="height:50px;margin:0;" src="image/logo_rogner.png" alt="logo first class"> -->
            <h3>CATEGORIES</h3>
            <a href=""><i class="fa-solid fa-user-tie"></i> homme</a><br><br>
            <a href=""><i class="fa-solid fa-person-dress"></i> femme</a><br><br>
            <a href=""><i class="fa-solid fa-wand-magic-sparkles"></i> bijoux</a><br><br>
            <a href=""><i class="fa-sharp fa-solid fa-shirt"></i> vetements</a><br><br>
            <a href=""><i class="fa-solid fa-shoe-prints"></i> chaussures</a><br><br>
            <a href=""><i class="fa-solid fa-toolbox"></i> accessoirs</a>
        </div>
        <div class="mon-compte">
            <h3>MON COMPTE</h3>
            <a href=""><i class="fa-solid fa-cart-shopping"></i> mon panier</a><br><br>
            <a href=""><i class="fa-solid fa-pen-to-square"></i>mes commandes</a><br><br>
            <a href=""><i class="fa-solid fa-message"></i> discutions</a>
        </div>
        <div class="a-propos"> 
            <h3>A PROPOS</h3>
            <a href="">qui somme-nous?</a><br>
            <a href="">nos contacts</a>
        </div>
    </div>

    <div class="caroussel">
        <div class="slides">
            <div class="slide">
                <img src="image/promo1.png" alt="">
            </div>
            <div class="slide">
                <img src="image/promo4.png" alt="">
            </div>
            <div class="slide">
                <img src="image/promo2.png" alt="">
            </div>
        </div>
    </div>
    <div class="boiteTandences">
        <div class="libeles">
            <h4>Tendances</h4>
            <a href="">voir plus</a>
        </div>
        
        <div class="tendances">
            <div class="tendance">
            <img src="image/promo3.jpg" alt="">
                <a class="prio" href=""></a>
                
                
                <h6>1000 Fcfa</h6>
                <a href="">voir</a>
            </div>
            <div class="tendance">
                
            </div>
            <div class="tendance">
                
            </div>
            <div class="tendance">
                
            </div>
            <div class="tendance">
                
            </div>
            <div class="tendance">
                
            </div>
        </div>
    </div>
    <div class="boiteTandences superdeal">
        <div class="libeles">
            <h4>super deal</h4>
            <a href="">voir plus</a>
        </div>
        
        <div class="tendances">
            <div class="deal">
            <img src="image/promo2.png" alt="">
                
                <h6>1000 Fcfa</h6>
                <a href="">voir</a>
            </div>
            <div class="deal">
                
            </div>
            <div class="deal">
                
            </div>
            <div class="deal">
                
            </div>
            <div class="deal">
                
            </div>
            <div class="deal">
                
            </div>
        </div>
    </div>
    <div class="boutique">
        <h4>BOUTIQUE </h4>
        <div class="articles">
            <div class="article">
                <img src="image/promo1.png" alt="">
                
                <h5>nom </h5>
                <small>description </small>
                <h6>15 000 Fcfa</h6>
                <button><i class="fa-solid fa-cart-shopping"></i></button>
                


            </div>
            <div class="article">
                
            </div>
            <div class="article">
                
            </div>
            <div class="article">
                
            </div>
            <div class="article">
                
            </div>
        </div>
    </div>
    

    <script>
        console.log("bonjour");
    </script>
    

    







    <footer>
        <div class="reseaux">
             franckk07@gmail.com

        </div>
        <div class="reseaux">
            <i class="fa-brands fa-instagram"></i>       
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-github"></i>

        </div>
        <p> <img style="width:18px"src="image/ci.jpg" alt=""> &copy; copyright - tout droits reservés - sublime code 2023</p>
    </footer>
    <script src="script.js"></script>
 </body>
 </html>