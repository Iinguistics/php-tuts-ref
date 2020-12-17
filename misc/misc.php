<?php 

// to connect SQL db in laravel & using xampp make sure this extension is in your php.ini config file extension=php_pdo_mysql.dll

//this would be const , cant overide var
define('NAME', 'Mario');

// let name =  var can be overwritten
$name = 'James';
$email = 'jmsgoytia@gmail.com';
$stringOne = 'My email is ';

$city = 'El Dorado Hills';
$state = 'Ca';

// Double quotes allows you to put variables directly in them, kinda like strings literals without the ${}
$stringTwo = "Place of residence: $city, $state";


//echo strlen($name);
//echo str_replace('J', 'f', $name);

$pros = array("Envoy", "Crimsix", "Neptune");
$ams = ["parasite", "pentagram", "karma"];


// for($i=0; $i< count($ams); $i++){
//     echo $ams[$i] . " " ;
// }

function players($arr){
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i] . "<br />";
    }
}

//players($pros);

//associative arrays..key & values..basically there objects
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'Tailwind', 'price' => 149.99],
    ['name' => 'bootstrap', 'price' => 30]
];

foreach($products as $item){
    echo $item['name'] . ' - ' . '$' . $item['price'] . " " . "<br />";
};




?>

<!DOCTYPE html>
<html>
<head>
<title>PHP tutorials</title>
<body>
 <h1>User profile page</h1>
 <h4>User name: <?php echo $name; ?></h4>
 <h4>User name: <?php echo NAME; ?></h4>
 <p><?php echo $stringOne . $email ?></p>
 <p><?php echo $stringTwo ?></p>
 
 <?php foreach($products as $item){ ?>
  <li><?php echo $item['name'] . ' - ' . '$' . $item['price'] . " " ; ?> </li>  
    
<?php } ?>
</body>
</head>
</html>