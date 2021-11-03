<?php 
//EXERCICE 1
    echo 'EXO 1';
    echo '<br>';
    echo 'L adresse IP de l utilisateur est : '.$_SERVER['REMOTE_ADDR']; 
    function getIp() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    };
    echo '<br>';
    echo 'L adresse IP de l utilisateur est : '.getIp();
    echo '<br>';
    echo '<br>';


//EXERCICE 3
    echo 'EXO 3';
    echo '<br>';
    $tableExo3 = array('Roland', 'Christine', 'Alfred', 'Charles');
        sort($tableExo3);
    foreach($tableExo3 as $tableOrder) {
        echo $tableOrder;
        echo '<br>';
    };
    echo '<br>';
    echo $tableExo3[0];
    /* Exemple pour for
    $tableExo3_Order = count($tableExo3);
    for($i = 0; $i < $tableExo3_Order; $i++) {
        echo $tableExo3[$i];
        echo "<br>"; };*/
    echo '<br>';


//EXERCICE 4
    echo 'EXO 4';
    echo '<br>';
    function concatenation($argument1, $argument2) {
        echo "$argument1 $argument2";
    };
    concatenation("Antoine","Griezmann");
    echo '<br>';
    echo '<br>';


//EXERCICE 5
    echo 'EXO 5';
    echo '<br>';
    function add ($num1, $num2) {
        return $num1 + $num2;
    };
    echo add(5,5);
    echo '<br>';
    function sub ($num1, $num2) {
        return $num1 - $num2;
    };
    echo sub(5,5);
    echo '<br>';
    function divid ($num1, $num2) {
        return $num1 / $num2;
    };
    echo divid(5,5);
    echo '<br>';
    function multi ($num1, $num2) {
        return $num1 * $num2;
    };
    echo multi(5,5);
    echo '<br>';
    echo '<br>';


//EXERCICE 7
    echo 'EXO 7';
    echo '<br>';
    function est_il_majeur(int $num) {
        if ($num >= 18) {
            echo $num." ans, Vous êtes majeur !!!";
        } else {
            echo $num." ans, Vous êtes mineur !!!";
        }
    };
    echo est_il_majeur(5);
    echo '<br>';
    function plus_grand(int $num1, int $num2) {
        return max($num1,$num2);
    };
    echo "Le plus grand nombre est : ".plus_grand(50000,100);
    echo '<br>';
    function plus_petit(int $num1, int $num2) {
        return min($num1,$num2);
    };
    echo "Le plus petit nombre est : ".plus_petit(10000,100);
    echo '<br>';
    echo '<br>';


//EXERCICE 8
    echo 'EXO 8';
    echo '<br>';
    $tableExo8 = array("premierElement" =>"A","deuxiemeElement" => "B","dernierElement" => "C");
    $first_element = $tableExo8[array_key_first($tableExo8)];
    echo "Le premier element du tableaux est : ";
    var_dump($first_element);
    echo '<br>';
    print_r($tableExo8);
    echo '<br>';
    echo '<br>';


//EXERCICE 9
    echo 'EXO 9';
    echo '<br>';
    $tableExo9 = array("premierElement" =>"A","deuxiemeElement" => "B","dernierElement" => "C");
    $last_element = $tableExo9[array_key_last($tableExo9)];
    echo "Le dernier element du tableaux est : ";
    var_dump($last_element);
    echo '<br>';
    print_r($tableExo9);
    echo '<br>';
    echo '<br>';


//EXERCICE 10
    echo 'EXO 10';
    echo '<br>';
    function plus_grand_element() {
        $tableExo10 = array(1, 2, 3, 4, 5);
        return max($tableExo10);
    };
    echo plus_grand_element();