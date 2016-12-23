
    function seleccionado(elemento){  //Lo primero que haremos sera seleccionar el color que vamos a usar para ello pasamos como paramentro el TD que hemos clickado
        
        
        var paleta=document.getElementById('paleta').children[1].children[0]; //accedemos al TR
        
        //Iniciamos todos los TD con un ClassName de su propio color para tenerlos todos DESELECCIONADOS (El class name tira de CSS)
        for(var i=0; i<paleta.children.length;i++){
            
            paleta.children[i].className="color"+(i+1);
        }
        //Añadimos la clase ' seleccionado' del css a elemento que hemos seleccionado
        elemento.className+=" seleccionado";
    }
    
    function color(tdseleccionado){  //Al hacer Click en un cuadrado le pasamos como paramentro ESE 'TD'
        var TPincel=document.getElementById('pincel').innerHTML;
        
        var paleta=document.getElementById('paleta').children[1].children[0];
        
        for(var i=0; i<paleta.children.length;i++){  //Recorremos cada elemento de la paleta para encontrar CUAL ES EL QUE ESTA SELECCIONADO
            
            if(paleta.children[i].classList[1]=="seleccionado"){  //Si la CLASSE de uno de los TD tiene un tamaño de 2 o contiene como 2º palabra o lo que es lo mismo, en su contenido tiene la POSICION 1 la palabra 'Seleccionado
                
                var colorseleccionado=paleta.children[i].classList[0];
                if(TPincel=="Fino"){
                    tdseleccionado.className=colorseleccionado;
                }
                else{
                   
                   
                   tdseleccionado.className=colorseleccionado;
                   if(tdseleccionado.nextElementSibling != null){
                        tdseleccionado.nextElementSibling.className=colorseleccionado;
                   }
                   if(tdseleccionado.previousElementSibling != null){
                        tdseleccionado.previousElementSibling.className=colorseleccionado;
                   }
                   var posicion=tdseleccionado.cellIndex; 
                    
                   if(tdseleccionado.parentNode.previousSibling !=null){ 
                       tdseleccionado.parentNode.previousElementSibling.children[posicion].className=colorseleccionado;
                       if(tdseleccionado.parentNode.previousElementSibling.children[posicion+1] !=null){
                            tdseleccionado.parentNode.previousElementSibling.children[posicion+1].className=colorseleccionado;
                       }
                       if(tdseleccionado.parentNode.previousElementSibling.children[posicion-1] != null){
                           
                            tdseleccionado.parentNode.previousElementSibling.children[posicion-1].className=colorseleccionado;
                       }
                   }
                   
                   if(tdseleccionado.parentNode.nextElementSibling != null){
                       tdseleccionado.parentNode.nextElementSibling.children[posicion].className=colorseleccionado;
                       if(tdseleccionado.parentNode.nextElementSibling.children[posicion+1] != null){
                            tdseleccionado.parentNode.nextElementSibling.children[posicion+1].className=colorseleccionado;
                       }
                       if(tdseleccionado.parentNode.nextElementSibling.children[posicion-1] != null){
                            tdseleccionado.parentNode.nextElementSibling.children[posicion-1].className=colorseleccionado;
                       }
                   }
                }
            }
        }
    }
    
    function pincel(){
        
        var TPicel=document.getElementById("pincel").innerHTML;  
        if(TPicel=="Fino"){
            
            document.getElementById("pincel").innerHTML="Grueso";     
        }
        else{
            
           document.getElementById("pincel").innerHTML="Fino"; 
            
        }
    }
    
