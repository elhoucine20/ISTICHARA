<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Modifier Profil Huissier</title>
  <link rel="stylesheet" href="style.css">
  <style>
           body {
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         background-color: #fcfaf7; /* Slightly warmer background */
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         margin: 0;
       }
       
       .simple-container {
         width: 100%;
         max-width: 420px;
         padding: 20px;
       }
       
       .edit-card {
         background: white;
         padding: 35px;
         border-radius: 12px;
         box-shadow: 0 4px 15px rgba(0,0,0,0.08);
         border-top: 5px solid #d97706; /* Amber accent color for Huissiers */
       }
       
       h2 {
         margin: 0 0 8px 0;
         color: #1e293b;
         text-align: center;
         font-size: 1.4rem;
       }
       
       .subtitle {
         font-size: 13px;
         color: #64748b;
         text-align: center;
         margin-bottom: 30px;
         text-transform: uppercase;
         letter-spacing: 1px;
       }
       
       .input-group {
         margin-bottom: 18px;
       }
       
       label {
         display: block;
         margin-bottom: 6px;
         font-weight: 600;
         font-size: 13px;
         color: #475569;
       }
       
       input {
         width: 100%;
         padding: 11px;
         border: 1px solid #cbd5e1;
         border-radius: 6px;
         font-size: 15px;
         box-sizing: border-box;
         transition: border-color 0.2s;
       }
       
       input:focus {
         outline: none;
         border-color: #d97706;
         background-color: #fffaf0;
       }
       
       .button-row {
         margin-top: 25px;
         display: flex;
         flex-direction: column;
         gap: 12px;
       }
       
       .btn-save {
         background-color: #1e293b; /* Dark professional button */
         color: white;
         border: none;
         padding: 13px;
         border-radius: 6px;
         font-weight: bold;
         cursor: pointer;
         font-size: 15px;
         transition: background 0.3s;
       }
       
       .btn-save:hover {
         background-color: #0f172a;
       }
       
       .btn-back {
         text-align: center;
         text-decoration: none;
         color: #94a3b8;
         font-size: 13px;
       }
       
       .btn-back:hover {
         color: #64748b;
         text-decoration: underline;
       }
  </style>
</head>
<body>

<div class="simple-container">
  <form class="edit-card huissier-theme">
    <h2>Modifier mon profil</h2>
    <p class="subtitle">Espace professionnel : Huissier de Justice</p>

    <div class="input-group">
      <label>Nom complet</label>
      <input type="text" name="name" value="Me. Alice Legrand">
    </div>

    <div class="input-group">
      <label>Ville de résidence</label>
      <input type="text" name="ville" value="Lyon">
    </div>

    <div class="input-group">
      <label>Types d'actes (Compétence)</label>
      <input type="text" name="type_acte" value="Constats, Recouvrement, Signification">
    </div>

    <div class="input-group">
      <label>Années d'exercice</label>
      <input type="number" name="experience" value="8">
    </div>

    <div class="input-group">
      <label>Numéro de téléphone professionnel</label>
      <input type="text" name="phone" value="04 72 XX XX XX">
    </div>

    <div class="button-row">
      <button type="submit" class="btn-save">Mettre à jour</button>
      <a href="#" class="btn-back">Retour</a>
    </div>
  </form>
</div>

</body>
</html>