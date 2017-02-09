<?php

namespace App\Slurp\Business\User\Service;

use App\Slurp\Business\User\User;

/**
 * Service for any user related modifications.
 *
 * User: FatSquirrel
 * Date: 1/30/2017
 * Time: 9:11 PM
 */
class UserService
{

    /**
     * Returns a collection containing all users stored in the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        return User::all();
    }
}