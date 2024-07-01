function verifierMotsDePasse(password, password2) 
{
    if(password.length !== password2.length || password.length >= 8 && password.length <= 16)
    {
        return "Les deux mots de passe n'ont pas la même longueur"
    }
    else
    {
        return ""
    }

}
//le contorle se fera sur le click du bouton ubmit
let btn_submit = document.querySelector("#form_inscribe_submit")
//ajouter l'écoute de l'événement
btn_submit.addEventListener("click", function(e){
    e.preventDefault()
    //controler que les deux mots de passe sont identiques
    let pw1 = document.querySelector("#password")
    let pw2 = document.querySelector("#password2")
    if(pw1.value === pw2.value)
    {
        console.log("identique")
        //se débrouiller pour valider le formulaire
        document.querySelector("#form-register").submit()
    }
    else
    {
        console.log("different")
        // afficher un petit message
        let alerte2 = document.querySelector("#alerte2")
        alerte2.innerHTML = "Vos deux mots de passe sont différents"
        //vérifier la longueur des mots de passe
        let resultat = verifierMotsDePasse(pw1, pw2)
        if (resultat !== "") {
            alerte2.innerHTML += "<br>" + resultat;
        }
    }
})