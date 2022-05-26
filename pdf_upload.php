<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <?php 
            $count=0;
            if ($_POST['age'] > 17 and  $_POST['age'] <=25)
                $count++;
            if ($_POST['course'] == "BSC" or $_POST['course'] == 'MSC' )
                $count++;
            if ($_POST['income'] < 2500000)
                $count++;
            if ($_POST['score'] > 3)
                $count++;

            if($count>=3) 
            {
                echo "CONGRATS!!! Basic Eligibilty Criteria has matched!!";

                echo "<a href='upload_file.php' <h2>CLICK HERE!!!</h2>> ";
                    
            }
            else
                echo "SORRY, you are not eligible for scholarship.";
        ?>
        
    
</body>
</html>