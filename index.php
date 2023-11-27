<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translator</title>
    <meta name="description" content="SuccessFully Made the translator using OpenAi API Key">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>English to French Translator</h1>
    <form action="index.php" method="post">
        <input id="text-box"  type="text" name="input" id="input" required placeholder="Enter the English Text">
        <input id="btn" type="submit" name="submit" value="Translate">
    </form>
    <?php
    // Set the path to your Python script
    $python_script_path = 'script.py';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $user_input = $_POST['input'];
        $final_input = escapeshellarg($user_input);

   // Execute the Python script and get the response
   $generated_text = shell_exec("python $python_script_path $final_input");

   // Display the generated text in a textarea
   echo "<textarea rows='4' cols='50'>$generated_text</textarea>";
    }
    else{
        echo "Please Input Text";
    }
?>
</body>
</html>

