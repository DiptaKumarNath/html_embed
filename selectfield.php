<?php  include 'form2func.php'; 
        $fruits = ['mango','Banana','Orange','lemon','apple'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>Document</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Select field</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laboriosam sapiente enim ducimus fuga numquam amet debitis quod totam suscipit, quae reiciendis rerum maxime necessitatibus nemo ab minus quaerat ipsam!</p>
            
            <p>
                <?php
                  //  $sfruits = $_POST['fruits']?? array();
                    $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY)??array();  
                  if (count($sfruits)) {
                        echo "you have selected: ".join(",",$sfruits);
                    }
                   /* $sfruits = $_POST['fruits'];
                    print_r($sfruits); 
                    if (isset($_POST['fruits']) && $_POST['fruits'] !='') {
                        printf("you have selected : %s", filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_STRING ));
                    }*/
                ?>

            </p>
            <form action="" method="post">
            <select style="height: 200px;" name="fruits[]" id="fruits" multiple>
                <option value="" disabled selected>Select some fruits</option>
                <?php displayOption($fruits,$sfruits) ?>
            </select>
            <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>