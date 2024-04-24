<div class="row">
    <div class="col-md-12">
     <h3>Peserta Road Bike</h3>    
 </div>
</div>
<!-- /. ROW  -->
<hr />
<form action="<?php echo base_url('laporan/peserta/rb') ?>" method="post" target="_blank">
    <table>
        <tr>
            <td align="right" style="padding: 2px"><h3>Kategori Usia:</h3></td>
            <td class="col-md-8" style="padding: 2px">
                <select name="usia">
                    <option value="">Semua</option>
                    <option value="17 s/d 30 Tahun">17 s/d 30 Tahun</option>
                    <option value="31 s/d 45 Tahun">31 s/d 45 Tahun</option>
                    <option value="46 s/d 60 Tahun">46 s/d 60 Tahun</option>
                </select>
            </td>
            <td><input type="submit" class="btn btn-primary" value="Submit"></td>
        </tr>
    </table>
</form>