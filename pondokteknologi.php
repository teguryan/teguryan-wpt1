<?php
while(true){
    echo "=== Game Tebak Angka === \n";
    echo "Tebak sebuah angka antara 1-2! \n ";
$computer = rand(1,2);
echo "Masukan tebakanmu ";
$player = trim(fgets(STDIN));
if($player == $computer){
    echo "Menang. Angka Komputer adalah $computer \n";
    exit;
}else{
    echo "Kalah. Angka Komputer adalah $computer\n";
}
}
