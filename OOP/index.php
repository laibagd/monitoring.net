<?php declare(strict_types=1);
use KCS\Entity\Car;
use KCS\Entity\Student;
require __DIR__ . '/vendor/autoload.php';
function pildytiStudentus(array $studentai): array
{
    $naujaGrupe = [];
    foreach ($studentai as $studentas) {
        $student = new Student();
        $student->setFirstName($studentas['vardas']);
        $student->setLastName($studentas['pavarde']);
        $student->setGroupe($studentas['grupe']);
        $student->setBirthDate($studentas['gimimoData']);
        $naujaGrupe[] = $student;
    }
    return $naujaGrupe;
}
function spausdintiStudentus(array $naujaGrupe = []){
    if (empty($naujaGrupe)) {
        throw new \Exception('Nėra naujos grupės masyvo');
    }
    foreach ($naujaGrupe as $studentas) {
        echo $studentas."<br>";
    }
}
try {
    $automobilis = new Car();
    $automobilis->spalva = 'raudona';
    $automobilis->greitis = '50km/h';
    echo $automobilis->gautiSpalva() . '< br>';
    $automobilis->vaziuoti();
    $automobilis->vaziuoti();
    echo "<br>Rida: {$automobilis->gautiRida()}";
    $studentai = [
        ['vardas' => 'Vardenis0', 'pavarde' => 'Pavardenis0', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-01'],
        ['vardas' => 'Vardenis1 ', 'pavarde' => 'Pavardenis1', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-02'],
        ['vardas' => 'Vardenis2 ', 'pavarde' => 'Pavardenis2', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-03'],
        ['vardas' => 'Vardenis3 ', 'pavarde' => 'Pavardenis3', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-04'],
        ['vardas' => 'Vardenis4 ', 'pavarde' => 'Pavardenis4', 'grupe' => 'KCS20V', 'gimimoData' => '1980-01-04'],
        ['vardas' => 'Vardenis5 ', 'pavarde' => 'Pavardenis5', 'grupe' => 'KCS20V', 'gimimoData' => '1980-01-04'],
    ];
    $naujaGrupe = pildytiStudentus($studentai) ?? [];
    spausdintiStudentus($naujaGrupe);
}catch(\Exception $exception){
    echo 'Oii.. nutiko gyvenimas ir įvyko klaida :P :D';
}