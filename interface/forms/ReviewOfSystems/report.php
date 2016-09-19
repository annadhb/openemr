<?php

include_once(dirname(__FILE__).'/../../globals.php');
include_once($GLOBALS["srcdir"]."/api.inc");
function ReviewOfSystems_report( $pid, $encounter, $cols, $id) {
$count = 0;
$data = formFetch("form_ReviewOfSystems", $id);
if ($data) {
print "<table><tr>";
foreach($data as $key => $value) {
if ($key == "id" || $key == "pid" || $key == "user" || $key == "groupname" || $key == "authorized" || $key == "activity" || $key == "date" || $value == "" || $value == "0000-00-00 00:00:00") {
	continue;
}

$key=ucwords(str_replace("__",":",$key));
$key=ucwords(str_replace("_"," ",$key));
    

if ($key == "Additional Notes") {
        print "</tr><tr><td><span class=bold>" . xl($key) . ": </span><span class=text>" . text($value) . "</span></td>";
}
else {
		$fieldLabel = explode(":",$key);
		$currkey =  $fieldLabel[0];
		if ($currkey != $lastkey){
		print"</td></tr><tr><td><span class=bold>".$fieldLabel[0].": </span><span class=text>".xl($fieldLabel[1]);
		}
		else {
		print "<span class=text>, ". xl($fieldLabel[1]) . ": </span>";
		}
 

        $lastkey = $currkey;
}
    
$count++;
if ($count == $cols) {
$count = 0;
print "</tr><tr>\n";
}
}
}
print "</tr></table>";
}
?> 
