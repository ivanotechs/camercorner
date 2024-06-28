<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @section('title','Blog')
    @include('components.header', [
            'title' => 'Blog',
            'inactive_path' => 'Home',
            'active_path' => 'Blog'
            ])
    <x-container>
        <div class="spacer-1"></div>
        <div class="grid grid-row">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-6">
                    
                     <div class="relative ... bg-primary">
                        <img src="{{ asset('images/img-blog-article-1.png') }}" alt="" class="md:h-full">
                        <div class="absolute bottom-20 left-0 ... bg-primary" style="width: 28vw">
                            <div class="grid grid-cols-12 ms-1 bg-primary-lighter">
                                <div class="col-start-2 col-span-10 " style="min-height: 13vh">
                                    {{-- <div class="" style="height: 4vh"></div> --}}
                                    <p class="ps-4 h6U mt-4">Rise Of A New Medical Age</p>
                                    <p class="ps-4 p-small ">published 18 january 2020</p>
                                    {{-- <div class="" style="height: 4vh"></div> --}}
                                </div>
                            </div>
                            
                        </div>
                      </div>
                </div>
                <div class="col-span-12 md:col-span-6 px-8">
                    <p class="h6-blog mb-6">Top Posts</p>
                    @if($top)
                    {{-- @for($categories as $category) --}}
                    @foreach($top as $blogtop)
                    <div class="grid grid-row my-4">
                        <div class="grid grid-cols-12">
                            <div class="col-span-4">
                                <img src="{{ $blogtop->image }}" alt="" class="h-full rounded">
                            </div>
                            <div class="col-span-7 px-5 my-auto">
                                <p class="h6-blog">{{$blogtop->title}}</p>
                                <p class="small">published {{\Illuminate\Support\Carbon::parse($blogtop->created_at)->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @else
                
                    <div class="col-span-4">
                        <div class="grid grid-row text-center">
                            <p class="h3">No Article found.</p>
                        </div>
                    </div>
                    {{-- @endfor --}}
                    @endif
                </div>
            </div>

            <div class="spacer-1"></div>
            <div class="grid grid-row">
                <p class="h3B">
                    All Articles
                </p>
            </div>

            <div class="spacer-05"></div>
                    <div class="grid grid-row">
                        <div class="grid grid-cols-12 gap-10">
                            @if($blogs->isNotEmpty())
                            @foreach($blogs as $blog)
                            <div class="col-span-12 md:col-span-6 lg:col-span-4 px-1">
                                
                                    <a href="{{route('web.blog_detail')}}">
                                        <img src="{{ $blog->image }}" alt="">
                                    <p class="h6-blog">{{$blog->title}}</p>
                                    <p class="smallB">published {{\Illuminate\Support\Carbon::parse($blog->created_at)->translatedFormat('d F Y') }}</p>
                                    </a>
                                
                            </div>
                            @endforeach
                            @else
                
                    <div class="col-span-4">
                        <div class="grid grid-row text-center">
                            <p class="h3">No Article found.</p>
                        </div>
                    </div>
                
                
                 
                @endif
                        </div>
                    </div>

                    <div class="spacer-2"></div>

        </div>
    </x-container>
</div>
