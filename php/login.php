<?php session_start(); // Vos informations d'identification admin $admin_username = 'admin'; $admin_password = 'motdepasse'; 
// Vérification des informations d'identification 
if ($_POST['username'] === $admin_username && $_POST['password'] === $admin_password) {
    // Informations d'identification valides, 
    //démarrer la session 
    $_SESSION['admin'] = true;
    header('Location: admin_dashboard.php');
    // Rediriger vers le tableau de bord de l'administrateur 
    exit();
} else { // Informations d'identification invalides, rediriger vers la page de connexion 
    header('Location: login_form.php?error=1');
    exit();
}

// Vérifier si l'administrateur est connecté 
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: login_form.php');
    exit();
}
// Le reste du code de votre tableau de bord administrateur ici 
echo 'Bienvenue dans le tableau de bord administrateur!';
