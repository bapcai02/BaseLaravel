<?php

namespace App\Repository\Eloquent;

use App;
use App\Repository\Contracts\UserInterface as UserInterface;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository implements UserInterface
{

    protected function model()
    {
        return \App\User::class;
    }

    protected function getRules()
    {
        return \App\User::rules;
    }
}
