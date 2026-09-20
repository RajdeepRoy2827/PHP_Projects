<?php
$friends=array(
    "rahul"=>9876543218,
    "ram"=>8765543789,
    "sam"=>9828889654,
    "raj"=>7772986542,
    "ravi"=>8937629868
);
foreach($friends as $name=>$phone){
    if($phone %2 !==0){
        echo "name:".$name."<br>";
        echo "phone:".$phone."<br><br>";
    }
}
?>
