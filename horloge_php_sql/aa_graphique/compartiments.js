pi = Math.PI

base = 5
boucle_du_trait(base, 0*pi)
boucle_du_trait(base, 1*pi)

boucle_de_l_angle(70,3)

boucle_de_l_angle(100,6)

boucle_de_l_angle(140,30)



function boucle_de_l_angle(base, partition){
    for(i = 1; i <= 2*partition; i++){
        omega = i * pi /partition
        boucle_du_trait(base, omega)
    }
}

function boucle_du_trait(base, omega){
    for(distance = base; distance < 500; distance = distance + 10){
        coordonnees_du_trait(distance, omega)
        impression_du_trait(abs, ord)
    }
}

function coordonnees_du_trait(distance, omega){
    abs = Math.cos(omega) * distance
    ord = Math.sin(omega) * distance
}