var canvas=null;
        var contexto=null;
        var JuegoStart, JuegoInicio, JuegoOver;
        
        //POSiciones
        var xPos=420;
        var yPos=352;
        var yBolaPos=385;
        var xDisDer=xPos+50;
        var xDisIzq=xPos-20;
        var yDis=356;
        var XZombiDer=800;
        var XZombiIzq=100;
        var YZOMBI = 342;
        
        var XBolaFuego=100;
        var YBolaFuego=350;
        var XBolaFuegoDer=800;
        
        var YBolaFuegoJefe=0;
        var XBolaFuegoJefe=0;
        var X_BFuegoJefe_Alt=0;
        var X_BFuegoJefe_Lanzada=false;
        
        var Vidas=3;
        var quieto=true;
        var QuietoDerecha=true;
        var QuietoIzquierda=false;
        var derecha=false;
        var izquierda=false;
        var abajo=false;
        var apuntar=false;
        var ApuntarDerecha=false;
        var ApuntarIzquierda=false;
        var disparado=false;
        var muerto=false;
        var DanoDisp=5;
        var muertoExiste=false;
        var ContadorDanio=0;
        var PAUSE=false;
        var EnemigosMuertos=0;
        
        var AleatorioKraid=0;
        var ContadorKraid=0;
        var AleatorioKraidOk=true;
        var DisparoJefe=false;
        
        //Audio
        AudioMeu=document.getElementById('AuMenu');
        AudioGame=document.getElementById('AuGame');
        AudioDisparo=document.getElementById('Disparo');
        
        
        canvas= document.getElementById('canvas');
        contexto= canvas.getContext('2d');
        
        var AleatorioOK=false;
        var AleatorioSalida=0;
        var JuegoInit=true;
        var PosInicial;
        
        var ganar=false;
        
        
        var MenuOk=true;
        
        
        //IMAGENES
        var fondo = new Image();
        var FondoNiv2=new Image();
        var FondoNiv3= new Image();
        var sprite1 = new Image();
        var sprite2= new Image();
        var sprite3= new Image();
        var sprite4= new Image();
        var sprite5= new Image();
        var sprite6= new Image();
        var sprite7= new Image();
        var sprite8= new Image();
        var sprite9= new Image();
        var ZombiIzq= new Image();
        var ZombiDer= new Image();
        var Disparo= new Image();
        var B_Fuego= new Image();
        var B_FuegoDer=new Image();
        var TresVidas=new Image();
        var DosVidas=new Image();
        var UnaVida=new Image();
        var Kraid1=new Image();
        var Kraid2=new Image();
        var B_FuegoJefe=new Image();
        
        var VidaEnemigoNv1=1;
        var VidaEnemigoNv2=2;
        var VidaEnemigoNv3=3;
        var VidaKraidNv1=6;
        var VidaKraidNv2=10;
        var VidaKraidNv3=13;
         //var VidaEnemigo=1;
        
        
                //Fondo
        fondo.src="Img/fondo.jpg";
        FondoNiv2.src="Img/FondoJuego2.jpg";
        FondoNiv3.src="Img/FondoJuego3.png";
                //Protagonista
        sprite1.src="Img/Sam1.png";
        sprite2.src="Img/Sam2.png";
        sprite3.src="Img/Sam3.png";
        sprite4.src="Img/Sam4.png";
        sprite5.src="Img/Sam5.png";
        sprite6.src="Img/Sam6.png";
        sprite7.src="Img/danioDer.png";
        sprite8.src="Img/danioIzq.png";
        sprite9.src="Img/Sam_Bola.png";
        Disparo.src="Img/Disparo.png";
                //Enemigos
        
   
        
        B_Fuego.src="Img/B_Fuego.png";
        B_FuegoDer.src="Img/B_FuegoIzq.png";
        
        Kraid1.src="Img/Kraid1.png";
        Kraid2.src="Img/Kraid2.png";
        B_FuegoJefe.src="Img/B_FuegoJefe.png";
        
                //Vidas
        TresVidas.src="Img/TresVida.png";
        DosVidas.src="Img/DosVida.png";
        UnaVida.src="Img/UnaVida.png";
        
        
        function FondoJuego(){ 
            
            if (Nivel1==true){
                contexto.drawImage(fondo,0,0,canvas.width,canvas.height); 
            }
            else if(Nivel2==true){
                contexto.drawImage(FondoNiv2,0,0,canvas.width,canvas.height); 
            }
            else if(Nivel3==true){
                contexto.drawImage(FondoNiv3,0,0,canvas.width,canvas.height);
            }
        }
        
        
        function VidasPlayer(){
            if(Vidas==3){
                contexto.drawImage(TresVidas,750,20);
            }
            else if(Vidas==2){
                contexto.drawImage(DosVidas,750,20);
            }
            else{
                contexto.drawImage(UnaVida,750,20);
            }
        }
        
        function Puntuacion(){
            
            str_count = localStorage.getItem("count");
            if (str_count == null || str_count == "null"){
                count = 0;
            } 
            else{
                count = parseInt(str_count);
            }

            contexto.fillStyle="white";
            contexto.font = "30px fantasy";
            contexto.fillText('PUNTOS :' + count, 40, 60);
            localStorage.setItem("count", count);
        }
        
        function danio(){
            
            if(ContadorDanio==20){
                JuegoInit=true;
                ContadorDanio=0;
            }
            else if(ContadorDanio<20 && QuietoDerecha==true){
                contexto.drawImage(sprite7,xPos,yPos);
                xPos-=1
                ContadorDanio++;
            }
            else if(ContadorDanio<20 && QuietoIzquierda==true){
                contexto.drawImage(sprite8,xPos,yPos);
                xPos+=1
                ContadorDanio++;
            }
        }
        
        function KraidAtaque(){
            
            if (ContadorKraid<100){
                contexto.drawImage(Kraid2,70,100);
                ContadorKraid++;
            }
            else{
                AleatorioKraidOk=true;
                ContadorKraid=0;
            }
        }
        
        function DibujarEnemigo(){
            if(Nivel1==true){
                ZombiDer.src="Img/ZombiIzq.png";
                ZombiIzq.src="Img/ZombiDer.png";
            }
            if(Nivel2==true){
                ZombiDer.src="Img/EnemiNv2_Izq.png";
                ZombiIzq.src="Img/EnemiNv2_Der.png";
            }
            if(Nivel3==true){
                ZombiDer.src="Img/MetroidDer.png";
                ZombiIzq.src="Img/MetroidIzq.png";   
            }
            
            B_Fuego.src="Img/B_Fuego.png";
            B_FuegoDer.src="Img/B_FuegoIzq.png";
            B_FuegoJefe.src="Img/B_FuegoJefe.png";
            
            if (AleatorioOK==true){
                AleatorioSalida=Math.round(Math.random()*3);
            }
            
            if(AleatorioSalida==0){
                AleatorioOK=false;
                contexto.drawImage(ZombiDer,XZombiDer,YZOMBI);
                XZombiDer-=1;
                if(XZombiDer<xPos){
                    JuegoInit=false; // Lo pone en false para que no carge el jugador originial y carge otro distinto hasta que se pongo a true
                    ZombiDer.src="";
                    AleatorioOK=true;
                    XZombiDer=700; 
                    Vidas--;
                }
            }
            
            if (AleatorioSalida==1){
                AleatorioOK=false;
                contexto.drawImage(ZombiIzq,XZombiIzq,YZOMBI);
                XZombiIzq+=1;
                if(XZombiIzq>xPos){
                    JuegoInit=false;
                    ZombiIzq.src="";
                    AleatorioOK=true;
                    XZombiIzq=100;
                    Vidas--;
                }
            }
            
            if(AleatorioSalida==2){
               AleatorioOK=false; 
               contexto.drawImage(B_Fuego,XBolaFuego,YBolaFuego);
                if (Nivel1==true){
                    XBolaFuego+=4;
                }
                else if(Nivel2==true){
                    XBolaFuego+=6;
                }
                else{
                    XBolaFuego+=8;
                }
                
                if((XBolaFuego>xPos-10 && XBolaFuego<xPos+10) && abajo==false){
                    JuegoInit=false;
                    B_Fuego.src="";
                    AleatorioOK=true;
                    XBolaFuego=100;
                    Vidas--;
                }
                if(XBolaFuego>canvas.width-100){
                    B_Fuego.src="";
                    AleatorioOK=true;
                    XBolaFuego=100;
                }
            }
            
            if(AleatorioSalida==3){
               AleatorioOK=false; 
               contexto.drawImage(B_FuegoDer,XBolaFuegoDer,YBolaFuego);
                if (Nivel1==true){
                    XBolaFuegoDer-=4;
                }
                else if(Nivel2==true){
                    XBolaFuegoDer-=6;
                }
                else{
                    XBolaFuegoDer-=8;
                }
                
                if((XBolaFuegoDer<xPos+10 && XBolaFuegoDer>xPos-10) && abajo==false){
                    JuegoInit=false;
                    B_FuegoDer.src="";
                    AleatorioOK=true;
                    XBolaFuegoDer=800;
                    Vidas--;
                }
                if(XBolaFuegoDer<100){
                    B_FuegoDer.src="";
                    AleatorioOK=true;
                    XBolaFuegoDer=800;
                }
            }
            
            if(EnemigosMuertos>=10){
                AleatorioOK=false;
                
                if(AleatorioKraidOk==true){
                    AleatorioKraid=Math.round(Math.random()*100);
                }
                
                if(AleatorioKraid<100){
                    contexto.drawImage(Kraid1,70,100);
                    if(Nivel1==true){
                        AleatorioSalida=null;
                    }
                    else if(Nivel2==true || Nivel3==true){
                         AleatorioSalida=2;
                    }
                }
                
                if(AleatorioKraid==100){
                    AleatorioKraidOk=false;
                    KraidAtaque();
                    DisparoJefe=true;
                }
            }
            
            if(DisparoJefe==true){
                if(X_BFuegoJefe_Lanzada==false){
                    
                    X_BFuegoJefe_Alt=Math.round(Math.random()*(700-300)+300);
                }
                                     
                contexto.drawImage(B_FuegoJefe,X_BFuegoJefe_Alt,YBolaFuegoJefe);
                YBolaFuegoJefe+=2;
                X_BFuegoJefe_Lanzada=true;
                
                if((X_BFuegoJefe_Alt>=xPos-20 && X_BFuegoJefe_Alt<xPos+20) && YBolaFuegoJefe>yPos-50){
                    B_FuegoJefe.src="";
                    YBolaFuegoJefe=0;
                    X_BFuegoJefe_Alt=0;
                    X_BFuegoJefe_Lanzada=false;
                    DisparoJefe=false;
                    JuegoInit=false;
                    Vidas--;
                }
                
                if(YBolaFuegoJefe>400){
                    B_FuegoJefe.src="";
                    YBolaFuegoJefe=0;
                    X_BFuegoJefe_Alt=0;
                    X_BFuegoJefe_Lanzada=false;
                    DisparoJefe=false;
                    localStorage["puntos"]+=5;
                    
                }
                
            }
            
        }
        
        function DibujarDisparo(){
           
            if (ApuntarDerecha==true){
                
                contexto.drawImage(Disparo,xDisDer,yDis);
                xDisDer=xDisDer+5;
                if(xDisDer>canvas.width-100){
                    xDisDer = xPos+50;
                    ApuntarDerecha=false;
                }
                
                if(xDisDer>=XZombiDer && AleatorioSalida==0){
                    VidaEnemigoNv1--;
                    VidaEnemigoNv2--;
                    VidaEnemigoNv3--;
                    
                    xDisDer=xPos+50;
                    ApuntarDerecha=false;
                      
                    if(VidaEnemigoNv1==0 && Nivel1==true ){
                        ZombiDer.src="";
                        XZombiDer=800;
                        XZombiIzq=100;
                        AleatorioOK=true;
                        EnemigosMuertos++;
                        VidaEnemigoNv1=1;
                        count+=5;
                        localStorage.setItem("count", count);
                    }
                    if(VidaEnemigoNv2==0 && Nivel2==true ){
                        ZombiDer.src="";
                        XZombiDer=800;
                        XZombiIzq=100;
                        AleatorioOK=true;
                        EnemigosMuertos++;
                        VidaEnemigoNv2=2;
                        count+=10;
                        localStorage.setItem("count", count);
                        
                    }
                    if(VidaEnemigoNv3==0 && Nivel3==true ){
                        ZombiDer.src="";
                        XZombiDer=800;
                        XZombiIzq=100;
                        AleatorioOK=true;
                        EnemigosMuertos++;
                        VidaEnemigoNv3=3;
                        count+=15;
                        localStorage.setItem("count", count);
                        
                    }
                }
                
            }
            
            if (ApuntarIzquierda==true){
              
                contexto.drawImage(Disparo,xDisIzq,yDis);
                xDisIzq-=5;
                if(xDisIzq<canvas.width-900){
                    xDisIzq = xPos-20;
                    ApuntarIzquierda=false;
                }
                
                if(xDisIzq<=XZombiIzq && AleatorioSalida==1){
                    VidaEnemigoNv1--;
                    VidaEnemigoNv2--;
                    VidaEnemigoNv3--;
                    xDisIzq=xPos+20;
                    ApuntarIzquierda=false;
                    
            
                    if(VidaEnemigoNv1==0 && Nivel1==true ){
                        ZombiDer.src="";
                        XZombiDer=800;
                        XZombiIzq=100;
                        AleatorioOK=true;
                        EnemigosMuertos++;
                        VidaEnemigoNv1=1;
                        count+=5;
                        localStorage.setItem("count", count);
                        
                    }
                    if(VidaEnemigoNv2==0 && Nivel2==true ){
                        ZombiDer.src="";
                        XZombiDer=800;
                        XZombiIzq=100;
                        AleatorioOK=true;
                        EnemigosMuertos++;
                        VidaEnemigoNv2=2;
                        localStorage["puntos"]+=10;
                        count+=10;
                        localStorage.setItem("count", count);
                    }
                    if(VidaEnemigoNv3==0 && Nivel3==true ){
                        ZombiDer.src="";
                        XZombiDer=800;
                        XZombiIzq=100;
                        AleatorioOK=true;
                        EnemigosMuertos++;
                        VidaEnemigoNv3=3;
                        localStorage["puntos"]+=15;
                        count+=15;
                        localStorage.setItem("count", count);
                    }
                }
                
                if(xDisIzq<250 && EnemigosMuertos==10){
                    xDisIzq=xPos+20;
                    ApuntarIzquierda=false;
                    VidaKraidNv1--;
                    VidaKraidNv2--;
                    VidaKraidNv3--;
                    if(VidaKraidNv1==0 && Nivel1==true){
                        Kraid1.src="";
                        Kraid2.src="";
                        ganar=true;
                    }
                    if(VidaKraidNv2==0 && Nivel2==true){
                        Kraid1.src="";
                        Kraid2.src="";
                        ganar=true;
                    }
                    if(VidaKraidNv3==0 && Nivel3==true){
                        Kraid1.src="";
                        Kraid2.src="";
                        ganar=true;
                    }
                }
            } 
        }   
        
        function move(e){
             quieto=false;
            
            if(e.keyCode==39){
                derecha=true;
                xPos+=5;
                xDisDer=xPos+50;
                ApuntarDerecha=false;
                QuietoDerecha=true;
                QuietoIzquierda=false;
               
                
            }
            else if(e.keyCode==37){
                izquierda=true;
                xPos-=5;
                xDisIzq=xPos;
                ApuntarIzquierda=false;
                QuietoIzquierda=true;
                QuietoDerecha=false;
            }
            else if(e.keyCode==40){
                abajo=true;   
            }
                
            else if(e.keyCode==32){
                if(PAUSE==false){
                    AudioDisparo.play();
                }
                apuntar=true;
                disparado=true;
            }
            else if(e.keyCode!=32 || e.keyCode!=40 || e.keyCode!=39 || e.keyCode!=37){
                PAUSE = !PAUSE;
                if(PAUSE==true){
                    AudioGame.pause();
                }
                else{
                    AudioGame.play();
                }
            }
        
            if(xPos>=canvas.width-100){
                xPos = canvas.width-100;
            }
            if(xPos<=30){
                xPos = 30;
            }
            if(yPos>352){
                yPos = 342;
            }
           
        }
        
        function DesMove(){
            
            quieto=true;
            derecha=false;
            izquierda=false;
            abajo=false;
            apuntar=false;
           
        }
        
        function Player(){
            if(quieto==true){
                if(QuietoDerecha==true){
                    contexto.drawImage(sprite1,xPos,yPos);
                }
                if(QuietoIzquierda==true){
                    contexto.drawImage(sprite5,xPos,yPos);
                }
            }
            if(derecha==true){
                contexto.drawImage(sprite2,xPos,yPos+10);
            }
            if(izquierda==true){
                
                contexto.drawImage(sprite4,xPos,yPos+10);
            }
            
            if(abajo==true){
                contexto.drawImage(sprite9,xPos,yBolaPos);   
            }
            
            
            if(apuntar==true){
                
                if(QuietoDerecha==true){
                    contexto.drawImage(sprite3,xPos,yPos);
                    ApuntarDerecha=true;
                }
                if(QuietoIzquierda==true){
                    contexto.drawImage(sprite6,xPos,yPos);
                    ApuntarIzquierda=true;
                }
            }
        }
        
        function JuegoStart(){
            if (Nivel1==true || Nivel2==true || Nivel3==true){
                
                if(PAUSE==false){
                    
                    AudioGame.play();
                }
                
                AudioMeu.src="";
                FondoJuego();
                Puntuacion();
                VidasPlayer();
                if (Vidas>0){
                    if (PAUSE==false){

                        DibujarEnemigo();

                        if(JuegoInit==true){
                            Player();
                        }
                        else if(JuegoInit==false){
                            danio();
                        }

                        DibujarDisparo();
                        
                        document.onkeydown=move;
                        document.onkeyup=DesMove; 
                    }

                    if (PAUSE==true) {
                        contexto.textAlign = 'center';
                        contexto.font = "30px fantasy";
                        contexto.fillText('PAUSE', canvas.width/2, canvas.height/2);
                        contexto.textAlign = 'left';
                    }
                }
                else{
                    AudioGame.pause();
                    clearTimeout(JuegoStart);
                    document.getElementById('GameOver').classList.remove("hidden");
                    document.getElementById('GameOver').classList.add("visible");
                    document.getElementById('lienzo').classList.remove("visible");
                    document.getElementById('lienzo').classList.add("hidden");
                    Nivel1=false;
                    Nivel2=false;
                    Nivel3=false;
                }

                if(ganar==true){
                    document.onkeydown=null;
                    AudioGame.pause();
                    clearTimeout(JuegoStart);
                    document.getElementById('GameWin').classList.remove("hidden");
                    document.getElementById('GameWin').classList.add("visible");
                    document.getElementById('lienzo').classList.remove("visible");
                    document.getElementById('lienzo').classList.add("hidden");
                    if(Nivel1==true){
                        localStorage["JuegoNv2"]=true;
                    }
                    if(Nivel2==true){
                        localStorage["JuegoNv3"]=true;
                    }
                    
                    Nivel1=false;
                    Nivel2=false;
                    Nivel3=false;
                }
            }
        }
        function Game(){
            
            //juego
            if(typeof JuegoStart != "undefined"){
               clearInterval(JuegoStart);
            }
            clearInterval(JuegoInicio);
            JuegoStart = setInterval(JuegoStart, 10);
        }
    
        Game();