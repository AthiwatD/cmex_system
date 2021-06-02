<?php

class MeetingPerson_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getMeetingPersons($meeting_id) {

        $sql = "SELECT *
                FROM met_meeting_person mp
                WHERE mp.meeting_id = '" . $meeting_id . "'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getMeetingPerson($meeting_person_id) {

        $sql = "SELECT *
                FROM met_meeting_person mp
                WHERE mp.meeting_person_id = '" . $meeting_person_id . "'";
        $result = $this->db->query($sql)->row();
        return $result;
    }

    function getMeetingPersonsWithFiles($meeting_id){
        $sql = "SELECT *
                FROM met_file f
                JOIN met_meeting_person mp ON mp.meeting_person_id = f.meeting_person_id
                WHERE mp.meeting_id = '" . $meeting_id . "'
                AND f.meeting_person_id != '0'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getMeetingPersonWithFiles($meeting_person_id){
        $sql = "SELECT *
                FROM met_file f
                JOIN met_meeting_person mp ON mp.meeting_person_id = f.meeting_person_id
                WHERE f.meeting_person_id = '" . $meeting_person_id . "'
                AND f.meeting_person_id != '0'";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}
