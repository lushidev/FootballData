<?php
/**
 * Created by PhpStorm.
 * User: naymin
 * Date: 6/26/19
 * Time: 4:07 PM
 */

namespace Lushidev\FootApi\Facades;


use Illuminate\Support\Facades\Facade;

class FootballFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'football'; }
}
