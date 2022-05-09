<?php

include  __DIR__ . './data/database.php'
// include './data/database.php'
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./file/style.css">
    <title>PhP Spoty</title>
</head>
<body>

<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, CSS, VueJS, axios, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->

<div id="app">
    
<?php

foreach ($database as $disk){
    echo '<div class="display">';
        echo '<div class="cards">';
            // echo '<img src=" ' . $poster . ' " /> ' ;
            echo "<h2>" . $disk['title'] . "</h2>";
            echo "<p>" . $disk['author'] .  "</p>";
        echo "</div>";
    echo "</div>";
};

?>




</div>




<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./file/main.js"></script>
</body>
</html>