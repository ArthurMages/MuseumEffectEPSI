window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        document.getElementById('burger-toggle').checked = false;
    }
});

// Fonction pour fermer les sous-menus et le menu burger lors du scroll
window.addEventListener('scroll', function() {
    var burgerToggle = document.getElementById('burger-toggle');
    if (burgerToggle && burgerToggle.checked) {
        burgerToggle.checked = false;
    }

    var submenuBrand = document.querySelector('.submenu-brand');
    var submenuAssistance = document.querySelector('.submenu-assistance');
    
    if (submenuBrand && submenuBrand.style.visibility === 'visible') {
        submenuBrand.style.transition = 'opacity 0.1s ease-in-out, visibility 0s'; // Transition rapide lors du scroll
        submenuBrand.style.opacity = '0';
        submenuBrand.style.visibility = 'hidden';
    }

    if (submenuAssistance && submenuAssistance.style.visibility === 'visible') {
        submenuAssistance.style.transition = 'opacity 0.1s ease-in-out, visibility 0s'; // Transition rapide lors du scroll
        submenuAssistance.style.opacity = '0';
        submenuAssistance.style.visibility = 'hidden';
    }
});

// Restaurer la transition normale lors du survol
document.querySelectorAll('.menu li').forEach(function(menuItem) {
    menuItem.addEventListener('mouseenter', function() {
        var submenuBrand = menuItem.querySelector('.submenu-brand');
        var submenuAssistance = menuItem.querySelector('.submenu-assistance');
        
        var rect = menuItem.getBoundingClientRect();
        var topPosition = rect.bottom; 

        if (submenuBrand) {
            submenuBrand.style.transition = 'opacity 0.3s ease-in-out, visibility 0.3s'; // Transition normale lors du survol
            submenuBrand.style.top = topPosition + 'px';
            submenuBrand.style.opacity = '1';
            submenuBrand.style.visibility = 'visible';
        }

        if (submenuAssistance) {
            submenuAssistance.style.transition = 'opacity 0.3s ease-in-out, visibility 0.3s'; // Transition normale lors du survol
            submenuAssistance.style.top = topPosition + 'px';
            submenuAssistance.style.opacity = '1';
            submenuAssistance.style.visibility = 'visible';
        }
    });

    menuItem.addEventListener('mouseleave', function() {
        var submenuBrand = menuItem.querySelector('.submenu-brand');
        var submenuAssistance = menuItem.querySelector('.submenu-assistance');
        
        if (submenuBrand) {
            submenuBrand.style.opacity = '0';
            submenuBrand.style.visibility = 'hidden';
        }

        if (submenuAssistance) {
            submenuAssistance.style.opacity = '0';
            submenuAssistance.style.visibility = 'hidden';
        }
    });
});