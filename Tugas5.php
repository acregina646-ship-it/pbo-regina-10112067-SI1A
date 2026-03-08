<?php

class Belanja {

    public $kartuMember;
    public $totalBelanja;
    public $diskon;

    public function hitungDiskon() {

        if ($this->kartuMember == true) {

            if ($this->totalBelanja > 500000) {
                $this->diskon = 50000;
            } elseif ($this->totalBelanja > 100000) {
                $this->diskon = 15000;
            } else {
                $this->diskon = 0;
            }

        } else {

            if ($this->totalBelanja > 100000) {
                $this->diskon = 5000;
            } else {
                $this->diskon = 0;
            }

        }
    }

    public function hitungTotalBayar() {
        return $this->totalBelanja - $this->diskon;
    }
}

// ARRAY DATA

$dataPembeli = [
    "member" => true,
    "total"  => 334000
];

// VALIDASI ERROR

$errors = [];

if (!isset($dataPembeli["member"]) || !is_bool($dataPembeli["member"])) {
    $errors[] = "Status kartu member harus true atau false.";
}

if (!isset($dataPembeli["total"]) || !is_numeric($dataPembeli["total"]) || $dataPembeli["total"] <= 0) {
    $errors[] = "Total belanja harus angka dan lebih dari 0.";
}


// OUTPUT

if (!empty($errors)) {

    echo "Terjadi Kesalahan : <br>";
    foreach ($errors as $error) {
        echo "- " . $error . "<br>";
    }

} else {

    $belanja = new Belanja();
    $belanja->kartuMember = $dataPembeli["member"];
    $belanja->totalBelanja = $dataPembeli["total"];

    $belanja->hitungDiskon();

    echo "Apakah ada kartu member : " . ($belanja->kartuMember ? "Ya" : "Tidak") . "<br>";
    echo "Total belanjaan : " . $belanja->totalBelanja . "<br>";
    echo "Diskon : Rp " . $belanja->diskon . "<br>";
    echo "Total Bayar : Rp " . $belanja->hitungTotalBayar();
}

?>