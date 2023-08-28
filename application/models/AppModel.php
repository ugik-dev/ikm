<?php
class AppModel extends CI_Model
{
    function submit_survey($data)
    {
        $this->db->insert('app_survey', $data);
    }

    function getSurvey($data)
    {
        $this->db->select('*');
        $this->db->from('data');
        $res = $this->input->get();
        return $res->result_array();
    }


    function addSurvey($data)
    {
        $this->db->select('*');
        $this->db->from('app_survey');
        $res = $this->input->get();
        return $res->result_array();
    }
}
