<div>
    @section('title', 'How Can We Help')

    @include('components.header', [
        'title' => 'Book an Appointment',
        'inactive_path' => 'Home',
        'active_path' => 'Book an appointment',
    ])
    <x-container>
        <div>
            <ul class="flex items-center">
                @foreach ([
        1 => 'Get Started',
        2 => 'Identification',
        3 => 'Location',
        4 => 'Book Appointment',
        5 => 'Contact Details',
        6 => 'Confirm Booking',
    ] as $index => $stepLabel)
                    <li class="flex-1">
                        <a href="#"
                            class="relative flex items-center justify-center text-lg font-semibold px-1 py-4
                    {{ $step == $index ? 'border-t-8 border-secondary-700 bg-light text-secondary-500' : 'text-dark-400 hover:text-secondary-500' }}
                    {{ $step > $index ? 'border-t-8 border-secondary-300 bg-light' : '' }}">
                            <span class="hidden md:inline">{{ $stepLabel }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>


        @if ($step == 1)
            <div>
                <x-container class="my-8">
                    <div class="md:mx-16 my-4 py-4 px-2 bg-light">
                        <p class="text-base text-dark-500">The information you provide will help the booking system find
                            pharmaies with services you
                            need. At this tme, you are only able to book one appointment at a time. If you have more
                            than one ailment to
                            discus with a pharmacist, you can choose
                            the option to “Book Another Appointment” on the “Booking Confirmed” page after confirming
                            your first
                            appoinntment</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="col-span-5">
                            <img src="{{ asset('images/img-how-can-we-help-get-started.png') }}">
                        </div>
                        <div class="col-span-5 flex flex-col space-y-12">
                            <h4 class="font-bold text-4xl">To get started, please choose one of the following minor
                                ailments or
                                contraception:</h4>
                            <select wire:model.defer="formData.data.ailment" id="ailment"
                                class="py-4 px-4 block w-full bg-gray-100 text-dark-400 text-base border-transparent font-semibold focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500 hover:border-secondary-500">
                                <option selected>Select One</option>
                                <option value="Contraception">Contraception</option>
                                <option value="Acne">Acne</option>
                                <option value="Allergic rhinitis">Allergic rhinitis</option>
                                <option value="Atopic">Atopic</option>
                                <option value="Conjunctivitis">Conjunctivitis</option>
                                <option value="Dermatitis">Dermatitis</option>
                                <option value="Diaper rash">Diaper rash</option>
                            </select>
                            @error('formData.data.ailment')
                                <span class="error"> {{ $message }} </span>
                            @enderror


                            <p class="text-sm">For more information on ailments and/or contraception, visit our <a
                                    href="{{ route('web.faq') }}"><span class="font-semibold text-secondary-500">FAQ
                                        page</span></a></p>
                        </div>
                        <div class="col-span-2"></div>
                    </div>
                </x-container>
            </div>
        @elseif ($step == 2)
            <div>
                <x-container class="my-8">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="col-span-5">
                            <img src="{{ asset('images/img-how-can-we-help-identification.png') }}">
                        </div>
                        <div class="col-span-5 flex flex-col space-y-8">
                            <div class="flex flex-col space-y-2">
                                <h2 class="font-bold text-4xl">Identification</h2>
                                <p class="text-base text-dark-400">Please enter your legal name below as it appears on
                                    your B.C. Driver s Licence or BC Services Card</p>
                            </div>

                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Legal first name
                                </label>
                                <input type="text" wire:model.defer="formData.data.first_name"
                                    class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                    required />
                                @error('formData.data.first_name')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Legal Last name
                                </label>
                                <input type="text" wire:model.defer="formData.data.last_name"
                                    class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                    required />
                                @error('formData.data.last_name')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Date of birth (format e.g. Jan 1, 2020)
                                </label>
                                <input type="date" wire:model.defer="formData.data.dob"
                                    class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                    required />
                                @error('formData.data.dob')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Personal Health Number
                                </label>
                                <input type="text" wire:model.defer="formData.data.phn"
                                    class="w-full  border border-light bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                    required />
                                @error('formData.data.phn')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                                <span class="text-sm text-secondary-500">What is a Personal Health Number?</span>
                            </div>
                            <div class="flex flex-col space-y-4 my-8">
                                <h2 class="font-bold text-4xl">Other Information</h2>
                                <p class="text-base text-dark-500 font-bold mb-6">Do you require any of the following
                                    (select all that apply):</p>
                                <p class="text-sm font-bold text-dark-400">Clinic Features</p>
                                <div class="grid grid-cols-2 gap-4 text-dark-400 text-base">
                                    @foreach ($formData['data']['features'] as $feature => $value)
                                        <div class="col-span-4 sm:col-span-2 md:col-span-1 space-x-2">
                                            <input type="checkbox"
                                                wire:model.defer="formData.data.features.{{ $feature }}"
                                                id="{{ $feature }}"
                                                value="{{ ucwords(str_replace('_', ' ', $feature)) }}"
                                                class="focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500 checked:ring-secondary-500 checked:border-secondary-500">
                                            <label
                                                for="{{ $feature }}">{{ ucwords(str_replace('_', ' ', $feature)) }}</label>
                                        </div>
                                    @endforeach
                                    @error('formData.data.features')
                                        <span class="error"> {{ $message }} </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="flex flex-col space-y-4 my-8-">
                                <h2 class="font-bold text-4xl">Notes for the pharmacist</h2>
                                <p class="text- text-dark-400">What would you like the pharmacist to know before your
                                    appointment?</p>
                                <textarea wire:model.defer="formData.data.notes"
                                    class="focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"></textarea>
                                @error('formData.data.notes')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-2"></div>
                    </div>
                </x-container>
            </div>
        @elseif ($step == 3)
            <div>
                <x-container class="my-8">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="col-span-5">
                            <img src="{{ asset('images/img-how-can-we-help-location.png') }}">
                        </div>
                        <div class="col-span-5 flex flex-col space-y-8">
                            <div class="flex flex-col space-y-2">
                                <h4 class="font-bold text-dark-500 text-4xl">Search Location</h4>
                                <p class="text-base text-dark-400">Enter postal code to book your appointment</p>
                            </div>

                            <div>
                                <h2 for="" class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Enter Postal Code to book your appointment
                                </h2>
                                <div class="bg-light p-4">
                                    <div>
                                        <label for="" class="my-3 pl-3 block text-base text-dark-500 font-bold">
                                            Postal Code
                                        </label>
                                        <input type="text" wire:model.defer="formData.data.postal_code"
                                            class="w-full  border border-secondary-100 bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                            required />
                                            @error('formData.data.postal_code')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                                    </div>
                                    <div>
                                        <label for=""
                                            class="my-3 pl-3 block text-base text-dark-500 font-bold">
                                            Search radius(km)
                                        </label>
                                        <input type="text" wire:model.defer="formData.data.radius"
                                            class="w-full  border border-secondary-100 bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                            required />
                                            @error('formData.data.radius')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                                    </div>
                                    <button wire:click="nextStep"
                                        class="block bg-secondary-700 text-white w-full py-4 my-4"> Search</button>

                                    <div class="flex justify-between items-center my-8">
                                        <h5 class="text-xl text-dark-500 font-bold">Select a Postal Code</h5>
                                        <p class="text-base text-dark-500">Showing 3 of 10 results</p>
                                    </div>
                                    <div class="bg-white p-4 shadow hover:bg-secondary-500 hover:text-white">
                                        <h5 class="text-base text-dark-500 font-bold">Richmond CRC Drugs Cambie</h5>
                                        <p class="text-base text-dark-400">See me in 24 hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2"></div>
                    </div>
                </x-container>
            </div>
        @elseif ($step == 4)
            <div>
                <x-container class="my-8">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="col-span-5">
                            <img src="{{ asset('images/img-how-can-we-help-get-book-appointment.png') }}">
                        </div>
                        <div class="col-span-5 flex flex-col space-y-8">
                            <div class="flex flex-col space-y-2">
                                <h2 class="font-bold text-4xl text-dark-500">Book Appointment</h2>
                                <p class="text-base text-dark-400">When will you like to consult with our pharmacist
                                </p>
                            </div>

                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Select Date
                                </label>
                                <input type="date" wire:model.defer="formData.data.booking_date"
                                    class="w-full  border  py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                    required />
                                    @error('formData.data.booking_date')
                                    <span class="error"> {{ $message }} </span>
                                @enderror

                            </div>
                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Time (Pacific Standard Time)
                                </label>
                                <div class="grid grid-cols-3 md:grid-cols-5 gap-4  items-center justify-center">
                                    @foreach ($availableTimes as $time)
                                        <label
                                            class="py-2 px-4 text-base inline-flex items-center justify-center cursor-pointer {{ $formData['data']['time'] === $time ? 'bg-secondary-700 text-white' : 'bg-gray-100 hover:bg-secondary-700 hover:text-white' }}">
                                            <input type="checkbox" value="{{ $time }}"
                                                wire:model="formData.data.time" class="hidden">
                                            {{ $time }}
                                        </label>
                                    @endforeach
                                    @error('formData.data.time')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                                </div>

                            </div>
                            <div>
                                <h2 class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Confirm Postal Code to book your appointment
                                </h2>
                                <div class="bg-gray-100 p-4 flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label for="postal_code" class="mb-1 text-base font-bold hidden md:flex">
                                            Postal Code
                                        </label>
                                        <input type="text" id="postal_code"
                                            wire:model.defer="formData.data.postal_code"
                                            value="{{ $formData['data']['postal_code'] }}" disabled
                                            class="border border-secondary-100 bg-white py-3 px-6 text-base font-medium outline-none w-full focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                            required />
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="search_radius" class="hidden mb-1 text-base font-bold md:flex ">
                                            Search radius (km)
                                        </label>
                                        <input type="text" id="search_radius"
                                            wire:model.defer="formData.data.radius"
                                            value="{{ $formData['data']['radius'] }}" disabled
                                            class="border border-secondary-100 bg-white py-3 px-6 text-base font-medium outline-none w-full focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                            required />
                                    </div>
                                    <button wire:click="nextStep"
                                        class="md:mt-10 bg-secondary-700 text-white py-3 px-6 my-4">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-2"></div>
                    </div>
                </x-container>
            </div>
        @elseif ($step == 5)
            <div>
                <x-container class="my-8">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="col-span-5">
                            <img src="{{ asset('images/img-how-can-we-help-confirm-appointment.png') }}">
                        </div>
                        <div class="col-span-5 flex flex-col space-y-8">
                            <div class="flex flex-col space-y-2">
                                <h2 class="font-bold text-dark-500 text-4xl">Contact Details</h2>
                                <p class="text-base text-dark-400">Please provide your contact details</p>
                            </div>

                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Email address you check regularly
                                </label>
                                <input type="email" wire:model.defer="formData.data.email"
                                    class="w-full border border-secondary-100 bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                    required />
                                    @error('formData.data.email')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div>
                                <label for=""
                                    class="mb-3 pl-3 block text-dark-500 text-base font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Phone number that can receive text messages
                                </label>
                                <input type="text" wire:model.defer="formData.data.phone"
                                    class="w-full border border-secondary-100 bg-white py-3 px-6 text-base font-medium outline-none focus:ring-1 focus:ring-secondary-500 focus:border-secondary-500"
                                    required />
                                    @error('formData.data.phone')
                                    <span class="error"> {{ $message }} </span>
                                @enderror
                                <span class="text-sm text-secondary-500">Standard message and data rates may
                                    apply</span>
                            </div>

                            <div>
                                <h2 for="" class="mb-3 pl-3 block text-base text-dark-500 font-bold relative">
                                    <span class="absolute top-0 left-0 text-red-500">*</span>
                                    Preferred contact method
                                </h2>
                                <div class="col-span-4 text-base text-dark-400 sm:col-span-2 md:col-span-1 space-x-2">
                                    <input type="checkbox" wire:model="formData.data.preferred_contact_email">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-span-4 text-base text-dark-400 sm:col-span-2 md:col-span-1 space-x-2">
                                    <input type="checkbox" wire:model="formData.data.preferred_contact_text">
                                    <label for="">Text Message</label>
                                    <span class="text-sm block text-dark-400 pl-6">Standard message and data rates may
                                        apply</span>
                                </div>
                            </div>
                            <div class="p-4 bg-gray-100 items-center justify-start">
                                <div
                                    class="col-span-4 text-base text-dark-400 sm:col-span-2 md:col-span-1 pl-1 space-x-3 flex flex-row">
                                    <div class="absolute top-0 left-0 text-red-500">*</div>
                                    <input type="checkbox" class="pl-2 mt-1"
                                        wire:model="formData.data.verify_contact_info">
                                    <label for="">I verify that the contact information (email and phone
                                        number)
                                        entered is accurate and up to date.</label>
                                </div>
                                <div
                                    class="col-span-4 text-base text-dark-400 sm:col-span-2 md:col-span-1 pl-1 space-x-3 flex flex-row">
                                    <div class="absolute top-0 left-0 text-red-500">*</div>
                                    <input type="checkbox" class="pl-2 mt-1"
                                        wire:model="formData.data.consent_notifications">
                                    <label for="">I consent to notifications being sent to my preferred contact
                                        method for the purpose of informing me about my pharmacy appointment.</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-2"></div>
                </x-container>
            </div>
        @elseif ($step == 6)
            <div>
                <x-container>
                    <div>
                        <div class="flex flex-col items-start justify-center my-8">
                            <h2 class="font-bold text-dark-500 text-4xl">Confirm Booking</h2>
                            <p class="text-base text-dark-400">Please review the information you provided</p>
                        </div>
                        <div class="border-l border-secondary-500 bg-gray-100 my-4 py-4 px-5">
                            <h2 class="font-bold text-dark-500 text-xl mb-3">Book Appointment</h2>
                            <div class="items-start justify-center grid grid-cols-1 md:grid-cols-2">
                                <div class="flex flex-col space-y-2">
                                    <h2 class="font-bold text-dark-400 text-base">Date</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['booking_date'] }}</p>
                                </div>
                                <div>
                                    <h2 class="font-bold text-dark-400 text-base">Time</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['time'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-l border-secondary-500 bg-gray-100 py-4 my-4 px-5">
                            <h2 class="font-bold text-dark-500 text-xl mb-3">Location</h2>
                            <div class="items-start justify-center grid grid-cols-1 md:grid-cols-2">
                                <div class="flex flex-col space-y-2">
                                    <h2 class="font-bold text-base text-dark-400">Postal Code</h2>
                                    <div class="flex flex-row">
                                        <p class="text-base text-dark-400">{{ $formData['data']['radius'] }} </p><span
                                            class="px-2">-</span>
                                        <p class="text-base text-dark-400"> {{ $formData['data']['postal_code'] }}</p>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <div class="border-l border-secondary-500 bg-gray-100 my-4 py-4 px-5">
                            <h2 class="font-bold text-xl text-dark-500 mb-3">Identification</h2>
                            <div class="items-start justify-center grid grid-cols-1 md:grid-cols-2">
                                <div class="flex flex-col space-y-3">
                                    <h2 class="font-bold text-dark-400 text-base">Legal first name</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['first_name'] }}</p>
                                    <h2 class="font-bold text-base text-dark-400 ">Date of birth (format e.g. Jan 1,
                                        2020)</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['dob'] }}</p>
                                </div>
                                <div class="flex flex-col space-y-3">
                                    <h2 class="font-bold text-base text-dark-400">Legal last name</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['last_name'] }}</p>
                                    <h2 class="font-bold text-base text-dark-400">Personal Health Number</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['phn'] }}</p>
                                </div>
                            </div>
                            <h2 class="font-bold text-xl text-dark-500 mt-4 mb-3">More Information</h2>
                            <div class="items-start justify-center grid grid-cols-1 md:grid-cols-2">
                                <div class="flex flex-col space-y-3">
                                    <h2 class="font-bold text-base text-dark-400">Do you require any of the following
                                        (select all that apply):</h2>
                                    <p class="text-base text-dark-400">
                                        @foreach ($formData['data']['features'] as $feature => $value)
                                            @if ($value)
                                                <li>{{ ucwords(str_replace('_', ' ', $feature)) }}</li>
                                            @endif
                                        @endforeach
                                    </p>
                                    <h2 class="font-bold text-base text-dark-400">What would you like the pharmacist to
                                        know before your appointment?</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['notes'] }}</p>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <div class="border-l border-secondary-500 bg-gray-100 py-4 my-4 px-5">
                            <h2 class="font-bold text-xl text-dark-500 mb-3">Getting Started</h2>
                            <div class="items-start justify-center grid grid-cols-1 md:grid-cols-2">
                                <div class="flex flex-col space-y-3">
                                    <h2 class="font-bold text-base text-dark-400">Please choose one of the following
                                        minor ailments or contraception:</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['ailment'] }}</p>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <div class="border-l border-secondary-500 bg-gray-100 py-4 my-4 px-5">
                            <h2 class="font-bold text-xl text-dark-500 mb-3">Contact Details</h2>
                            <div class="items-start justify-center grid grid-cols-1 md:grid-cols-2">
                                <div class="flex flex-col space-y-3">
                                    <h2 class="font-bold text-base text-dark-400">Email</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['email'] }}</p>
                                    <h2 class="font-bold text-base text-dark-400">Phone number that can receive text
                                        messages</h2>
                                    <p class="text-base text-dark-400">{{ $formData['data']['phone'] }}</p>
                                    <h2 class="font-bold text-base text-dark-400">Preferred contact method</h2>
                                    <p class="text-base text-dark-400">Email, text mesage</p>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </x-container>
            </div>
        @endif


        <div class="border-t">
            <x-container class="py-8 flex items-center justify-between">
                @if ($step == 1)
                    <a href="{{ url('/') }}" class="py-4 px-3 bg-gray-200 text-secondary-500 cursor-pointer">Go
                        Back</a>
                    <button wire:click="nextStep" class="bg-secondary-500 hover:bg-secondary-300  text-white text-base font-normal flex justify-center gap-8 items-center p-4">Proceed</button>
                @else
                    @if ($step > 1)
                        {{-- <button wire:click="prevStep">Previous</button> --}}
                        <button class="py-4 px-3 bg-gray-200 text-secondary-500" wire:click="prevStep"
                                    class="px-4 py-2 bg-gray-500 text-white">Previous</button>
                    @endif

                    @if ($step < 6)
                        <button wire:click="nextStep" class="bg-secondary-500 hover:bg-secondary-300  text-white text-base font-normal flex justify-center gap-8 items-center p-4">Proceed</button>
                    @else
                        <button wire:click="openConfirmationModal" type="submit" class="bg-secondary-500 hover:bg-secondary-300  text-white text-base font-normal flex justify-center gap-8 items-center p-4">Confirm
                            Appointment</button>
                    @endif
                @endif
            </x-container>
        </div>
        <div x-data="{ show: @entangle('show') }">
            <div x-show="show" class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
                <div class="container bg-white w-3/4 p-4 md:p-0 shadow-lg grid md:grid-cols-2 items-center justify-center">
                    <div class="hidden md:flex">
                        <img src="{{ asset('images/img-how-can-we-help-thank you.png')}}">
                    </div>
                    <div class="items-center justify-center text-center px-8">
                        <h2 class="text-4xl font-semibold">Thank you for your submission</h2>
                        <p class="my-4">We have received your request to book an appointment and we'll get back to you as soon as possible</p>
                            <x-button.primary wire:click="confirm">back to Homepage</x-button.primary>
                    </div>
                </div>
            </div>
        </div>

    </x-container>
</div>
