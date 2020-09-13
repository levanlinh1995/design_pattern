<?php

/*
class ForeignStudent extends Student {
    public function payTuitionFee(): float {
        return STANDARD_FEE * 1.3;
    }

    public function runForSecretary(): void {
        throw Exception ('Not allowed Action!');
    }
}
*/

define('STANDARD_FEE', 1000);

interface NationalSocialActivity {
    public function runForSecretary(): void;
}

class Student {
    protected $name;
    protected $age;

    public function payTuitionFee(): float {
        return STANDARD_FEE;
    }
}

class NormalStudent extends Student implements NationalSocialActivity{
    public function runForSecretary(): void {
        // do something
    }
}

class AdvancedStudent extends Student implements NationalSocialActivity {
    public function payTuitionFee(): float {
        return STANDARD_FEE * 0.8;
    }

    public function runForSecretary(): void {
        // do something
    }
}

class ForeignStudent extends Student {
    public function payTuitionFee(): float {
        return STANDARD_FEE * 1.3;
    }
}
