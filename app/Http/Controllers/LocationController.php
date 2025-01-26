<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Exception;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getAll() {
        try {
            $data = Location::all();

            return $this->sendResponse($data, 'Successfuly get location');
        } catch (Exception $e) {
            return $this->sendError('Internal Error.', ['error' => $e->getMessage()]);
        }
    }
}
