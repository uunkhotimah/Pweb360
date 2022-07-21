var namaError = document.getElementById('nama-error');
var alamatError = document.getElementById('alamat-error');
var barangError = document.getElementById('barang-error');
var beratError = document.getElementById('berat-error');
var jarakError = document.getElementById('jarak-error');
var metodeError = document.getElementById('metode-error');
var submitError = document.getElementById('submit-error');


function validateName(){
	var nama = document.getElementById('nama').value;

	if(nama.length == 0){
		namaError.innerHTML = 'Belum diisi!';
		return false;
	}
	namaError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateAlamat () {
	var alamat = document.getElementById('alamat').value;

	if(alamat.length == 0){
		alamatError.innerHTML = 'Belum diisi!';
		return false;
	}
	alamatError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateBarang(){
	var fakultas = document.getElementById('barang').value;

	if(barangError.length == 0){
		barangError.innerHTML = 'Belum diisi!';
		return false;
	}
	barangError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateBerat(){
	var berat = document.getElementById('berat').value;

	if(beratError.length == 0){
		beratError.innerHTML = 'Belum diisi!';
		return false;
	}
	beratError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateJarak(){
	var jarak = document.getElementById('arak').value;

	if(jarakError.length == 0){
		jarakError.innerHTML = 'Belum diisi!';
		return false;
	}
	jarakError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}

function validateForm(){
	var nama = document.getElementById('nama').value;
	var alamat = document.getElementById('alamat').value;
	var barang = document.getElementById('barang').value;
	var berat = document.getElementById('berat').value;
	var jarak = document.getElementById('jarak').value;

	if(!validateName() || !validateAlamat() || !validatebarang() || !validateBerat() || !validateJarak()){
		submitError.innerHTML = 'Batal!';
		return false;
	}
}