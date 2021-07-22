<?php

namespace App\Http\Controllers;

interface MultiDispatcher {
    public function multiDispatcher(array $events);
}
