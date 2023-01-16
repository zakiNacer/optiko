// gestionnaire devenement qui permet lier du code a venement le code sexicute des declencheemnt de leveneent


//déterminer et  gerer le nombre de caractere pour le message

//gerer les element de la page contact
// function saisie(){
//         window.addEventListener("keyup",saisie);
//         var max =150;
//         var long =document.contactForm.message.value.length;
//         if(long>max){
//             document.contactForm.message.value=document.contactForm.message.value.substring(0,max)
//             // la function substring permet de maintenir nombre de chaine de carac de 0 jusqu'au le max souhaité
// }
// // aaficher le nombre de caractere en format dexendant dans l'input
// document.contactForm.restant.value=max-=document.contactForm.message.value.length;
// }

function formValidator(){
    //recuperer les champs
    var name=document.getElementById('name');
    var mail=document.getElementById('emailAddress');
    var msg=document.getElementById('text');
    var error=document.getElementById('error');
    //  var form=document.getElementsByName('contactForm');
   document.addEventListener('submit',(event) => {
        var erreur="";
        if(name.value==='' || mail.value==='' || msg.value==='' ){
        event.preventDefault()
        erreur= "veuillez renseigner tout les champs";
       
        }
        if(erreur){
            error.textContent=erreur;
        }
        else{
         alert("votre message a bien été envoyé");
        }
    })
    
    
}
formValidator();
//saisie();
