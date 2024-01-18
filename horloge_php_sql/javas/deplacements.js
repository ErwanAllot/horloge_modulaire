rotation_X = 0;
rotation_Y = 0;
rotation_Z = 0;
translation_X = 0;
translation_Y = 0;
translation_Z = 0;

document.addEventListener("keydown", function(event) {
    switch(event.key){
      case "a" : case "A": rotation_X = (rotation_X + 10)%360; break;
      case "z" : case "Z": rotation_X = (rotation_X - 10)%360; break;
      case "e" : case "E": rotation_Y = (rotation_Y + 10)%360; break;
      case "r" : case "R": rotation_Y = (rotation_Y - 10)%360; break;
      case "t" : case "T": rotation_Z = (rotation_Z + 10)%360; break;
      case "y" : case "Y": rotation_Z = (rotation_Z - 10)%360; break;
      case "w" : case "W": 
        rotation_X = 0; rotation_Y = 0; rotation_Z = 0; 
        translation_X = 0; translation_Y = 0; translation_Z = 0; 
      break;
      
      case '2' : translation_Z = (translation_Z - 10); break;
      case '8' : translation_Z = (translation_Z + 10); break;

      case '4': translation_X = (translation_X + 50); break;
      case '6': translation_X = (translation_X - 50); break;

      case '9': translation_Y = (translation_Y + 50); break;
      case '3': translation_Y = (translation_Y - 50); break;

      case "5" : 
      rotation_X = 0; rotation_Y = 0; rotation_Z = 0; 
      translation_X = 0; translation_Y = 0; translation_Z = 0; 
    break;


    }

    deplacement();
});


function deplacement(){
  le_graphique.style.transform = 
    "rotateX(" + rotation_X + "deg)" +
    "rotateY(" + rotation_Y + "deg)" + 
    "rotateZ(" + rotation_Z + "deg)" +
    "translateX(" + translation_X + "px)" +
    "translateY(" + translation_Y + "px)" + 
    "perspective(500px)" + 
    "translateZ(" + translation_Z + "px)";
}