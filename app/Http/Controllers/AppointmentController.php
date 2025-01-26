<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Appointment;
use App\Models\Therapist;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function checkSlots(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'location_id' => 'required|exists:locations,id',
                'date' => 'required|date',
                'time' => 'required'
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors(), 422);
            }
            
            $todayAppointment = Appointment::where('location_id', $request->location_id)->where('date', $request->date)->where('time', $request->time)->first();

            $data = false;
            $message = 'Appointment already taken';
            if ($todayAppointment != null) {
                $data = true;
                $message = 'Appointment available';
            }

            return $this->sendResponse($data, $message);
        } catch (Exception $e) {
            return $this->sendError('Internal Error.', ['error' => $e->getMessage()]);
        }
    }

    public function saveBooking(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'location_id' => 'required|exists:locations,id',
                'name' => 'required|string',
                'email' => 'required|string',
                'phone' => 'required|string',
                'details' => 'required|array',
                'date' => 'required|date',
                'time' => 'required'
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors(), 422);
            }

            $todayAppointment = Appointment::where('location_id', $request->location_id)->where('date', $request->date)->where('time', $request->time)->first();

            if ($todayAppointment != null) {
                throw new Exception("Appointment already taken");
            }

            $treatment_price = 0;
            $therapist_fee = 0;

            foreach ($request->details as $item) {
                $treatment = Treatment::where('id', $item['treatment_id'])->first();
                if ($treatment != null) {
                    $treatment_price += $treatment->price;
                }

                $therapist = Therapist::where('id', $item['therapist_id'])->first();
                if ($therapist!= null) {
                    $therapist_fee += $therapist->fee;
                }
            }

            $total_price = $treatment_price + $therapist_fee;

            Appointment::create([
                'location_id' => $request->location_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'details' => json_encode($request->details),
                'date' => $request->date,
                'time' => $request->time,
                'total_price' => $total_price
            ]);

            $data = $request->all();
            return $this->sendResponse($data, "Succesfully saved booking appointment");
        } catch (Exception $e) {
            return $this->sendError('Internal Error.', ['error' => $e->getMessage()]);
        }
    }

    public function detail($id) {
        try {
            $data = Appointment::with('location')->where('id', $id)->first();

            $data->details = json_decode($data->details);

            foreach ($data->details as $item) {
                $treatment = Treatment::with('category')->where('id', $item->treatment_id)->first();
                if ($treatment!= null) {
                    $item->treatment_category = $treatment->category->name;
                    $item->treatment_name = $treatment->name;
                }

                $therapist = Therapist::where('id', $item->therapist_id)->first();
                if ($therapist!= null) {
                    $item->therapist_name = $therapist->name;
                }
            }

            return $this->sendResponse($data, "Succesfully get appointment detail");
        } catch (Exception $e) {
            return $this->sendError('Internal Error.', ['error' => $e->getMessage()]);
        }
    }
}
