<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire des Professionnels</title>
    <link rel="stylesheet" href="style.css">
<style>
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

    <div class="profile-grid">
        
        <div class="profile-card">
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
        </div>
 <!-- :::::::::::::::::: -->
         <div class="profile-card">
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
        </div>
 <!-- ----------------- -->
        <div class="profile-card">
            <div class="card-header">
                <span class="badge huissier">Huissier</span>
                <span class="location">Lyon, FR</span>
            </div>
            <div class="profile-info">
                <div class="avatar">AL</div>
                <h3>Me. Alice Legrand</h3>
                <p class="specialty">Recouvrement / Constats</p>
                <p class="exp">8 ans d'expérience</p>
            </div>
            <div class="card-footer">
                <span class="status-offline">Bureau uniquement</span>
                <button class="view-btn">Voir Profil</button>
            </div>
        </div>
        <!-- ::::::::::::::::::::::::: -->
                 <div class="profile-card">
            <div class="card-header">
                <span class="badge huissier">Huissier</span>
                <span class="location">Lyon, FR</span>
            </div>
            <div class="profile-info">
                <div class="avatar">AL</div>
                <h3>Me. Alice Legrand</h3>
                <p class="specialty">Recouvrement / Constats</p>
                <p class="exp">8 ans d'expérience</p>
            </div>
            <div class="card-footer">
                <span class="status-offline">Bureau uniquement</span>
                <button class="view-btn">Voir Profil</button>
            </div>
        </div>
         <!-- ------------------------ -->

    </div>
</div>

</body>
</html>