<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Modifier mon Profil</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
         font-family: Arial, sans-serif;
         background-color: #f4f7f6;
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         margin: 0;
       }
       
       .simple-container {
         width: 100%;
         max-width: 450px;
         padding: 20px;
       }
       
       .edit-card {
         background: white;
         padding: 30px;
         border-radius: 8px;
         box-shadow: 0 2px 10px rgba(0,0,0,0.1);
       }
       
       h2 {
         margin: 0 0 10px 0;
         color: #333;
         text-align: center;
       }
       
       .subtitle {
         font-size: 14px;
         color: #777;
         text-align: center;
         margin-bottom: 25px;
       }
       
       .input-group {
         margin-bottom: 15px;
       }
       
       label {
         display: block;
         margin-bottom: 5px;
         font-weight: bold;
         font-size: 14px;
         color: #555;
       }
       
       input[type="text"],
       input[type="number"] {
         width: 100%;
         padding: 10px;
         border: 1px solid #ddd;
         border-radius: 4px;
         box-sizing: border-box; /* keeps input inside the card */
       }
       
       .checkbox-group {
         margin: 20px 0;
         display: flex;
         align-items: center;
         gap: 10px;
         font-size: 14px;
       }
       
       .button-row {
         display: flex;
         flex-direction: column;
         gap: 10px;
       }
       
       .btn-save {
         background-color: #007bff;
         color: white;
         border: none;
         padding: 12px;
         border-radius: 4px;
         font-weight: bold;
         cursor: pointer;
         font-size: 16px;
       }
       
       .btn-save:hover {
         background-color: #0056b3;
       }
       
       .btn-back {
         text-align: center;
         text-decoration: none;
         color: #888;
         font-size: 14px;
         margin-top: 5px;
       }
       
       .btn-back:hover {
         color: #333;
       }
  </style>
</head>
<body>

<div class="simple-container">
  <form class="edit-card">
    <h2>Modifier mon profil</h2>
    <p class="subtitle">Mettez à jour vos informations d'avocat</p>

    <div class="input-group">
      <label>Nom complet</label>
      <input type="text" name="name" value="Me. Marc Dupont">
    </div>

    <div class="input-group">
      <label>Ville</label>
      <input type="text" name="ville" value="Paris">
    </div>

    <div class="input-group">
      <label>Spécialité</label>
      <input type="text" name="specialite" value="Droit de la Famille">
    </div>

    <div class="input-group">
      <label>Années d'expérience</label>
      <input type="number" name="experience" value="12">
    </div>

    <div class="checkbox-group">
      <input type="checkbox" id="online" checked>
      <label for="online">Disponible pour consultation en ligne</label>
    </div>

    <div class="button-row">
      <button type="submit" class="btn-save">Enregistrer</button>
      <a href="#" class="btn-back">Annuler</a>
    </div>
  </form>
</div>

</body>
</html>