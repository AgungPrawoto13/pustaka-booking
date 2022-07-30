<h2>Form Pemesanan</h2>
<form action="<?= base_url('futsal/member_futsal/pesanan?idlap='.$this->session->userdata('idlap'));?>" method="post">
    <table class='table table-bordered table-striped'>
        <tr>
            <td> Nama Lengkap</td>
            <td><input type=text name='nama' class='form-control' value="<?= $this->session->userdata('nama_lengkap');?>" readonly=readonly>
                <input type=hidden name='id_user' class='form-control' value="<?= $this->session->userdata('id_user');?>" readonly=readonly></td>
        </tr> 
        <tr>
            <td>Email</td>
            <td> <input type=text name='email' class='form-control' value="<?= $this->session->userdata('email');?>" readonly=readonly></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type=text name='nohp' class='form-control' value="<?= $this->session->userdata('nohp');?>"  readonly=readonly></td>
        </tr>
        <tr>
            <td>Nama Lapangan</td>
            <td><input type=text name='lapangan' class='form-control' value="<?= $this->session->userdata('lapangan');?>" readonly=readonly>
                <input type=hidden name='idlap' class='form-control' value="<?= $this->session->userdata('idlap');?>" hidden=hidden></td>
        </tr>
        <tr>
            <td>Harga Siang</td>
            <td><input type=text name='h1' class='form-control' value="<?= $this->session->userdata('siang');?>" readonly=readonly></td>
        </tr>
        <tr>
            <td>Harga Malam</td>
            <td><input type=text name='h2' class='form-control' value="<?= $this->session->userdata('malam');?>" readonly=readonly></td>
        </tr>
        <tr>
            <td>Tanggal Main</td>
            <td><input type=text name='tgl' class='form-control' placeholder="Tanggal - Bulan - Tahun" value="<?= set_value('tgl');?>"><?= form_error('tgl','<small class="text-danger">','</small>');?></td>
        </tr>
        <tr>
            <td>Jam Mulai</td>
            <td>
                <select name="jm" class='form-control'>
                    <option value="08:00:00">08:00</option>
                    <option value="09:00:00">09:00</option>
                    <option value="10:00:00">10:00</option>
                    <option value="11:00:00">11:00</option>
                    <option value="12:00:00">12:00</option>
                    <option value="13:00:00">13:00</option>
                    <option value="14:00:00">14:00</option>
                    <option value="15:00:00">15:00</option>
                    <option value="16:00:00">16:00</option>
                    <option value="17:00:00">17:00</option>
                    <option value="18:00:00">18:00</option>
                    <option value="19:00:00">19:00</option>
                    <option value="20:00:00">20:00 (Malam)</option>
                    <option value="21:00:00">21:00 (Malam)</option>
                    <option value="22:00:00">22:00 (Malam)</option>
                    <option value="23:00:00">23:00 (Malam)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Lama Sewa</td>
            <td><input type="number" name='lm' class='form-control' maxlength="2" placeholder="Lama sewa" value="<?= set_value('lm');?>"><?= form_error('lm','<small class="text-danger">','</small>');?></td>
        </tr>
        <tr>
            <td height="25" colspan="5"><input name="submit" type="submit" value="Pesan" class="btn btn-primary"/></td>
        </tr>
    </table>
</form>