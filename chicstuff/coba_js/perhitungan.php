<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate</title>
</head>
<body>
    <div>
        <label for="nama_barang">Nama Barang:</label>
        <select name="nama_barang" id="nama_barang">
            <option value="50000">NCT Keychain - Rp 50000</option>
            <option value="69000">JOY Tote Bag - Rp 69000</option>
            <option value="6500">Pastel Star Jepit Rambut - Rp 6500</option>
            <option value="10000">Boneka Kayu - Rp 10000</option>
            <option value="16000">Fake Nails - Rp 16000</option>
            <option value="30500">Boneka Bear Hoddie - Rp 30500</option>
            <option value="4000">Gelang Manik - Rp 4000</option>
            <option value="3000">Beads Ring - Rp 3000</option>
            <option value="32000">Sendal Selop - Rp 32000</option>
        </select>
    </div>
    <div>
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" min="1" max="10" value="1">
    </div>
    <div>
        <button onclick="hitung()">Hitung</button>
        <h3>Total: Rp <span id="total">0</span></h3>
    </div>
    <div>
        <a href="print_struk.html"><button>Cetak Struk</button></a>
    </div>
    <script>
        function hitung() {
            var menu = document.getElementById('nama_barang');
            var jumlah = document.getElementById('jumlah');
            var total = menu.value * jumlah.value;
            document.getElementById('total').innerText = total;
        }
    </script>
</body>
</html>