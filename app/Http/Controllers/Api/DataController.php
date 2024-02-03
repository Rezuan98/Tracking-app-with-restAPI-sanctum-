<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DataController extends BaseController
{
    public function profile(Request $request)
{
    $user = auth()->user();

    if (!$user) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    try {
        $data = User::findOrFail($user->id);
        return $this->sendResponse($data, 'data retrieved successfully');

    } catch (\Exception $e) {
        return response()->json(['error' => 'Error retrieving user data'], 500);
    }
}


}
