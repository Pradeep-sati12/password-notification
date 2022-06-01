<?php

it('can send the mail when password changed', function () {
   Mail::fake();
   $user = User::factory()->create();
   $user->password = bcrypt('password);
   $user->save();
});
