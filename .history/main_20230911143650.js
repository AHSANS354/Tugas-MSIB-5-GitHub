let produk = ["TV", "AC", "Kulkas"];

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

let data = produk[i];

document.getElementById("produk").innerHTML = data;
