<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @section('title','Compliance')
    @include('components.header', [
            'title' => 'Compliance',
            'inactive_path' => 'Home',
            'active_path' => 'Compliance'
            ])
    <x-container>
        
            <div class="spacer-1"></div>
            <div class="grid grid-cols-12 gap-4">
                <div class="md:col-start-2 col-span-12 md:col-span-4">
                    <img src="{{ asset('images/img-how-it-works-home-consultation-1 (1).png') }}" alt="">
                </div>
                <div class="col-span-12 md:col-span-6 my-auto">
                    <div class="grid grid-cols-12">
                        <div class="col-start-2 col-span-10">
                            <p class="p-small">
                                We Have over 6 Certified professionals in different Healthcare Compliances. Understanding healthcare compliance is essential for healthcare providers, organizations, and professionals to navigate the complex regulatory landscape effectively. Healthcare organizations must navigate a complex landscape of regulations to ensure the highest standards of care, protect patient privacy, and maintain the trust of the communities they serve.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-1"></div>
            <div class="grid grid-cols-12">
                <div class="col-span-12 ">
                    <p class="h4 ps-1">
                        Our Compliance Certificates
                    </p>
                    <div class="spacer-1"></div>
                    <div class="grid grid-row">
                        <div class="grid grid-cols-12 gap-10">
                            @for( $i = 0; $i < 6; $i++)
                            <div class="col-span-12 md:col-span-6 lg:col-span-4 px-2">
                                <div class="card rounded-b-lg">
                                    <div class="spacer-05"></div>
                                    <p class="p-strong px-10">Title</p>
                                    <p class="px-10 mt-5 mb-9">
                                        HIPAA establishes national standards for the protection and confidential handling of Protected Health Information (PHI).
                                    </p>

                                    <div class="gird grid-row ">
                                        <div class="grid grid-cols-12">
                                            <div class="col-start-2 col-span-3 bg-light ml-4" 
                                            style="margin-top: -13px"
                                            >
                                                <div class=" text-center p-3">
                                                    <p class="">80%</p>
                                                </div>
                                            </div>
                                            <div class="col-span-7">
                                                <x-button.primary class="mt-6">
                                                    Download Certificate
                                                </x-button.primary>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="spacer-05"></div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="spacer-2"></div>
                </div>
            </div>

    </x-container>

</div>
