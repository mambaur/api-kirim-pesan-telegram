<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Api Telegram</title>

    <style>
        .form-input {
            display: block;
            margin-top : 5px;
        }
        .form{
            width :180px;
            margin : 200px auto;
            padding: 20px;
            background-color: lightgrey;
            border-radius: 20px;
        }
        .form button{
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="form">
    <form action="telegram.php" method="post">
        <span class="form-input">Chat id :</span>
        <input class="form-input" type="text" name="chatid">
        <span class="form-input">Pesan :</span>
        <textarea class="form-input" cols="22" rows="3" name="pesan"></textarea>
        <button type="submit">Kirim</button>
    </form>
</div>
    
</body>
</html>