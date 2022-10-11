<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="index2.css">
</head>
<body>
        <div class="content">
                <h1>Injustice Characters</h1>
                <br><hr><br>
                <p>Ur Character stats : </p><br><br>
                <table>
                        <tr>
                                <td>Nama Character</td>
                                <td>:</td>
                                <td>
                                        <?php 
                                        $namachar = $_POST['namachar'];
                                        echo $namachar;
                                        ?>
                                </td>
                        </tr>
                        <tr>
                                <td>Damage</td>
                                <td>:</td>
                                <td>
                                <?php 
                                        $damage = $_POST['damage'];
                                        echo $damage;
                                        ?>
                                </td>
                        </tr>
                        <tr>
                                <td>Health</td>
                                <td>:</td>
                                <td>
                                <?php 
                                        $health = $_POST['health'];
                                        echo $health;
                                        ?>
                                </td>
                        </tr>
                        <tr>
                                <td>Character Rank</td>
                                <td>:</td>
                                <td>
                                <?php 
                                        $rank = $_POST['rank'];
                                        echo $rank;
                                        ?>
                                </td>
                        </tr>
                        <tr>
                                <td>Promotion</td>
                                <td>:</td>
                                <td>
                                <?php 
                                        $promotion = $_POST['promotion'];
                                        echo $promotion;
                                        ?>
                                </td>
                        </tr>
                        <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>
                                <?php 
                                        $price = $_POST['price'];
                                        echo $price;
                                        ?>
                                </td>
                        </tr>
                        <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>
                                <?php 
                                        $deskripsi = $_POST['deskripsi'];
                                        echo $deskripsi;
                                        ?>
                                </td>
                        </tr>
                </table>
        </div>
</body>
</html>

<!-- // menampilkan hasil inputan dari index2.php
/*<?php
        $namachar = $_POST['namachar'];
        $damage = $_POST['damage'];
        $health = $_POST['health'];
        $rank = $_POST['rank'];
        $promotion = $_POST['promotion'];
        $price = $_POST['price'];
        $deskripsi = $_POST['deskripsi'];

        echo "Nama Character : ". $namachar;
        echo "<br/>";
        echo "Damage         : ". $damage;
        echo "<br/>";
        echo "Health         : ". $health;
        echo "<br/>";
        echo "Rank           : ". $rank;
        echo "<br/>";
        echo "Promotion      : ". $promotion;
        echo "<br/>";
        echo "Price          : ". $price;
        echo "<br/>";
        echo "Deskripsi      : ". $deskripsi;
        echo "<br/>";
?>  -->