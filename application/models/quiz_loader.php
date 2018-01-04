<?php

/***
 ** QUiz Model to fetch and create records
 ***/

 class Quiz_loader extends CI_Model
 {
    


    /** Get user single quiz
     * $userid int
     * $quizid int
     * return object
     */
    public function get_user_quiz($userid = 0,$quizid = NULL){

        //add query to filter by qiz
        $qid = '';
        if($quizid){
            $qid = ' AND id = '.$quizid;
        }
        $userquiz = $this->db->query('SELECT * from quiz where id = '.$userid.$qid);
        return $userquiz->conn_id;
    }
 }