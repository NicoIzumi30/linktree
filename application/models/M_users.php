<?php
class M_users extends CI_Model
{
    public function getUsers()
    {
        $query = "SELECT `user`.*,`user_role`.`role`
                    FROM `user` JOIN `user_role`
                    ON `user`.`role_id` = `user_role`.`id`
                    WHERE `user`.`role_id` = 8
        ";
        return $this->db->query($query)->result();
    }
    public function getRole($id)
    {
        $role = $this->db->get_where('user_role', ['id' => $id])->row_array();
        return $role;
    }
    public function getKategori()
    {
        $query = "SELECT `link`.*,`kategori`.*
                    FROM `link` JOIN `kategori`
                    ON `link`.`id_kategori` = `kategori`.`id_kategori`
        ";
        return $this->db->query($query)->result_array();
    }
}
