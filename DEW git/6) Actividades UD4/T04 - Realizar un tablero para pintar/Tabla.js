//creamos la tabla la de la sigiente manera:

    var tabla= document.createElement("table"); 
    tabla.border='1';
    for(var i=0; i<30;i++){
        var filas= document.createElement("tr");         //Recordar con los TR tienen que ir dentro del Nodo Table y el TD dentro del TR          
        
        for(var j=0; j<30; j++){
            
            
            var columnas=document.createElement("td");
            columnas.width="10px";
            columnas.height="10px";
            columnas.addEventListener("click", function(){color(this)});  //asignamos un Evento para cada uno de los TD
            filas.appendChild(columnas);
            
        }
        tabla.appendChild(filas);
    }
    
    document.getElementById('zonadibujo').appendChild(tabla);
    
    var paleta=document.getElementById('paleta').children[1].children[0]; //Accedemos al 2º hijo de la Paleta que es TBODY que a su vez accede a su primero hijo, que es el TR
        
        for(var i=0; i<paleta.children.length;i++){
            
            paleta.children[i].addEventListener("click", function(){seleccionado(this)}); //Accedemos a cada elemento del TD dandoles una funcion Onclick que nos lleve a la funcion Seleccionado pasandole como parametro el TD
        }

