<?php


/**
 * ---------------------------------------------------------
 *                             L'amorceur de l'application
 * 
 * Ses roles :
 *      -Charger les reccourcis (constantes)
 *      - Charger les variables d'environnement
 *      - Charger la configuration systéme
 *      - Charger la configuration session
 *      - Charger le monolog
 * ---------------------------------------------------------------------
 */


// Chargerment  des constantes 
    require __DIR__ . "/constants.php";


//   Chargerment  des variables d'environnement
     $envFile = parse_ini_file(ROOT."/env.conf");

    var_dump($envFile);