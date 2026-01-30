<?php
/**
 * Router principal de l'application
 * Gère la routage et l'inclusion des pages
 * 
 * @author Équipe développement
 * @version 1.0
 */

// ============================================
// Configuration et constants
// ============================================

// Définition des chemins de base
define('BASE_PATH', __DIR__ . '/../');
define('PAGES_PATH', BASE_PATH . 'src/pages/');
define('TEMPLATES_PATH', BASE_PATH . 'templates/');

// Configuration des pages autorisées (liste blanche)
define('ALLOWED_PAGES', [
    'home',
    'connexion',
    'inscription',
    'dashboard',
    'dashboard-lesson',
    'users',
    'add-user',
    'edit-user',
    'delete-user',
    'lessons',
    'add-lesson',
    'edit-lesson',
    'delete-lesson',
    'dashboard-lesson',
    'docs',
    'add-doc',
    'edit-doc',
    'delete-doc',
    'absence-user',
    'late-user',
    'liste-formation',
    'apply',
    'check-email',
    'role',
    'log-out'
]);

// ============================================
// Initialisation et sécurité
// ============================================

// Définition du charset
header('Content-Type: text/html; charset=utf-8');

// Headers de sécurité
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');

// Gestion des erreurs
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    error_log("[$errno] $errstr in $errfile:$errline");
    return true;
});

// ============================================
// Logique du routeur
// ============================================

try {
    // Récupération et validation du paramètre page
    $page = isset($_GET['page']) ? trim($_GET['page']) : 'home';
    
    // Validation : vérifier que la page est dans la liste blanche
    if (!preg_match('/^[a-z\-]+$/', $page) || !in_array($page, ALLOWED_PAGES, true)) {
        throw new Exception("Page invalide : $page");
    }
    
    // Construction du chemin sécurisé
    $pagePath = PAGES_PATH . $page . '.php';
    $templatePath = TEMPLATES_PATH . 'layout.html.php';
    
    // Vérification que le fichier existe et est bien dans le répertoire attendu
    if (!file_exists($pagePath) || realpath($pagePath) === false || 
        strpos(realpath($pagePath), realpath(PAGES_PATH)) !== 0) {
        throw new Exception("Fichier de page introuvable ou chemin invalide");
    }
    
    if (!file_exists($templatePath)) {
        throw new Exception("Template layout introuvable");
    }
    
    // Inclusion de la base de données et des variables globales
    require BASE_PATH . 'src/data/db-connect.php';
    
    // Chargement des données pour la page
    require $pagePath;
    
    // Inclusion du template
    require $templatePath;
    
} catch (Exception $e) {
    // Gestion des erreurs
    error_log("Router Error: " . $e->getMessage());
    
    // Affichage page 404
    http_response_code(404);
    header('HTTP/1.1 404 Not Found');
    
    // Inclusion du template 404 si disponible
    $error404Path = TEMPLATES_PATH . '404.html.php';
    if (file_exists($error404Path)) {
        require $error404Path;
    } else {
        echo '<h1>404 - Page non trouvée</h1>';
        echo '<p>La page demandée n\'existe pas.</p>';
    }
    exit;
}