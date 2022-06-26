var n1, n2; 

function goIni(){
    n1 = window.prompt("Digite um valor")
    n2 = window.prompt("Digite outro valor")
    document.getElementById("n1").innerHTML = n1
    document.getElementById("n2").innerHTML = n2 
    Calc()
}

function Calc(){
    if(parseInt(n1) >= parseInt(n2)){
        document.getElementById("r").innerHTML = n1 
    }else{
        document.getElementById("r").innerHTML = n2
    }
}