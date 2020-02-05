window.onload = function() {
    mymap = L.map('mapid').setView([41.349724, 2.107911], 12);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11'
    }).addTo(mymap);
    var popup = L.popup();
    function onMapClick(e) {
    }
    mymap.on('click', onMapClick);


    var READY_STATE_COMPLETE=4;
    var peticion_http = null;

    function inicializa_xhr() {
    	if (window.XMLHttpRequest) {
    		return new XMLHttpRequest();
    	} else if (window.ActiveXObject) {
    		return new ActiveXObject("Microsoft.XMLHTTP");
    	}
    }


    function procesaRespuesta() {
    	if(peticion_http.readyState == READY_STATE_COMPLETE) {
    		if (peticion_http.status == 200) {
    			var respuesta = JSON.parse(peticion_http.responseText);
          console.log(respuesta.sys.country);
    		}
    	}
    }
  }

  function ubi(x,y,desc){
    document.getElementById('descri').innerHTML="";
    L.marker([x, y]).addTo(mymap).bindPopup("Tu usuario esta aqui").openPopup();
    document.getElementById('descri').innerHTML=desc;
  }

  function objetoAjax(){
  var xmlhttp=false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
 
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
 
  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function eliubi(x,y,user){
  divResultado = document.getElementById('todos');
  // 3. Inicializamos el objeto XHR
  ajax=objetoAjax();
  // 4. Especificamos la solicitud
  ajax.open('POST', 'eliubi.php', true);
  // 5. Configuramos el encabezado (POST)
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  // 6. Enviamos la solicitud
  ajax.send("x="+x+"&y="+y+"&user="+user);
  // 7. Definimos la funciÃ³n que se ejecutarÃ¡ cuando cambie la propiedad readyState
  ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
      // 8. Cambiamos el bloque del paso 2.
      divResultado.innerHTML = ajax.responseText;
    }
  }
}