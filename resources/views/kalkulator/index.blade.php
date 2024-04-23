<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: red;
            color: lightblue;
            padding: 10px;
            height: 5px;
            font-family: "ALGERIAN";
            font-size: 120%;
        }
        .calculator-buttons input{
            background-color: grey;
            padding: 5px;
            height: 50px;
            width: 100px;
            margin: 5px;
            font-family: "ALGERIAN";
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.8);
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <center><h1>KALKULATOR</h1>
    <form action="{{route('proses.store')}}" method="post">
        @csrf
        <label for="a">Masukkan Angka Pertama</label><br>
        <input type="number" name="a" id="a"><br><br>
        <label for="b">Masukkan Angka Kedua</label><br>
        <input type="number" name="b" id="b"><br><br>

        <div class="calculator-buttons input">
            <input type="submit" value="Kali" name="op">
            <input type="submit" value="Bagi" name="op">
            <input type="submit" value="Tambah" name="op">
            <input type="submit" value="Kurang" name="op">
            <input type="submit" value="Reset" name="op">
        </div>
        </form></center>
    </div>
</body>
</html>