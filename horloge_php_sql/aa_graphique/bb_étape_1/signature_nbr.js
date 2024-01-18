nombre = 1
signature = 'f';
socle = 'f';
introspection = 1

ecriture_signature()

level = 1
quantite_du_level = 1
// ecriture_level()

for(nombre = 2; nombre < 200; nombre++){

    signature_modulaire()

    if(signature == socle){
        introspection++
        signature_modulaire()
        socle = signature

        ecriture_level()
        level++
        quantite_du_level = 0
    }

    ecriture_signature()

    quantite_du_level++


}


function signature_modulaire(){
    signature = '';
    for(modulation = 2; modulation <= introspection; modulation++){
        horloge_modulaire = nombre % modulation
        signature += horloge_modulaire + ''
    }
    signature += 'f';
}

function ecriture_signature(){
    dom_signature.innerHTML += nombre + ' _ ' + signature + '<br>'
}

function ecriture_level(){
    dom_level.innerHTML += level + ' _ ' + quantite_du_level + '<br>'
}