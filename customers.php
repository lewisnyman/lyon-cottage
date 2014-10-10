<?php
if (!$array) {
$array = array();
$array[1]['customer'] = "Gars Pryor";
$array[1]['quote'] = "Very enjoyable and friendly";
$array[2]['customer'] = "Anita from Rome";
$array[2]['quote'] = "Many thanks for a wonderful warm welcome and comfortable stay";
$array[3]['customer'] = "Anna from Warwick";
$array[3]['quote'] = "Loved the baby chickens, thank you for making our stay a wonderful experience";
$array[4]['customer'] = "Dan and family";
$array[4]['quote'] = "Many thanks for a wonderful stay and your generosity for driving us around";
$array[5]['customer'] = "John and Susan";
$array[5]['quote'] = "Thank you so much for such a friendly and relaxing stay on our South Downs Way";
$array[6]['customer'] = "Germany";
$array[6]['quote'] = "Thank you for the lovely stay with home grown eggs and lots of birds outside";
}
?>

<?php $key = rand(1, 6); ?>

<q><?php echo $array[$key]['quote'] ?></q> <cite>- <?php echo $array[$key]['customer'] ?></q> </cite>
