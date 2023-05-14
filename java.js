function submitBiodata() {
	var nama = document.getElementById("nama").value;
	var nim = document.getElementById("nim").value;
	var prodi = document.getElementById("prodi").value;
	var alamat = document.getElementById("alamat").value;

	var hasil = "Nama: " + nama + "<br>" +
				"NIM: " + nim + "<br>" +
				"Program Studi: " + prodi + "<br>" +
				"Alamat: " + alamat;

	document.getElementById("hasil").innerHTML = hasil;
}