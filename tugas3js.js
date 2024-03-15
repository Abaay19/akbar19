function submitForm() {
  // Mendapatkan nilai dari input
  var nama = document.getElementById("nama").value;
  var pekerjaan = document.getElementById("pekerjaan").value;
  var hobi = document.getElementById("hobi").value;
  
  // Menampilkan hasil
  var hasilDiv = document.getElementById("hasil");
  hasilDiv.innerHTML = "<h3>Hasil:</h3>";
  hasilDiv.innerHTML += "<p>Nama: " + nama + "</p>";
  hasilDiv.innerHTML += "<p>Pekerjaan: " + pekerjaan + "</p>";
  hasilDiv.innerHTML += "<p>Hobi: " + hobi + "</p>";
}