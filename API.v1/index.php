<?PHP
// load MAIN.PHP
include $_SERVER['DOCUMENT_ROOT']."/specs/MAIN.PHP";
echo '<br><br><br>';

// load one player informations
$profile[] = specsgg('%PLAYER%', '%GAME%');

// for example
// $profile[] = specsgg('Flekay', 'pubg');

// display all player informations for debuging
echo '<pre>',print_r($profile,1),'</pre>';

// display specific player informations (players DPI in this example. check /specs/games/%GAME%_data.txt for full list)
// echo $profile[0]['settings']['mouse'][0];