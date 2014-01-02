var gc = (function () {
  
  function request(o) {
    
    updateStatus('pending');

    if(validateRequest(o)) {
      var postString = 'text=' + encodeURIComponent(o.text) + '&email=' 
                     + encodeURIComponent(o.email) + '&_token=' + o.token;
    } else {
      updateStatus('fail');
      return false;
    }

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
          updateStatus('success');      
        } else {
          updateStatus('fail');
        }
      }  
    }
  }

  function validateRequest(o) {
    if(o.text !== '' && o.email !== '') {
      if(o.email.indexOf('@') !== -1 && o.email.indexOf('.') !== -1) {
        return true;
      }
    }

    return false;
  }

  function updateStatus(message) {
    var contactButton = document.getElementById('contactButton'),
        contactStatus = document.getElementById('contactStatus'),
        contactSending = document.getElementById('contactSending'),
        contactSuccess = document.getElementById('contactSuccess');

    if(message === 'pending') {
      contactButton.style.display = 'none';
      contactSending.style.display = 'block';
      contactButton.style.display = 'none';
    } else if (message === 'success') {
      contactStatus.style.display = 'none';
      contactButton.style.display = 'none';
      contactSending.style.display = 'none';
      contactSuccess.style.display = 'block';
    } else {
      contactSending.style.display = 'none';
      contactStatus.innerHTML = 'Invalid submission';
      contactStatus.style.display = 'block';
      contactButton.innerHTML = 'Try Again';
      contactButton.style.display = 'block';
    }
  }

  /* jQuery event handlers */
  $('.gc-scroll').click( function (event) {		
    event.preventDefault();
    $('html, body').animate({scrollTop : $(this.hash).offset().top }, 500);
  });

  return {
    request : request
  }

}());
