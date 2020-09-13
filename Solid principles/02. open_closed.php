<?php

define('STANDARD_FEE', 1000);

/*
class Student {
    private $name;
    private $age;
    private $student_type;

    public function payTuitionFee(): float {
        if ($this->student_type == 'foreign') {
            return STANDARD_FEE * 1.3;
        } else if ($this->student_type == 'talented') {
            return STANDARD_FEE * 0.8;
        } else {
            return STANDARD_FEE;
        }
    }
}
*/


class Student {
    protected $name;
    protected $age;

    public function payTuitionFee(): float {
        return STANDARD_FEE;
    }
}

class NormalStudent extends Student {
    
}

class AdvancedStudent extends Student {
    public function payTuitionFee(): float {
        return STANDARD_FEE * 0.8;
    }
}

class ForeignStudent extends Student {
    public function payTuitionFee(): float {
        return STANDARD_FEE * 1.3;
    }
}

