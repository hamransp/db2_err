<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contoh extends CI_Controller
{

    public function index()
    {
    }

    public function satu()
    {
        $this->load->helper('db2_err');
        $str = 'ERROR [IBM][CLI Driver][DB2/LINUXX8664] SQL0803N One or more values in the INSERT statement, UPDATE statement, or foreign key update caused by a DELETE statement are not valid because the primary key, unique constraint or unique index identified by "1" constrains table "APUPPT.PROFIL_NASABAH" from having duplicate values for the index key. SQLSTATE=53004 SQLCODE=-803';
        $tes = new db2_err();
        $sqlcode = $tes->sqlcode($str);
        $sqlstate = $tes->sqlstate($str);
        echo $sqlcode['pesan'];
        echo '<br>';
        echo $sqlstate['pesan'];
    }
}

/* End of file Contoh.php */
