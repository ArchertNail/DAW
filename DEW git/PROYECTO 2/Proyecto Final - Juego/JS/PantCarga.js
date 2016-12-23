function cargar(){
    var barra=document.getElementById("barra");
    barra.value +=5;
            
    if(barra.value==100){
        document.getElementById('Pant_Carga').classList.add("hidden");
        document.getElementById('menu').classList.remove("hidden");
        document.getElementById('menu').classList.add("visible");
        AudioMeu.play();
        if(localStorage["JuegoNv2"]=="true"){
        document.getElementById('Mundo2').classList.remove("hidden");
        document.getElementById('Mundo2').classList.add("visible");
        }
        if(localStorage["JuegoNv3"]=="true"){
            document.getElementById('Mundo3').classList.remove("hidden");
            document.getElementById('Mundo3').classList.add("visible");
        }
    clearInterval(intervalo);
    }
}