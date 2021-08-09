function cantidadTotal() {
    let cantidadBoletos = document.getElementById("cantidadBoletos").value;
    let cantidadTotal = (50 * cantidadBoletos);
    let total = document.getElementById("total");
    total.value = cantidadTotal;
}

