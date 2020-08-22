<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add days excluding weekends | Using recursion method — PHP</title>
</head>
<body>
    <?php
      
      function getExpiryDate($_startDate, $noOfDaysToAdd, $count){
        if($count < $noOfDaysToAdd){
            $_startDate = date('Y-m-d', strtotime($_startDate. ' + 1 days'));
            $dayOfWeek = date("N", strtotime($_startDate));
            
            if($dayOfWeek != 6 && $dayOfWeek != 7){
              $count++;
            }
            return getExpiryDate($_startDate, $noOfDaysToAdd, $count);
        }
        return $_startDate;
      }
      
      $startDate = date('Y-m-d'); $noOfDaysToAdd = 11; $count = 0;
      $expiryDate = getExpiryDate($startDate, $noOfDaysToAdd, $count);
    ?>

    <p><b>Current Date:</b> <?php echo $startDate; ?> </p>
    <p><b>No fo days added to current d ate:</b> <?php echo $noOfDaysToAdd; ?></p>
    <p><b>Future Date(Excluding weekedns):</b> <?php echo $expiryDate; ?></p>
</body>
</html>