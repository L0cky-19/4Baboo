<?php
class HomeModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Exemple de méthode pour récupérer des statistiques pour la page d'accueil
    public function getStats() {
        $stats = [
            'offres' => 0,
            'entreprises' => 0,
            'etudiants' => 0
        ];

        try {
            // Récupérer le nombre d'offres
            $stmt = $this->pdo->query("SELECT COUNT(*) as total FROM offres");
            $stats['offres'] = $stmt->fetch()['total'];

            // Récupérer le nombre d'entreprises
            $stmt = $this->pdo->query("SELECT COUNT(*) as total FROM entreprises");
            $stats['entreprises'] = $stmt->fetch()['total'];

            // Récupérer le nombre d'étudiants
            $stmt = $this->pdo->query("SELECT COUNT(*) as total FROM users WHERE role = 'etudiant'");
            $stats['etudiants'] = $stmt->fetch()['total'];
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des statistiques : " . $e->getMessage());
        }

        return $stats;
    }
}
