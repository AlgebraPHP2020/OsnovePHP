<?php

$voce=array(0=>'limun','a'=>'naranca',1=>'banana','b'=>'jabuka');

// sort() - ključevi su poništeni, razvrstava od najmanjeg do najvećeg
sort($voce);

echo '<b>sort()</b>' .'<pre>';
print_r($voce);
echo '</pre>';

// rsort() - ključevi su poništeni, razvrstava od najvećeg do najmanjeg
rsort($voce);

echo '<b>rsort()</b>' .'<pre>';
print_r($voce);
echo '</pre>';

// asort() - svaki element zadržava svoju vrijednost ključa, razvrstava od najmanjeg do najvećeg
asort($voce);

echo '<b>asort()</b>' .'<pre>';
print_r($voce);
echo '</pre>';

// arsort() - svaki element zadržava svoju vrijednost ključa, razvrstava od najvećeg do najmanjeg
arsort($voce);

echo '<b>arsort()</b>' .'<pre>';
print_r($voce);
echo '</pre>';

// ksort() - svaki element zadržava svoju vrijednost ključa, razvrstava ključeve od najmanjeg do najvećeg
ksort($voce);

echo '<b>ksort()</b>' .'<pre>';
print_r($voce);
echo '</pre>';

// krsort() - svaki element zadržava svoju vrijednost ključa, razvrstava ključeve od najvećeg do najmanjeg
krsort($voce);

echo '<b>krsort()</b>' .'<pre>';
print_r($voce);
echo '</pre>';