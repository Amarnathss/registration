<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processing and displaying submitted data
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $bio = htmlspecialchars($_POST['bio']);

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "    <title>Submitted Information</title>";
    echo "    <style>";
    echo "        body {";
    echo "            font-family: Arial, sans-serif;";
    echo "            background-color: #f4f4f4;";
    echo "            color: #333;";
    echo "            padding: 20px;";
    echo "        }";
    echo "        h1 { color: #0066cc; text-align: center; }";
    echo "        p { font-size: 18px; margin: 10px 0; }";
    echo "        .container {";
    echo "            background-color: #fff;";
    echo "            padding: 20px;";
    echo "            border-radius: 10px;";
    echo "            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);";
    echo "            width: 50%;";
    echo "            margin: 20px auto;";
    echo "        }";
    echo "    </style>";
    echo "</head>";
    echo "<body>";
    echo "    <div class='container'>";
    echo "        <h1>Submitted Information</h1>";
    echo "        <p><strong>First Name:</strong> $fname</p>";
    echo "        <p><strong>Last Name:</strong> $lname</p>";
    echo "        <p><strong>Email:</strong> $email</p>";
    echo "        <p><strong>Date of Birth:</strong> $dob</p>";
    echo "        <p><strong>Gender:</strong> $gender</p>";
    echo "        <p><strong>Bio:</strong> $bio</p>";
    echo "    </div>";
    echo "</body>";
    echo "</html>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            color: #333;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #0066cc;
        }
        form {
            width: 50%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #0066cb;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }
        .submit-btn:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="post" target="_blank">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required> Male
        <input type="radio" id="female" name="gender" value="Female"> Female

        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio" rows="4" required></textarea>

        <button type="submit" class="submit-btn">Submit</button>
    </form>
</body>
</html>
