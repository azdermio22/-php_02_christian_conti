<?php
// $p1 = false;
// $p2 = false;
// $p3 = false;
// $p4 = false;
// $counter = 0;
// do {
//     if ($counter <= 5) {
//         $pasword = readline("inserischi pasword:");
//         $counter++;
//         if (strlen($pasword) >= 8) {
//             $p1 = true;
//         }else{
//             echo "caratteri insufficienti"."\n";
//         };
//         for ($i=0; $i < strlen($pasword); $i++) { 
//             if (is_numeric($pasword[$i])) {
//                 $p2 = true;
//                 break;
//             };
//         };
//         if ($p2 == false) {
//             echo "devi inserire almeno un numero"."\n";
//         };
//         for ($i=0; $i < strlen($pasword); $i++) { 
//             if (ctype_upper($pasword[$i])) {
//                 $p3 = true;
//                 break;
//             };
//         };
//         if ($p3 == false) {
//             echo "devi inserire almeno una maiuscola"."\n";
//         };
//         $speciali = ["-","_","!","$","%","£","&","€"];
//         for ($i=0; $i < strlen($pasword); $i++) { 
//             if (in_array($pasword[$i],$speciali)) {
//                 $p4 = true;
//                 break;
//             };
//         };
//         if ($p4 == false) {
//             echo "devi inserire almeno un carattere speciale"."\n";
//         };
//     }else{
//         echo "hai esaurito i tentativi";
//         break;
//     };
// } while ($p1 == false || $p2 == false || $p3 == false || $p4 == false);
// if ($counter <= 5) {
//     echo "pasword coretta!";
// }
// function media(...$numeri){
//     $prova = array_reduce($numeri, function($acc,$num){
//         $acc = $acc + $num;
//         return $acc;
//     });
//     return $prova;
// };
// echo media(10,10,20);

echo media(10,10);
function media(...$numeri){
    $prova = array_sum($numeri);
    return $prova;
};


