largeur_atomique = 20;
limite = 4;
largueur_de_la_croix_celtique = 500;
centre_de_la_croix_celtique = largueur_de_la_croix_celtique/2 - largeur_atomique/2;

function impression_d_un_atome(nombre, abscisse, ordonnee, isItPrime){
    creation_d_une_div_atome();
    largeur_de_l_atome()
        
    couleur_de_l_atome(isItPrime)

    translation_X(abscisse)
    translation_Y(ordonnee)

    ecriture(nombre)

    recentrage_de_l_atome_par_rapport_a_l_origine()
    le_graphique.appendChild(atome);
}

// function couleur_de_l_atome(isItPrime){
//     atome.style.backgroundColor = "grey";
//     if(isItPrime==1) atome.style.backgroundColor = "white";
//     if(isItPrime==2) atome.style.backgroundColor = "blue";
//     if(isItPrime==3) atome.style.backgroundColor = "red";
//     if(isItPrime==4) atome.style.backgroundColor = "yellow";
//     if(isItPrime==5) atome.style.backgroundColor = "blue";
//     if(isItPrime==6) atome.style.backgroundColor = "pink";
// }


function couleur_de_l_atome(isItPrime){
    atome.style.backgroundColor = "yellow";
    if(isItPrime=='No'){atome.style.backgroundColor = "blue";}
    if(isItPrime=='Yes'){atome.style.backgroundColor = "red";}
}

function creation_d_une_div_atome(){
    atome = document.createElement("div");
    atome.setAttribute("class","atome centrer_espacer");
}

function largeur_de_l_atome(){
    atome.style.width = largeur_atomique + "px";
    atome.style.height = largeur_atomique +"px";
}

function ecriture(nombre){
    atome.innerHTML = nombre;
}

function translation_X(abscisse){
    atome.style.transform += "translateX(" + largeur_atomique*abscisse + "px)";
}

function translation_Y(ordonnee){
    atome.style.transform += "translateY(" + largeur_atomique*ordonnee + "px)";
}

function recentrage_de_l_atome_par_rapport_a_l_origine(){
    atome.style.transform += "translateX(" + centre_de_la_croix_celtique + "px)";
    atome.style.transform += "translateY(" + centre_de_la_croix_celtique + "px)";
}
// impression_d_un_atome(0,0,0);
// // impression_d_un_atome(0,0,0,'No');
// impression_d_un_atome(1,1,1,'No');
// impression_d_un_atome(2,2,2,'Yes');


