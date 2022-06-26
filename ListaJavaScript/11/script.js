function onGo() {
    x = document.getElementById("CampX").value
    document.getElementById("tab").innerHTML = ""
    document.getElementById("x").innerHTML = x
    for (let i = 1; i <= 10 ; i++) {
        document.getElementById("tab").innerHTML += x+" x "+i+" = <b>"+(parseInt(i)*parseInt(x)) + "</b><br>"        
    }
}