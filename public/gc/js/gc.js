var gc = (function () {
  
  /* jQuery event handlers */
  $('.gc-scroll').click( function (event) {		
    event.preventDefault();
    $('html, body').animate({scrollTop : $(this.hash).offset().top }, 500);
  });
  
}());
