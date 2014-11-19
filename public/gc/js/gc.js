(function () {
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
          contactSuccess = document.getElementById('contactSuccess'),
          userMessage = document.getElementById('userMessage'),
          userEmail = document.getElementById('userEmail');

      if(message === 'pending') {
        contactButton.style.display = 'none';
        contactSending.style.display = 'block';
        contactButton.style.display = 'none';
      } else if (message === 'success') {
        contactStatus.style.display = 'none';
        contactButton.style.display = 'none';
        contactSending.style.display = 'none';
        contactSuccess.style.display = 'block';
        userMessage.readOnly = 'readonly';
        userEmail.readOnly = 'readonly';
      } else {
        contactSending.style.display = 'none';
        contactStatus.innerHTML = 'Invalid submission';
        contactStatus.style.display = 'block';
        contactButton.innerHTML = 'Try Again';
        contactButton.style.display = 'block';
      }
    }

    var logo = function (containerId) {
     
      var container,
          canvas,
          context,
          id,
          width = 0,
          height = 0;
      
      var initialize = (function () {

        id = containerId;
        container = document.getElementById(id);
        height = window.getComputedStyle(container).height;
        width = height.substring(0, height.length - 2);
        height = width;

        canvas = document.createElement('canvas');
        canvas.width = width;
        canvas.height = height;

        context = canvas.getContext('2d');
        container.appendChild(canvas);

        draw();

      }());

      function draw () {

        var length = width * 0.3,
            x = width / 2,
            y = height / 2,
            lineWidth = width * 0.05;

        context.clearRect(0, 0, width, height);
        context.beginPath();
        context.moveTo(x, y);

        context.lineTo(x += length, y);
        context.lineTo(x, y += length);
        context.lineTo(x += -(length * 2), y);
        context.lineTo(x, y += -(length * 2));
        context.lineTo(x += length * 2.5, y);
        context.lineTo(x, y += length * 2.5);
        context.lineTo(x += -(length * 3), y);
        context.lineTo(x, y += -(length * 3));
        context.lineTo(x += length * 3, y);

        context.lineWidth = lineWidth;
        context.lineCap = 'square';
        context.shadowColor = '#6a9859';
        context.shadowBlur = lineWidth / 2;
        context.strokeStyle = '#6b4776';
        context.stroke();

      }

    };

    /* jQuery event handlers */
    $('.gc-scroll').click( function (event) {		
      event.preventDefault();
      $('html, body').animate({scrollTop : $(this.hash).offset().top }, 500);
    });

    return {
      request : request,
      logo : logo
    }

  }());

  gc.logo('logoHeader');
  gc.logo('logoContent');

}());
