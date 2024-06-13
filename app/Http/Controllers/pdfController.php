<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf; // Alias PDF Facade
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import Http Facade
use Spatie\Permission\Models\Role;


class pdfController extends Controller
{


    public function viewPDF($id)
    {
        // $users = User::find($id);
        // $roles = Role::all();

        // $pdf = PDF::loadView('pdf.lapsit', array('user' =>  $users, 'role' => $roles))
        // ->setPaper('a4', 'portrait');

        // return $pdf->stream(); 

    }

    public function downloadPDF()
    {
        $users = User::all();

        $pdf = PDF::loadView('pdf.usersdetails', array('users' => $users))
            ->setPaper('a4', 'portrait');

        return $pdf->download('users-details.pdf');
    }

    public function exportLaporanKejadian($id)
    {
        $report = Report::with('user', 'assessments')->findOrFail($id);

        // Fetch location details
        $locationName = $this->getLocationName($report->lokasi_latitude, $report->lokasi_longitude);
        $googleMapsLink = $this->getGoogleMapsLink($report->lokasi_latitude, $report->lokasi_longitude);

        // Pass data to the PDF view
        $data = [
            'report' => $report,
            'locationName' => $locationName,
            'googleMapsLink' => $googleMapsLink,
        ];

        $pdf = PDF::loadView('pdf.laporan-kejadian', $data);

        return $pdf->stream('laporan-kejadian.pdf');
    }

    public function viewLaporanKejadian($id)
    {
        $report = Report::with('user', 'assessments')->findOrFail($id);

        // Fetch location details
        $locationName = $this->getLocationName($report->lokasi_latitude, $report->lokasi_longitude);
        $googleMapsLink = $this->getGoogleMapsLink($report->lokasi_latitude, $report->lokasi_longitude);

        // Pass data to the PDF view
        $data = [
            'report' => $report,
            'locationName' => $locationName,
            'googleMapsLink' => $googleMapsLink,
        ];

        return view('pdf.laporan-kejadian', $data);

        // $pdf = PDF::loadView('pdf.laporan-kejadian', $data);

        // return $pdf->stream('laporan-kejadian.pdf');
    }


    public function getLocationName($latitude, $longitude)
    {
        $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
            'latlng' => $latitude . ',' . $longitude,
            'key' => config('services.google_maps.api_key'),
        ]);

        $data = $response->json();

        if (isset($data['results'][0]['formatted_address'])) {
            return $data['results'][0]['formatted_address'];
        } else {
            return 'Location not found';
        }
    }

    public function getGoogleMapsLink($latitude, $longitude)
    {
        return 'https://www.google.com/maps/search/?api=1&query=' . $latitude . ',' . $longitude;
    }


}
