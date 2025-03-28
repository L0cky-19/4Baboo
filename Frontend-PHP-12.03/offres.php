<!DOCTYPE html>
<html lang="fr">
<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StageHUB - Offres</title>
    <link rel="stylesheet" href="styles.css">

    <script>
    let offers = [
        { title: "Développeur Web", company: "TechNova", location: "Paris", duration: "6 mois", description: "Développement d'applications web.", startDate: "2025-04-01", skills: "JavaScript, React", salary: 1200, maxApplicants: 10 },
        { title: "Technicien Réseaux", company: "GreenWave", location: "Lyon", duration: "4 mois", description: "Gestion des infrastructures réseaux.", startDate: "2025-05-15", skills: "Cisco, VLAN", salary: 1000, maxApplicants: 8 },
        { title: "Assistant Data Scientist", company: "FutureCom", location: "Nice", duration: "6 mois", description: "Analyse de données et modèles IA.", startDate: "2025-06-10", skills: "Python, Machine Learning", salary: 1300, maxApplicants: 5 },
        { title: "Ingénieur DevOps", company: "CloudSync", location: "Marseille", duration: "5 mois", description: "Automatisation et CI/CD.", startDate: "2025-04-20", skills: "Docker, Kubernetes", salary: 1500, maxApplicants: 6 },
        { title: "Développeur Mobile", company: "AppTech", location: "Toulouse", duration: "6 mois", description: "Développement d'applications mobiles.", startDate: "2025-05-01", skills: "Flutter, Kotlin", salary: 1100, maxApplicants: 7 },
        { title: "Analyste Cybersécurité", company: "SecuTech", location: "Bordeaux", duration: "6 mois", description: "Sécurisation des infrastructures.", startDate: "2025-06-15", skills: "SOC, SIEM", salary: 1400, maxApplicants: 4 },
        { title: "Développeur Backend", company: "DataFlow", location: "Nantes", duration: "6 mois", description: "Développement API et bases de données.", startDate: "2025-04-10", skills: "Node.js, SQL", salary: 1250, maxApplicants: 9 },
        { title: "Développeur Frontend", company: "UIXperience", location: "Lille", duration: "5 mois", description: "Développement d'interfaces web.", startDate: "2025-05-12", skills: "Vue.js, CSS", salary: 1150, maxApplicants: 6 },
        { title: "Technicien Support IT", company: "ITCare", location: "Strasbourg", duration: "4 mois", description: "Support utilisateur et maintenance.", startDate: "2025-04-25", skills: "Windows, Linux", salary: 950, maxApplicants: 10 }
    ];

    const itemsPerPage = 5;
    let currentPage = 1;

    function displayOffersWithPagination(offers) {
        const offerContainer = document.querySelector('.offer-container');
        offerContainer.innerHTML = '';
        const totalPages = Math.ceil(offers.length / itemsPerPage);
        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const offersToDisplay = offers.slice(start, end);

        offersToDisplay.forEach(offer => {
            const offerElement = document.createElement('div');
            offerElement.classList.add('offer');
            offerElement.innerHTML = `
                <h3>${offer.title}</h3>
                <p><strong>Entreprise :</strong> ${offer.company}</p>
                <p><strong>Lieu :</strong> ${offer.location}</p>
                <p><strong>Durée :</strong> ${offer.duration}</p>
                <p><strong>Date de début :</strong> ${offer.startDate || "Non précisée"}</p>
                <p><strong>Compétences :</strong> ${offer.skills || "Non précisées"}</p>
                <p><strong>Rémunération :</strong> ${offer.salary ? offer.salary + " €" : "Non précisée"}</p>
                <p><strong>Candidatures max :</strong> ${offer.maxApplicants !== Infinity ? offer.maxApplicants : "Non précisé"}</p>
                <p><strong>Description :</strong> ${offer.description}</p>
            `;
            offerContainer.appendChild(offerElement);
        });

        updatePagination(totalPages);
    }

    function updatePagination(totalPages) {
        const paginationContainer = document.querySelector('.pagination');
        paginationContainer.innerHTML = '';

        const firstPageButton = document.createElement('button');
        firstPageButton.textContent = '<<';
        firstPageButton.onclick = () => goToPage(1);
        firstPageButton.disabled = (currentPage === 1);
        paginationContainer.appendChild(firstPageButton);

        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement('button');
            pageButton.textContent = i;
            pageButton.onclick = () => goToPage(i);
            pageButton.disabled = (i === currentPage);
            paginationContainer.appendChild(pageButton);
        }

        const lastPageButton = document.createElement('button');
        lastPageButton.textContent = '>>';
        lastPageButton.onclick = () => goToPage(totalPages);
        lastPageButton.disabled = (currentPage === totalPages);
        paginationContainer.appendChild(lastPageButton);
    }

    function goToPage(pageNumber) {
        currentPage = pageNumber;
        displayOffersWithPagination(offers);
    }

    window.onload = function() {
        displayOffersWithPagination(offers);
    };
    </script>
</head>
<body>
    <main>
        <h2>Offres de Stage</h2>
        <div class="filter-container">
            <div class="filter-item">
                <label for="searchTitle">Titre de l'offre :</label>
                <input type="text" id="searchTitle" placeholder="Rechercher par titre" oninput="filterOffers()">
            </div>
            <div class="filter-item">
                <label for="searchCompany">Entreprise :</label>
                <input type="text" id="searchCompany" placeholder="Rechercher par entreprise" oninput="filterOffers()">
            </div>
            <div class="filter-item">
                <label for="searchStartDate">Date de début :</label>
                <input type="date" id="searchStartDate" oninput="filterOffers()">
            </div>
            <div class="filter-item">
                <label for="searchSkills">Compétences :</label>
                <input type="text" id="searchSkills" placeholder="Rechercher par compétences" oninput="filterOffers()">
            </div>
            <div class="filter-item">
                <label for="minSalary">Salaire minimum (€) :</label>
                <input type="number" id="minSalary" placeholder="Salaire minimum" oninput="filterOffers()">
            </div>
            <div class="filter-item">
                <label for="maxApplicants">Candidatures maximales :</label>
                <input type="number" id="maxApplicants" placeholder="Nombre de candidatures max" oninput="filterOffers()">
            </div>
        </div>

        <div class="offer-container">
            <!-- Les offres seront affichées ici via JavaScript -->
        </div>
        <div class="pagination">
            <!-- Les boutons de pagination seront insérés ici -->
        </div>
    </main>
</body>
</html>