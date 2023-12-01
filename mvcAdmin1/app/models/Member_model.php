<?php
class Member_model
{
    private $table = "member";
    private $db;
    public function __construct()
    {
        $this->db = new database;
    }
    public function getAllMember()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMemberById($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function uploadFoto($ft)
    {
        $namaFile = $ft['name'];
        $namaSementara = $ft['tmp_name'];
        //tentukan lokasi file akan dipindahkan
        $dirUpload = "img/daun/";
        //pindahkanfile
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
        if ($terupload) {
            return true;
        } else {
            return false;
        }
    }
    public function add($data, $ff)
    {
        $hasil = $this->uploadFoto($ff);
        if ($hasil) {
            $foto = $ff['foto'];
            $nama_member = $data['tnama_member'];
            $telp = $data['ttelp'];
            $email = $data['temail'];
            $kota = $data['tkota'];
            $provinsi = $data['tprovinsi'];
            $alamat = $data['talamat'];
            $userName = $data['tuserName'];
            $password = $data['tpassword'];
            $this->db->query('SELECT if(max(id)is null,1,max(id)+1) as maks_id FROM ' . $this->table);
            $data = $this->db->resultSet();
            foreach ($data as $rec) {
                $id = $rec["maks_id"];
            }
            $this->db->query('INSERT INTO ' . $this->table . ' (id,nama_member,telp,email,kota,provinsi,alamat,userName,password,foto)
			values(:id,:nama_member, :telp,:kota,:provinsi, :email, :alamat,:userName,:password,:foto)');
            $this->db->bind('id', $id);
            $this->db->bind('nama_member', $nama_member);
            $this->db->bind('telp', $telp);
            $this->db->bind('kota', $kota);
            $this->db->bind('provinsi', $provinsi);
            $this->db->bind('email', $email);
            $this->db->bind('alamat', $alamat);
            $this->db->bind('userName', $userName);
            $this->db->bind('password', $password);
            $this->db->bind('foto', $foto);
            $res = $this->db->execute();
            return true;
        } else
            return false;
    }

    public function edit($data, $ff)
    {
        $id = $data["tid"];
        $nama_member = $data['tnama_member'];
        $telp = $data['ttelp'];
        $email = $data['temail'];
        $alamat = $data['talamat'];
        $foto_lama = $data['foto_lama'];
        if (isset($data['ubah_foto'])) {
            if ($this->uploadFoto($ff)) {
                $foto = $ff['name'];
                $sql = "update member set nama_member='$nama_member',telp='$telp', email='$email',alamat='$alamat',foto='$foto' where id='$id'";
                $this->db->query($sql);
                $hasil = $this->db->execute();
                unlink("img/daun/" . $foto_lama);
            }
        } else {
            $sql = "update member set nama_member='$nama_member',telp='$telp',email='$email',alamat='$alamat' where id='$id'";
            $this->db->query($sql);
            $this->db->execute();
        }
    }
    public function del($id)
    {
        $data['member'] = $this->getMemberById($id);
        $foto = $data['member']['foto'];
        $sql = "delete from member where id='$id'";
        $hasil = $this->db->query($sql);
        $this->db->execute();
        if ($foto != "") {
            unlink("img/daun/" . $foto);
        }
    }
}
