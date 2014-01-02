var gc = (function () {
  
  function request(o) {
    
    if(validateRequest(o)) {
      var postString = 'text=' + encodeURIComponent(o.text) + '&email=' 
                     + encodeURIComponent(o.email) + '&_token=' + o.token;
    }

    console.log(o);
    if(window.XMLHttpRequest) {
      httpRequest = new XMLHttpRequest();
    } else if(window.ActiveXObject) {
      try{
        httpRequest = new ActiveXObject('Msxml2.XMLHTTP');
      } catch(e) {
        try{
          httpRequest = new ActiveXObject('Microsoft.XMLHTTP');
        } catch(e) {}
      }
    }

    if(!httpRequest){
      console.log('Cannot create an XMLHTTP instance');
      return false;
    }
    
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('POST', '/contact');
    httpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    httpRequest.send(postString);
    
    function alertContents(){
      if(httpRequest.readyState === 4){
        if(httpRequest.status === 200){
          response(httpRequest.responseText);        
        } else {
          response(false);
        }
      }  
    }
  }

  function response(text) {
    if(text) {
      console.log(text);
    } else {

    }
  }

  function validateRequest(o) {
    return true;
  }

  /* jQuery event handlers */
  $('.gc-scroll').click( function (event) {		
    event.preventDefault();
    $('html, body').animate({scrollTop : $(this.hash).offset().top }, 500);
  });

  return {
    request : request,
    response : response
  }

}());
