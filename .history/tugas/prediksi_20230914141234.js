class Gempa {
  constructor(lokasi, skala) {
    this.lokasi = lokasi;
    this.skala = skala;
  }
  dampak() {
    let dampak = "";
    if (this.skala <= 2) {
      dampak = "Tidak terasa";
    } else if (this.skala > 2 && this.skala <= 4) {
      dampak = "Bangunan retak-retak";
    } else if (this.skala > 4 && this.skala <= 6) {
      dampak = "Bangunan roboh";
    } else if (this.skala > 6) {
      dampak = "Bangunan roboh dan berpotensi tsunami";
    }

    document.write("Lokasi Gempa : <br>", this.lokasi);
    document.write("<br> Skala Gempa : <br>", this.skala);
    document.write("<br> Dampak Gempa : <br>", dampak);
    document.write("<hr>");
  }
}
let g1 = new Gempa("39km dari kota ternate", 6.0);
let g2 = new Gempa("16km dari kabupaten donggala", 6.0);
let g3 = new Gempa("10km dari adassil, maroko", 6.8);
let g4 = new Gempa("33km dari jalisco, meksiko", 5.8);
let g5 = new Gempa("12km dari burney, california", 5.0);

let hasil = [g1, g2, g3, g4, g5];

function printGempa() {
  let printGempa = printGempa.tiString();
  for (i = 0; i < hasil.length; i++) {
    let print = hasil[i].dampak();
  }
  let print = document.getElementById("print");
  print.innerHTML = printGempa;
}
