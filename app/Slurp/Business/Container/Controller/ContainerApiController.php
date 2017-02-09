<?php

namespace App\Slurp\Business\Container\Controller;

use App\Slurp\Business\Container\Container;
use App\Http\Controllers\Controller;
use App\Slurp\Business\Container\Service\ContainerService;
use Illuminate\Http\Request;

/**
 * API for any container related data exchange.
 *
 * User: FatSquirrel
 * Date: 1/31/2017
 * Time: 6:09 PM
 */
class ContainerApiController extends Controller
{

    /**
     * Return a collection containing all containers.
     *
     * @param ContainerService $containerService
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll(ContainerService $containerService)
    {
        //retrieve containers
        $containers = $containerService->findAll();

        return $containers;
    }

    public function create(ContainerService $containerService, Request $request)
    {
        $container = new Container($request->all());

        return $container;
    }
}