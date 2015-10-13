<?php

abstract class Mailer {
    public function send($to, $from, $body)
    {

    }
}

class UserMailer extends Mailer {
    public function sendWelcomeEmail(User $user)
    {
        return $this->send($user->email);
    }
}

