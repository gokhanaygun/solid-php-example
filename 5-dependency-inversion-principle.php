<?php
// Dependency Inversion Principle Violation
class Mailer
{
    public function send()
    {

    }
}

class SendWelcomeMessage
{
    public function __construct(Mailer $mailer)
    {
        return $mailer->send();
    }
}

// Refactored
interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {

    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {

    }
}

class SendWelcomeMessage
{
    public function __construct(Mailer $mailer)
    {
        return $mailer->send();
    }
}
