<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>sign up</title>
</head>
<body>
    <fieldset>
        <legend>sign up form</legend>
        <form action="" method="POST">
            {{ $moreError }}
            <?php if (!empty($moreError) ) echo '<br> <br>' ?>
            <input type="text" name="username" id="username" placeholder="your username ..."> {{ $userNameError }}
            <br> <br>
            <input type="password" name="password" id="password" placeholder="your password ..."> {{ $passwordError }} 
            <br> <br>
            <input type="submit" value="submit">
        </form>
    </fieldset>
</body>
</html>