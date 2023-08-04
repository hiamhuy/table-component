<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    // public array $headers;
    public $sortable;
    public $direction;
    public $checkAll = false;
    public $isIndeterminate = false;
    public $isMulti = false;
    public $selected = [];
    public $data;
   

    public function checkSelectedAll(){
        $this->isIndeterminate=true;
        
     }

    private function formatHeaders(array $headers): array{
        return array_map(function($header) {
            $name = is_array($header)? $header['name'] : $header;
            return [
                'name' => $name,
                'classes' => $header['align']??'left',
                'width' => $header['width']??'',
            ];
        }, $headers);
    }

    public function render()
    {
        return view('components.table.table');
    }
}