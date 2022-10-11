<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Characters | INJUSTICE</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <div class="content">
        <h1>Injustice Characters</h1>
            <br>
                <p>In this page u will be able to register ur powerfull character</p><br><hr><br>
                    <form action="tampil.php" method="post">
                        <table>
                            <tr>
                                <td>Nama Character</td>
                                <td>:</td>
                                <td><input type="text" name="namachar"></td>
                            </tr>
                            <tr>
                                <td>Damage</td>
                                <td>:</td>
                                <td><input type="number" name="damage"></td>
                            </tr>
                            <tr>
                                <td>Health</td>
                                <td>:</td>
                                <td><input type="number" name="health"></td>
                            </tr>
                            <tr>
                                <td>Character Rank</td>
                                <td>:</td>
                                <td>
                                    <input type="radio" name="rank" value="nthmetal"> Nth Metal 
                                    <input type="radio" name="rank" value="gold"> Gold
                                    <input type="radio" name="rank" value="silver"> Silver
                                    <input type="radio" name="rank" value="bronze"> Bronze
                                </td>
                            </tr>
                            <tr>
                                <td>Promotion</td>
                                <td>:</td>
                                <td>
                                    <select name="promotion">
                                        <option value="none">none</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                        <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td><input type="number" name="price"></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td><textarea name="deskripsi" id="" cols="20" rows="3"></textarea></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button id="myBtn" type="submit" name="submit">Kirim</button>
                                    <button id="myBtn" type="reset" name="reset">Reset</button>
                                </td>    
                            </tr>
                        </table>
                    </form>
                    
    </div>
    <div class="form"></div>
</body>
</html>