<?php
require_once 'payment.php';
require_once 'ABA.php';
require_once 'Wing.php';
require_once 'PiPay.php';



$data = array(
    $item1 = new ABA_pay("Item1", 5, 1,"ABA"),
    $item2 = new Wing_pay("Item2", 3, 2,"Wing"),
    $item3 = new ABA_pay("Item3", 4, 1,"ABA"),
    $item4 = new ABA_pay("Item4", 5, 1,"ABA"),
    $item5 = new PiPay_pay("Item5", 6, 1,"PiPay"),
    $item6 = new ABA_pay("Item6", 10, 1, "ABA"),
    $item7 = new Wing_pay("Item7", 15, 1,"Wing"),
    $item8 = new Wing_pay("Item8", 2, 1,"Wing")
);


?>

<table border="1" width="100%">
<tr>
<th>Item</th>
<th>Price</th>
<th>quantity</th>
<th>Method</th>
<th>Total</th>
</tr>

<?php
sort($data);$i=0;
foreach($data as $value){
    ?>
    <tr>
    <td><?php echo $value->product ?></td>
    <td><?php echo$value->price; ?></td>
    <td><?php echo $value->quantity; ?></td>
    <td><?php echo $value->paymentName; ?></td>
    <td><?php echo $value->TotalPrice(); ?></td>
    </tr>

<?php
}
?>

</table>