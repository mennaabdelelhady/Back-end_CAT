<?php
class Calculator {
  private $num1;
  private $num2;
  
  public function __construct($num1, $num2) {
    $this->num1 = $num1;
    $this->num2 = $num2;
  }
  
  public function add() {
    return $this->num1 + $this->num2;
  }
  
  public function subtract() {
    return $this->num1 - $this->num2;
  }
  
  public function multiply() {
    return $this->num1 * $this->num2;
  }
}

if(isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];
  
  $calculator = new Calculator($num1, $num2);
  
  switch($operator) {
    case 'add':
      $result = $calculator->add();
      break;
    case 'subtract':
      $result = $calculator->subtract();
      break;
    case 'multiply':
      $result = $calculator->multiply();
      break;
    default:
      $result = "Invalid operator";
      break;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
</head>
<body>
  <h1>Calculator</h1>
  <form method="post">
    <label for="num1">Enter first number:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Enter second number:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <label for="operator">Choose operation:</label>
    <select name="operator" id="operator">
      <option value="add">Add</option>
      <option value="subtract">Subtract</option>
      <option value="multiply">Multiply</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Calculate">
  </form>
  <?php
  if(isset($_POST['submit'])) {
    echo "Result: ".$result;
  }
  ?>
</body>
</html>