largeur_atomique = 20;

largeur_du_graphique = 500; /* mis une fois ici et une fois en css... hum ??? */
centre_du_graphique = largeur_du_graphique/2 - largeur_atomique/2;


// impression_d_un_atome(1,0)

function impression_d_un_atome(nombre, angle){
    creation_d_une_div_atome();
    atome.innerHTML = nombre;

    // if(cycle == 7) {
    //     atome.style.fontSize = "1pt";
    // }

    // position_de_l_atome(nombre, angle)
    position_de_l_atome(nombre, angle)
    couleur_de_l_atome(nombre)
    le_graphique.appendChild(atome);
}

function creation_d_une_div_atome(){
    atome = document.createElement("div");
    atome.setAttribute("class","atome centrer_espacer");
    atome.style.width = largeur_atomique + "px";
    atome.style.height = largeur_atomique + "px";

    // if(cycle == 7) {
    //     atome.style.width = 5 + "px";
    //     atome.style.height = 5 + "px";
    // }
}

// function position_de_l_atome(nombre, angle){
    function position_de_l_atome(nombre, angle){

        // bien
    // coordonnees(nombre/2, angle)

    // bien
    // // coordonnees((cycle-1)*3, angle)
    //   coordonnees(cycle*3, angle)
    
    
    // coordonnees(cycle*5+(nombre/5), angle)
    // coordonnees(nombre/7, angle)
    // coordonnees(nombre/7, angle)
    coordonnees(Math.sqrt(nombre), angle)

    atome.style.transform = "translateX(" + (centre_du_graphique + largeur_atomique * abscisse) + "px)";
    atome.style.transform += "translateY(" + (centre_du_graphique - largeur_atomique * ordonnee) + "px)";

    // if(cycle == 7) {
    //     atome.style.transform = "translateX(" + (centre_du_graphique + 5 * abscisse) + "px)";
    //     atome.style.transform += "translateY(" + (centre_du_graphique - 5 * ordonnee) + "px)";
    // }
}

function couleur_de_l_atome(nombre){
    // (nombre % 2 == 0)? couleur = 'white' : couleur = 'grey';
    //  couleur = 'black'
     couleur = 'red';

     if(nombre%3==1) {couleur = 'purple';}
     if(nombre%3==2) {couleur = 'white';}


    // if(nombre%4==1) {couleur = 'blue';}
    // if(nombre%4==3) {couleur = 'green';}



    // factorisation_du(nombre)

    // ma_console.innerHTML += factorisation_du_nombre + '<br>'

    // facteurs_et_puissance = factorisation_du_nombre.split('\^|\.')
    // facteurs_et_puissance = factorisation_du_nombre.split(/[.\^]/)
    // ma_console.innerHTML += facteurs_et_puissance[0] + '<br>'
    // ma_console.innerHTML += facteurs_et_puissance[1] + '<br>'

    // ma_console.innerHTML += facteurs_et_puissance[2] + '<br>'
    // ma_console.innerHTML += facteurs_et_puissance[3] + '<br>'


    // if (facteurs_et_puissance.length == 2){
    //     if(facteurs_et_puissance[1] == 1){
    //         if (nombre != 0 && nombre != 1)
    //         couleur = 'red';
    //     }
    //     // if(facteurs_et_puissance[1] != 1){
    //     //     couleur = 'orange';
    //     // }
    // }

    // if (facteurs_et_puissance.length == 4){
    //     if(facteurs_et_puissance[1] == 1 && facteurs_et_puissance[3] == 1){
    //         couleur = 'green';
    //     }
    // }

    // ma_console.innerHTML += factorisation_du_nombre + '<br>'


    // primalite_du(nombre); if(primalite_du_nombre == 'Oui'){couleur == 'red';}

    atome.style.backgroundColor = couleur;

    // if(nombre == 32) {atome.style.backgroundColor = 'blue';}
  
  
    // if(nombre == 100) {atome.style.backgroundColor = 'blue';}
  
  
    // y a un problème, ou est 100 ???

    /* 
    c'est ici qu'on doit voir 
    si c'est prime, 
    si c'est une puissance de prime, 
    si c'est juste une puissance non prime,
    (si c'est un carré)
    si c'est un semi-premier constitué de 2 nbrs premiers successifs
    si c'est un semi-premier lambda
    si c'est un nbr premier jumeau
    */
}

