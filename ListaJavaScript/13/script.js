var peso, altura, IMC

function verIMC(){
    peso = document.getElementById("peso").value 
    altura = document.getElementById("altura").value

    altura = parseFloat(altura)/100
    IMC = parseFloat(peso)/(parseFloat(altura)*parseFloat(altura)) 
    if(IMC < 18.5){
        document.getElementById("tit").innerHTML="Abaixo do peso"
        document.getElementById("img").style="background-image: url(img/abaixopeso.png);"
    }else if(IMC < 24.99){
        document.getElementById("tit").innerHTML="Peso Ideal"
        document.getElementById("img").style="background-image: url(img/normal.png);"
    }else if(IMC < 29.9){
        document.getElementById("tit").innerHTML="Levemente acima do peso"
        document.getElementById("img").style="background-image: url(img/sobrepeso.png);"
    }else if(IMC < 34.9){
        document.getElementById("tit").innerHTML="Obesidade grau I"
        document.getElementById("img").style="background-image: url(img/obesidade1.png);"
    }else if(IMC < 39.9){
        document.getElementById("tit").innerHTML="Obesidade grau II (severa)"
        document.getElementById("img").style="background-image: url(img/obesidade2.png);"
    }else{
        document.getElementById("tit").innerHTML="Obesidade grau III (mórbida)"
        document.getElementById("img").style="background-image: url(img/obesidade3.png);"
    }
}