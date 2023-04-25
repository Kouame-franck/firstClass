// faire apparaitre et disparaitre le menue

const menue_bare = document.querySelector(".fa-bars");
const menue_croix = document.querySelector(".croix")
const menue = document.querySelector(".menue-bar");

menue_bare.addEventListener("click",()=>{
    menue.classList.add("apparaitre");
    menue_bare.style.display ="none";
    menue_croix.style.display ="block";
})

menue_croix.addEventListener("click",()=>{
    menue.classList.remove("apparaitre");
    menue_bare.style.display ="block";
    menue_croix.style.display ="none";
})
// fin de la fonction 

// fonction image defilantes

const carou = document.querySelector(".caroussel");
const slides = document.querySelector(".slides");
let compteur = 0;
const largeur = carou.offsetWidth;
let  nbrSlides = slides.childElementCount

setInterval(defiler,5000);
function defiler(){
    compteur++;
    let defileur = largeur * compteur
    slides.style.transition = "1s linear";
    slides.style.transform = `translateX(-${defileur}px)`;
    if (compteur > nbrSlides-1){
        compteur = 0;
        slides.style.transition = "0";
        slides.style.transform = "translateX(0)";
    }

}
// fin de la fonction

// fonction d'ajout au panier

const panier = document.querySelector("#panier");
const panier1 = document.querySelector("#panier1");
const ajouts = document.querySelectorAll(".raj");
const retrait = document.querySelectorAll(".retr")

let nombre_article = 0;
ajouts.forEach(ajout =>{
    ajout.addEventListener("click",()=>{
        nombre_article++
        panier.innerHTML = nombre_article;
        panier1.innerHTML = nombre_article;
            ajout.style.visibility="hidden";
            ret = ajout.nextElementSibling;
            ret.style.visibility="visible";
            ret.style.color="gray";
        })    
})

retrait.forEach(ret =>{
    ret.addEventListener("click",()=>{
        nombre_article--
        panier.innerHTML = nombre_article;
        panier1.innerHTML = nombre_article;
            ret.style.visibility="hidden";
            ajt = ret.previousElementSibling
            ajt.style.visibility="visible";
    })
})
console.log("mardi");