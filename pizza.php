<!DOCTYPE html>
<html>

<head>
    <title>피자 재료입력</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 60px;
            margin-bottom: 60px;
            color: lavenderblush;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
            color: wheat;
            margin-bottom: 10px;
        }

        input[type=text],
        input[type=number] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid yellowgreen;
            font-size: 16px;
            width: 200px;
        }

        input[type=submit] {
            background-color: darkorange;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 25px;
        }
    </style>
</head>

<body style="background-image: url('pizza.jpg');">
    <h1>피자에 들어갈 재료와 개수를 입력해주세요!</h1>
    <form action="pie.php" method="post">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <center> <label for="material">재료이름 <?= $i ?></label>
                <input type="text" id="material" name="material_name<?= $i ?>">
            </center>
            <center> <label for="amount">수량</label>
                <input type="number" id="amount" name="amount_count<?= $i ?>">
            </center>
            <br>
        <?php endfor; ?>
        <center><input type="submit" value="요리해주세요!!!"></center>
    </form>
</body>

</html>