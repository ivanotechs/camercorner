<div>
    @section('title', 'About Us')

    @include('components.header', [
        'title' => 'About Us',
        'inactive_path' => 'Home',
        'active_path' => 'About Us',
    ])

    <style>
        .scroll-snap-x {
            scroll-snap-type: x mandatory;
        }

        .snap-center {
            scroll-snap-align: center;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <x-container class=" items-center justify-center">
        <div class="grid grid-row">
            <div class="py-8">
                <img src="{{ asset('images/img-about-us-hero.png') }}" alt="About Us" class="w-full">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 py-5 md:py-16">
            <div class="col-span-1 items-start justify-center">
                <h3 class="text-dark-400 font-bold text-2xl md:text-4xl">
                    Connecting with experienced pharmacists for personalized consultations
                </h3>
            </div>
            <div class="col-span-2 flex flex-col space-y-8">
                <p class="text-base text-dark-900">
                    Welcome to BorderlessRx, your trusted platform for connecting with experienced pharmacists for
                    personalized consultations on minor ailments and medication management.
                </p>
                <p class="text-base text-dark-900">
                    At Borderless, we understand the importance of timely and reliable healthcare advice. That's why
                    we've created a seamless platform where you can easily access professional guidance from licensed
                    pharmacists from the comfort of your home.
                </p>
                <p class="text-base text-dark-900">
                    Our team of dedicated pharmacists is committed to providing you with accurate information,
                    practical recommendations, and compassionate care for your minor health concerns. Whether you have
                    questions about over-the-counter medications, managing common ailments, or seeking advice on
                    preventive care, our pharmacists are here to help.
                    With BorderlessRX, you can skip the wait times and hassle of scheduling appointments. Simply book
                    your appointment , and start your consultation process right away.
                    Experience convenience, reliability, and peace of mind with BorderlessRx. Your health is our
                    priority, and we're here to support you every step of the way.
                </p>
            </div>
        </div>
    </x-container>
    <div class="bg-secondary-500">
        <x-container class="grid md:grid-cols-2 gap-8 py-16">
            <div class="col-span-1">
                <img src="{{ asset('images/img-about-us-our-mission.png') }}" alt="About Us">
            </div>
            <div class="col-span-1 space-y-12 items-start justify-center md:mx-16">
                <h3 class="text-white font-bold text-4xl">
                    OUR MISSION
                </h3>
                <p class="text-base text-white">
                    Our mission at BorderlessRx  is to revolutionize the way individuals access medications for minor
                    ailments  by offering home consultation with trusted community pharmacist, dispense and deliver
                    necessary medication to patients in the comfort of their homes.
                </p>
            </div>
        </x-container>
    </div>
    <x-container>
        <div class="py-12">
            <h3 class="text-dark-400 font-bold text-4xl text-center">
                MEET THE TEAM
            </h3>
            <div class="py-4">

                 <div class="grid md:grid-cols-3 gap-4">
                    <div class="flex flex-col items-start justify-center ">
                        <img src="{{ asset('images/img-about-us-team-1.png') }}" alt="" class="mb-4">
                        <h6 class="text-xl font-bold mb-2">John Rice</h6>
                        <p class="text-xl font-bold text-secondary-500">Pharmacist</p>
                    </div>

                    <div class="flex flex-col items-start justify-center ">
                        <img src="{{ asset('images/img-about-us-team-3.png') }}" alt="" class="h-s mb-4">
                        <h6 class="text-xl font-bold mb-2">Ben Stone</h6>
                        <p class="text-xl font-bold text-secondary-500">Technologists</p>
                    </div>
                </div>

{{--                <div--}}
{{--                    x-data="{--}}
{{--                            container: null,--}}
{{--                            prev: null,--}}
{{--                            next: null,--}}
{{--                            init() {--}}
{{--                              this.container = this.$refs.container--}}

{{--                              this.update();--}}

{{--                              this.container.addEventListener('scroll', this.update.bind(this), {passive: true});--}}
{{--                            },--}}
{{--                            update() {--}}
{{--                              const rect = this.container.getBoundingClientRect();--}}

{{--                              const visibleElements = Array.from(this.container.children).filter((child) => {--}}
{{--                                const childRect = child.getBoundingClientRect()--}}

{{--                                return childRect.left >= rect.left && childRect.right <= rect.right;--}}
{{--                              });--}}

{{--                              if (visibleElements.length > 0) {--}}
{{--                                this.prev = this.getPrevElement(visibleElements);--}}
{{--                                this.next = this.getNextElement(visibleElements);--}}
{{--                              }--}}
{{--                            },--}}
{{--                            getPrevElement(list) {--}}
{{--                              const sibling = list[0].previousElementSibling;--}}

{{--                              if (sibling instanceof HTMLElement) {--}}
{{--                                return sibling;--}}
{{--                              }--}}

{{--                              return null;--}}
{{--                            },--}}
{{--                            getNextElement(list) {--}}
{{--                              const sibling = list[list.length - 1].nextElementSibling;--}}

{{--                              if (sibling instanceof HTMLElement) {--}}
{{--                                return sibling;--}}
{{--                              }--}}

{{--                              return null;--}}
{{--                            },--}}
{{--                            scrollTo(element) {--}}
{{--                              const current = this.container;--}}

{{--                              if (!current || !element) return;--}}

{{--                              const nextScrollPosition =--}}
{{--                                element.offsetLeft +--}}
{{--                                element.getBoundingClientRect().width / 2 ---}}
{{--                                current.getBoundingClientRect().width / 2;--}}

{{--                              current.scroll({--}}
{{--                                left: nextScrollPosition,--}}
{{--                                behavior: 'smooth',--}}
{{--                              });--}}
{{--                            }--}}
{{--                          }--}}
{{--                        " x-init="init()"--}}
{{--                    class="relative overflow-hidden group">--}}

{{--                    <div x-ref="container"--}}
{{--                         class="md:-ml-4 md:flex md:overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">--}}

{{--                            @foreach($teams as $k=>$team)--}}
{{--                                <div--}}
{{--                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">--}}
{{--                                    <img src="{{ asset('images/img-about-us-team-'.($k%3+1).'.png') }}" class="w-96 h-96">--}}
{{--                                    <div class="px-2 py-3 flex justify-between">--}}
{{--                                        <div class="text-lg font-semibold">Content Title</div>--}}
{{--                                        <time>3/6/2021</time>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            @endforeach--}}

{{--                            @foreach($teams as $team)--}}
{{--                                <div--}}
{{--                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">--}}
{{--                                    <div><img src="{{ asset('images/img-about-us-team-1.png') }}"></div>--}}
{{--                                    <div class="px-2 py-3 flex justify-between">--}}
{{--                                        <div class="text-lg font-semibold">Content Title</div>--}}
{{--                                        <time>3/6/2021</time>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            @endforeach--}}

{{--                    </div>--}}

{{--                    <div @click="scrollTo(prev)" x-show="prev !== null"--}}
{{--                         class="hidden md:block absolute top-1/2 left-0 bg-white p-2 rounded-full transition-transform ease-in-out transform -translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">--}}
{{--                        <div>&lt;</div>--}}
{{--                    </div>--}}
{{--                    <div @click="scrollTo(next)" x-show="next !== null"--}}
{{--                         class="hidden md:block absolute top-1/2 right-0 bg-white p-2 rounded-full transition-transform ease-in-out transform translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">--}}
{{--                        <div>&gt;</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

            <div class="spacer-1"></div>

        </div>
</div>
</x-container>
<div class="py-8 bg-primary-lighter">
    <x-container>
        <h3 class="text-dark-900 font-bold text-4xl text-center">
            TESTIMONIALS
        </h3>

        @if($testimonials->isNotEmpty())

            <div class="items-center justify-center md:px-28">
                <div id="animation-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

                        @foreach($testimonials as $testimonial)
                        <!-- Item 1 -->
                        <div class="hidden transition-opacity duration-700 ease-in-out" data-carousel-item>
                            <h3 class="text-dark-900 font-bold text-2xl text-center md:text-4xl absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                {{$testimonial->testimony}}
                            </h3>
                            <h6 class="text-secondary-500 text-xl font-bold text-center absolute block w-full -translate-x-1/2 -translate-y-1/2 bottom-1/4 left-1/2">
                                {{$testimonial->name}}, {{$testimonial->company}}
                            </h6>
                        </div>
                        @endforeach


                    </div>
                    <!-- Slider controls -->
                    <div class="flex items-center justify-center">
                        <button type="button" class="flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            @else
             <p>No testimonials found.</p>
           @endif

        </x-container>
    </div>
</div>
