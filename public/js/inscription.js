
function GestionIscr(){
    
    var error=document.getElementById('erreur');
    var input=document.getElementsByTagName('input');

    document.addEventListener('submit',(event) => {
        var erreur="";
        for(i=0 ; i<input.length ; i++){
            if(!input[i].value){
                event.preventDefault()
                 erreur= "Veuillez renseigner touts les champs";
                if(erreur){
                    error.textContent=erreur;
                }
            }
        }
        
        
    })
}
GestionIscr()