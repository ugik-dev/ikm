<?php
class AppModel extends CI_Model
{
    function submit_survey($data)
    {
        $this->db->insert('app_survey', $data);
    }

    function submit_kesan($data)
    {
        $this->db->insert('app_kesan', $data);
    }

    function getAllSurvey($data = [])
    {
        $this->db->select('*');
        $this->db->from('app_survey');
        $res = $this->db->get();
        // echo $this->db->last_query();
        return $res->result_array();
        // echo json_encode($res);
        // die();
    }

    function getAllKesan($data)
    {
        $this->db->select('*');
        $this->db->from('app_kesan');
        $res = $this->db->get();
        // echo $this->db->last_query();
        // die();
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
