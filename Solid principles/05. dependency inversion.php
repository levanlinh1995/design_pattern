<?php

define('STANDARD_FEE', 1000);

/*
class ExportLog {
    public function exportLogToFile(string $filename, string $error) {
        // do something
    }
}

class Student {
    protected $name;
    protected $age;

    public function payTuitionFee(): float {
        return STANDARD_FEE;
    }

    public function otherFunction(): void {
        // do something

        // logging
        $log_control = new ExportLog();
        $log_control->exportLogToFile($target, 'Error getting scholarship');
    }
}
*/

interface HandleLog {
    public function exportLog(string $namefileOfEmail, string $error);
}

class ExportEmailLog implements HandleLog {
    public function exportLog(string $email, string $error)
    {
        // export to email
    }
}

class ExportFileLog implements HandleLog {
    public function exportLog(string $filename, string $error)
    {
        // export to file
    }
}

class Student {
    protected $name;
    protected $age;
    protected $log_control;

    public function payTuitionFee(): float {
        return STANDARD_FEE;
    }

    public function setHandleLog(HandleLog $input_log_control): void {
        $this->log_control = $input_log_control;
    }

    public function otherFunction(): void {
        // do something

        // logging
        $this->log_control->exportLog('test', 'Applying for scholarship successfully!');
    }
}

$student = new Student();
$student->setHandleLog(new ExportEmailLog()); // or new ExportFileLog()
$student->otherFunction();
