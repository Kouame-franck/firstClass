<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fisrt class vente en ligne fiche article</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                    
                    <img src="image/logo_rogner.png" alt="logo first class">
            </div>   
            <div class="menue responsive_id">
            
           
                <a  href=""><i style="color:black; font-size:1.5rem;" class="fa-solid fa-cart-shopping"></i><small id="panier"></small></a>
                <a href=""><i style="color:black; font-size:1.4rem;" class="fa-regular fa-user"></i></a>
                
            </div>
        </div>
        <!-- <div class="recherche">
            <form id="recherche" action="">
                <input  id="serch" type="serch" placeholder="Recherche sur First Class">
                <button id="bttn" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

        </div> -->
        <div class="nav">
            <ul>
                <li id="cache"><a  href=""><i style="color:black; font-size:1.5rem;" class="fa-solid fa-cart-shopping"></i><small id="panier1"></small></a></li>
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

        <div class="menue croix">
            <i style=" font-size:2rem;" class="fa-solid fa-xmark"></i>
        </div> <br>

        <div class="accueil">
            <a href="index.php">
                <h3><span class="material-icons-outlined"> home</span>ACCUEIL</h3> <br><br>
            </a>
        </div>

        <div class="categories">
            <h3>CATEGORIES</h3> <br>
            <a href=""><i class="fa-solid fa-user-tie"></i> homme</a> <br><br>
            <a href=""><i class="fa-solid fa-person-dress"></i> femme</a><br><br>
            <a href=""><i class="fa-solid fa-wand-magic-sparkles"></i> bijoux</a><br><br>
            <a href=""><i class="fa-sharp fa-solid fa-shirt"></i> vetements</a><br><br>
            <a href=""><i class="fa-solid fa-shoe-prints"></i> chaussures</a><br><br>
            <a href=""><i class="fa-solid fa-toolbox"></i> accessoirs</a> <br> <br>
        </div>

        <div class="mon-compte">
            <h3>MON COMPTE</h3> <br> <br>
            <a href=""><i class="fa-solid fa-cart-shopping"></i> mon panier</a><br><br>
            <a href=""><i class="fa-solid fa-pen-to-square"></i>mes commandes</a><br><br>
            <a href=""><i class="fa-solid fa-message"></i> discutions</a> <br><br>
        </div>

        <div class="partenaires"> 
            <a href=""><h3><span class="material-icons-outlined"> cases</span>  DEVENIR PARTENAIRE</h3></a> <br>
        </div>

        <div class="a-propos"> 
            <h3><span class="material-icons-outlined">accessibility</span>  A PROPOS</h3><br> <br>

            <a href=""><span class="material-icons-outlined">contact_support</span>qui somme-nous?</a><br> <br>
            <a href=""><span class="material-icons-outlined">contactless</span>nos contacts</a> <br> <br>
        </div>

    </div>

    <div class="resume_panier">
        <p>resumé panier</p>
    </div>
    <div class="total">
        <h6>Total a payé (livraison non incluse)</h6>
        <h6>45 000 Fcfa</h6>
    </div>
    <div class="panier_principal">
        <div class="titre">
            <h6>nombre d'articles: 2</h6>
        </div>
        <div class="articles_panier">
            <div class="article_panier">
                <img src="" alt="">
                <div class="desc">
                    <small>nom</small>
                    <small>description</small>
                    <small>prix</small>
                </div>
                
            </div>
        </div>
    </div>


</body>
</html>