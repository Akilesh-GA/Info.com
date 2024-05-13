<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feedback for Info.com</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        form{
            text-align: center;

        }
        h1{
            text-align: center;
            color: aqua;
        }
        .btn{
            color: black;
            height: 40px;
            width: 150px;
            border-radius: 20px;
            border: none;
            background-color: aqua;
            box-shadow: 0 0 20px aqua;
        }
        .btn:hover{
            box-shadow: 0 0 25px aqua,0 0 30px aqua;
        }
        marquee{
            color:aqua;
            font-size:30px;
        }
    </style>
</head>
<body>
    <marquee>Kindly Provide Your Feedback to Info.com</marquee>
    <br>
    <h1>Feedback Form</h1>
    <form method="post" action="">
        <p>What do you think about info.com ?</p>
        <br>
        <input type="radio" name="quality" value="bad"> Bad
        <input type="radio" name="quality" value="okay"> Okay
        <input type="radio" name="quality" value="good"> Good
        <input type="radio" name="quality" value="excellent"> Excellent
        <br>
        <p>Do you have any suggestions for info.com </p>
        <br>
        <textarea name="suggestion" rows="4" cols="50"></textarea>
        <br>
        <p>Provide some feedback for info.com </p>
        <br>
        <textarea name="feedback" rows="4" cols="50"></textarea>
        <br>
        <br>
        Rate us in Range
        <br>
        <br>
        <input type="range" name="range">
        <br>
        <br>
        <input type="submit" value="Submit Feedback">
        <br>
        <br>
        <br>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quality = $_POST["quality"];
    $suggestion = $_POST["suggestion"];
    $feedback = $_POST["feedback"];

    $file = fopen("feedback.txt", "a");

    fwrite($file, "Quality: $quality\n");
    fwrite($file, "Suggestion: $suggestion\n");
    fwrite($file, "Feedback: $feedback\n\n\n");
    fclose($file);

    echo "Thank you for your feedback ";
    echo "from team Info.com";
}
?>
</body>
</html>
