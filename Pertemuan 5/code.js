function loadNameSuggestion(){
    fetch("./nameSuggestion.json")
    .then(response => response.json())
    .then(data => {
        let datalist = document.getElementById("namaMahasiswa");
        datalist.innerHTML = "";
        data.nama.forEach(entry => {
            let option = document.createElement("option");
            option.value = entry;
            datalist.appendChild(option);
        });
    })
    .catch(err => console.error("Gagal load JSON:", err));
}

loadNameSuggestion();