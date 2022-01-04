<?php
require_once('./TabularArrayObject.php');
$shirtProps = new TabularArrayObject([
    "Product Name" => "Shirt", 
    "Size" => "Small", 
    "Color" => "White",
]);
?>
<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
        }
        table {
            width: 300px;
            border-collapse: collapse;
        }
        td,th {
            padding: 5px;
        }
    </style>
</head>
<body>
    <? echo $shirtProps->displayAsTable(); ?>
</body>

</html>