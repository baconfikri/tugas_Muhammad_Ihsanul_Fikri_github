// === 1. Variabel dan Tipe Data (Object & Array) === Mengambil data profil dari konteks pendakianmu
let pendaki = {
    nama: "Muhammad Ihsanul Fikri",
    asal: "Kota Sukabumi",
    statusMahasiswa: true
};

const ketinggianPangrango = 3019; // MDPL

// Array perlengkapan (seperti contoh praktikummu)
let listPerlengkapan = ["Jaket Waterproof", "Sepatu Gunung", "Celana Cargo"];
listPerlengkapan.push("Carrier 60L"); // Menambahkan item baru menggunakan push()

// === 2. Fungsi & Arrow Function ===
// Fungsi untuk menyapa pendaki (Template Literals)
function salamPendaki(nama, lokasi) {
    return `Semangat muncak, ${nama}! Selamat berpetualang di ${lokasi}.`;
}

// Arrow function untuk cek kategori ketinggian
const cekKategoriGunung = (tinggi) => {
    return tinggi > 3000 ? "High Altitude (Sangat Tinggi)" : "Ketinggian Menengah";
};

// === 3. Logika (If-Else & Loop) === Menampilkan status di Console
if (pendaki.statusMahasiswa) {
    console.log(salamPendaki(pendaki.nama, "Gunung Pangrango"));
    console.log("Kategori Gunung: " + cekKategoriGunung(ketinggianPangrango));
}

// Menampilkan daftar perlengkapan di console menggunakan loop
console.log("--- Daftar Perlengkapan Pendakian ---");
for (let i = 0; i < listPerlengkapan.length; i++) {
    console.log(`${i + 1}. ${listPerlengkapan[i]}`);
}

// === 4. DOM Manipulation (Mengubah Tampilan HTML) === Mengubah Judul Utama
const mainTitle = document.querySelector("h1");
mainTitle.innerHTML = "Dashboard Pendakian Fikri";
mainTitle.style.color = "#55efc4"; // Memberikan warna accent seperti di CSS

// Mengubah teks di footer agar lebih dinamis
const footerText = document.querySelector(".footer p");
footerText.textContent = `© 2026 - Update Terakhir oleh ${pendaki.nama} (Mahasiswa IT Sukabumi)`;

// Menambahkan event sederhana (Contoh: Mengubah warna tabel saat di-klik)
const tabelData = document.querySelector(".table");
tabelData.addEventListener("click", function() {
    tabelData.style.backgroundColor = "#e8f8f5";
    alert("Data Lokasi: Puncak Pangrango 3019 MDPL");
});