<?php

$items = ["Mo:Mo", "Chowmein", "Pizza", "Burger"];
$price = [120, 100, 120, 80];
$rQuantity = [30, 20, 50, 10];
$amount = [0, 0, 0, 0];

if(isset($_POST['submit'])){
    $j = 0;
    foreach($_POST as $ind => $ind_value){
        if($j == 0){
            $orderItmInd = $ind;
        }
        $j++;
    }
    $orderItmQty = $_POST[$orderItmInd];
    echo $price[$orderItmInd] * $orderItmQty;
    $rQuantity[$orderItmInd] -= $orderItmQty; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
</head>
<body>
    <table border="">
        
        <tr>
            <th>S.No.</th>
            <th>Items</th>
            <th>Price(in Rs.)</th>
            <th>Remaining Quantity</th>
            <th>Action</th>
        </tr>
        
        <?php
            for($i = 0; $i < count($items); ++ $i){
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $items[$i];?></td>
            <td><?php echo $price[$i];?></td>
            <td><?php echo $rQuantity[$i];?></td>
            <td>
                <form action="restaurant.php" method="post">
                    <input type="text" size="20" placeholder="Enter the amount" name="<?php echo $i;?>"> 
                    <input type="submit" name="submit">
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>