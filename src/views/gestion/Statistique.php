<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques Juridiques</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        .navbar-brand {
            font-weight: bold;
            color: #2c3e50;
        }

        .nav-link:hover {
            color: #3498db !important;
        }

        table {
    width: 100%;
    border-collapse: collapse; /* Removes double borders */
    margin: 25px 0;
    font-size: 18px;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }
 
      
      thead tr {
          background-color: #404392; /* Modern green color */
          color: #ffffff;
          text-align: left;
      }
      
      th, td {
          padding: 12px 15px;
      }
      
      tbody tr {
          border-bottom: 1px solid #dddddd;
      }
      
      /* Zebra Striping: makes every second row light gray */
      tbody tr:nth-of-type(even) {
          background-color: #b93939;
      }
      
      /* Highlights the last row */
      tbody tr:last-of-type {
          border-bottom: 2px solid #4408bd;
      }
      
      /* Hover effect: highlights row when mouse is over it */
      tbody tr:hover {
          background-color: #f1f1f1;
          cursor: pointer;
      }
 </style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
        :root {
            --bg-color: #f0f2f5;
            --card-bg: #ffffff;
            --primary: #1a365d;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --success: #10b981;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            margin: 0;
            padding: 20px;
            color: var(--text-main);
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 5px;
            color: var(--primary);
        }

        header p {
            color: var(--text-muted);
        }

        /* Grid Layout for Metrics */
        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: var(--card-bg);
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .metric .label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        .metric .value {
            font-size: 2rem;
            font-weight: 700;
            margin: 10px 0;
            color: var(--primary);
        }

        .trend.positive {
            color: var(--success);
            font-size: 0.85rem;
            font-weight: 600;
        }

        .subtext {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        /* Charts Layout */
        .charts-section {
            display: grid;
            grid-template-columns: 1fr 2fr;
            /* Doughnut smaller than Line chart */
            gap: 20px;
        }

        @media (max-width: 768px) {
            .charts-section {
                grid-template-columns: 1fr;
            }
        }

        h3 {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: var(--text-main);
        }
</style>
</head>

<body>

 
        <header class="page-header">
      <?php 
      require_once "src/views/public/header.php";
      ?>
        </header>
    <div class="dashboard-container">


            <h1>Tableau de Bord Statistiques</h1>
            <p>Aperçu de l'activité des Avocats et Huissiers</p>
  

        <div class="metrics-grid">
            <div class="card metric">
                <span class="label">Total Profils</span>
                <div class="value"><?= $AllAvocats +  $AllHuissiers  ?></div>
                <span class="trend positive">+12% ce mois</span>
            </div>
            <div class="card metric">
                <span class="label">Avocats</span>
                <div class="value"><?= $AllAvocats ?></div>
                <span class="subtext">65% du total</span>
            </div>
            <div class="card metric">
                <span class="label">Huissiers</span>
                <div class="value"><?= $AllHuissiers ?></div>
                <span class="subtext">35% du total</span>
            </div>
            <!-- <div class="card metric">
                <span class="label">Consultations</span>
                <div class="value">3,150</div>
                <span class="trend positive">+5.4%</span>
            </div> -->
        </div>
        <div class="card metric">

        <h2 style="text-align: center;">Top 3 Avocats</h2>
        <table>
            <thead>

                <th>id</th>
                <th>Name</th>
                <th>anne experience</th>
            </thead>
            <?php foreach($TopThree as $avocat){ ?>
            <tbody>
                <td><?= $avocat['id'] ?></td>
                <td><?= $avocat['name'] ?></td>
                <td><?= $avocat['annee_experience'] ?></td>
            </tbody>
            <?php } ?>
        </table>
        </div>
        <div>
        <table>
            <thead>

                <th>Ville</th>
                <th>Avocats</th>
                <th>Huissiers</th>
                <th>Total</th>
            </thead>
            <?php 
            // $CVountDeChaqueVille = $ville->checkCountVille(); 
            ?>
            <?php foreach($lesVilles as $element){ ?>
            <tbody>

                <td><?= $element['name'] ?></td>
                <td><?= $total1= $Ville->checkCountVille("avocats",$element['id'])?></td>
                <td><?= $total2=$Ville->checkCountVille("huissiers",$element['id'])?></td>
                <td><?= $total1 + $total2 ?></td>
            </tbody>
            <?php } ?>
        </table>
        </div>

        <div class="charts-section">
            <div class="card chart-container">
                <h3>Répartition par Spécialité</h3>
                <canvas id="specialtyChart"></canvas>
            </div>
            <div class="card chart-container">
                <h3>Activité Mensuelle</h3>
                <canvas id="activityChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        // Simple Chart.js implementation
        const ctx1 = document.getElementById('specialtyChart').getContext('2d');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Droit Civil', 'Droit Pénal', 'Droit Social', 'Droit Rural'],
                datasets: [{
                    data: [300, 150, 100, 80],
                    backgroundColor: ['#1a365d', '#2b6cb0', '#4299e1', '#bee3f8']
                }]
            }
        });

        const ctx2 = document.getElementById('activityChart').getContext('2d');
        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Inscriptions',
                    data: [40, 65, 50, 85, 120, 100],
                    borderColor: '#2b6cb0',
                    tension: 0.4
                }]
            }
        });
    </script>
</body>

</html>