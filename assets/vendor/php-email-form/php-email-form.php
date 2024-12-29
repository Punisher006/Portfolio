<?php
class PHP_Email_Form {
    public $ajax = false;
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp = [];
    private $messages = [];

    public function add_message($content, $label, $max_length = 0) {
        $this->messages[] = "$label: $content";
    }

    public function send() {
        $headers = "From: {$this->from_name} <{$this->from_email}>";
        $body = implode("\n", $this->messages);
        if (mail($this->to, $this->subject, $body, $headers)) {
            return 'Email sent successfully!';
        } else {
            return 'Failed to send email!';
        }
    }
}
?>
