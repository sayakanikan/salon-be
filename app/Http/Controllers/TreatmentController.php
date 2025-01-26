<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Treatment;
use Exception;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function getByLocation($locationId)
    {
        try {
            $treatment = Treatment::with('category')->where('location_id', $locationId)->get();
            $category = Category::all();

            if ($treatment == null) {
                throw new Exception("Treatment not found");
            }

            $data = [
                'treatment' => $treatment,
                'category' => $category,
            ];

            return $this->sendResponse($data, 'Successfuly get treatment');
        } catch (Exception $e) {
            return $this->sendError('Internal Error.', ['error' => $e->getMessage()]);
        }
    }
}
