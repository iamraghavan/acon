<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FacilitiesController extends Controller
{
    public function showFacility($facility)
    {
        $facilities = [
            'classrooms' => 'Classrooms',
            'preclinical-lab' => 'Preclinical Lab',
            'nursing-foundations-lab' => 'Nursing Foundations Lab',
            'community-health-nursing-lab' => 'Community Health Nursing Lab',
            'nutrition-lab' => 'Nutrition Lab',
            'maternity-child-health-lab' => 'Maternity and Child Health Lab',
            'computer-lab' => 'Computer Lab',
            'pediatric-lab' => 'Pediatric Lab',
            'auditorium' => 'Auditorium',
            'library' => 'Library',
            'admin-office' => 'Admin Office',
            'transportation' => 'Transportation',
            'sports-lab' => 'Sports Lab',
            'av-aids-lab' => 'AV Aids Lab',
        ];


        if (array_key_exists($facility, $facilities)) {
            return view('facilities.facility', ['facility' => $facility, 'title' => $facilities[$facility]]);
        } else {
            abort(404);
        }
    }
}