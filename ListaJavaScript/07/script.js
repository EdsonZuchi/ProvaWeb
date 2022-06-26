var cont = 0; 

function onClick(){
    cont++; 
    mostrar(); 
}

function zerarCont(){
    cont = 0;
    mostrar();
}

function mostrar(){
    document.getElementById("number").innerHTML= cont;
}