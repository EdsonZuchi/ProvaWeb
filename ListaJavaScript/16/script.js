var n1, n2

function leitura(){
    n1 = document.getElementById("n1").value
    n2 = document.getElementById("n2").value
}

function soma(){
    leitura()
    document.getElementById("result").innerHTML = parseInt(n1)+parseInt(n2); 
}

function sub(){
    leitura()
    document.getElementById("result").innerHTML = parseInt(n1)-parseInt(n2); 
}

function multi(){
    leitura()
    document.getElementById("result").innerHTML = parseInt(n1)*parseInt(n2); 
}

function div(){
    leitura()
    document.getElementById("result").innerHTML = parseInt(n1)/parseInt(n2); 
}
