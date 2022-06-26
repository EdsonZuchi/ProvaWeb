var x = 0; 

function goIni(){
    x = window.prompt("Digite um valor");
    document.getElementById("num").innerHTML = x; 
    PI(); 
}

function PI(){
    if(x % 2 == 0){
        document.getElementById("papi").innerHTML = "PAR";
    }else{
        document.getElementById("papi").innerHTML = "IMPAR";
    }
}