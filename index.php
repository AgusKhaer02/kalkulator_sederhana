<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        // menetapkan variabel hasil sebagai null
        $hasil = null;
        // cek apakah nilai post dengan index "number_input" tersedia
        if (isset($_POST['number_input'])) {
            $ni = $_POST['number_input'];
            try {
                // menggunakan eval untuk melakukan penghitungan dengan string
                // return dari eval adalah hasil dari penghitungan dari kedua operand atau lebih
                $hasil = eval("return $ni;");
            } catch (ParseError $th) {
                // error akan muncul ketika cara penginputannya salah,
                // misalnya terdapat penggunaan karakter(A..Z), atau special character yang tidak termasuk dalam operator aritmatika, contoh : ?,{,},dll
                $hasil = "Error";
            }
            
        }
        
    ?>
    <center>
        <h1>Kalkulator Sederhana</h1>
    </center>
    <!-- form action dikosongkan supaya dapat mengirimkan nilai ke halaman sendiri -->
    <form action="" method="post">
        <table class="form-calc" >
            <thead>
                <tr>
                    <td>
                        <!-- onclick = ketika tombol ditekan maka panggil function setOnClickListener dengan karakter sebagai argument, function setOnClickListener bisa dilihat di app.js -->
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('C')">C</button>
                    </td>
                    <td colspan="3"><input type="text" value="<?= (!empty($hasil)) ? $hasil : '' ?>" name="number_input" id="input" readonly></td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('7')">7</button>
                    </td>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('8')">8</button>
                    </td>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('9')">9</button>
                    </td>
                    <td>
                        <button class="btn btn-operator" type="button" onclick="setOnClickListener('/')">/</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('4')">4</button>
                    </td>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('5')">5</button>
                    </td>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('6')">6</button>
                    </td>
                    <td>
                        <button class="btn btn-operator" type="button" onclick="setOnClickListener('*')">X</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('1')">1</button>
                    </td>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('2')">2</button>
                    </td>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('3')">3</button>
                    </td>
                    <td>
                        <button class="btn btn-operator" type="button" onclick="setOnClickListener('-')">-</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <button class="btn btn-number" type="button" onclick="setOnClickListener('0')">0</button>
                    </td>
                    <td>
                        <button class="btn btn-operator" type="button" onclick="setOnClickListener('.')">.</button>
                    </td>
                    <td>
                        <button class="btn btn-operator" type="submit">=</button>
                    </td>
                    <td>
                        <button class="btn btn-operator" type="button" onclick="setOnClickListener('+')">+</button>
                    </td>
                </tr>
            </tbody>

        </table>
    </form>

    
    <center>
        <h3>Agus Kurniadin Khaer</h3>
        <h3>201110199</h3>
    </center>
    <script src="app.js"></script>

</body>

</html>