premier_nbr_du_level = 2
signature = '0f';
level = 2
introspection = 2
socle = '0f';

tour = 1
qtite_level_pcdt = 1


while(level < 16){

    nombre = premier_nbr_du_level + (tour * qtite_level_pcdt)
    signature_du_dernier_module(nombre)

    if(level < 6){
        console.log(nombre)
    }

    if(signature == socle){

        signature_du_dernier_module(premier_nbr_du_level)
        // if(premier_nbr_du_level == 2){qtite_level = tour;}
        // if(premier_nbr_du_level != 2){qtite_level = 2 * tour;}
        //qtite_level = 2*tour;
        qtite_level = tour*qtite_level_pcdt;
        ecriture_level_atteint()

        introspection++
        signature_du_dernier_module(nombre)
        socle = signature
        
        premier_nbr_du_level = nombre
        qtite_level_pcdt = qtite_level

        tour = 0

        level++

    }

    tour++
}


function signature_du_dernier_module(nombre){

    signature = '';
    for(modulation = 2; modulation <= introspection; modulation++){
        horloge_modulaire = nombre % modulation
        signature += horloge_modulaire + ''
    }
    signature += 'f';
}

function ecriture_level_atteint(){
    // dom_level_atteint.innerHTML += 
    // premier_nbr_du_level + ' _ ' + signature + ' _ '  + level + ' _ ' + qtite_level + '<br>'

    dom_level_atteint.innerHTML += 
    premier_nbr_du_level + ' _ ' + signature + ' _ '  + level + ' _ ' + tour + '<br>'
}

