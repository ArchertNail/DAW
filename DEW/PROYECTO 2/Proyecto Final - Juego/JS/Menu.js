            var Nivel1=false;
            var Nivel2=false;
            var Nivel3=false;

            function Menu(opcion){
                if(opcion=="1"){
                    document.getElementById('menu').classList.add("hidden");
                    document.getElementById('lienzo').classList.remove("hidden");
                    document.getElementById('lienzo').classList.add("visible");
                    Nivel1=true;
                    Nivel2=false;
                    Nivel3=false;

                }
                if(opcion=="2"){
                    document.getElementById('menu').classList.add("hidden");
                    document.getElementById('lienzo').classList.remove("hidden");
                    document.getElementById('lienzo').classList.add("visible");
                    Nivel2=true;
                    Nivel1=false;
                    Nivel3=false;
                }

                if(opcion=="3"){
                    document.getElementById('menu').classList.add("hidden");
                    document.getElementById('lienzo').classList.remove("hidden");
                    document.getElementById('lienzo').classList.add("visible");
                    Nivel2=false;
                    Nivel1=false;
                    Nivel3=true;
                }
                if(opcion=="4"){
                    window.location.reload();
                    document.getElementById('GameOver').classList.remove("visible");
                    document.getElementById('GameOver').classList.add("hidden");
                    document.getElementById('menu').classList.remove("hidden");
                    document.getElementById('menu').classList.add("visible");
                    Nivel1=false;
                    Nivel2=false;
                    Nivel3=false;
                }
                if(opcion=="5"){
                    window.location.reload();
                    document.getElementById('GameWin').classList.remove("visible");
                    document.getElementById('GameWin').classList.add("hidden");
                    document.getElementById('menu').classList.remove("hidden");
                    document.getElementById('menu').classList.add("visible");
                    Nivel1=false;
                    Nivel2=false;
                    Nivel3=false;
                }
                if(opcion=="6"){
                    document.getElementById('menu').classList.remove("visible");
                    document.getElementById('menu').classList.add("hidden");

                    document.getElementById('Manual').classList.remove("hidden");
                    document.getElementById('Manual').classList.add("visible");
                    Nivel1=false;
                    Nivel2=false;
                    Nivel3=false;
                }

                if(opcion=="7"){
                    document.getElementById('Manual').classList.remove("visible");
                    document.getElementById('Manual').classList.add("hidden");
                    document.getElementById('Puntos').classList.remove("visible");
                    document.getElementById('Puntos').classList.add("hidden");
                    document.getElementById('menu').classList.remove("hidden");
                    document.getElementById('menu').classList.add("visible");
                    Nivel1=false;
                    Nivel2=false;
                    Nivel3=false;
                }

                if(opcion=="8"){
                    localStorage.removeItem('count');
                    localStorage.removeItem('JuegoNv2');
                    localStorage.removeItem('JuegoNv3');
                    document.getElementById('Mundo2').classList.remove("visible");
                    document.getElementById('Mundo2').classList.add("hidden");
                    document.getElementById('Mundo3').classList.remove("visible");
                    document.getElementById('Mundo3').classList.add("hidden");
                }
                if(opcion=="9"){
                    str_count = localStorage.getItem("count");
                    document.getElementById('menu').classList.remove("visible");
                    document.getElementById('menu').classList.add("hidden");
                    document.getElementById('Puntos').classList.remove("hidden");
                    document.getElementById('Puntos').classList.add("visible");
                    document.getElementById('ValorPuntos').innerHTML=str_count + "pts";
                    Nivel1=false;
                    Nivel2=false;
                    Nivel3=false;
                }
            }