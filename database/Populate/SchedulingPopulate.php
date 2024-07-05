<?php

namespace Database\Populate;

use App\Models\Scheduling;

class SchedulingPopulate{
    public static function populate()
    {
        $data =  [
            'barber' => 'Fulano',
            'service' => 'cabelo',
            'date_scheduling' => '27/10/2021',
            'local' => 'Rua Andorins '
        ];

        $scheduling = new Scheduling($data);
        $scheduling->save();

        $numberOfUsers = 10;

        for ($i = 1; $i < $numberOfUsers; $i++) {
            $data =  [
                'barber' => 'Fulano ' . $i,
                'service' => 'cabelo' . $i ,
                'date_scheduling' => '27/10/2021',
                'local' => 'Rua Andorins'
            ];

            $scheduling = new Scheduling($data);
            $scheduling->save();
        }

        if($scheduling->save()){
            echo "Scheduling populated with $numberOfUsers registers\n";
        }else{
            echo "Error";
        }
        
    }
}
