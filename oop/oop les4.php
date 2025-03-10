<?php
class Persoon {
    protected string $voornaam;
    protected string $achternaam;
    private string $adres;
    protected string $telefoonNr;

    public function __construct(string $voornaam, string $achternaam, string $adres, string $telefoonNr) {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->adres = $adres;
        $this->telefoonNr = $telefoonNr;
    }

    public function printInfo(): void {
        echo "Naam: {$this->voornaam} {$this->achternaam}<br>";
        echo "Telefoonnummer: {$this->telefoonNr}<br>";
    }
}

class Student extends Persoon {
    private int $studentNummer;
    private int $leeftijd;
    private string $studie;

    public function __construct(string $voornaam, string $achternaam, string $adres, string $telefoonNr, int $studentNummer, int $leeftijd, string $studie) {
        parent::__construct($voornaam, $achternaam, $adres, $telefoonNr);
        $this->studentNummer = $studentNummer;
        $this->leeftijd = $leeftijd;
        $this->studie = $studie;
    }

    public function printInfo(): void {
        parent::printInfo();
        echo "Studentnummer: {$this->studentNummer}<br>";
        echo "Leeftijd: {$this->leeftijd}<br>";
        echo "Studie: {$this->studie}<br>";
    }
}

class Docent extends Persoon {
    private int $docentNummer;
    private int $leeftijd;
    private string $vak;
    private float $salaris;

    public function __construct(string $voornaam, string $achternaam, string $adres, string $telefoonNr, int $docentNummer, int $leeftijd, string $vak, float $salaris) {
        parent::__construct($voornaam, $achternaam, $adres, $telefoonNr);
        $this->docentNummer = $docentNummer;
        $this->leeftijd = $leeftijd;
        $this->vak = $vak;
        $this->salaris = $salaris;
    }

    public function printInfo(): void {
        parent::printInfo();
        echo "Docentnummer: {$this->docentNummer}<br>";
        echo "Leeftijd: {$this->leeftijd}<br>";
        echo "Vak: {$this->vak}<br>";
        echo "Salaris: €{$this->salaris}<br>";
    }
}

echo "Studentinformatie:<br>";
$student = new Student("Jan", "Jansen", "Straat 123, Amsterdam", "0612345678", 1001, 20, "Informatica");
$student->printInfo();
echo "<br>";
echo "Docentinformatie:<br>";
$docent = new Docent("Piet", "Pietersen", "Laan 45, Rotterdam", "0698765432", 2001, 45, "Wiskunde", 3500.50);
$docent->printInfo();
?>