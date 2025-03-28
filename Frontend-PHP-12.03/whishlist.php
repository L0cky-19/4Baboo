<!DOCTYPE html>
<html lang="fr">
<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StageHUB - Whishlist</title>
    <link rel="stylesheet" href="styles.css">

    <script>
        let whishlistItems = [
            { title: "Développeur Web Junior", company: "TechNova Solutions", location: "Paris" },
            { title: "Technicien Réseaux", company: "GreenWave Technologies", location: "Lyon" },
            { title: "Assistant Data Scientist", company: "FutureCom Innovations", location: "Nice" },
            { title: "Développeur Full Stack", company: "SoftWorks", location: "Marseille" },
            { title: "Chef de Projet Digital", company: "DigitalMax", location: "Paris" },
            { title: "Assistant Développeur Mobile", company: "Techies", location: "Lyon" },
            { title: "Ingénieur Logiciel", company: "FutureTech", location: "Bordeaux" },
            { title: "Technicien Support Informatique", company: "WebSolutions", location: "Nice" },
            { title: "Designer UX/UI", company: "Creative Minds", location: "Lyon" },
            { title: "Data Analyst", company: "BigData Analytics", location: "Paris" },
            { title: "Développeur Frontend", company: "WebTech Solutions", location: "Lyon" },
            { title: "Technicien Support Réseaux", company: "NetPro", location: "Marseille" },
            { title: "Ingénieur DevOps", company: "CloudMasters", location: "Paris" },
            { title: "Chef de Projet IT", company: "TechProject", location: "Nice" },
            { title: "Développeur Python", company: "CodeFusion", location: "Bordeaux" },
            { title: "Développeur Java", company: "SoftSolutions", location: "Lyon" },
            { title: "Stagiaire en Marketing Digital", company: "Digital Boosters", location: "Paris" },
            { title: "Assistant Développeur Mobile", company: "AppMobile", location: "Toulouse" },
            { title: "Technicien Support Informatique", company: "TechSupport", location: "Marseille" },
            { title: "Analyste en Sécurité Informatique", company: "SecureTech", location: "Paris" },
            { title: "Développeur Backend", company: "CodeWizards", location: "Lyon" },
            { title: "Développeur Cloud", company: "Cloudify", location: "Nice" }
        ];

        const itemsPerPage = 5;
        let currentPage = 1;

        function showWhishlist(page) {
            currentPage = page;
            const totalPages = Math.ceil(whishlistItems.length / itemsPerPage);
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedItems = whishlistItems.slice(start, end);
            const whishlistContainer = document.querySelector('.whishlist-container');
            whishlistContainer.innerHTML = '';

            paginatedItems.forEach(item => {
                const itemElement = createWhishlistItemElement(item);
                whishlistContainer.appendChild(itemElement);
            });

            updatePagination(totalPages);
        }

        function createWhishlistItemElement(item) {
            const itemElement = document.createElement('div');
            itemElement.classList.add('whishlist-item');
            itemElement.innerHTML = `
                <h3>${item.title}</h3>
                <p><strong>Entreprise :</strong> ${item.company}</p>
                <p><strong>Localisation :</strong> ${item.location}</p>
                <button class="remove-btn">Retirer</button>
            `;
            return itemElement;
        }

        function updatePagination(totalPages) {
            const paginationContainer = document.querySelector('.pagination');
            paginationContainer.innerHTML = '';

            // First page button
            const firstPageButton = document.createElement('button');
            firstPageButton.textContent = '<<';
            firstPageButton.onclick = () => goToPage(1);
            firstPageButton.disabled = (currentPage === 1);
            paginationContainer.appendChild(firstPageButton);

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement('button');
                pageButton.textContent = i;
                pageButton.onclick = () => goToPage(i);
                pageButton.disabled = (i === currentPage);
                paginationContainer.appendChild(pageButton);
            }

            // Last page button
            const lastPageButton = document.createElement('button');
            lastPageButton.textContent = '>>';
            lastPageButton.onclick = () => goToPage(totalPages);
            lastPageButton.disabled = (currentPage === totalPages);
            paginationContainer.appendChild(lastPageButton);
        }

        function goToPage(page) {
            showWhishlist(page);
        }

        window.onload = function() {
            const totalPages = Math.ceil(whishlistItems.length / itemsPerPage);
            showWhishlist(currentPage);
        };

        document.addEventListener("DOMContentLoaded", function() {
            const isUserLoggedIn = localStorage.getItem("isLoggedIn") === "true";
            const loginButton = document.getElementById("loginButton");
            const usernameDisplay = document.getElementById("usernameDisplay");
            const userWindow = document.getElementById("userWindow");

            // Mise à jour de l'affichage selon l'état de connexion
            if (isUserLoggedIn) {
                loginButton.style.display = "none";
                usernameDisplay.style.display = "inline-block";
                usernameDisplay.textContent = localStorage.getItem("username") || "Utilisateur";
            } else {
                loginButton.style.display = "inline-block";
                usernameDisplay.style.display = "none";
                userWindow.style.display = "none"; // Caché si pas connecté
            }
        });

    </script>
</head>
<body>
    <main>
        <h2>Ma Whishlist</h2>
        <div class="whishlist-container">
            <!-- Les éléments de la whishlist seront ajoutés ici par JavaScript -->
        </div>

        <div class="pagination">
            <!-- Les boutons de pagination seront insérés ici -->
        </div>
    </main>

</body>
</html>