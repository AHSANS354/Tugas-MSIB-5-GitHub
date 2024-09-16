let forms = document.getElementById("toko");
let produkpilihan = ("TV", "AC", "Kulkas");
let pilihproduk = '<option value=""><--- Pilihan Produk ---></option>';
for (let p in produkpilihan) {
  pilihproduk += `<option value="${produkpilihan[p]}">${produkpilihan[p]}</option>`;
}
forms.produk.innerHTML = pilihproduk;
function tokoOnline() {
  let nama = forms.nama.value;
  let produk = forms.produk.value;
  let jumlah = forms.jumlah.value;

  let harga;

  switch (produk) {
    case "TV":
      harga = 2000000;
      break;
    case "AC":
      harga = 3000000;
      break;
    case "Kulkas":
      harga = 4000000;
      break;
    default:
      harga = 0;
      break;
  }

  total = harga * jumlah;

  let diskon;

  if (produk == "Kulkas" && jumlah >= 3) {
    diskon = total * 0.3;
  } else if (produk == "AC" && jumlah >= 3) {
    diskon = total * 0.2;
  } else {
    diskon = total * 0.1;
  }

  let PPN = (total - diskon) * 0.1;
  let bayar = total - diskon + PPN;

  alert(`Nama Pelanggan : ${nama}
  Produk : ${produk}
  Harga satuan : ${harga}
  Quantity : ${jumlah}
  Harga kotor : ${total}
  Diskon : ${diskon}
  PPN : ${PPN}
  Pembayaran : ${bayar}`);
}
