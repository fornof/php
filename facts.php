<!--	Get Facts PHP Script -->
<?php
$f_name = ("facts.txt");
$fp = fopen($f_name,"r");
$f_content= fread($fp, filesize($f_name));
$facts = explode(":::",$f_content);
fclose($fp);

// RANDOMIZE
shuffle($facts);

// CONFIGURE GENERATOR
$i=0;
$max=1;

// GENERATOR
while(list(, $code) = each($facts)) {
if ($i>=$max) {
break;
}
// FORTUNE PROCCESSOR
echo $code;
// END OF PROCCESSOR
$i++;
}
?>
<!--	END GetFacts PHP Script -->
