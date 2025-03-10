<?php
class Student {
    public $naam;
    public $leeftijd;
    public $opleiding;
    public $cijferGemiddelde;

    public function __construct($naam, $leeftijd, $opleiding, $cijferGemiddelde) {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->opleiding = $opleiding;
        $this->cijferGemiddelde = $cijferGemiddelde;
    }

    public function toonStudentInfo() {
        echo "Naam: " . $this->naam . "<br>";
        echo "Leeftijd: " . $this->leeftijd . "<br>";
        echo "Opleiding: " . $this->opleiding . "<br>";
        echo "Cijfer Gemiddelde: " . $this->cijferGemiddelde . "<br>";
    }

    public function verjaar() {
        $this->leeftijd++;
        echo $this->naam . " is nu " . $this->leeftijd . " jaar oud.<br>";
    }

    public function isGeslaagd() {
        if ($this->cijferGemiddelde >= 5.5) {
            echo $this->naam . " is geslaagd!<br>";
        } else {
            echo $this->naam . " is niet geslaagd.<br>";
        }
    }
}

$student1 = new Student("Jan", 20, "Informatica", 6.7);
$student2 = new Student("Eva", 22, "Wiskunde", 4.8);

$student1->toonStudentInfo();
$student1->verjaar();
$student1->isGeslaagd();

echo "<br>";

$student2->toonStudentInfo();
$student2->verjaar();
$student2->isGeslaagd();

?>

<?php
class Teacher {
    public $name;
    public $subject;
    public $experience;
    public $email;

    public function __construct($name, $subject, $experience, $email) {
        $this->name = $name;
        $this->subject = $subject;
        $this->experience = $experience;
        $this->email = $email;
    }

    public function getDetails() {
        return "Naam: " . $this->name . "<br>" .
               "Vak: " . $this->subject . "<br>" .
               "Ervaring: " . $this->experience . " jaar<br>" .
               "E-mail: " . $this->email . "<br>";
    }
    public function addExperience($years) {
        $this->experience += $years;
        echo $this->name . " heeft nu " . $this->experience . " jaar ervaring.<br>";
    }

    public function sendEmail($message) {
        echo "Verstuur e-mail naar " . $this->email . ":<br>";
        echo "Bericht: " . $message . "<br>";
    }
}
?>
<?php
include 'Teacher.php'; 
$teacher1 = new Teacher("John Doe", "Wiskunde", 10, "johndoe@example.com");
$teacher2 = new Teacher("Jane Smith", "Informatica", 5, "janesmith@example.com");
$teacher3 = new Teacher("Emily Brown", "Nederlands", 12, "emilybrown@example.com");

echo "<h3>Docent 1 Informatie:</h3>";
echo $teacher1->getDetails();
$teacher1->addExperience(2);
$teacher1->sendEmail("Beste John, kunt u de lesstof voor volgende week voorbereiden?");

echo "<h3>Docent 2 Informatie:</h3>";
echo $teacher2->getDetails();
$teacher2->addExperience(3);
$teacher2->sendEmail("Hallo Jane, kunnen we de vergadering voor morgen verzetten?");

echo "<h3>Docent 3 Informatie:</h3>";
echo $teacher3->getDetails();
$teacher3->addExperience(1);
$teacher3->sendEmail("Hallo Emily, vergeet niet de les voor donderdag klaar te hebben.");

?>
