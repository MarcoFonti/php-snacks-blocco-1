<?php 
    
$array_matches = [
    [
        'home_team' =>[
            'name'=> 'Virtus Segafredo Bologna',
            'score' => '65'
        ],
            
        'out_team'=> [
            'name'=> 'Givova Scafati Basket',
            'score' => '75'
        ]
    ],
        
    [
        'home_team' =>[
            'name'=> 'Vanoli Basket Cremona',
            'score' => '85'
        ],

        'out_team'=> [
            'name'=> 'Generazione Vincente Napoli Basket',
            'score' => '100'
        ]
    ],
        
    [
        'home_team' =>[
            'name'=> 'Dolomiti Energia Trentino',
            'score' => '90'
        ],
            
        'out_team'=> [
            'name'=> 'NutriBullet Treviso Basket',
            'score' => '87'
        ]
            
    ],

    [
        'home_team' =>[
            'name'=> 'EA7 Emporio Armani Milano',
            'score' => '115'
        ],
        
        'out_team'=> [
            'name'=> 'Happy Casa Brindisi',
            'score' => '112'
        ]
            
    ],

];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center text-danger">PARTITE</h1>
        <ul>
        <!-- CICLO SU ARRAY PRICIPALE -->
        <?php foreach($array_matches as $index => $match) : ?>
            <hr>
                <!-- CICLO SU ARRAY SECONDARIO E RECUPERO LE CHIAVI -->
                <?php foreach($match as $key => $team) : ?>
                    <li class="my-3">
                        <!-- STAMPO LE CHIAVI -->
                        <h4 class="text-primary"><?= $key ?></h4>
                        <!-- CICLO PER VEDERE I VALORI DELL'ARRAY SECONDARIO -->
                        <?php foreach($team as $team_key => $squad) : ?>
                            <li>
                                <!-- STAMPO SIA LA CHIAVE CHE IL VALORE -->
                                <em><?= $team_key ?>: </em>   
                                <strong><?= $squad ?></strong>
                            </li>
                        <?php endforeach ; ?>
                    </li>
                <?php endforeach ; ?>
        <?php endforeach ;?>
        </ul>
    </div>
</body>
</html>