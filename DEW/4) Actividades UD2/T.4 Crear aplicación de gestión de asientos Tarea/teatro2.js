        var balcon = Array(6);
        var patio = Array(8);
        var contador=0;
        var contador2=0;
            

        for(var i=0; i<balcon.length;i++){

            balcon[i]=false;
        }
        
        for(var i=0; i<patio.length;i++){

            patio[i]=false;
        }
        
        function TeatroAsientos(){
            
            if (contador == balcon.length && contador2==patio.length){
                
                alert("El teatro esta lleno");
                
            }
            else{
            
                var opcion = prompt("¿Que decea 'Balcon(1)' o 'Patio(2')?");

                if (opcion!="1" && opcion!="2"){

                    alert("No has introducido ninguna de las opciones");

                }

                else if(opcion=="1"){

                    /*for(var i=0; i<6; i++){

                        if (teatro[i] ==false){
                            teatro[i]=true;
                            alert("Su aciento en Balcon es el: " + (i+1));
                            break;
                        }
                        else if(teatro[contador]==true){

                            alert("No quedan mas acientos");
                        }
                    }*/

                    if (balcon[contador] ==false){
                        balcon[contador]=true;
                        alert("Su asiento en Balcon es el: " + (contador+1));
                        contador++;
                    }
                    else if (contador>=balcon.length){

                        alert("los asientos de 'Balcon' estan todos llenos."); 
                        var opcion2=prompt("¿Desea un asiento en 'Patio'S/N");
                        if(opcion2=="S"){

                            patio[contador2]=true;
                            alert("Su asiento en Patio es el: " + (contador2+1));
                            contador2++;
                        }
                        else{

                            alert("La siguiente sesión de esta obra es dentro 2 horas");
                        }
                    }
                }

                else if(opcion=="2"){

                    if (patio[contador2] ==false){
                        patio[contador2]=true;
                        alert("Su asiento en Patio es el: " + (contador2+1));
                        contador2++;
                    }
                    else if (contador2>=patio.length){

                        alert("los asientos de 'Patio' estan todos llenos."); 
                        var opcion2=prompt("¿Desea un asiento en 'Patio'S/N");
                        if(opcion2=="S"){

                            balcon[contador]=true;
                            alert("Su asiento en Balcon es el: " + (contador+1));
                            contador++;
                        }
                        else{

                            alert("La siguiente sesión de esta obra es dentro 2 horas");
                        }  
                    }
                }
            }
        }
        
        function Mostrar(){
            
         
            var cadena1="<h2> Balcon: </h2>";
            
            for (var i=0; i<balcon.length; i++){
                
                if(balcon[i]==true){
                    
                    cadena1+="{X} ";
                    
                }
                
                else if(balcon[i]==false){
                    
                    cadena1+="{0} ";   
                }
            }
            
             cadena1+="<h2> Patio: </h2>";
            
            for (var i=0; i<patio.length; i++){
                
                if(patio[i]==true){
                    
                    cadena1+="{X} ";
                    
                }
                
                else if(patio[i]==false){
                    
                    cadena1+="{0} ";   
                }
            }
            
            document.getElementById("grafica").innerHTML=cadena1;
        }