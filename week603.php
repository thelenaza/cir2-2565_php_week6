<?php
$employee = array(
   "Name"=> "Alex",
   "Email"=> "alex@gamil.com",
   "Age" => 18,
   "gender"=> "Male"
);
foreach($employee as $key => $element){
    print($key.":".$element);
    print("<br />");
}
?>