var app = {
  
  init: function() {
    console.log('init');
    app.initEventListener();
    
  },
  // All select and Events Listener
  initEventListener:function() {
    let burgerMenuOpenButton = document.querySelector('.open-menu');
    let burgerMenuCloseButton = document.querySelector('.close-menu');
    burgerMenuOpenButton.addEventListener('click',app.handleOpenFrontPageMenu);
    burgerMenuCloseButton.addEventListener('click', app.handleCloseFrontPageMenu);

  },

   // Open burger menu in header in mobile 
   handleOpenFrontPageMenu: function () {
    document.querySelector('.open-menu').style.visibility = "hidden";
    document.querySelector('.header__menu').style.visibility = "visible";
  },
  //Close burger menu in header in mobile
  handleCloseFrontPageMenu: function () {
    document.querySelector('.open-menu').style.visibility = "visible";
    document.querySelector('.wrapper').style.filter = "";
    document.querySelector('.header__menu').style.visibility = "hidden";
  },

}

document.addEventListener("DOMContentLoaded", app.init);