<?php 


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


<?php 
//inheritance, One class inherits properties & methods from another

class User{
    public $username;
    private $email;

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
        return "$this->email added a new friend";
    }

    //getters
    public function getEmail(){
        return $this->email;
    }
}

//child class AdminUser inherits from parent class User
// if not specified in child class it will automatically get from parent class
class AdminUser extends User{
   public $level;

   public function __construct($username, $email, $level){
       $this->level = $level;

       // get the construct method from the parent:
       parent::__construct($username, $email);
   }

}


$userOne = new User('James', 'jg@gmail.com');
$userTwo = new AdminUser('James', 'jg@gmail.com');

echo $userTwo->getEmail();
echo $userTwo->level;
?>