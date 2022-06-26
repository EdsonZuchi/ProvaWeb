function acao(indica){
    switch (indica) {
        case 1:
            document.getElementById("list").innerHTML += "Clicou no <b>primeiro</b> botão<br>";   
            break;
        case 2: 
            document.getElementById("list").innerHTML += "Clicou no <b>segundo</b> botão<br>";   
            break;
        case 3: 
            document.getElementById("list").innerHTML += "Clicou no <b>terceiro</b> botão<br>";   
            break;
        case 4: 
            document.getElementById("list").innerHTML += "Clicou no <b>quarto</b> botão<br>";   
            break;
    }
}