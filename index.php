<?php
require 'form.php';

//create a new form

$form = new Carr($_POST);
?>

<form action="#" method="post">
  <?php
  if(isset($_POST["km"])){
  $ant="Yes";
}else{
  $ant = "No";
}
  // these are written in the form
echo $form->registration_number();
echo $form->datecircul();
echo $form->mileage($ant);
echo $form->model();
echo $form->brand();
echo $form->color();
echo $form->weight();
echo $form->submit();
echo $form->rouler();


if(isset($_POST["sub"]) || isset($_POST["km"])){
  echo $form->reserved($_POST['model']);
  echo $form->utility($_POST['weight']);
  echo $form->country(mb_substr($_POST['reg'],0,2));
  echo $form->used($_POST['mileage']);
  echo $form->year(mb_substr($_POST['date'],6,9));
  echo $form->carpic($_POST['model']);
  $ant="No";
}

  ?>

</form>
