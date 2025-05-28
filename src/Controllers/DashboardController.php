<?php
namespace Controllers;

use Core\Controller;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard (static or future stats)
     */
    public function index()
    {
        // you can later pass real counts/stats here
        $this->view('dashboard/dashboard');
    }
}