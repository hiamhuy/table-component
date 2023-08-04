<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableCustom extends Component
{
    public $_id;
    public $datas = array(
        [
            'id' => 1,
            'name' => 'Tonny',
            'age' => '30'
        ],
        [
            'id' => 2,
            'name' => 'Cheff',
            'age' => '20'
        ],
        [
            'id' => 3,
            'name' => 'Cehill',
            'age' => '34'
        ],
        [
            'id' => 4,
            'name' => 'Falcon',
            'age' => '54'
        ],
        [
            'id' => 5,
            'name' => 'Drupal',
            'age' => '25'
        ]
        
    );

    public function getById($id, $name, $age)
    {
        dd('id='. $id .' -name = '. $name .' -age = '. $age);
    }

    public function render()
    {
        return view('livewire.table-custom');
    }
}