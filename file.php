<?php
//$photo = '';
$alloweedTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg',

);

 if(isset($_FILES['photo'])){
     $totalimage = count($_FILES['photo']['type']);
     for ($i=0; $i < $totalimage; $i++) { 
     if(in_array($_FILES['photo']['type'][$i],$alloweedTypes) !== false  && $_FILES['photo']['size'][$i]< 5*1024*1024){
    move_uploaded_file($_FILES['photo']['tmp_name'][$i],"files/image.png".$_FILES['photo']['name'][$i]);
}
}
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>File handeling</h2>
            <pre>
                <p>
                    <?php  print_r($_POST);  ?>
                    <?php print_r($_FILES); ?>
                </p>
            </pre>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="fname">
                <label for="fname">Last Name:</label>
                <input type="text" name="lname" id="fname">
                <label for="photo">Photo</label>
                <input type="file" name="photo[]" id="photo"></br>
                <input type="file" name="photo[]" id="photo"></br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>    
</body>
</html>