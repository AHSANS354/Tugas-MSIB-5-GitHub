class Gempa {
  constructor(lokasi, skala) {
    this.lokasi = lokasi;
    this.skala = skala;
  }

  dampak() {
    let dampak;
    if (this.skala >= 0 && this.skala <= 2) {
      dampak = "tidak terasa";
    } else if (this.skala > 2 && this.skala <= 4) {
      dampak = "bangunan retak-retak";
    } else if (this.skala > 4 && this.skala <= 6) {
      dampak = "bangunan roboh";
    } else {
      dampak = "bangunan roboh dan berpotensi tsunami";
    }

    console.log(`Lokasi Gempa: ${this.lokasi}`);
    console.log(`Skala: ${this.skala}`);
    console.log(`Dampak: ${dampak}`);
    console.log("\n");
  }
}

// Buat object gempa
let g1 = new Gempa("39km dari kota ternate", 6.0);
let g2 = new Gempa("16km dari kabupaten donggala", 6.0);
let g3 = new Gempa("10km dari adassil, maroko", 6.8);
let g4 = new Gempa("33km dari jalisco, meksiko", 5.8);
let g5 = new Gempa("12km dari burney, california", 5.0);

// Panggil fungsi dampak() untuk mencetak info gempa
gempa1.dampak();
gempa2.dampak();
gempa3.dampak();
gempa4.dampak();
gempa5.dampak();
