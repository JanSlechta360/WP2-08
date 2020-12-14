<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// nezdaněná výplata
$employees[0]['salary'] = 8000; 
$employees[0]['type'] = 'student';
$employees[1]['salary'] = 8000; 
$employees[1]['type'] = 'student';
$employees[2]['salary'] = 6000; 
$employees[2]['type'] = 'corona';
$employees[3]['salary'] = 6000; 
$employees[3]['type'] = 'corona';
$employees[4]['salary'] = 6000; 
$employees[4]['type'] = 'corona';
$employees[5]['salary'] = 12000; 
$employees[5]['type'] = 'student';
$employees[6]['salary'] = 12000; 
$employees[6]['type'] = 'student';
$employees[7]['salary'] = 12000; 
$employees[7]['type'] = 'student';
$employees[8]['salary'] = 12000; 
$employees[8]['type'] = 'student';
$employees[9]['salary'] = 12000; 
$employees[9]['type'] = 'student';

for ($i=0; $i < 9; $i++) { ?>
    <h1>Employee <?=$i ?> - kdyby byl student nebo měl coronu</h1>
    <p>Čistá mzda normal: <?php echo cleanSalaryComplex($employees[$i]['salary']);?></p>
    <p>Čistá mzda student: <?php echo cleanSalaryComplex($employees[$i]['salary'], 'student');?></p>
    <p>Čistá mzda normal během corony: <?php echo cleanSalaryComplex($employees[$i]['salary'], 'corona');?></p>

<?php
}
?>
</body>
</html>