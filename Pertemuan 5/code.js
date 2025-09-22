function loadNameSuggestion() {
  fetch("./nameSuggestion.json")
    .then(response => {
      if (!response.ok) throw new Error("HTTP error " + response.status);
      return response.json();
    })
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

document.getElementById("regForm").addEventListener("submit", function(e) {
  let nama = document.getElementById("nama").value.trim();
  let nrp = document.getElementById("nrp").value.trim();
  let matkul = document.getElementById("matkul").value.trim();
  let dosen = document.getElementById("dosen").value.trim();

  if (!nama || !nrp || !matkul || !dosen) {
    e.preventDefault(); 
    if(!nama){
        alert("Nama harus diisi!");
    }
    else if(!nrp){
        alert("NRP tidak boleh kosong!");
    }
    else if(!matkul){
        alert("Mata kuliah harus diisi?");
    }
    else{
        alert("Dosen tidak boleh kosong!");
    }
  }
});
