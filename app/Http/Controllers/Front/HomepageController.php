<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    private $slider;
    private $page;
    private $feature;
    // private $process;
    // private $service;
    // private $teamValue;
    // private $contact;


    public function __construct(
        Slider $slider,
        Page $page,
        Feature $feature,
        // Process $process,
        // Service $service,
        // TeamValue $teamValue,
        // Contact $contact,
    ) {
        $this->slider      = $slider;
        $this->page        = $page;
        $this->feature    = $feature;
        // $this->process     = $process;
        // $this->service     = $service;
        // $this->teamValue   = $teamValue;
        // $this->contact     = $contact;
    }

    public function index()
    {
        try {
            $sliders                 = $this->slider->active()->latest('id')->get();
            $about_us                = $this->page->where('identifier', 'about_us')->first();
            $features               = $this->feature->active()->latest('id')->get();
            // $solutions_page          = $this->page->where('identifier', 'solutions')->first();
            // $separator_1             = $this->page->where('identifier', 'separator_1')->first();
            // $processes               = $this->process->active()->latest('id')->get();
            // $process                 = $this->page->where('identifier', 'process')->first();
            // $services                = $this->service->active()->latest('id')->take(3)->get();
            // $team_values_page        = $this->page->where('identifier', 'team_values')->first();
            // $teamValues              = $this->teamValue->active()->latest('id')->get();
            // $separator_2             = $this->page->where('identifier', 'separator_2')->first();
            // $contacts                = $this->contact->active()->get();

            // return view('front.index');
            return view('front.index', compact(
                'sliders',
                'about_us',
                // 'solutions_page',
                'features',
                // 'separator_1',
                // 'processes',
                // 'process',
                // 'services',
                // 'team_values_page',
                // 'teamValues',
                // 'separator_2',
                // 'contacts',
            ));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error', __('message.something_wrong')]);
        }
    }
}
