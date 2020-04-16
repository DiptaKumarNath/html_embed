<?php  include 'functions.php';  ?>
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
        div{
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class=".column column-60 column-offset-20">
            <h3>Our First Form</h3>
            <?php $fname = ''; $lname = ''; $email= ''; $checked = ''; 
            if (isset($_REQUEST['cb']) && $_REQUEST['cb']==1) {
                $checked = 'checked';
            }
            print_r($_REQUEST);
            ?>
            <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) { ?>
              <?php $fname =  htmlspecialchars($_REQUEST['fname']); }?> </br>
               <?php
               if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) { ?>
                <?php $lname= htmlspecialchars($_REQUEST['lname']); }?>
               <?php
               if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) { ?>
                <?php $email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL); }?>
            <form action="" method="POST">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>">
                <div>
                    <input type="checkbox" name="cb" id="cb" value="1" <?php echo $checked; ?>>
                    <label for="cb" class="label-inline">Some Checkbox</label>
                </div>

                <label class="label">Select Some Fruits</label>
                <input type="checkbox" name="fruits[]" id="cb" value="orange" >
                <label for="cb" class="label-inline">Some Checkbox</label>
                <input type="checkbox" name="fruits[]" id="cb" value="mango" >
                <label for="cb" class="label-inline">Some Checkbox</label>                
                <input type="checkbox" name="fruits[]" id="cb" value="banana" >
                <label for="cb" class="label-inline">Some Checkbox</label>                
                <input type="checkbox" name="fruits[]" id="cb" value="lemon" >
                <label for="cb" class="label-inline">Some Checkbox</label>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>