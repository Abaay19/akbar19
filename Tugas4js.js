let pegawai = [];

function tambahPegawai() {

    let nama = document.getElementById("nama").value;
    let jabatan = document.getElementById("jabatan").value;
    let status = document.getElementById("status").value;

    let gaji = hitungGaji(jabatan, status);

    pegawai.push({ nama: nama, jabatan: jabatan, status: status, gaji: gaji });

    tampilkanDataPegawai();

    document.getElementById("formPegawai").reset();
}

function tampilkanDataPegawai() {
    let tbody = document.getElementById("dataPegawai");

    tbody.innerHTML = "";

    pegawai.forEach(function (pegawai) {
        let row = tbody.insertRow();
        row.insertCell(0).textContent = pegawai.nama;
        row.insertCell(1).textContent = pegawai.jabatan;
        row.insertCell(2).textContent = pegawai.status;
        row.insertCell(3).textContent = pegawai.gaji;
    });
}

function hitungGaji(jabatan, status) {
    let gajiPokok = 0;

    switch (jabatan) {
        case "Manager":
            gajiPokok = 15000000;
            break;
        case "Asisten Manager":
            gajiPokok = 10000000;
            break;
        case "Staff":
            gajiPokok = 5000000;
            break;
        default:
            gajiPokok = 0;
    }

    let tunjanganKeluarga = (status === "Menikah") ? (0.2 * gajiPokok) : 0;

    let totalGaji = gajiPokok + tunjanganKeluarga;
    return totalGaji;
}