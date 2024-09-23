<?php
class MY_Form_validation extends CI_Form_validation {
    public function address($str) {
        // Custom logic for validating address
        if (preg_match('/^[a-zA-Z0-9 ]+$/', $str)) {
            return true;
        } else {
            $this->set_message('address', 'The {field} field must contain a valid address.');
            return false;
        }
    }
}
?>
