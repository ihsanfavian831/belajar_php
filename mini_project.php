<form method="POST">
    <input name="nama">
    <button>kirim</button>
</form>

<?php
if (isset($_POST['nama'])){
    echo "Halo ".$_POST['nama'];
}
?>