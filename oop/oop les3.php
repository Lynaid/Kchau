<?php
class Car {
    public string $brand;
    public int $year;
    public string $color;
    public int $topSpeed;
    private string $owner;

    public function __construct(string $brand, int $year, string $color, int $topSpeed, string $owner) {
        $this->brand = $brand;
        $this->year = $year;
        $this->color = $color;
        $this->topSpeed = $topSpeed;
        $this->owner = $owner;
    }

    public function printInfo(): void {
        echo "Brand: $this->brand, Year: $this->year, Color: $this->color, Top Speed: $this->topSpeed km/h <br>";
    }

    public function drive(): void {
        echo "$this->brand is now driving on the road!<br>";
    }

    public function getOwner(): string {
        return $this->owner;
    }

    public function setOwner(string $newOwner): void {
        $this->owner = $newOwner;
    }
}

$car1 = new Car("Tesla", 2022, "Red", 250, "John");
$car2 = new Car("BMW", 2020, "Blue", 230, "Emma");

$car1->printInfo();
$car1->drive();
echo "Owner: " . $car1->getOwner() . "<br>";

$car2->printInfo();
$car2->drive();
echo "Owner: " . $car2->getOwner() . "<br>";

$car1->setOwner("Peter");
echo "New owner of Tesla: " . $car1->getOwner() . "<br>";
?>
