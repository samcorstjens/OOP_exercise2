<?php
class Carr{
  private $data;
  private $surround = 'p';
//these are the functions needed to fit with the html elements
  public function __construct($data = array()){
    $this->data = $data;
  }

  private function surround($html){
return "<{$this->surround}>{$html}</{$this->surround}>";
  }

  private function getValue($index){
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }
//In here we assign the values of the html elements
  public function registration_number(){
    $number = $_POST['reg'];
    return $this->surround(
      '<p>Registration number (all attached) : <input type="text" name="reg" value="' . $number .'"></p>');
  }
  public function datecircul(){
    $cir = $_POST['date'];
    return $this->surround(
      '<p>Date of circulation(DD-MM-YYYY) : <input type="text" name="date" value="' . $cir .'"></p>');
  }
  public function mileage($checkmileage){
    $cir2 = $_POST['mileage'];
    if ($checkmileage=="Yes"){
      $cir22 = $cir2 + 100000;
    return $this->surround(
      '<p>Mileage : <input type="text" name="mileage" value="' . $cir22 .'"></p>');
  }else{
    return $this->surround(
      '<p>Mileage : <input type="text" name="mileage" value="' . $cir2 .'"></p>');
  }
}
  public function model(){
    $cir3 = $_POST['model'];
    return $this->surround(
      '<p>Model : <input type="text" name="model" value="' . $cir3 .'"></p>');
  }
  public function brand(){
    $cir4 = $_POST['brand'];
    return $this->surround(
      '<p>Brand: <input type="text" name="brand" value="' . $cir4 .'"></p>');
  }
  public function color(){
    $cir5 = $_POST['color'];
    return $this->surround(
      '<p>Color : <input type="text" name="color" value="' . $cir5 .'"></p>');
  }
  public function weight(){
    $cir6 = $_POST['weight'];
    return $this->surround(
      '<p>Weight (in ton) : <input type="text" name="weight" value="' . $cir6 .'"></p>');
  }
  public function submit(){
      return $this->surround('<button type="submit" name="sub" id="sub">Stuur door</button>');
    }
  public function reserved($rev){
    if($rev == "Audi"){
          return $this->surround('<p>This car is reserved</p>');

    }else{
          return $this->surround('<p>This car is free</p>');


    }
  }
  public function utility($ut){
    if($ut > 3.5){
          return $this->surround('<p>This car is a utility</p>');

    }else{
          return $this->surround('<p>This car is a commercial</p>');


    }
  }
  public function country($country){
    if($country=="BE"){
          return $this->surround('<p>This car is from Belgium</p>');
    }else if($country=="FR"){
          return $this->surround('<p>This car is from france</p>');
    }else if($country=="DE"){
      return $this->surround('<p>This car is from Germany</p>');
    }else{
      return $this->surround('<p>This car is from an unown country</p>');

    }
  }
  public function used($used){
    if($used >= 200000){
          return $this->surround('<p>This car is has been used a lot</p>');

    }else if($used>= 100000){
          return $this->surround('<p>This car is has been averagely used</p>');
    }else{
      return $this->surround('<p>This car has not been used a lot</p>');
    }
  }
  public function year($year){
    $yearcalc= 2019 - $year;
          return $this->surround('<p>This car is ' . $yearcalc . ' years old.</p>');
  }
  public function rouler(){
      return $this->surround('<button type="submit" name="km" id="sub">+ 100000 km</button>');
    }

  public function carpic($img){
    if($img == "Audi"){
    return $this->surround('<img src="Audi.jpg"></img>');
  } else if($img =="BMW"){
    return $this->surround('<img src="BMW.jpg"></img>');
  } else if($img =="Mercedis"){
    return $this->surround('<img src="Mercedis.jpg"></img>');
  }
}
}

  ?>
