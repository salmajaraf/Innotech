<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('css/packpage.css') }}" />

    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container-fluid" style="padding-top: 8%; min-height: auto ;" >

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800" style="font-family:'Rund Display', sans-serif;color:#201F25;">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nombres de clients  </div>
                                <div class="h5 mb-0 font-weight-bold " style="color:#011017">{{$numberOfClients }}</div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Nombre de commandes</div>
                            <div class="h5 mb-0 font-weight-bold " style="color:#011017" >{{ $numberOfOrders }}</div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre des templates
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold " style="color:#011017" >{{ $numberOfTemplates}}</div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Boite de contacts</div>
                            <div class="h5 mb-0 font-weight-bold " style="color:#011017">{{ $numberOfComments}}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
<<<<<<< HEAD
        <div class="col-lg-6 mb-4" style="width:510px ;height:580px;" >
            <div class="card shadow mb-4" style="width:510px ;height:580px;">
=======
        <div class="col-lg-6 mb-4" style="width:510px ;height:300px;" >
            <div class="card shadow mb-4" style="width:510px ;height:300px;">
>>>>>>> 08565323635274750873e4f50298b98388cf4b85
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <div class="dropdown no-arrow">
<<<<<<< HEAD
                        
                        <h1 style="font-family:'Rund Display', sans-serif;color:#011017; font-size:22px; text-align:center;" >Analyse des commandes</h1>
                        <!-- Canvas pour le graphique en bâtons -->
                        

                        
=======
                        <a class="dropdown-toggle" href="#" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <h1 style="font-family:'Rund Display', sans-serif;color:#201F25; font-size:22px; text-align:center;" >Analyse des commandes</h1>
                        <!-- Canvas pour le graphique en bâtons -->
                        <canvas id="barChart" width="450" height="300"></canvas>

                        <script th:inline="javascript">
                            // Récupérer les données du modèle Thymeleaf
                            var commandesMoisActuel = [[${commandesMoisActuel}]];
                            var commandesMoisPrecedent = [[${commandesMoisPrecedent}]];

                            // Récupérer le contexte du graphique
                            var ctx = document.getElementById('barChart').getContext('2d');

                            // Configurer le graphique en bâtons
                            var barChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Mois Actuel', 'Mois Précédent'],
                                    datasets: [{
                                        label: 'Nombre de commandes',
                                        data: [commandesMoisActuel, commandesMoisPrecedent],
                                        backgroundColor: [
                                            'rgba(41,43,43,0.2)', // Couleur pour le mois actuel
                                            'rgba(84,143,220,0.84)'  // Couleur pour le mois précédent
                                        ],
                                        borderColor: [
                                            'rgb(32,31,37)',
                                            'rgba(84,143,220,0.84)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
>>>>>>> 08565323635274750873e4f50298b98388cf4b85
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myAreaChart" width="571" height="480" style="display: block; height: 320px; width: 381px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-lg-6 mb-4" style="width:510px ;height:380px;">
<<<<<<< HEAD
            <div class="card shadow mb-4" style="width:510px ;height:580px; align-items: center; ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="width:510px ;">

                    <div class="dropdown no-arrow" >
                        <h1 style="font-family:'Rund Display', sans-serif;color:#011017; font-size:22px; " >Nos objectifs</h1>

                            
                      
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="color: #011017">
                    
                    <section id="objectifs">
                        <p>Bienvenue sur la plateforme d'administration d'InnoTech. En tant qu'administrateur, il est crucial de comprendre les objectifs fondamentaux de notre entreprise, qui guident notre vision, nos décisions et nos actions au quotidien.
                            Nous nous engageons à atteindre les objectifs suivants :</p>
                    
                        <ol>
                            <li>
                                <strong>Satisfaction Client :</strong>
                                Nous visons à fournir des services exceptionnels qui dépassent les attentes des clients, assurant ainsi leur satisfaction et leur fidélité.
                            </li>
                    
                            <li>
                                <strong>Innovation et Excellence :</strong>
                                Nous aspirons à une amélioration continue, favorisant l'innovation et maintenant des normes élevées d'excellence dans tous les aspects de nos opérations.
                            </li>
                    
                            <li>
                                <strong>Responsabilité Sociale :</strong>
                                En tant que citoyen d'entreprise responsable, nous nous engageons à contribuer positivement aux communautés dans lesquelles nous opérons et à minimiser notre impact environnemental.
                            </li>
                    
                            <!-- Ajoutez plus d'objectifs au besoin -->
                        </ol>
                    </section>
=======
            <div class="card shadow mb-4" style="width:510px ;height:380px; align-items: center; ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="width:510px ;height:380px;    padding-bottom: 2rem !important;">

                    <div class="dropdown no-arrow" style="margin-top:20px;">
                        <h1 style="font-family:'Rund Display', sans-serif;color:#201F25; font-size:22px; text-align:center;padding-left:90px" >Analyse des Packs</h1>

                        <div style="display:flex;flex-direction:row;">
                            <canvas id="packStatisticsChart" width="160" height="120"></canvas>
                            <div style="font-family:'Rund Display', sans-serif;color:#201F25; font-size:14px;display:flex;flex-direction:column;">
                                <div style="padding-top:5px; ">
                                     1: Cuisine
                                </div>
                                <div style="padding-top:5px;">
                                    2: Salon
                                </div>
                                <div style="padding-top:5px;">
                                    3: Jardin
                                </div>
                                <div style="padding-top:5px;">
                                    4: Chambre
                                </div>
                                <div style="padding-top:5px;">
                                    5: Salle de Bain
                                </div>





                            </div>
                        </div>

                        <script th:inline="javascript">
                            // Récupérer les données du modèle Thymeleaf
                            var statistics = /*[[${statistics}]]*/ []; // Replace with the data from your service
                            var packNames = statistics.map(stat => stat[0]);
                            var commandCounts = statistics.map(stat => stat[1]);

                            var ctx = document.getElementById('packStatisticsChart').getContext('2d');
                            var chart = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: packNames,
                                    datasets: [{
                                        data: commandCounts,
                                        backgroundColor: [
                                            'rgba(14,13,13,0.84)',
                                            'rgba(84,143,220,0.84)',
                                            'rgba(139,246,130,0.87)',
                                            'rgba(241,154,74,0.96)',
                                            'rgba(196,35,35,0.87)',

                                        ]
                                    }]
                                }
                            });
                        </script>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myPieChart" width="381" height="367" style="display: block; height: 245px; width: 254px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                    </div>
>>>>>>> 08565323635274750873e4f50298b98388cf4b85
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="font-family:'Rund Display', sans-serif;color:#201F25; font-size:22px;">Descriptive</h6>
                </div>
                <div class="card-body" style="font-family:'Rund Display', sans-serif;">
                    <p>Bienvenue sur le Tableau de Bord de l'Administrateur. Cette page fournit une vue complète des performances et des statistiques clés de la plateforme. En tant qu'administrateur, vous disposez d'une multitude d'informations essentielles présentées de manière claire et intuitive.</p>
                    <p class="mb-0">Explorez ces fonctionnalités pour prendre des décisions informées et optimiser l'efficacité de la plateforme.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="font-family:'Rund Display', sans-serif;color:#201F25; font-size:22px;">Role</h6>
                </div>
                <div class="card-body">
                    <p style="font-family:'Rund Display', sans-serif;">En tant qu'administrateur, votre rôle est crucial pour aligner les activités quotidiennes avec cette vision globale. Vous êtes le gardien de la direction stratégique, veillant à ce que chaque décision et action entreprise contribuent à la réalisation de nos objectifs à long terme.</p>

                </div>
            </div>

        </div>




    </div>


    </div>

</div>

</body>
</html>