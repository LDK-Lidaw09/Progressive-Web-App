//si le document est charge
/*$(document).ready(function () {
    //on ecoute l'evenement soumission
    $("#form").submit(function (e) { 
        e.preventDefault();
        //recuperer les valuers
        const name = $("#name").val();
        const email = $("#email").val();
        const password = $("#password").val();     
        //appel a la fonction inscription
        inscription(name,email,password);
       //inscrire une personne en base de donnnee
       function inscription(name,email,password) {
        $.post('http://localhost/Projet_PWA_Design_backend/Backend-Reservation/inscription.php', 
        {name:name, email:email, password:password}, function(response){ 
            alert("success");
            document.location.href="connexion.html";
            
         });         
       }
    });
});


//si le document est charge

    //on ecoute l'evenement soumission
    $("#connexion").submit(function (e) { 
        e.preventDefault();
        //recuperer les valuers
        const login = $("#login").val();
        const password = $("#password").val();     
        //appel a la fonction connexion
        connexion(login,password);
       //vérification en base de donnnee
       function connexion(login,password) {
        $.post('http://localhost/Projet_PWA_Design_backend/Backend-Reservation/connexion.php', 
        { email:login, password:password}, function(response){ 
            alert("success");
            document.location.href="reservation.php";
            
         });         
       }
    });

    $(document).ready(function () {
    //on ecoute l'evenement soumission
    $("#reserv").submit(function (e) { 
        e.preventDefault();
        //recuperer les valuers
        const name = $("#name").val();
        const date_arr = $("#date_arr").val();
        const date_dep= $("#date_dep").val();     
        const chambre = $("#chambre").val();     
        const adulte = $("#adulte").val();     
        const enfant = $("#enfant").val();     
        const email = $("#email").val();     
        const tel = $("#tel").val();     
        
        console.log(name);
        console.log(date_arr);
        console.log(date_dep);
        console.log(chambre);
        console.log(adulte);
        console.log(enfant);
        console.log(email);
        console.log(tel);
 
        const object = {
            "name" :name, 
            "date_arr":date_arr, 
            "date_dep":date_dep,
            "chambre":chambre,
            "adulte":adulte,
            "enfant":enfant,
            "email":email,
            "tel":tel
        }

        console.log(object);

        //appel a la fonction inscription
        insert(name,date_arr,date_dep,chambre,adulte,enfant,email,tel);
       //inscrire une reservation en base de donnnee
       function insert(name,date_arr,date_dep,chambre,adulte,enfant,email,tel) {
        $.post('http://localhost/Projet_PWA_Design_backend/Backend-Reservation/reservation.php', 
        {
            name:name, 
            date_arr:date_arr, 
            date_dep:date_dep,
            chambre:chambre,
            adulte:adulte,
            enfant:enfant,
            email:email,
            tel:tel
        }
        ,function(response){
            alert("success");
            document.location.href="connexion.php";
         });         
       }
    });
});


$(document).ready(function () {
    //on ecoute l'evenement soumission
    $("#location").submit(function (e) { 
        e.preventDefault();
        //recuperer les valuers
        const name = $("#name").val();
        const date_loc = $("#date_loc").val();
        const date_rem = $("#date_rem").val();     
        const heure_loc = $("#heure_loc").val();     
        const heure_rem = $("#heure_rem").val();     
        const voiture = $("#car").val();     
        const email = $("#email").val();     
        const tel = $("#tel").val();     
        
        //appel a la fonction inscription
        location(name,date_loc,date_rem,heure_loc,heure_rem,voiture,email,tel);
       //inscrire une reservation en base de donnnee
       function location(name,date_loc,date_rem,heure_loc,heure_rem,voiture,email,tel) {
        $.post('http://localhost/Projet_PWA_Design_backend/Backend-Reservation/location.php', 
        {
            name:name, 
            date_loc:date_loc, 
            date_rem:date_rem,
            heure_loc:heure_loc,
            heure_rem:heure_rem,
            voiture:voiture,
            email:email,
            tel:tel
        }
        ,function(response){
            alert("success");
            document.location.href="location.php";
         });         
       }
    });
});

$(document).ready(function () {
    //on ecoute l'evenement soumission
    $("#taxi").submit(function (e) { 
        e.preventDefault();
        //recuperer les valuers
        const name = $("#name").val();
        const date_res = $("#date_res").val();
        const heure_res = $("#heure_res").val();     
        const add_dep = $("#add_dep").val();     
        const add_des = $("#add_des").val();     
        const taxi = $("#car").val();     
        const email = $("#email").val();     
        const tel = $("#tel").val();     
        
        //appel a la fonction inscription
        taxi_loc(name,date_res,heure_res,add_dep,add_des,taxi,email,tel);
       //inscrire une reservation en base de donnnee
       function taxi_loc(name,date_res,heure_res,add_dep,add_des,taxi,email,tel) {
        $.post('http://localhost/Projet_PWA_Design_backend/Backend-Reservation/taxi.php', 
        {
            name:name, 
            date_res:date_res, 
            heure_res:heure_res,
            add_dep:add_dep,
            add_des:add_des,
            taxi:taxi,
            email:email,
            tel:tel
        }
        ,function(response){
            alert("success");
            document.location.href="taxi.php";
         });         
       }
    });
});*/



function main (){
    const permission = document.getElementById('push-permission')

    if(
        !permission &&
        !('Notification' in window) &&
        !('serviceWoker' in navigator)

    ){
        return;
    }
        const button = document.createElement('button')
        button.innerText = 'Recevoir les notifications'
        permission.appendChild(button)
        button.addEventListener('click', askPermission)

}

async function askPermission () {
       const permission = await Notification.requestPermission()
}

async function registerServiceWorker () {
    const registration = await navigator.serviceWorker.register('sw.js')
    const subscription = await registration.pushManager.getSubscription();
    console.log(subscription)
}

main()