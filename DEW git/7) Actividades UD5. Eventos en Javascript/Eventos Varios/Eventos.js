//-----Actividad 2------
    
    function pagina(e){   //Porque el body no ocupa toda la pagina?
        if(!e){
            
            var e=window.event;
        }
        if(e.ctrlKey){
            alert("Has pulsado Ctrl");
        }
        else if(e.shiftKey){
            
            alert("Has pulsado Shift");
        }
    }
    
//------Actividad 3 ------
    
    /*function FlechaImagen(){    ---Hacemos dos funciones para cada una de las flechas?   (Como bajar la flecha sin bajar el textbox)

        var imagen= document.getElementById('flecha');
        
        imagen.src="flecha_azul.jpg";
        imagen.setAttribute('width','30px');
        imagen.setAttribute('height','30px');
    }*/
    
    //-------------Actividad 04--------------
    
    function LanzarMoneda(){
        
        var aleatorio = Math.round((Math.random() * 1));
        var moneda=document.getElementById('moneda');
        var TotCaras=document.getElementById('num_caras');
        var TotCruces=document.getElementById('num_cruz');
        
        if (aleatorio==0){
         
            moneda.src='cara.png';
            TotCaras.textContent++;
        }
        else{
            moneda.src='cruz.jpg';
            TotCruces.textContent++;
        }
    }
    
    //--------Actividad 05--------
    
    function ElPrincipito(){  //para el onmouseout deberia hacer otra funcion?
     
        var frases=["Solo con el corazón se puede ver bien; lo esencial es invisible para los ojos",
                    "Uno se expone a llorar un poco, si se ha dejado domesticar...",
                    "Todas las personas mayores fueron al principio niños.(Aunque pocas de ellas lo recuerdan)",
                    "Lo hermoso del desierto es que en cualquier parte esconde un pozo",
                    "Caminando en linea recta no puede uno llegar muy lejos"];
        
        var aleatorio = Math.round((Math.random() * (frases.length-1)));
        
        var ImprFrases=document.getElementById('hechos');
        
        ImprFrases.innerHTML="<strong>"+frases[aleatorio]+"<br> --El Principito</strong>";
    }
    
    //-----Actividad06------
    
    function crecer(){
        
        var numfilas=document.getElementById('rows').value;
        var numcolumnas= document.getElementById('columns').value;
        
        var ImgFlores=["rosa.jpg","margarita.jpg","clavel.jpg","lirio.jpg"];
        
        var tabla= document.createElement('table');
        tabla.border='1px';
        for(var i=0; i<numfilas; i++){
            var fila= document.createElement('tr');
            for(var j=0; j<numcolumnas; j++){
                
                var aleatorio = Math.round((Math.random() * (ImgFlores.length-1)));
                var columna=document.createElement('td');
                columna.width='50px';
                columna.height='50px';
                columna.addEventListener("click", function(){Comprar(this)}); 
                var flores=document.createElement('img');
                flores.setAttribute('width','50px');
                flores.setAttribute('height','50px');
                flores.alt="Recogida";
                flores.src=ImgFlores[aleatorio];
                columna.appendChild(flores);
                
                fila.appendChild(columna);
            }
            tabla.appendChild(fila);
        }
        
        document.getElementById('jardin').appendChild(tabla);
    }

    function Comprar(flores){
        
        flores.children[0].src="";
    }
    
    // ----- Actividad07-----
    
    function AumCuadrado(cuadrado){   
        
        var AumAncho= cuadrado.scrollWidth + (cuadrado.scrollWidth/4);
        var AumAlto= cuadrado.scrollHeight + (cuadrado.scrollHeight/4);
        
        cuadrado.style.width=AumAncho+"px";
        cuadrado.style.height=AumAlto+"px";
    }