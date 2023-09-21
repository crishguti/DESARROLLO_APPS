
function convertir (){
    var valore = parseInt(document.getElementById("valor").value);
    var resultado = 0;
    var dolar = 3.85;
    var euro =  3.84; 
    if(document.getElementById("uno").checked){
        resultado = valore / dolar;
        alert("Elcambio de soles a dolares es : $" + resultado.toFixed(4));
        if(document.getElementById("dos").checked) {
            resultado = valore / euro;
            alert("El cambio de soles a euros es :€" + resultado.toFixed(4));
        }
    }
}
