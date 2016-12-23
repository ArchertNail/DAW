    function color(tdseleccionado){
        
        var checkbox=document.getElementById('demo');
        var estilos=document.getElementById('estilos');
        
        for (var i=0; i<checkbox.children.length; i++){
        
            if(checkbox.children[i].children[0].checked){
                
                var POS=tdseleccionado.cellIndex;
                var colorSeleccionado= checkbox.children[i].children[0].value;
                if (tdseleccionado.previousElementSibling !=null){
                    var celdaAnterior=tdseleccionado.previousElementSibling.style.backgroundColor;
                }
                if (tdseleccionado.nextElementSibling!=null){
                    var celdaSigiente=tdseleccionado.nextElementSibling.style.backgroundColor;
                }
                
                if(tdseleccionado.parentNode.previousElementSibling!=null){
                       var celdaSuperior=tdseleccionado.parentNode.previousElementSibling.children[POS].style.backgroundColor;
                       if(tdseleccionado.parentNode.previousElementSibling.children[POS-1] != null){
                            var celdaSuperiorIzq=tdseleccionado.parentNode.previousElementSibling.children[POS-1].style.backgroundColor;
                       }
                       if(tdseleccionado.parentNode.previousElementSibling.children[POS+1] != null){
                            var celdaSuperiorDec=tdseleccionado.parentNode.previousElementSibling.children[POS+1].style.backgroundColor;
                       }
                }
                if(tdseleccionado.parentNode.nextElementSibling!=null){
                    var celdaInferior=tdseleccionado.parentNode.nextElementSibling.children[POS].style.backgroundColor;
                    if(tdseleccionado.parentNode.nextElementSibling.children[POS-1] != null){
                        var celdaInferiorIzq=tdseleccionado.parentNode.nextElementSibling.children[POS-1].style.backgroundColor;
                    }
                    if(tdseleccionado.parentNode.nextElementSibling.children[POS+1] != null){
                        var celdaInferiorDec=tdseleccionado.parentNode.nextElementSibling.children[POS+1].style.backgroundColor;
                    }
                }
                
                if(celdaAnterior==colorSeleccionado || celdaSigiente==colorSeleccionado || celdaSuperior==colorSeleccionado ||  celdaSuperiorIzq==colorSeleccionado || celdaSuperiorDec==colorSeleccionado || celdaInferior==colorSeleccionado || celdaInferiorIzq==colorSeleccionado || celdaInferiorDec==colorSeleccionado){
                
                    alert("Has pintado del mismo color");
                }
                else{
                    
                   tdseleccionado.style.backgroundColor=colorSeleccionado;

                    if(estilos.children[0].children[0].checked){
                        tdseleccionado.textContent="X";
                        tdseleccionado.style.fontWeight="bold";
                    }
                    else{
                        tdseleccionado.textContent="X";
                        tdseleccionado.style.fontWeight="normal";
                    }  
                }
            }
        }    
    }
    
    function limpiar(){
        
        var filas=document.getElementById("tabla");
        
        for(var i=0; i<10;i++){                

            for(var j=0; j<10; j++){
                
                filas.children[0].children[i].children[j].style.backgroundColor="white";
                filas.children[0].children[i].children[j].textContent="";
            }
        }
    } 


    var CantColores= parseInt(prompt("¿Cuantos colores quieres introducir?"));
    if(isNaN(CantColores)){
        
        alert("Introduce un Numero");
    }
    else{
        var colores=[];
        var fuente=["Bold","Normal"];

        var ImprRadio=document.getElementById('demo');

        for(var i=0; i<CantColores; i++){

            colores[i]=prompt("Introduce un color");
        }



        //RADIO DE COLORES

        for(var i=0; i<CantColores; i++){

            var radioInput = document.createElement('input');
            radioInput.setAttribute('type', 'radio');
            radioInput.setAttribute('name', "radio");
            radioInput.setAttribute("value", colores[i]);
            radioInput.id=i;

            var texto=document.createElement('p');
            texto.textContent=colores[i];
            texto.style.color=colores[i];

            texto.appendChild(radioInput);

            ImprRadio.appendChild(texto);

        }



        //RADIO DE ESTILOS

        var ImprEstilos=document.getElementById('estilos');

        for(var i=0; i<2; i++){

            var FuenteRadio = document.createElement('input');
            FuenteRadio.setAttribute('type', 'radio');
            FuenteRadio.setAttribute('name', "FuenteRadio");
            FuenteRadio.setAttribute("value", fuente[i]);
            var TetoFuente=document.createElement('p');
            TetoFuente.textContent=fuente[i];

            TetoFuente.appendChild(FuenteRadio);

            ImprEstilos.appendChild(TetoFuente);

        }


        // TABLA

        var tabla= document.createElement("table"); 
        tabla.border='1';
        for(var i=0; i<10;i++){
            var filas= document.createElement("tr");                  

            for(var j=0; j<10; j++){


                var columnas=document.createElement("td");
                columnas.width="30px";
                columnas.height="30px";
                columnas.addEventListener("click", function(){color(this)}); 
                filas.appendChild(columnas);

            }
            tabla.appendChild(filas);
        }

        document.getElementById('tabla').appendChild(tabla);
    }