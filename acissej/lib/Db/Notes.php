<?php

namespace Db;

class Notes
{

    public function __construct()
    {
        $testConnection = new Connection();
        p_r($testConnection->setQuerry('DELETE FROM note WHERE id=1'));
    }

}