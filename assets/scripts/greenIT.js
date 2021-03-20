$(document).ready(function(){

    $('.js-scrollTo').on('click', function() { // Au clic sur un élément menu
        let page = $(this).attr('href'); // Page cible sélectionnée
        if (page == "#breads"){ // Temporisation pour fluidifier le défilement
            timer = 750;
        }else if (page == "#pastries"){
            timer = 1500;
        }else if (page == "#viennoiseries"){
            timer = 2000;
        }
        let speed = timer; // Durée du défilement (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go à la section sélectionnée
        return false;
    });

    $('.js-scrollMenu').on('click', function(){ // Au clic sur bouton
        let page = $(this).attr('href'); // Section cible : navBar
        let speed = 1000; // Durée du défilement (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });

});