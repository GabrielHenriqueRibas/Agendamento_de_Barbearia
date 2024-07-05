<?php

namespace Database\Populate;

use App\Models\Admin;

class AdminsPopulate{
    public static function populate()
    {
        $data =  [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => '123456',
        ];

        $adm = new Admin($data);
        $adm->save();

        if($adm->save()){
            echo "Admin populated with 1 registers\n";
        }else{
            echo "Error\n";
        }
        
        
        
    }
}
