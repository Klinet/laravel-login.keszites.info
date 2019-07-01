<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function show()
    {

        $users = User::all();
        return view('dashboard', ['users' => $users]);
    }

    protected function guard()
    {
        return Auth::guard('with-login');
    }

}
