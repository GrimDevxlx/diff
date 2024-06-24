<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Old but gold</title>
</head>
<body>
      <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
          <option>None</option>
          <option>Add</option>
          <option>Subtract</option>
          <option>Multiply</option>
          <option>Divide</option>
        </select>
        <br><br>
        <button type="submit" name="submit" value="submit">Calculate</button>
      </form>
      <p>Answer is:</p>
      <?php 
        if(isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
              case "None":
              echo "NULL";
              break; //SELECT

                case "Add":
                echo $result1 + $result2;
                break; //ADDITION

                  case "Subtract":
                  echo $result1 - $result2;
                  break; //Minus

                    case "Multiply":
                    echo $result1 * $result2;
                    break; //Times

                      case "Divide":
                      echo $result1 / $result2;
                      break; //Division
            }
        }
?>
</body>
</html>