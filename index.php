<?php 


// class CarCalculator {

//     public function nbMonths(float $startPriceOld, float $startPriceNew, float $savingPerMonth, float $percentLossByMonth): float
//     {
        
//     }

// }

// $volvo = new CarCalculator;
// echo $volvo->nbMonths(2000, 8000, 100, 1.5);


//  6 sam stavio jer je to broj mjeseci (6000 mu nedostaje, svaki mjesec ima 1000 to je 6 mjeseci.)
// broj mjeseci se vrtila lupa i ako zaokruzujem na manju vrijednost uz pomoc floor 
// ice na svaki drugi mjesec onda kroz lupu 


$price = 6000;
for ($i = 0; $i <= 6; $i++) {
    if ($i == 0) {
        $calculation1 = 1.5; 
    } else {
        $calculation1 = 0.5 * ($i % 2);  
    }
    $sum += $calculation1;
    echo  ($price*($sum/100))  . "<br>" ;
}



// for($i = 0; $i <= 6; $i++) {
//     echo "<hr>";
//     $calculation[] = 0.0015 + 0.005 * floor(($i - 1)/2);
//     echo array_sum($calculation) . "<br>";  
// }

?>

