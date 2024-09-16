class Gempa {
  constructor(lokasi, skala) {
    this.lokasi = lokasi;
    this.skala = skala;
  }
  dampak() {
    const dampak = "";
    if (this.skala <= 2) {
      dampak = "Tidak terasa";
    } else if (this.skala > 2 && this.skala <= 4) {
      dampak = "Bangunan retak-retak";
    } else if (this.skala > 4 && this.skala <= 6) {
      dampak = "Bangunan roboh";
    } else if (this.skala > 6) {
      dampak = "Bangunan roboh dan berpotensi tsunami";
    }
  }
}
