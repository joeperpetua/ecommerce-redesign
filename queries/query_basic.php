<?php 
require('php_config/connect.php');
$sql_con=
"SELECT p.id_product, p.id_dispositive, p.id_cat ,p.product_price, p.listed,
d.disp_brand, d.disp_model, d.disp_pic,
c.cat
FROM products p

LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
LEFT JOIN category c ON p.id_cat = c.id_cat
WHERE p.listed = 1
ORDER BY p.id_product ASC";



$query_basic=mysqli_query($connection,$sql_con);
 ?>