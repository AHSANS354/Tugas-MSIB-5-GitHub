class Gempa {
  constructor(lokasi, skala) {
    this.lokasi = lokasi;
    this.skala = skala;
  }
  dampak(skala) {
    const dampak = "";
    if (skala <= 2) {
      dampak = "Tidak terasa";
    } else if (skala > 2 && skala <= 4) {
      return "Bangunan retak-retak";
    } else if (skala > 4 && skala <= 6) {
      return "Bangunan roboh";
    } else {
      return "Bangunan roboh dan berpotensi tsunami";
    }
  }
}
