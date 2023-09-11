let produk = ["TV", "AC", "Kulkas"];

for (var i = 0; i < produk.length; i++) {
  switch (produk[i]) {
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

  let data = produk[i] + harga;

  document.write(produk);

  document.getElementById("produk").innerHTML = data;
}
