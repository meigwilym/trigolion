<?php

namespace App\Services;

class Search
{
    protected $term;

    protected $results = [];

    public function __construct($term)
    {
        $this->term = '%'.trim($term).'%';
        $this->perform();
    }

    public function perform()
    {
        $sql = "SELECT id, firstname || ' ' || initials || ' ' || surname AS result, 'resident' AS type
          FROM residents WHERE 
          (firstname LIKE ? 
           OR
           initials LIKE ?
           OR
           surname LIKE ?
          )
          UNION ALL
          SELECT id, address_1 || ', ' || address_2 as result, 'address' AS type
          FROM addresses WHERE
          (address_1 LIKE ?
           OR
           address_2 LIKE ?
        )";
        $this->results = \DB::select($sql, $this->getQueryArgs());
    }

    public function getQueryArgs()
    {
        $args = [];
        for ($i = 0; $i < 5; $i++) {
            $args[] = $this->term;
        }
        return $args;
    }

    public function getResults()
    {
        return $this->results;
    }
}