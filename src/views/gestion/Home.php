<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire des Professionnels</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
         <style>
        .navbar-brand { font-weight: bold; color: #2c3e50; }
        .nav-link:hover { color: #3498db !important; }
    </style>
<style>
    /* ajoute */
    button {
        background-color: #3498db;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    button:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    
    button:active {
        transform: translateY(0);
    }

    .btn-add {
    background-color: #27ae60;
    color: white;
    padding: 8px 18px;
    border: 2px solid transparent;
    border-radius: 50px; /* Rounded pill shape */
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
      }
      
      .btn-add:hover {
          background-color: white;
          color: #27ae60;
          border: 2px solid #27ae60;
      }
        /* fin */
        
            :root {
        --primary: #1e293b;
        --accent: #3b82f6;
        --avocat-color: #dbeafe;
    --avocat-text: #1e40af;
    --huissier-color: #fef3c7;
    --huissier-text: #92400e;
    --bg-body: #f8fafc;
     }
     
     body {
         font-family: 'Inter', sans-serif;
         background-color: var(--bg-body);
         margin: 0;
         color: var(--primary);
     }
     
     .display-container {
         max-width: 1100px;
         margin: 40px auto;
         padding: 0 20px;
     }
     
     .page-header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 30px;
     }
     
     .search-box input {
         padding: 12px 20px;
         border-radius: 50px;
         border: 1px solid #e2e8f0;
         width: 300px;
         outline: none;
         transition: 0.3s;
     }
     
     .search-box input:focus {
         border-color: var(--accent);
         box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
     }
     
     /* Filter Buttons */
     .filter-bar {
         display: flex;
         gap: 10px;
         margin-bottom: 30px;
     }
     
     .filter-btn {
         padding: 8px 20px;
         border-radius: 20px;
         border: none;
         background: white;
         cursor: pointer;
         font-weight: 500;
         color: #64748b;
         box-shadow: 0 2px 4px rgba(0,0,0,0.05);
     }
     
     .filter-btn.active {
         background: var(--primary);
         color: white;
     }
     
     /* Card Grid */
     .profile-grid {
         display: grid;
         grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
         gap: 25px;
     }
     
     .profile-card {
         background: white;
         border-radius: 16px;
         padding: 24px;
         box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
         transition: transform 0.3s ease;
         border: 1px solid #f1f5f9;
     }
     
     .profile-card:hover {
         transform: translateY(-5px);
     }
     
     .card-header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 20px;
     }
     
     .badge {
         padding: 4px 12px;
         border-radius: 12px;
         font-size: 0.75rem;
         font-weight: 700;
         text-transform: uppercase;
     }
     
     .badge.avocat { background: var(--avocat-color); color: var(--avocat-text); }
     .badge.huissier { background: var(--huissier-color); color: var(--huissier-text); }
     
     .location { font-size: 0.85rem; color: #94a3b8; }
     
     .avatar {
         width: 60px;
         height: 60px;
         background: #e2e8f0;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 1.2rem;
         margin-bottom: 15px;
     }
     
     .profile-info h3 { margin: 0; font-size: 1.2rem; }
     .specialty { color: var(--accent); font-weight: 600; margin: 5px 0; }
     .exp { font-size: 0.9rem; color: #64748b; }
     
     .card-footer {
         margin-top: 20px;
         padding-top: 20px;
         border-top: 1px solid #f1f5f9;
         display: flex;
         justify-content: space-between;
         align-items: center;
     }
     
     .status-online { font-size: 0.8rem; color: #10b981; font-weight: 500; }
     .status-offline { font-size: 0.8rem; color: #94a3b8; }
     
     .view-btn {
         background: #f1f5f9;
         border: none;
         padding: 8px 16px;
         border-radius: 8px;
         cursor: pointer;
         font-weight: 600;
     }

     .view-btn:hover { background: #e2e8f0; }
</style>
</head>
<body>
<!-- :::::::::::::::: -->
 <?php
 require_once "src/views/public/header.php";
 ?>

<!-- ::::::::::::::::: -->
<div class="display-container">
    <header class="page-header">
        <div>
            <h1>Annuaire Juridique</h1>
            <p>Trouvez l'expert adapté à vos besoins</p>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Rechercher par nom ou ville...">
        </div>
    </header>

    <div class="filter-bar">
        <button class="filter-btn active">Tous</button>
        <button class="filter-btn">Avocats</button>
        <button class="filter-btn">Huissiers</button>
    </div>

    <a href="Create"><button class="btn-add" >Ajouter +</button></a>
    <br><br><br>
    <div class="profile-grid">
        <?php  foreach($Avocats as $avocat){?>
        <div class="profile-card">
            <div class="card-header">
                <span class="badge avocat">Avocat</span>
                <span class="location">Paris, FR</span>
            </div>
            <div class="profile-info">
                <div class="avatar">AV</div>
                <h3><?= $avocat['name'] ?></h3>
                <p class="specialty"><?= $avocat['specialitée'] ?></p>
                <p class="exp"><?= $avocat['annee_experience'] ?> ans d'expérience</p>
                <p class="exp">Location : <?= $Avocat->getVille($avocat['ville_id']) ?> </p>
            </div>
            <div class="card-footer">
                <?php if($avocat['consultation_en_ligne']==true){?>
                <span class="status-online">Consultation en ligne ✅</span>
                <?php }?>
                <button class="view-btn">Voir Profil</button>
            </div>
            
        </div> 
        <?php  }?>
 <!-- :::::::::::::::::: -->
         <!-- <div class="profile-card">
            <div class="card-header">
                <span class="badge avocat">Avocat</span>
                <span class="location">Paris, FR</span>
            </div>
            <div class="profile-info">
                <div class="avatar">MD</div>
                <h3>Me. Marc Dupont</h3>
                <p class="specialty">Droit de la Famille</p>
                <p class="exp">12 ans d'expérience</p>
            </div>
            <div class="card-footer">
                <span class="status-online">Consultation en ligne</span>
                <button class="view-btn">Voir Profil</button>
            </div>
        </div> -->
 <!-- ----------------- -->
 
      <?php  foreach($Huissiers as $huissier){?>
        <div class="profile-card">
            <div class="card-header">
                <span class="badge huissier">Huissier</span>
                <span class="location">Lyon, FR</span>
            </div>
            <div class="profile-info">
                <div class="avatar">HU</div>
                <h3><?= $huissier['name'] ?></h3>
                <p class="specialty"><?= $huissier['types_actes'] ?></p>
                <p class="exp"><?= $huissier['annee_experience'] ?> ans d'expérience</p>
                <p class="exp">Location : <?= $Huissier->getVille($huissier['ville_id']) ?> </p>

            </div>
            <div class="card-footer">
                <span class="status-offline"></span>
                <button class="view-btn">Voir Profil</button>
            </div>
        </div>
    <?php  }?>

    

    </div>
</div>

</body>
</html>