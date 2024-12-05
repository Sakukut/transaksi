<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <center>
        <form action="<?=base_url('home/simpan') ?>" name="form" method="post">
            kode <input type="text" name="kode"> <br><br>
            nama <input type="text" name="nama"> <br><br>
            pelanggaran <select name="pelanggaran" id="pelanggaran" onchange="a()">
                    <option value="">Pilih</option>
                    <option value="Merokok">Merokok</option>
                    <option value="Cabut">Cabut</option>
                    <option value="Tawuran">Tawuran</option>
            </select> <br> <br>
            bobot_sekarang <input type="text" name="bobot_sekarang"> <br> <br>
            bobot_sebelumnya <input type="text" name="bobot_sebelumnya" onkeyup="cekpelanggaran()"><br> <br>
            total <input type="text" name="total"> <br><br>
            sanksi <input type="text" name="sanksi"> <br> <br>
             <button type="Submit">Simpan</button>
             <button type="button" onclick="window.location='home/tampil'">Laporan</button>

        </form>
     </center>
</body>
</html>

<script>
    function a() {
        var pelanggaran = document.form.pelanggaran.value;
        if (pelanggaran=='Merokok') {
            document.form.bobot_sekarang.value ="10"
        }else if (pelanggaran=='Cabut') {
            document.form.bobot_sekarang.value ="20"
        }else {
            document.form.bobot_sekarang.value ="30"
        }

    }

    function cekpelanggaran() {

        var bobot_sekarang =parseInt(document.form.bobot_sekarang.value);
        var bobot_sebelumnya = parseInt(document.form.bobot_sebelumnya.value);

        var total = parseInt(document.form.total.value = bobot_sekarang + bobot_sebelumnya);

        if (total >15) {
            document.form.sanksi.value ="sp1"
        }
        if (total >25) {
            document.form.sanksi.value ="sp2"
        }
        if (total>35) {
            document.form.sanksi.value ="sp3"
        }
    }
</script>