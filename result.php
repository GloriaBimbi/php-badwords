<?php
$user_paragraph = $_GET['paragraph'];
$user_bad_word = $_GET['bad-word'];

$censured_paragraph = str_replace($user_bad_word, "***", $user_paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <!-- bootstrap -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
</head>
<body>
    <div class="container mt-5">
        <p>
            <?php echo $user_paragraph ?>
        </p>
        <span>
            <?php $paragraph_length = strlen($user_paragraph); 
            echo $paragraph_length;
            ?>
        </span>
    </div>
    <div class="container mt-5">
        <p>
            <?php echo $censured_paragraph ?>
        </p>
        <span>
            <?php $paragraph_length = strlen($censured_paragraph); 
            echo $paragraph_length;
            ?>
        </span>
    </div>
</body>
</html>