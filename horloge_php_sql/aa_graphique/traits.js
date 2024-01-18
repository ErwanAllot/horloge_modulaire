largeur_du_trait = 5

function impression_du_trait(abscisse, ordonnee){
    creation_d_une_div_trait()
    dimension_du_trait()
        
    couleur_du_trait()

    translation_du_trait_X(abscisse)
    translation_du_trait_Y(ordonnee)

    recentrage_du_trait_par_rapport_a_l_origine()
    le_graphique.appendChild(trait);
}


function creation_d_une_div_trait(){
    trait = document.createElement("div");
    trait.setAttribute("class","trait centrer_espacer");
}

function dimension_du_trait(){
    trait.style.width = largeur_du_trait + "px";
    trait.style.height = largeur_du_trait +"px";
}

function couleur_du_trait(){
    trait.style.backgroundColor = "white";
}

function translation_du_trait_X(abscisse){
    trait.style.transform += "translateX(" + largeur_du_trait * abscisse + "px)";
}

function translation_du_trait_Y(ordonnee){
    trait.style.transform += "translateY(" + largeur_du_trait * ordonnee + "px)";
}

function recentrage_du_trait_par_rapport_a_l_origine(){
    trait.style.transform += "translateX(" + centre_de_la_croix_celtique + "px)";
    trait.style.transform += "translateY(" + centre_de_la_croix_celtique + "px)";
}