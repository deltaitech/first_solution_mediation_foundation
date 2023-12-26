<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\ConsultationReplyMail;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ConsultationController extends Controller
{
    private $consultation_request;


    public function __construct(Consultation $consultation_request)
    {
        $this->middleware(['permission:read-consultation_requests'])->only('index', 'show');
        $this->middleware(['permission:delete-consultation_requests'])->only('destroy');
        $this->middleware(['permission:reply-consultation_requests'])->only('reply');
        $this->consultation_request = $consultation_request;
    }

    public function index()
    {
        try {
            $consultation_requests = $this->consultation_request->latest('id')->get();
            return view('admin.consultation_requests.index', compact('consultation_requests'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' =>  __('message.something_wrong')]);
        }
    }


    public function show(Consultation $consultation_request)
    {
        return view('admin.consultation_requests.show', compact('consultation_request'));
    }


    public function destroy(Consultation $consultation_request)
    {
        try {
            $consultation_request->delete();
            return redirect()->route('consultation_requests.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function reply(Consultation $consultation_request)
    {
        return view('admin.consultation_requests.reply', compact('consultation_request'));
    }

    public function send_mail(Request $request)
    {
        try {
            $consultation_request = $this->consultation_request->find($request->id);
            $request_data = $request->only(['subject', 'message']);

            Mail::to($consultation_request->email)->send(new ConsultationReplyMail($request_data));
            return redirect()->route('consultation_requests.index')->with(['success' => __('words.msg_reply')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
