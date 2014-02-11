<?php
error_reporting(0);
if (isset($_POST['submit1'])) {
    $decimal = $_REQUEST['decimal'];
    if (isset($_POST['pilih'])) {
        $pilih = $_REQUEST['pilih'];
    } else {
        $pilih = '';
    }
} else {
    $decimal = '';
    $pilih = '';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            body{
                background: repeat;
            }
        </style>
    </head>
    <body id="form">
    <center>
        <center><font face="Arial" color="Black" size="5">
            <b><h1 class="tabel1">Konversi Bilangan</h1></b>
            </font>
            <center>
                <tr>
                    <td align ="center">
                        <!-- Proses Pilih Gender dari file Validator.php -->
                <center>
                    <font face="arial" color="black">
<?php
if (isset($_POST['submit'])) {
    $nama = $_REQUEST['nama'];
    if (isset($_POST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = '';
    }
}
if (isset($_POST['submit'])) {
    if ($nama == '' || $gender == '') {// tanda || : OR
        echo"<script>
                 alert('data kurang lengkap !');
                 document.location.href='Validator.php?name=$nama';
                 </script>"; //menggunakan javascript
    } else {
        //cek jenis kelamin
        //yang ini pakek petik dua            
        //yang ini pakek petik satu
        //if($gender=='L'){
        //    echo '<h2>Selamat Datang Bro, '.$nama.' !!</h2>';
        //}
        //else{
        //    echo '<h2>Selamat Datang Sis, '.$nama.' !!</h2>';
        //}
        //antar petik satu dan dua, model penulisan/script beda, tapi hasilnya sama. Petik dua, gak perlu membedakan antara String dengan Variabel.
    }
}
if ($_POST['gender'] == 'L') {
    echo"<br><h1 class='bayangan'>
Selamat Datang Saudara, " . $_POST['nama'] . " :D</h1>";
} else {
    echo"<br><h1 class='bayangan'>
Selamat Datang Saudari, " . $_POST['nama'] . " :D</h1>";
}
?>
                    </font>
                </center>
            </center>
            </table>
            <!-- End proses pilih Gender -->
            <p>
            <center>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>
                      "method="POST" name="form1" id="tabel1">
                    <center>
                        <input type="hidden" name="nama" value="<?php echo $_POST['nama'] ?>"/>
                        <input type="hidden" name="gender" value="<?php echo $_POST['gender'] ?>"/>
                        <font face="comic sans ms"><h2>
                            Tulis Nilai Bilangan Desimalnya : </h2>
                        <input placeholder="bilangan desimal" required="required" type="text" name="decimal" size ="20" value="<?php echo $decimal ?>"/><br>
                        <h3>
                            Pilih Salah Satu Konversi : <br>
                            <input type="radio" name="pilih" value="B"
<?php ($pilih == "B") ? print 'checked=""'  : print ''; ?>/>
                            Biner<br>
                            <input type="radio" name="pilih" value="H"
<?php ($pilih == "H") ? print 'checked=""'  : print ''; ?>/>
                            Hexa<br>
                            <input type="radio" name="pilih" value="O"
<?php ($pilih == "O") ? print 'checked=""'  : print ''; ?>/>
                            Oktal<br>
                        </h3>
                    </center>
                    <center>
                        <input type="submit" name="submit1" value="konversikan" id="submit"></center>
                    <input type="submit" name="RESET" value="reset" id="reset">
                    </font>
                </form>
                <form action="Validator.php" method="post" name="form1">
                    <input type="submit" name="HOME" value="home">   
                </form>
                <center>

                    <font face="times new roman" color="black" >
<?php
if (isset($_POST['submit1'])) {//isset : penekanan form
    $decimal = $_REQUEST['decimal'];
    if (isset($_POST['pilih'])) {
        $pilih = $_REQUEST['pilih'];
    } else {
        $pilih = '';
    }
} else {
    $decimal = '';
    $pilih = '';
}
if (isset($_POST['submit1'])) {
    if ($decimal == '' || $pilih == '') {
        echo"<script>alert('Tolong pilih Konversi terlebih dahulu !')</script>"; //menggunakan javascript
    } else {
        if ($pilih == 'B') {
            //Konversi ke Biner
            if (isset($_POST['decimal'])) {
                $decimal = $_POST['decimal'];
                $original = $_POST['decimal'];
                $binary = '';
                if (preg_match('/[^0-9]/', $decimal)) {
                    die("Maaf. Inputan salah!!!");
                } else {
                    while ($decimal > 0) {
                        if ($decimal % 2 == 0) {
                            $binary .= 0;
                            $decimal /= 2;
                        } else {
                            $binary .= 1;
                            $decimal = ($decimal / 2) - 0.5;
                        }
                    }
                    $result = strrev($binary);
                    echo "<br><h2>
Bilangan decimal  $original jika dikonversikan dalam Biner hasilnya adalah $result.</h2>";
                }
            } else {
                
            }
        } else {
            if ($pilih == 'H') {
                //Konversi ke Hexa
                if (isset($_POST['decimal'])) {
                    $des = $_POST['decimal'];
                    $original = $_POST['decimal'];
                    $hex = '';
                    if (preg_match('/[^0-9]/', $decimal)) {
                        die("Maaf. Inputan salah!!!");
                    }
                    while ($des > 0) {
                        $hasil = $des % 16;
                        switch ($hasil) {
                            case 0 : $hex.="0";
                                break;
                            case 1 : $hex.="1";
                                break;
                            case 2 : $hex.="2";
                                break;
                            case 3 : $hex.="3";
                                break;
                            case 4 : $hex.="4";
                                break;
                            case 5 : $hex.="5";
                                break;
                            case 6 : $hex.="6";
                                break;
                            case 7 : $hex.="7";
                                break;
                            case 8 : $hex.="8";
                                break;
                            case 9 : $hex.="9";
                                break;
                            case 10: $hex.="A";
                                break;
                            case 11: $hex.="B";
                                break;
                            case 12: $hex.="C";
                                break;
                            case 13: $hex.="D";
                                break;
                            case 14: $hex.="E";
                                break;
                            case 15: $hex.="F";
                            default:break;
                        }
                        if ($des / 16 == 0) {
                            $sisa = ($des % 16);
                            $des = $sisa;
                        } else {
                            $sisa = ($des / 16);
                            $des = $sisa % 16;
                        }
                    }
                    $result = strrev($hex);
                    echo "<br><h2>
Bilangan decimal  $original jika dikonversikan dalam Hexa hasilnya adalah $result.</h2>";
                }
            } else {
                //Konversi ke Oktal
                if (isset($_POST['decimal'])) {
                    $des = $_POST['decimal'];
                    $original = $_POST['decimal'];
                    $octal = '';
                    if (preg_match('/[^0-9]/', $decimal)) {
                        die("Maaf. Inputan salah!!!");
                    }
                    while ($des > 0) {
                        $hasil = $des % 8;
                        switch ($hasil) {
                            case 0 : $octal.="0";
                                break;
                            case 1 : $octal.="1";
                                break;
                            case 2 : $octal.="2";
                                break;
                            case 3 : $octal.="3";
                                break;
                            case 4 : $octal.="4";
                                break;
                            case 5 : $octal.="5";
                                break;
                            case 6 : $octal.="6";
                                break;
                            case 7 : $octal.="7";
                            default:break;
                        }
                        if ($des / 8 > 0) {
                            $sisa = ($des / 8);
                            $des = $sisa % 8;
                        } else {
                            $sisa = ($des % 8);
                            $des = $sisa;
                        }
                    }
                    $result = strrev($octal);
                    echo "<br><h2>
Bilangan decimal  $original jika dikonversikan dalam Oktal hasilnya adalah $result.</h2>";
                } else {
                    
                }
            }
        }
        //yang ini pakek petik satu
        //if($gender=='L'){
        //echo '<h2>Selamat Datang Bro, '.$nama.' !!</h2>';
        //}
        //else{  
        //echo '<h2>Selamat Datang Sis, '.$nama.' !!</h2>';
        //}
        //antar petik satu dan dua, model penulisan/script beda, tapi hasilnya sama. Petik dua, gak perlu membedakan antara String dengan Variabel.
    }
}
echo "";
?>
                </center>
                </font>
                <!-- End proses Konversi -->
            </center>
            </body>
            </html>
