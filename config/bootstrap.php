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
    require __DIR__ . "/dotenv.php";

    // Chargement la configuration systéme
    require __DIR__ ."/system.php";

    // Chargement la configuration session
    require __DIR__ ."/session.php";

    // Chargement du monolog
    require __DIR__ ."/monolog.php";
