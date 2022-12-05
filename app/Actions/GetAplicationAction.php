<?php 

namespace App\Actions;

use App\Models\Aplication;

class GetAplicationAction
{
    public function handle(int $id)
    {
        $data = [
            'aplication' => Aplication::find($id),
        ];
        
        return $data;
    }
}