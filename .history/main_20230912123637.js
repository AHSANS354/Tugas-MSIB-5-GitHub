function tokoOnline() {
  let forms = document.getElementById("toko");
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
}
