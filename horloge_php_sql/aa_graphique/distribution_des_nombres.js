minimum = 0
maximum = 0
quantite_de_nombres_du_cycle = 0
pi = Math.PI

dispatch(1)
dispatch(2)
dispatch(3)
dispatch(4)
dispatch(5)
// dispatch(6)

function dispatch(cycle){
    algo_quantite_de_nombre_dans_le_cycle_a_faire(cycle)
    angle_du_tour = 0
    angle_du_nombre = 0
    epsilon = 2*pi / quantite_de_nombres_du_cycle
    angle_du_tour = epsilon - (epsilon/2)
    angle_du_nombre = epsilon - (epsilon/2)
    compteur_modulatoire_du_cycle = 0

    numerateur = -1
    denominateur = quantite_de_nombres_du_cycle

    for(i = minimum; i <= maximum; i++){
        if(compteur_modulatoire_du_cycle%2 == 0){
            if(compteur_modulatoire_du_cycle%6 == 0){
                numerateur+=2
                angle_du_nombre = numerateur * (pi / denominateur)
            }
            if(compteur_modulatoire_du_cycle%6 == 2){
                angle_du_nombre += pi/3 - pi
            }
            if(compteur_modulatoire_du_cycle%6 == 4){
                angle_du_nombre += pi/3 - pi
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
    if(cycle == 4) {minimum = 10 ; maximum = 21 ; quantite_de_nombres_du_cycle = 12}
    // if(cycle == 5) {minimum = 22 ; maximum = 81 ; quantite_de_nombres_du_cycle = 60}
    if(cycle == 5) {minimum = 22 ; maximum = 41 ; quantite_de_nombres_du_cycle = 60}
    if(cycle == 6) {minimum = 82 ; maximum = 141 ; quantite_de_nombres_du_cycle = 60}
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