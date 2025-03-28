<?php
session_start();

// Connexion à la base de données
$host = 'localhost';
$dbname = 'stagehub';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérification des données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    if (!empty($email) && !empty($mot_de_passe)) {
        // Requêtes pour vérifier l'utilisateur dans chaque table
        $tables = ['etudiants', 'pilotes', 'admins'];
        foreach ($tables as $table) {
            $stmt = $pdo->prepare("SELECT * FROM $table WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'prenom' => $user['prenom'],
                    'nom' => $user['nom'],
                    'role' => $table
                ];
                header('Location: index.php'); // Redirection après connexion
                exit;
            }
        }
        echo "Email ou mot de passe incorrect.";
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
