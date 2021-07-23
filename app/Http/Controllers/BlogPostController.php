<?php
namespace App\Http\Controllers;

use App\Models\User;

class BlogPostController extends Controller
{
    public function index(User $user)
    {
        $user->foobar();
    }
}
