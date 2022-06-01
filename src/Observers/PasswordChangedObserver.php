<?php

namespace prdp543\PasswordNotification\Observers;
use prdp543\PasswordNotification\Contracts\PassworChangedNotificationContract;
use Illuminate\Support\Facades\Mail;
class PasswordChangedObserver
{
    public function updated(PassworChangedNotificationContract $model) {
        $model->sendPasswordChangedNotification();
    }
}
 