<?php

namespace prdp543\PasswordNotification\Traits;

 use prdp543\PasswordNotification\Mail\PasswordChangedNotificationMail;

trait PassworChangedNotificationTrait
{
    public static function booted()
    {
        static::observe(\App\Observers\PasswordChangedObserver::class);
    }

    public function passwordColumnName()
    {
        return 'password';
    }

    public function emailColumnName()
    {
        return 'email';
    }

    public function PasswordChangedNotificationMail()
    {
        return new PasswordChangedNotificationMail($this);
    }

    public function isPasswordChanged()
    {
        return $this->wasChanged($this->passwordColumnName());
    }

    public function sendPasswordChangedNotification()
    {
        if (! $this->isPasswordChanged()) {
            return ;
        }
        $mail = Mail::to($this->getRawOriginal($This->emailColumnName()));
        $mail->send($this->PasswordChangedNotificationMail());
    }
}
