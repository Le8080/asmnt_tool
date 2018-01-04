<?php
/**
 * Quiz Model
 */

 class Quiz_object extends CI_model{
     
    public quiz;
    public quiz_question;
    
    
    public __construct(){
        parent::__construct();
    }

    public function load_quiz(){
        $this->quiz =  $this->db->query('select * from quiz where id = '.$quizid);
    }
    
    private function load_quiz_type(){

    }
    private function load_quiz_question(){
        $this->quiz_question =  $this->db->query('select * from quiz_question where id = '.$this->quiz->id);
    }
    public 
 }
