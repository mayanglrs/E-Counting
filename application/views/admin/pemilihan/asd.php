<?php

    if(isset($_POST['simpan'])){
    $sql_simpan=mysqli_query($koneksi,"update tbl_data set NIP='$_POST[NIP]', Nama='$_POST[Nama]', No='$_POST[No_Kontrak]', Tgl='$_POST[Tgl_Kontrak]'");
        header("location:tampil2.php");
    }
 ?>
        <hr>
        <input type="submit" name="back" value="BACK" class="tombol"></a>
        
  </form>
</body>
</html>