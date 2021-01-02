function saisie() {
    let id = document.form.id_event.value;
    let nom = document.form.nom_event.value;
    
    var char = /^[A-Za-z0-9]+$/;
    var letters = /^[A-Z a-z]+$/;

    if(id.match(char)) {
       
    }
    else  {
        alert("veuillez entrer un ID event valide");
     
           return false;
       }
       if(nom.match(letters)) {
        return true;
    }
    else {
        alert("veuillez entrer un nom event valide");
     
           return false;
       }
    }
    
    
    
