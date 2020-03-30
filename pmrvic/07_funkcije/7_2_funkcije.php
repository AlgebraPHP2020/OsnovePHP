<?php

$timestamper=time();
echo $timestamper;
$t=getdate($timestamper);
print_r(getdate($timestamper));

printf("<hr>Dobar dan, danas je %s, %d.%d.%d., ovo je %d dan od pocetka godine <br> Trenutno je %d:%01d"
        ,$t['weekday']
        ,$t['mday']
        ,$t['mon']
        ,$t['year']
        ,$t['yday']
        ,$t['hours']
        ,$t['minutes']
        );


// primjer 2
echo '<br>danas je mjesec:'.date('F').' a datum je '.date('d.m.Y');

/**
 * 
 * @return string
 */
function hrvatski_naziv_za_dan_u_tjednu(): string{
    switch(date('w')){
        case '0':$day='nedjelja'; break;
        case '1':$day='ponedjeljak'; break;        
        case '2':$day='utorak'; break;    
        case '3':$day='srijeda'; break;    
        case '4':$day='cetvrtak'; break; 
        case '5':$day='petak'; break;    
        default: $day='subota';        
    }
    return $day;
}

echo "<br>Danas je ".hrvatski_naziv_za_dan_u_tjednu().".";

// primjer funkcije za html tablicu