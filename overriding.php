<?php
class Fasilkom_E
{
  public $name;
  public $nilai;
  public function __construct($name, $nilai)
  {
    $this->name = $name;
    $this->nilai = $nilai;
  }
  public function intro()
  {
    echo "Nilai dari {$this->name} adalah {$this->nilai}.";
  }
}

class nilai_uas extends Fasilkom_E
{
  public $grade;
  public function __construct($name, $nilai, $grade)
  {
    $this->name = $name;
    $this->nilai = $nilai;
    $this->grade = $grade;
  }
  public function intro()
  {
    echo "Nilai dari {$this->name}, adalah {$this->nilai}, dengan grade {$this->grade}.";
  }
}

$nilai_uas = new nilai_uas("Dani kurniadi", 100, "jenius");
$nilai_uas->intro();
?>