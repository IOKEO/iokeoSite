
const carousel = document.querySelector('.carousel-innerIokeo');
const carouselItems = document.querySelectorAll('.carousel-itemIokeo');

// Clone les éléments du carousel pour créer un effet infini
carousel.innerHTML += carousel.innerHTML;

// Calcule la largeur totale du carousel
const carouselWidth = carouselItems.length * 20; // Largeur d'un item en pourcentage
carousel.style.width = `${carouselWidth}%`;

// Définit la largeur totale du carousel pour éviter le vide
const itemWidth = 20; // Largeur d'un item en pourcentage
const visibleItems = Math.floor(100 / itemWidth); // Nombre d'items visibles à la fois
const totalWidth = carouselItems.length * itemWidth * 2; // Largeur totale en pourcentage (compte tenu du clonage)
const paddingWidth = (100 - totalWidth) / (visibleItems - 1); // Calcul de l'espacement entre les items

carousel.style.paddingRight = `${paddingWidth}%`;
