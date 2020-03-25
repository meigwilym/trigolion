<?php 

namespace App;

use Illuminate\Support\Str;

class ElectorRow
{
    public $elector_number;

    public $status;

    public $title;

    public $firstname;

    public $initials;

    public $surname; 

    public $address_1;
    
    public $address_2;
    
    public $address_3;
    
    public $address_4;
    
    public $address_5;
    
    public $address_6;
    
    public $address_7;
    
    public $address_8;
    
    public $address_9;

    public $postcode;

    public function __construct(array $row = [])
    {
        if (count($row) !== 20) {
            throw new \Exception('Invalid row');
        }

        $this->setField('elector_number', $row[1]);
        $this->setField('status', $row[2]);
        $this->setField('title', $row[3]);
        $this->setField('firstname', $row[4]);
        $this->setField('initials', $row[5]);
        $this->setField('surname', $row[6]);

        $this->setField('address_1', $row[10]);
        $this->setField('address_2', $row[11]);
        $this->setField('address_3', $row[12]);
        $this->setField('address_4', $row[13]);
        $this->setField('address_5', $row[14]);
        $this->setField('address_6', $row[15]);
        $this->setField('address_7', $row[16]);
        $this->setField('address_8', $row[17]);
        $this->setField('address_9', $row[18]);
        $this->postcode = $row[19];
    }

    public function setField($field, $value)
    {
        $this->{$field} = Str::title($value);
    }

    public function getAddress()
    {
        return [
            'address_1' => $this->address_1,
            'address_2' => $this->address_2,
            'address_3' => $this->address_3,
            'address_4' => $this->address_4,
            'address_5' => $this->address_5,
            'address_6' => $this->address_6,
            'address_7' => $this->address_7,
            'address_8' => $this->address_8,
            'address_9' => $this->address_9,
            'postcode' => $this->postcode
        ];
    }

    public function getElector()
    {
        return [
            'elector_number' => $this->elector_number,
            'status' => $this->status,
            'title' => $this->title,
            'firstname' => $this->firstname,
            'initials' => $this->initials,
            'surname' => $this->surname
        ];
    }
}