<?php
class Form
{
    private $action;
    private $method;
    private $campi = [];
 

    function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    function creaCampi($name,$type){
        $this->campi[$name]=[
            "name"=>$name,
            "type"=>$type
        ];
    }

    function generaform(){
        echo "<form action='$this->action' method='$this->method'>";
        foreach($this->campi as $campo){
            echo "<label for='{$campo['name']}'>{$campo['name']}</label><br>";
            echo "<input type='{$campo['type']}' id='{$campo['name']}' name='{$campo['name']}'><br>";

        }
       if($this->campi){
        echo "<input type='submit' value='invia' class=mt-3>";
       }
        echo "</form>";
    }
}

$form1 = new Form("index.php", "post");
$form2 = new Form("index.php", "post");
$form1->creaCampi('nome','text');
$form1->creaCampi('cognome','text');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class='container'>
    <h1>Form</h1>
        <?php
        $form1->generaform();
        $form2->generaform();

        ?>
    </div>

</body>

</html>