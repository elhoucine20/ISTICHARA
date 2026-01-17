
// _________________________________RECHERCH_____________________________________________

let input = document.getElementById('inputRecherch');
let dev1 = document.getElementById('dev1');
let dev2 = document.getElementById('dev2');
let devAll = document.getElementById('devAll');
    let avocats = [];
    let huissiers = [];

// fucntion affichage
    function RecherchAffichageAvocats(avocats){
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
                           avocats=[];
    });
}
function RecherchAffichageHuissiers(huissiers){

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
                <p class="specialtyy"> ${element['types_actes']}</p>
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
            huissiers=[];
    });

    }

    // fetch data
async function fetchAll(Name) {
    let response = await fetch("http://localhost/istichARA/membres&query=" + Name);
    let Data = await response.json();
    return Data;

}


// on recherch
input.addEventListener('input', async function () {
    devAll.innerHTML = "";
    let Name = input.value;
    let Data = await fetchAll(Name);

// filter data avocats et huissiers
    Data.forEach((element) => {
        let spec = element.specialitée;
        if (spec|| spec === "affaires" || spec === "famille" || spec === "droit_pénal" || spec === "civil") {
          avocats.push(element);
        } else {
            huissiers.push(element);
        }

    });
RecherchAffichageAvocats(avocats);
RecherchAffichageHuissiers(huissiers);

})


// _________________________________FILTRAGE_____________________________________________

let Avocats = document.getElementById('AvocatsBTN')
let Huissirs = document.getElementById('Huissirs')
let leToutS = document.getElementById('leToutS')



    // fetch data
async function filterAll(usertype) {
    let response = await fetch("http://localhost/istichARA/membres&filter=" + usertype);
    let Data = await response.json();
    return Data;

}

// avocats
Avocats.addEventListener('click',async function(){
     Avocats.classList='active';
     Huissirs.classList='filter-btn';
     leToutS.className='filter-btn';
    console.log("active btn ");
    devAll.innerHTML = "";
      let LesAvocats = await filterAll("avocat");
       RecherchAffichageAvocats(LesAvocats);
})

// huissiers
Huissirs.addEventListener('click',async function(){
     Huissirs.classList='active';
     Avocats.className="filter-btn";
     leToutS.className='filter-btn';

    console.log("active btn ");
    devAll.innerHTML = "";
      let LesHuissiers = await filterAll("huissier");
       RecherchAffichageHuissiers(LesHuissiers);
})

// le tout
leToutS.addEventListener('click',async function(){
     Huissirs.className='filter-btn';
     Avocats.className="filter-btn";
     leToutS.classList='active';

    // console.log("active btn ");
    devAll.innerHTML = "";
      let LesAvocats = await filterAll("avocat");
      let LesHuissiers = await filterAll("huissier");
       RecherchAffichageAvocats(LesAvocats);
       RecherchAffichageHuissiers(LesHuissiers);


})

