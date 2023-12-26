<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ConsultationRequest;
use App\Models\Consultation;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ConsultationController extends Controller
{
    private $contact;
    private $consultation;


    public function __construct(Contact $contact, Consultation $consultation)
    {

        $this->contact = $contact;
        $this->consultation = $consultation;
    }

    public function index()
    {
        try {

            $contacts = $this->contact->active()->get();

            return view('front.pages.consultations', compact(
                'contacts',
            ));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error', __('message.something_wrong')]);
        }
    }

    public function create(ConsultationRequest $request)
    {
        try {
            $requested_data = $request->except('_token');
            $consultation_request = $this->consultation->create($requested_data);
            Mail::to(settings()->contact_email)->send(new \App\Mail\ConsultationRequestMail($consultation_request));
            return back()->with('status', __('message.created_successfully'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
