<?php

namespace prdp543\PasswordNotification\Observers;

use prdp543\PasswordNotification\Contracts\PassworChangedNotificationContract;

class PasswordChangedObserver
{
    public function updated(PassworChangedNotificationContract $model)
    {
        $model->sendPasswordChangedNotification();
    }
}
