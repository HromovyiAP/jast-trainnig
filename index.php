<?php

$x = 0;
while ($x<10) {
    echo $x++;
    echo '</br>';
}
?>
<hr>

<?php
$y = 15;
do
{echo $y--;
echo '</br>';}

while ($y > 0);

?>
<hr>

<?php
for ($p=0;$p<=15;$p++) {
    echo "$p  </br>";

}
?>
<?php

$arr = ["one", "two", "three", "four", "five"];

for ($z=0; $z<5; $z++) {
    echo "Ключ, $z и его значение $arr[$z] </br>";
}

foreach ($arr as $item) {
    echo "Значение: $item </br>";
}
?>

<?php

$b=0;

while ($b++<5) {

        echo $b;
   }
?>


<?php

$age = 52;
$weight = 75.23;
$name = 'Andrii';
$canSwim = true;
$Surname = 'Hromovyi';
$info = 'His name is ' . $name . '.';
$info = "His name is {$name}.";

$age_2 = 52;
$weight_2 = 75.23;
$name_2 = 'Mike';
$canSwim_2 = true;
$Surname_2= 'Hromovyi';
?>

<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--PHP data types-->

<!--<ul>
    <li>int</li>
        <ul>
        <li> +, -, /, *</li>
        </ul>

    <li>float</li>
    <ul>
        <li>+, -, /, *</li>
    </ul>

    <li>string</li>
    <li>boolean (true, false)</li>
</ul>

<-- <hr>-->


<?php

echo $info;

?>

<?php

$emloyees_1 = ['age' => 51,
    'weight'=>75.35,
    'name'=> 'Mike',
    'surname'=>'Hromovyi',
    'can_swim'=>false
];
$emloyees_2 = ['age' => 51,
    'weight'=>75.35,
    'name'=> 'Bob',
    'surname'=>'Hromovyi',
    'can_swim'=>true ];

$emloyees = [$emloyees_1, $emloyees_2];

?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Weight</th>
        <th>CanSwim</th>
    </tr>
    <tr align="center">
        <td><?php echo $emloyees[0]['name'] ?></td>
        <td><?php echo $emloyees[0]['surname']?></td>
        <td><?php echo $emloyees[0]['weight'] ?></td>
        <td><?php echo $emloyees[0]['age'] ?></td>
        <td><?php echo $emloyees[0]['can_swim'] ? 'yes' : 'no' ?></td>
    </tr>

    <tr align="center">
        <td><?php echo $emloyees[1]['name'] ?></td>
        <td><?php echo $emloyees[1]['surname']?></td>
        <td><?php echo $emloyees[1]['weight'] ?></td>
        <td><?php echo $emloyees[1]['age'] ?></td>
        <td><?php echo $emloyees[1]['can_swim'] ? 'yes' : 'no' ?></td>
    </tr>
</table>

<hr>

<?php

$a = -25;
if ($a>0) {
  echo 'Positive';

} elseif ($a == 0) {echo 'zero';}
else {echo 'negative';}

// ternary

// echo $condition ? $a : $b;

?>

<?php
echo 'hello'
?>








</body>
</html>



