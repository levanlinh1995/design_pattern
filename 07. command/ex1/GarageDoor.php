<?php

class GarageDoor {
    public function up(): void {
        echo 'Garage door is opening' . PHP_EOL;
    }

    public function down(): void {
        echo 'Garage door is closing' . PHP_EOL;
    }
}