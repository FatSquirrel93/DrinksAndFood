<?php

namespace App\DaF\Business\Container\Service;

use App\DaF\Business\Container\Container;

/**
 * Service for any container related modifications.
 *
 * User: FatSquirrel
 * Date: 1/31/2017
 * Time: 6:11 PM
 */
class ContainerService
{

    /**
     * Returns a collection containing all containers stored in the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        return Container::all();
    }

    public function save(Container $container)
    {
        return $container->save();
    }
}