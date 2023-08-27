<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Managers\ParcourManager;

class DashboardController extends Controller
{
    public function __construct(protected ParcourManager $parcourManager){}

    /**
     * Display the user's profile form.
     */
    public function dashboard(Request $request): View
    {
        return view('dashboard', [
            'user' => $request->user(),
            'ListeParcours' => $this->parcourManager->getAllParcours()
        ]);
    }
}
