<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(2);
        $qMenu = $ci->db->get_where('u_menu', ['menu' => $menu])->row_array();
        $menu_id = $qMenu['id'];

        $uAkses = $ci->db->get_where('u_akses', ['role_id' => $role_id, 'menu_id' => $menu_id]);

        if ($uAkses->num_rows() < 0) {
            redirect('auth/Blocked');
        }
    }
}
