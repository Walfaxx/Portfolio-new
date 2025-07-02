<?php

require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';

    if (!empty($lname) && !empty($fname) && !empty($subject)) {
        
        $sql = "INSERT INTO contacts (nom, prenom, sujet) VALUES (:nom, :prenom, :sujet)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nom', $lname);
        $stmt->bindParam(':prenom', $fname);
        $stmt->bindParam(':sujet', $subject);

        if ($stmt->execute()) {
            echo "Les données ont été enregistrées avec succès.";
        } else {
            echo "Erreur : " . implode(", ", $stmt->errorInfo());
        }

    } else {
        echo "Tous les champs sont obligatoires.";
    }
}
?>
