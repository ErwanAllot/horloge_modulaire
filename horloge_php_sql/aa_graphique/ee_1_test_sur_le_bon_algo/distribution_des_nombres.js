// impression_d_un_atome(1,0,0,1);

// cercle(2, 2, 2, 1)
// cercle(4, 6, 3, 1)
// cercle(10, 12, 4, 2)
// cercle(22, 60, 5, 5)

minimum = 0
maximum = 0
quantite_de_nombres_du_cycle = 0
pi = Math.PI

dispatch(1)
dispatch(2)
dispatch(3)

function dispatch(cycle){
    algo_quantite_de_nombre_dans_le_cycle_a_faire(cycle)
    angle_du_tour = 0
    angle_du_nombre = 0
    epsilon = 2*pi / quantite_de_nombres_du_cycle
    angle_du_tour = epsilon - (epsilon/2)
    angle_du_nombre = epsilon - (epsilon/2)
    compteur_modulatoire_du_cycle = 0

    for(i = minimum; i <= maximum; i++){
        if(compteur_modulatoire_du_cycle%2 == 0){
            if(compteur_modulatoire_du_cycle%6 == 0){
                if(angle_du_nombre = angle_du_tour){
                    angle_du_nombre += epsilon
                }
            }
            if(compteur_modulatoire_du_cycle%6 == 2){
                angle_du_nombre += pi/3 - pi
            }
            if(compteur_modulatoire_du_cycle%6 == 4){
                angle_du_nombre += 2*pi/3 - pi
            }
        }
        if(compteur_modulatoire_du_cycle%2 == 1){
            angle_du_nombre += pi
        }
        calcul_position_du_nombre(i, cycle, angle_du_nombre)
        compteur_modulatoire_du_cycle++
    }
}

function algo_quantite_de_nombre_dans_le_cycle_a_faire(cycle){
    if(cycle == 1) {minimum = 1 ; maximum = 1 ; quantite_de_nombres_du_cycle = 1}
    if(cycle == 2) {minimum = 2 ; maximum = 3 ; quantite_de_nombres_du_cycle = 2}
    if(cycle == 3) {minimum = 4 ; maximum = 9 ; quantite_de_nombres_du_cycle = 6}
}

function cercle(debut, quantite, cycle, tour){

    max = debut + quantite
    radian_de_base = 2* Math.PI / quantite;
    retrograde = radian_de_base/2

    pousse = (tour - 1) * radian_de_base
    
    k = 1
    for(i = debut; i < max; i++){
        // radian = Math.PI/2

        if(i<debut+12){
            if(i%2 == 0) {

                radian = radian_de_base * k - retrograde; 
    
                k++;
    
                radian += pousse * (i - debut) / 2
    
                // plop = Math.floor(quantite / (i - debut));
                plop = Math.floor((i - debut)/(quantite/tour));
                console.log(plop) 
                if (plop%2== 0) radian += plop * radian_de_base
                if (plop%2== 1) radian += plop * radian_de_base + Math.PI
    
            }
            if(i%2 == 1) radian += Math.PI;
            calcul_position_du_nombre(i, cycle, radian)
        }
    }
}

function calcul_position_du_nombre(nombre, hypotenuse, beta){
    hypotenuse--
    hypotenuse = 10 * hypotenuse
    coordonnees(hypotenuse, beta)
    est_ce_un_nombre_premier(nombre)
}

function coordonnees(hypotenuse, beta){
    x = Math.cos(beta) * hypotenuse
    y = Math.sin(beta) * hypotenuse
}

function est_ce_un_nombre_premier(nombre){
    numberStudied = nombre
    principal()
    impression_d_un_atome(nombre,x,y, isItPrime);
}