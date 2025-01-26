<?php

namespace App\Http\Controllers;

use App\Models\Therapist;
use App\Models\Treatment;
use Exception;
use Illuminate\Http\Request;

class TherapistContoller extends Controller
{
    public function getByTreatment($treatmentId)
    {
        try {
            $therapist = Treatment::with('therapist')->where('id', $treatmentId)->get();

            if ($therapist == null) {
                throw new Exception("Therapist not found");
            }

            $data = [
                'therapist' => $therapist,
                'base_service' => 0,
                'cs' => '012321221'
            ];

            return $this->sendResponse($data, 'Successfully get therapists');
        } catch (Exception $e) {
            return $this->sendError('Internal Error.', ['error' => $e->getMessage()]);
        }
    }
}
