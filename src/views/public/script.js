let dev1 = document.getElementById('dev1');
let dev2 = document.getElementById('dev2');
let devAll = document.getElementById('devAll');

async function fetchAll(Name) {
    let response = await fetch("http://localhost/istichARA/membres&query=" + Name);
    let Data = await response.json();
    return Data;

}
let input = document.getElementById('inputRecherch');
input.addEventListener('input', async function () {
    devAll.innerHTML = "";
    let Name = input.value;
    let Data = await fetchAll(Name);


    let avocats = [];
    let huissiers = [];
    Data.forEach((element) => {
        let spec = element.specialitée;
        if (spec === "affaires" || spec === "famille" || spec === "droit_pénal" || spec === "civil") {
          avocats.push(element);
        } else {
            huissiers.push(element);
        }

    });

    avocats.forEach((element) => {

        devAll.innerHTML += `
     <div id="dev1" class="profile-card">
            <div class="card-header">
                <span class="badge avocat">Avocat</span>
              <a href="DeleteAvocat&id=${element['id']}">
                   <button class="location">Delete</button>
              </a>  
            </div>
            <div class="profile-info">
                <div class="avatar">AV</div>
                <h3>${element['name']}</h3>
                <p class="specialty"> ${element['specialitée']}</p>
                <p class="exp">${element['annee_experience']} ans d'expérience</p>
                <p class="exp">Location : ${element['ville_id']}</p>
            </div>
            <div class="card-footer">
                <span class="status-online">${element['consultation_en_ligne']}</span>
                
             <a href="ModifierAvocat&id=${element['id']}">
                   <button class="location">Modifier</button>
              </a>              
            </div>
        
        </div> 
        
                           `
    });



    huissiers.forEach((element) => {
        devAll.innerHTML += `
            <div id="dev2" class="profile-card">
            <div class="card-header">
                <span class="badge huissier">Huissier</span>
              <a href="DeleteHuissier&id=${element['id']}">
                   <button class="location">Delete</button>
              </a>             
            </div>
            <div class="profile-info">
                <div class="avatar">HU</div>
                <h3>${element['name']}</h3>
                <p class="specialty"> ${element['types_actes']}</p>
                <p class="exp"> ${element['annee_experience']} ans d'expérience</p>
                <p class="exp">Location : ${element['ville_id']} </p>

            </div>
            <div class="card-footer">
                <span class="status-offline"></span>
             <a href="ModifierHuissier&id=${element['id']}">
                   <button class="location">Modifier</button>
              </a>              
            </div>
        </div>
            
            `
    });

})







