window.onload=()=>{
    document.querySelector("#psw").addEventListener("input",checkpass);
}
//créer la fonction qui verifie le MDP
function checkpass(){
// recupere ce qui a été ecrit
var psw= document.login.psw.value;
//initialiser un score
var score=0;
//1 recuperer ce qui a été saisie
var minis = document.querySelector("#miniscule");
var maj = document.querySelector("#majuscule");
var chiffre = document.querySelector("#chiffre");
var nb_caractere = document.querySelector("#caractere");
//les expression reguliere permet de filtrer le mot de passe et renvoi si le champ correspond ou pas a cette expression
//1Miniscul
if(/[a-z]/.test(psw)){
    //on pass en validé
    minis.classList.replace("invalid","valid");
    score++;
}else{
    //on passe en rouge
    minis.classList.replace("valid","invalid");
    
}
//majuscule
if(/[A-Z]/.test(psw)){
    //on pass en validé
    maj.classList.replace("invalid","valid");
    score++;
}else{
    //on passe en rouge
    maj.classList.replace("valid","invalid");
    // score++;
}
//un chiffre
if(/[0-9]/.test(psw)){
    //on pass en validé
    chiffre.classList.replace("invalid","valid");
    score++;
}else{
    //on passe en rouge
    chiffre.classList.replace("valid","invalid");
}
// nombre de chiffres
if(psw.length >=12){
    //on pass en validé
    nb_caractere.classList.replace("invalid","valid");
    score++;
}else{
    //on passe en rouge
    nb_caractere.classList.replace("valid","invalid");
    
}
if(score<=4){
    document.querySelector("[type=submit]").style.display="none";
}else{
    document.querySelector("[type=submit]").style.display="initial";
}
//pour valider le mot de passe et replir tout les critere j'ai choisie de mettre en place un score qui décide si les critere son bonne ou pas 
}