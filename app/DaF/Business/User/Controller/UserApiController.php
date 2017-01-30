<?php

namespace App\DaF\Business\User\Controller;

use App\Http\Controllers\Controller;
use App\DaF\Business\User\Service\UserService;

/**
 * API for any user related data exchange.
 *
 * User: FatSquirrel
 * Date: 1/30/2017
 * Time: 9:09 PM
 */
class UserApiController extends Controller
{

    /**
     * Return a collection containing all users.
     *
     * @param UserService $userService
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll(UserService $userService)
    {
        //retrieve users
        $users = $userService->findAll();

        return $users;
    }
}