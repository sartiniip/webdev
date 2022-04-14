<?php

    $nama = "Browny";
    $umur = 3;
    $tinggi = 3,5;


   // $kalimat = "Hallo, nama saya $nama umur saya adalah $umur dan tinggi badan saya adalah $tinggi";
    
   // echo $kalimat

   // percabangan if-else
   /*
   if($nama != "Browny")
    {
        echo "Benar itu Browny"
    } else {
        echo "Kamu siapa";
    }
    /*

    // percabangan switch

    switch($nama) {
        case "Browny"
        echo "Benar itu Browny"
        break;
        default
        echo "Kamu siapa?";
    }
    /*

    // Ternary Operator
    /*
    $kalimat = $nama == "Browny" ? "Benar itu Browny" ; "Kamu siapa?"

    echo $kalimat;
    */
    
    //perulangan for
    /*
    for(Si=0; Si < 10; Si++) {
        echo "Ini adalah perulangan ke-Si";
        echo "<br/>";
    }
    */

    // perulangan while
    /*
    Si = 0;
    white (Si <= 10) {
        echo "Ini adalah perulangan ke-Si";
        echo "<br/>";
        $1++;
    }
    */

    // perulangan do while
/*
    $i = 10;

    do {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/";
        $i--;
    } while($i > 0);
*/

//
//perulangan foreach + built-in function
/*
$nama = array ("Ega" =>25000000,
                "Nazif" => 100000000, 
                "Gus Pur" => 23000000000
                "Mulana" => 50000000, 
                "Abdul Wahid" => 450000000, 
                "Herlina" => 5000000000
                "Dea" => 4000000);

foreach ($nama as $sebutan =>$nilai) {
    echo "Nama saya adalah $sebutan nilai buruan saya adalah Rp".number_format($nilai, 2, ".",",");
    echo "<br/>;

}

?/>