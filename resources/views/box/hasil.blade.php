<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bjir lah</title>
    <style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto; 
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: red;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            font-weight:bold;
            
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 20px;
            background-color: red;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        input[type="number"]{
            border: none;
            text-align;
        }
    </style>
</head>
<body>
<h1><center>KALKULATOR RUMIT</center></h1>
    <center>
    <form action=" {{ route('box.store') }} " method="post">
        @csrf
    <table border=1 width=300>
        <tr>
            <td colspan=2><input type="number" name="a" id=""></td>
            
            <td colspan=2 rowspan=2><input type="reset" value="reset" name="op"></td>
            
        </tr>
        <tr>
            <td colspan=2><input type="number" name="b" id=""></td>
            
        </tr>
        <tr>
            <td colspan=4>Hasil : {{ $hasil }}</td>
            
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"></td>
        </tr>
        <tr>
            <td colspan=4>
                Nama :Rahmat fadil
                <br>
                Kelas: XII PPLG 2
            </td>
            
        </tr>
      
</center>
<br>
</body>
</html>