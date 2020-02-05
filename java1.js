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

function login(){
	// 3. Inicializamos el objeto XHR
	ajax=objetoAjax();
	var nombre=document.getElementById('user').value;
	var pwd = document.getElementById('pwd').value;
	if (pwd=="") {
		alert("El campo contraseña es obligatorio");
		return false;
	}
	// 4. Especificamos la solicitud
	ajax.open('POST', 'comprobarusuarios.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("user="+nombre+"&pwd="+pwd);
	// 7. Definimos la funciÃ³n que se ejecutarÃ¡ cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
}

function anadir(){
	// 3. Inicializamos el objeto XHR
	ajax=objetoAjax();
	var user=document.getElementById('user').value;
	var ape = document.getElementById('ape').value;
	var tel = document.getElementById('tel').value;
	var mail = document.getElementById('mail').value;
	var dir = document.getElementById('dir').value;
	var pasar=0;
	if (user=="") {
		var pasar=1;
	}else if (ape=="") {
		var pasar=1;
	}else if (tel=="") {
		var pasar=1;
	}else if (mail=="") {
		var pasar=1;
	}else if (dir=="") {
		var pasar=1;
	}

	if (pasar==1) {
		return false;
	}
	// 4. Especificamos la solicitud
	ajax.open('POST', 'insert.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("user="+user+"&ape="+ape+"&tel="+tel+"&mail="+mail+"&dir="+dir);
	// 7. Definimos la funciÃ³n que se ejecutarÃ¡ cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
	alert("Contacto registrado");
}
window.onload = function() {

    var mymap = L.map('mapid').setView([41.349724, 2.107911], 12);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11'
    }).addTo(mymap);

    var popup = L.popup();
    function onMapClick(e) {
        peticion_http = inicializa_xhr();
        if(peticion_http) {
          peticion_http.onreadystatechange = procesaRespuesta;
          var lat=e.latlng.lat;
          var lon=e.latlng.lng;
          document.getElementById('x1').value=lat;
          document.getElementById('y1').value=lon;
          L.marker([lat, lon]).addTo(mymap).bindPopup("Tu usuario esta aqui").openPopup();
          peticion_http.send(null);
        }
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


  function anadirubi(){
  	ajax=objetoAjax();
  	var x1=document.getElementById('x1').value;
  	var y1=document.getElementById('y1').value;
  	var desc= document.getElementById('desc').value;
  	var tipo=document.getElementById('tipo').value;
  	var user=document.getElementById('hidden').value;
  	if (x1=="" || y1=="") {
  		alert("Clica en el mapa para seleccionar la ubicacion");
  		return false;
  	}
  	if (desc=="") {
  		alert("Introduce una descripcion");
  		return false;
  	}
	// 4. Especificamos la solicitud
	ajax.open('POST', 'insertubi.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("user="+user+"&tipo="+tipo+"&x1="+x1+"&y1="+y1+"&desc="+desc);
	// 7. Definimos la funciÃ³n que se ejecutarÃ¡ cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
	alert("Ubicacion registrada");
  }


  function eliminar(user){
  	ajax=objetoAjax();
  	ajax.open('POST', 'eusu.php', true);
	// 5. Configuramos el encabezado (POST)
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// 6. Enviamos la solicitud
	ajax.send("us="+user);
	// 7. Definimos la funciÃ³n que se ejecutarÃ¡ cuando cambie la propiedad readyState
	ajax.onreadystatechange=function() {
	  	if (ajax.readyState==4) {
			// 8. Cambiamos el bloque del paso 2.
			divResultado.innerHTML = ajax.responseText
		}
	}
	alert("Usuario Eliminado");
  }


