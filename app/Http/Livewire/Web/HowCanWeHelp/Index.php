<?php

namespace App\Http\Livewire\Web\HowCanWeHelp;

use Livewire\Component;
use App\Models\BookAppointment;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $step = 1;
    public $appointment;
    public $selectedTime;
    public $availableTimes = [
        '12:00PM',
        '01:00PM',
        '02:00PM',
        '03:00PM',
        '04:00PM'
    ];
    public $formData = [
        'data' => [
            'ailment' => '',
            'first_name' => '',
            'last_name' => '',
            'dob' => '',
            'phn' => '',
            'email' => '',
            'phone' => '',
            'time' => '',
            'booking_date' => '',
            'postal_code' => '',
            'radius' => '',
            'preferred_contact_email' => false,
            'preferred_contact_text' => false,
            'verify_contact_info' => false,
            'consent_notifications' => false,
            'features' => [
                'private_consulting_space' => false,
                'parking_available' => false,
                'near_public_transit' => false,
                'wheelchair_accessible' => false,
                'child_friendly' => false,
                'low_sensory_clinic' => false,
                'ramp' => false,
            ],
            'notes' => '',
        ]
    ];

    public $show = false;

    protected $rules = [
        'formData.data.ailment' => 'required|string',
        'formData.data.first_name' => 'required|string',
        'formData.data.last_name' => 'required|string',
        'formData.data.dob' => 'required|date',
        'formData.data.phn' => 'required|string',
        'formData.data.email' => 'required|email',
        'formData.data.phone' => 'required|numeric',
        'formData.data.time' => 'required|string',
        'formData.data.booking_date' => 'required|date',
        'formData.data.postal_code' => 'required|string',
        'formData.data.radius' => 'required|numeric',
        'formData.data.preferred_contact_email' => 'accepted',
        'formData.data.preferred_contact_text' => 'accepted',
        'formData.data.verify_contact_info' => 'accepted',
        'formData.data.consent_notifications' => 'accepted',
    ];

    public function mount($appointmentId = null)
    {
        if ($appointmentId) {
            $this->appointment = BookAppointment::find($appointmentId);

            if ($this->appointment && $this->appointment->status == 'draft') {
                $this->formData = $this->appointment->toArray();
                $this->step = 6;
            } else {
                $this->appointment = new BookAppointment();
            }
        } else {
            $this->appointment = new BookAppointment();
        }
    }

    public function nextStep()
    {
        $this->validateCurrentStep();

        $this->step++;
        $this->saveDraft();
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function saveDraft()
    {
        $this->appointment->fill($this->formData);
        $this->appointment->save();
    }

    public function openConfirmationModal()
    {
        $this->formData['status'] = 'complete';
        $this->appointment->fill($this->formData);
        $this->appointment->save();

        $this->show = true;
    }

    public function confirm()
    {
        return redirect('/');
    }

    protected function validateCurrentStep()
    {
        $rules = [];

        switch ($this->step) {
            case 1:
                $rules = [
                    'formData.data.ailment' => 'required|string',
                ];
                break;
            case 2:
                $rules = [
                    'formData.data.first_name' => 'required|string',
                    'formData.data.last_name' => 'required|string',
                    'formData.data.dob' => 'required|date',
                    'formData.data.phn' => 'required|string',
                ];
                break;
            case 3:
                $rules = [
                    'formData.data.postal_code' => 'required|string',
                    'formData.data.radius' => 'required|numeric',
                ];
                break;
            case 4:
                $rules = [
                    'formData.data.booking_date' => 'required|date',
                    'formData.data.time' => 'required|string',
                ];
                break;
            case 5:
                $rules = [
                    'formData.data.phone' => 'required|numeric',
                    'formData.data.email' => 'required|email',
                ];
                break;
            case 6:
                break;
        }

        $this->validate($rules);
    }

    public function render()
    {
        return view('livewire.web.how-can-we-help.index', [
            'availableTimes' => $this->availableTimes,
        ]);
    }
}
