function acao(indica){
    switch (indica) {
        case 1:
            document.getElementById("list").innerHTML += "Clicou no primeiro botão<br>";   
            break;
        case 2: 
            document.getElementById("list").innerHTML += "Clicou no segundo botão<br>";   
            break;
        case 3: 
            document.getElementById("list").innerHTML += "Clicou no terceiro botão<br>";   
            break;
        case 4: 
            document.getElementById("list").innerHTML += "Clicou no quarto botão<br>";   
            break;
    }
}