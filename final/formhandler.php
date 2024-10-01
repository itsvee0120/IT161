<?php

ob_start();

$name = '';
$email = '';
$gender = '';
$product = '';
$gender = '';
$regions = '';
$comments = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['name'],
$_POST['email'],
$_POST['gender'],
$_POST['product'],
$_POST['regions'],
$_POST['comments'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$product = $_POST['product'];
$regions = $_POST['regions'];
$comments = $_POST['comments'];

function my_product($product) {
$my_return = '';
if(!empty($_POST['product'])) {
$my_return = implode(', ', $_POST['product']);
}
return $my_return;
}


$to = 'Violet.Nguyen@seattlecolleges.edu';
$subject = 'Test Email on ' .date('m/d/y, h i A');
$body = '
Name : '.$name.'  '.PHP_EOL.'
Email : '.$email.'  '.PHP_EOL.'
Gender : '.$gender.'  '.PHP_EOL.'
Region : '.$regions.'  '.PHP_EOL.'
Product : '.my_product($product).'  '.PHP_EOL.'   
Comments : '.$comments.'  '.PHP_EOL.'
';

$headers = array(
'From' => 'noreply@mystudentswa.com'  
);

if(!empty($name && $email && $gender && $product && $regions && $comments)) {

mail($to, $subject, $body, $headers);
header('Location:thx.html');

}


}



}