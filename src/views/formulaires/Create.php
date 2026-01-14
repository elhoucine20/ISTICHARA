<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Form Profil Juridique</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

           body {
             font-family: 'Poppins', sans-serif;
             background-color: #0f172a; /* Deep Midnight Blue */
             background-image: radial-gradient(circle at 2px 2px, #1e293b 1px, transparent 0);
             background-size: 40px 40px; /* Subtle grid pattern */
             display: flex;
             justify-content: center;
             align-items: center;
             min-height: 100vh;
             margin: 0;
             color: #f8fafc;
           }
           
           form {
             background: #1e293b;
             padding: 3rem;
             border-radius: 16px;
             width: 100%;
             max-width: 480px;
             box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
             border: 1px solid #334155;
           }
           
           h3 {
             font-weight: 600;
             letter-spacing: -0.025em;
             color: #38bdf8; /* Sky Blue accent */
             margin-bottom: 2rem;
             text-align: left;
           }
           
           h4 {
             color: #94a3b8;
             text-transform: uppercase;
             font-size: 0.75rem;
             letter-spacing: 0.1em;
             margin-top: 2rem;
           }
           
           label {
             display: block;
             font-size: 0.8rem;
             color: #94a3b8;
             margin-bottom: 8px;
             margin-top: 1.5rem;
           }
           
           input, select {
             width: 100%;
             background: #0f172a;
             border: 1px solid #334155;
             border-radius: 8px;
             padding: 12px 16px;
             color: white;
             font-size: 1rem;
             transition: all 0.3s ease;
             box-sizing: border-box;
           }
           
           input:focus, select:focus {
             outline: none;
             border-color: #38bdf8;
             box-shadow: 0 0 0 1px #38bdf8;
           }
           
           /* Button Group Style */
           div:has(button[type="button"]) {
             display: grid;
             grid-template-columns: 1fr 1fr;
             gap: 1rem;
             margin: 1.5rem 0;
           }
           
           button[type="button"] {
             background: #334155;
             border: 1px solid #475569;
             color: #cbd5e1;
             padding: 12px;
             border-radius: 8px;
             cursor: pointer;
             font-weight: 600;
             transition: all 0.2s;
           }
           
           button[type="button"]:hover {
             background: #475569;
             color: white;
           }
           
           /* Active State */
           button.active {
             background: #0ea5e9;
             color: white;
             border-color: #38bdf8;
           }
           
           button[type="submit"] {
             width: 100%;
             padding: 16px;
             margin-top: 2rem;
             border-radius: 8px;
             border: none;
             background: linear-gradient(to right, #38bdf8, #818cf8);
             color: white;
             font-weight: 700;
             font-size: 1rem;
             cursor: pointer;
             text-transform: uppercase;
             letter-spacing: 0.05em;
             transition: opacity 0.3s, transform 0.2s;
           }
           
           button[type="submit"]:hover {
             opacity: 0.9;
             transform: translateY(-2px);
           }
           
           button[type="submit"]:active {
             transform: translateY(0);
           }
</style>
</head>
<body>

<form method="POST" action="">

  <!-- COMMUN -->
  <h3>Informations générales</h3>

  <label for="name">Nom complet</label>
  <input type="text" id="name" name="name" required>

  <label for="annee_experience">Années d'expérience</label>
  <input type="number" id="annee_experience" name="annee_experience" required>

  <label for="ville">Ville</label>
  <select type="text" id="ville" name="ville" required>
    <?php foreach($leTouts as $ville){  ?>
    <option value="<?=$ville['id']?>"><?=$ville['name']?></option>
    <?php } ?>
  </select>

  <!-- BUTTONS -->
  <div>
    <button type="button" id="btn-avocat">Avocat</button>
    <button type="button" id="btn-huissier">Huissier</button>
  </div>

  <!-- AVOCAT -->
  
  <div id="avocat-fields" style="display:none;">
    <h4>Détails Avocat</h4>
    
    <label for="specialite">Spécialité</label>

    <select type="text" id="specialite" name="specialite">
      <option value="">le tout</option>
      <option value="Droit_pénal">Droit Pénal</option>
      <option value="civil">Droit Civil</option>
      <option value="famille">Droit de la Famille</option>
      <option value="affaires">Droit des Affaires</option>
    </select>

    <label for="consultation">Consultation en ligne</label>
    <select id="consultation" name="consultation">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  
  <!-- HUISSIER -->
  <div id="huissier-fields" style="display:none;">
    <h4>Détails Huissier</h4>
    
    <label for="type_acte">Type d'actes</label>

    <select type="text" id="type_acte" name="type_acte">
      <option value="">le tout</option>
      <option value="Signification">Signification</option>
      <option value="exécution">Exécution</option>
      <option value="constats">Constats</option>
    </select>
  </div>
  
  <br>
  <button type="submit" name="submit">Envoyer</button>

</form>

<!-- JS -->
<script>
  const btnAvocat = document.getElementById("btn-avocat");
  const btnHuissier = document.getElementById("btn-huissier");

  const avocatFields = document.getElementById("avocat-fields");
  const huissierFields = document.getElementById("huissier-fields");

  btnAvocat.addEventListener("click", () => {
    avocatFields.style.display = "block";
    huissierFields.style.display = "none";
  });
  // btnAvocat.addEventListener("dblclick", () => {
  //   avocatFields.style.display = "none";
  // });





  btnHuissier.addEventListener("click", () => {
    huissierFields.style.display = "block";
    avocatFields.style.display = "none";
  });
  //  btnHuissier.addEventListener("dblclick", () => {
  //   huissierFields.style.display = "none";
  // });
</script>

</body>
</html>
