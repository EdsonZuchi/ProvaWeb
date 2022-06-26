function Gerar(){
    x = Math.floor(Math.random()*99)+1
    document.getElementById("log").innerHTML += "<h4>Acabei de pensar no número <mark>"+x+"</mark>!<br></h4>"
}

function Clear(){
    document.getElementById("log").innerHTML = "" 
}