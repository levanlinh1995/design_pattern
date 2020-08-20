<?php

include_once 'FlyBehaviorInterface.php';

class FlyWithWings implements FlyBehaviorInterface {
    public function fly() {
        echo 'fly with wings';
    }
}
