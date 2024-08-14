/* Menu mobile */

// Fonction pour gérer le comportement du menu mobile
function menuMobile() {
  // Sélectionne le bouton de menu (souvent représenté par une icône de "burger")
  const btn = document.querySelector('.burger');
  
  // Sélectionne l'élément de l'en-tête qui contient le menu de navigation
  const header = document.querySelector('.header');
  
  // Sélectionne tous les liens du menu de navigation
  const links = document.querySelectorAll('.navbar a');

  // Ajoute un événement au clic sur le bouton de menu
  btn.addEventListener('click', () => {
    // Alterne la classe 'show-nav' pour afficher ou cacher le menu
    header.classList.toggle('show-nav');
  });

  // Pour chaque lien de navigation, ajoute un événement au clic
  links.forEach(link => {
    link.addEventListener('click', () => {
      // Masque le menu en retirant la classe 'show-nav' lorsqu'un lien est cliqué
      header.classList.remove('show-nav');
    });
  });
}

// Appelle la fonction pour initialiser le comportement du menu mobile
menuMobile();

/* Portfolio */

// Fonction pour gérer les filtres de projets dans la section portfolio
function tabsFilters() {
  // Sélectionne tous les onglets de filtre
  const tabs = document.querySelectorAll('.portfolio-filters a');
  
  // Sélectionne toutes les cartes de projet dans le portfolio
  const projets = document.querySelectorAll('.portfolio .card');

  // Fonction pour réinitialiser les onglets actifs (supprime la classe 'active')
  const resetActiveLinks = () => {
    tabs.forEach(elem => {
      elem.classList.remove('active');
    })
  }

  // Fonction pour afficher ou masquer les projets en fonction du filtre sélectionné
  const showProjets = (elem) => {
    projets.forEach(projet => {
      // Récupère la catégorie de chaque projet
      let filter = projet.getAttribute('data-category');

      // Si le filtre est 'all', montre tous les projets
      if (elem === 'all') {
        projet.parentNode.classList.remove('hide');
        return;
      }

      // Utilise un opérateur ternaire pour afficher ou masquer les projets
      filter !== elem ? projet.parentNode.classList.add('hide') : projet.parentNode.classList.remove('hide');
    });
  }

  // Pour chaque onglet de filtre, ajoute un événement au clic
  tabs.forEach(elem => {
    elem.addEventListener('click', (event) => {
      event.preventDefault(); // Empêche le comportement par défaut du lien
      let filter = elem.getAttribute('data-filter'); // Récupère le filtre sélectionné
      showProjets(filter); // Montre les projets en fonction du filtre
      resetActiveLinks(); // Réinitialise les autres onglets
      elem.classList.add('active'); // Active l'onglet sélectionné
    });
  })
}

// Appelle la fonction pour initialiser les filtres de portfolio
tabsFilters();

// Fonction pour gérer l'affichage des détails des projets
function showProjectDetails() {
  // Sélectionne tous les liens de projet
  const links = document.querySelectorAll('.card__link');
  
  // Sélectionne tous les modals de projet
  const modals = document.querySelectorAll('.modal');
  
  // Sélectionne tous les boutons de fermeture de modal
  const btns = document.querySelectorAll('.modal__close');

  // Fonction pour masquer tous les modals
  const hideModals = () => {
    modals.forEach(modal => {
      modal.classList.remove('show');
    });
  }

  // Pour chaque lien de projet, ajoute un événement au clic
  links.forEach(elem => {
    elem.addEventListener('click', (event) => {
      event.preventDefault(); // Empêche le comportement par défaut du lien

      // Affiche le modal correspondant au projet cliqué
      document.querySelector(`[id=${elem.dataset.id}]`).classList.add('show');
    });
  });

  // Pour chaque bouton de fermeture, ajoute un événement au clic pour masquer les modals
  btns.forEach(btn => {
    btn.addEventListener('click', (event) => {
      hideModals();
    });
  });

}

// Appelle la fonction pour initialiser l'affichage des détails de projet
showProjectDetails();

// Effets d'animation avec Intersection Observer

const observerIntersectionAnimation = () => {
  // Sélectionne toutes les sections du document
  const sections = document.querySelectorAll('section');
  
  // Sélectionne toutes les barres de compétence dans la section compétences
  const skills = document.querySelectorAll('.skills .bar');

  // Initialise l'opacité et la transition pour chaque section (sauf la première)
  sections.forEach((section, index) => {
    if (index === 0) return; // Ignore la première section
    section.style.opacity = "0";
    section.style.transition = "all 1.6s";
  });

  // Initialise la largeur et la transition pour chaque barre de compétence
  skills.forEach((elem, index) => {
    elem.style.width = "0";
    elem.style.transition = "all 1.6s";
  });

  // Crée un observateur pour détecter quand les sections entrent dans le champ de vision
  let sectionObserver = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Affiche la section en ajustant son opacité
        let elem = entry.target;
        elem.style.opacity = 1;
      }
    });
  });

  // Observe chaque section pour appliquer l'effet d'animation
  sections.forEach(section => {
    sectionObserver.observe(section);
  });

  // Crée un observateur pour détecter quand les barres de compétence entrent dans le champ de vision
  let skillsObserver = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Ajuste la largeur de la barre de compétence en fonction de la valeur spécifiée
        let elem = entry.target;
        elem.style.width = elem.dataset.width + '%';
      }
    });
  });

  // Observe chaque barre de compétence pour appliquer l'effet d'animation
  skills.forEach(skill => {
    skillsObserver.observe(skill);
  });
}

// Appelle la fonction pour initialiser les animations
observerIntersectionAnimation();
