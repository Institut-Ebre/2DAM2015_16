<?php

abstract class Mailer {
    public function send($to, $from, $body)
    {

    }
}

class UserMailer extends Mailer {

}

class AdminMailer extends Mailer{

}