<?php

class Sekil
{

    public $kenar1, $kenar2, $kenar3;

    public function __construct($kenar1, $kenar2 = null, $kenar3 = null)
    {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }
}

class Kare extends Sekil
{
    public function cevre()
    {
        return $this->kenar1 * 4;
    }
    public function alan()
    {
        return pow($this->kenar1, 2);
    }
}

class Dikdortgen extends Sekil
{
    public function cevre()
    {
        return $this->kenar1 * 2 + $this->kenar2 * 2;
    }
    public function alan()
    {
        return $this->kenar1 * $this->kenar2;
    }
}

class Ucgen extends Sekil
{
    public function cevre()
    {
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }
    public function alan()
    {
        $u = $this->cevre();
        return bcsqrt((($u / 2) * (($u / 2) - $this->kenar1) * (($u / 2) - $this->kenar2) * (($u / 2) - $this->kenar3)), 2);
    }
}

$kare = new Kare(5);
$dikdortgen = new Dikdortgen(5, 6);
$ucgen = new Ucgen(5, 6, 7);

echo "Kare Çevresi: " . $kare->cevre() . "<br/>";
echo "Kare Alanı: " . $kare->alan() . "<br/>";
echo "Dikdörtgen Çevresi: " . $dikdortgen->cevre() . "<br/>";
echo "Dikdörtgen Alanı: " . $dikdortgen->alan() . "<br/>";
echo "Üçgen Çevresi: " . $ucgen->cevre() . "<br/>";
echo "Üçgen Alanı: " . $ucgen->alan() . "<br/>";