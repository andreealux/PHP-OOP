<?php

class Application
{
    public $db;
    public function __construct(DBInterface $db)
    {
        $this->db = $db;
    }

}