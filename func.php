<?php
function dynamic_args() {
for($i= 0 ;$i< func_num_args();$i++) {
echo "Argument $i=
".func_get_arg($i)."<br/>";}
$args= func_get_args();
foreach($args as $key => $value) {
echo "Argument {$key}:{$value} <br/>";}
}
dynamic_args("a","b","c","d","e");

function sayHello()
{
echo "Hello<br />";
}
$function_holder = "sayHello";
$function_holder();
?>