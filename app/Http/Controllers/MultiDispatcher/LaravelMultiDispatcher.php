<?php


namespace App\Http\Controllers;


class LaravelMultiDispatcher implements MultiDispatcher
{

    private $dispatcher;

    /**
     * LaravelMultiDispatcher constructor.
     * @param $dispatcher
     */
    public function __construct($dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }


    public function multiDispatcher(array $events)
    {
        foreach($events as $event) {
            $this->dispatcher->dispatch($event);
        }
    }
}
