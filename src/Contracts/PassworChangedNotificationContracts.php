<?php

namespace prdp543\PasswordNotification\Contracts;

interface PassworChangedNotificationContract
{
    public function passwordColumnName();

    public function emailColumnName();

    public function PasswordChangedNotificationMail();

    public function isPasswordChanged();

    public function sendPasswordChangedNotification();
}
