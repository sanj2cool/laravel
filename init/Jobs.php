<?php

class Jobs{

    private $title;
    private $designation;
    protected $jobs;
    protected $db;



    public function __construct($title)
    {
        $this->db=new Database;
    }

    public function getJobTitle(){
      

        $this->db->query('select * from jobs');
        $result=$this->db->resultSet();
        return $result;

    }




}