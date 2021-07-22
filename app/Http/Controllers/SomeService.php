<?php


namespace App\Http\Controllers;


class SomeService
{
    private $dispatcher;

    /**
     * SomeService constructor.
     * @param $dispatcher
     */
    public function __construct(MultiDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }


    public function someMethod() {
//        $this->dispatcher->multiDispatcher($events);
    }


}
