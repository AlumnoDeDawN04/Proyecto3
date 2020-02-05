window.onload = consultar;

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

/*Muestra registros de la base de datos*/
function consultar(){
	divResultado = document.getElementById('resultado');
	contacto = document.getElementById('contacto').value;
	var ajax2=objetoAjax();
	ajax2.open("POST", "./consulta.php", true);
	ajax2.onreadystatechange=function() {
		if (ajax2.readyState==4 && ajax2.status==200) {
			var respuesta2=JSON.parse(this.responseText);
			var tabla =  '<table style="color:#000099;padding: 10px 20%;width:100%;"><tr style="background:#9BB;"><td>Nombre</td><td>Apellidos</td><td>Mail</td><td>Direccion</td><td>Telefono</td><td>Opciones</td></tr>';
			for(var i=0;i<respuesta2.length;i++) {
				tabla +='<tr><td>'+respuesta2[i].nombre+'</td>';
				tabla +='<td>'+respuesta2[i].apellidos+'</td>';
				tabla +='<td>'+respuesta2[i].mail+'</td>';
				tabla +='<td>'+respuesta2[i].direccion+'</td>';
				tabla +='<td>'+respuesta2[i].telefono+'</td>';
				tabla +='<td><a href="#" onclick="eliuser('+'\''+respuesta2[i].id_agenda+'\''+')"><i style="color: black; margin-right:8px; margin-left:12px;" class="fas fa-user-minus"></i></a><a href="aubicacion.php?us='+respuesta2[i].id_agenda+'"><i style="color: black; margin-right:8px;" class="fas fa-map-pin"></i></a><a href="editcontacto.php?us='+respuesta2[i].id_agenda+' && name='+respuesta2[i].nombre+' && apellidos='+respuesta2[i].apellidos+' && telf='+respuesta2[i].telefono+' && mail='+respuesta2[i].mail+' && direccion='+respuesta2[i].direccion+'"><i style="color:black; margin-right:8px;" class="fas fa-users-cog"></i></a><a href="ubicacion.php?us='+respuesta2[i].id_agenda+'"><i style="color: black;" class="fas fa-street-view"></i></a></td>';
				tabla +='<td></td></tr>';

			}
			tabla+='</table>';
			divResultado.innerHTML=tabla;
		}
	}
	if(contacto!='' || contacto!=null){
		ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax2.send("q="+contacto)
	}else{
		ajax2.send();
	}
}

function eliuser(id){
  // 3. Inicializamos el objeto XHR
  ajax=objetoAjax();
  // 4. Especificamos la solicitud
  ajax.open('POST', 'eusu.php', true);
  // 5. Configuramos el encabezado (POST)
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  // 6. Enviamos la solicitud
  ajax.send("us="+id);
  // 7. Definimos la funciÃ³n que se ejecutarÃ¡ cuando cambie la propiedad readyState
  ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
      // 8. Cambiamos el bloque del paso 2.
      consultar();
    }
  }
}