<?php
class KonversiSuhu{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanawal = $satuanSuhuAwal;
        $this->besaransuhu = $besaranSuhu;
        $this->satuantujuan = $satuanSuhuTujuan;
    }
    public function konversi(){
        if($this->satuanawal == "Celsius"){
            if ($this->satuantujuan == "Fahrenheit"){
                return($this->besaransuhu * 9/5) + 32;
            }else if ($this->satuantujuan == "Reaumur"){
                return($this->besaransuhu * 4/5);
            }else if($this->satuantujuan == "Celcius"){
                return $this->besaransuhu;
            }else{
                return "Satuan tujuan tidak valid";
            }
        
        }else if($this->satuanawal == "Fahrenheit"){
            if($this->satuantujuan == "Celsius"){
                return($this->besaransuhu - 32) * 5/9;
            }else if ($this->satuantujuan == "Reaumur"){
                return ($this->besaransuhu - 32) * 5/9 *4/5;
            }else if ($this->besarantujuan == "Fahrenheit"){
                return $this->besaransuhu;
            }else{
                return "Satuan tujuan tidak valid";
        }

        }elseif ($this->satuanawal == "Celsius") {
            if ($this->satuantujuan == "Réaumur") {
                return $this->besaransuhu * 4/5;  
            } elseif ($this->satuantujuan == "Fahrenheit") {
                return $this->besaransuhu * 9/5 + 32; 
            } elseif ($this->satuantujuan == "Celsius") {
                return $this->besaransuhu;  
            } else {
                return "Satuan tujuan tidak valid";
        }

        }else if ($this->satuanawal == "Reaumur"){
            if($this->satuantujuan == "Celsius"){
                return $this->besaransuhu * 5/4;
            }else if ($this->satuantujuan == "Fahrenheit"){
                return $this->besaransuhu * 9/4 + 32;
            }else if ($this->satuantujuan == "Reaumur"){
                return $this->besaransuhu;
            }else{
                return "Satuan tujuan tidak valid";
            }

        }else {
            return "Satuan tujuan tidak valid";
        }
    }
    public function cetak(){
        echo '<h1 align="center">Konversi Suhu</h1>';
        echo '<table border="1">';
        echo '<tr><th>Satuan suhu awal</th><th>Besaran Suhu</th><th>Satuan suhu tujuan</th><th>Hasil konversi</th></tr>';
        echo '<tr>';
        echo '<td>' . $this->satuanawal . '</td>';
        echo '<td>' . $this->besaransuhu . '</td>';
        echo '<td>' . $this->satuantujuan . '</td>';
        echo '<td>' . $this->konversi() . '</td>';
        echo '</tr>';
        echo '</table>';
    }
}


?>