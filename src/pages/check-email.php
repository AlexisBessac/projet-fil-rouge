<?php

require '../src/data/db-connect.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = trim($_POST['email']);
    
    try {
        $query = $dbh->prepare("SELECT COUNT(*) as count FROM utilisateur WHERE email = ?");
        $query->execute([$email]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        echo json_encode([
            'exists' => $result['count'] > 0
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'exists' => false,
            'error' => 'Erreur lors de la vérification'
        ]);
    }
} else {
    echo json_encode([
        'exists' => false
    ]);
}
