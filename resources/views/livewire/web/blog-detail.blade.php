<div>
    {{-- Stop trying to control. --}}
    @section('title','Blog Detail')
    @include('components.header', [
            'title' => 'Blog',
            'inactive_path' => 'Home',
            'active_path' => 'Blog'
            ])

    <x-container>
        <div class="spacer-1"></div>

        <div class="grid grid-row">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-5">
                    <p class="h3B ">Rise Of A New Medical Age</p>
                    <p class="p-small ">published 18 january 2020</p>
                </div>
                <div class="sm:col-end-12 col-span-2 sm:col-span-2 md-col-span-1">
                    <x-button.transparent>
                        Share <i class="fa fa-chevron-right ml-4"></i>
                    </x-button.transparent>
                </div>
            </div>
        </div>

        <div class="spacer-1"></div>
        
        <div class="grid grid-row">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <img src="{{ asset('images/img-blog-article-1.png') }}" alt="" class="w-full ">
                </div>
            </div>
        </div>

        <div class="spacer-05"></div>
        
        <div class="grid grid-row">
            <p class="p-v2">
                Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. 
                Amet imperdiet integer eu senectus rhoncus malesuada feugiat. Velit sagittis ultrices hendrerit 
                fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. 
                Quisque nunc quis nec sit.s malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. 
                Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. Quisque nunc quis nec sit.
                Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. Amet imperdiet integer eu senectus rhoncus 
                malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi 
                congue purus nullam velit tellus et. Quisque nunc quis nec sit.s malesuada feugiat. Velit sagittis ultrices hendrerit 
                fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. Quisque nunc quis 
                nec sit.Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. Amet imperdiet integer eu senectus 
                rhoncus malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. 
                Enim nisi congue purus nullam velit tellus et. Quisque nunc quis nec sit.s malesuada feugiat. Velit sagittis ultrices 
                hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. 
                Quisque nunc quis nec sit.Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. 
                Amet imperdiet integer eu senectus rhoncus malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. 
                Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. Quisque nunc quis nec sit.s malesuada feugiat. 
                Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. 
                Quisque nunc quis nec sit.Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. Amet imperdiet integer eu senectus 
                rhoncus malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. 
                Quisque nunc quis nec sit.s malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam
                 velit tellus et. Quisque nunc quis nec sit.Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. Amet imperdiet integer 
                 eu senectus rhoncus malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus 
                 et. Quisque nunc quis nec sit.s malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. 
                Enim nisi congue purus nullam velit tellus et. Quisque nunc quis nec sit.
            </p>
        </div>

        <div class="spacer-05"></div>

        <div class="grid grid-row bg-primary">
            <div class="grid grid-cols-12 ms-1 bg-primary-lighter">
                <div class="col-start-2 col-span-10 ">
                    {{-- <div class="" style="height: 4vh"></div> --}}
                    <p class="ps-4 h6U mt-4">Rise Of A New Medical Age</p>
                    <p class="ps-4 p-small ">published 18 january 2020</p>
                    {{-- <div class="" style="height: 4vh"></div> --}}
                </div>
            </div>
        </div>

        <div class="spacer-05"></div>

        <div class="grid grid-row">
            <p class="p-v2">
                Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. 
                Amet imperdiet integer eu senectus rhoncus malesuada feugiat. Velit sagittis ultrices hendrerit 
                fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit 
                tellus et. Quisque nunc quis nec sit.s malesuada feugiat. Velit sagittis ultrices hendrerit 
                fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. 
                Quisque nunc quis nec sit.Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. 
                Amet imperdiet integer eu senectus rhoncus malesuada feugiat. Velit sagittis ultrices hendrerit fames 
                ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit tellus et. Quisque 
                nunc quis nec sit.s malesuada feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim 
                sit id tristique. Enim nisi congue purus nullam velit tellus et. Quisque nunc quis nec sit.Lorem ipsum dolor 
                sit amet consectetur. Eget neque egestas habitasse felis. Amet imperdiet integer eu senectus rhoncus malesuada
                 feugiat. Velit sagittis ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi 
                 congue purus nullam velit tellus et. Quisque nunc quis nec sit.s malesuada feugiat. Velit sagittis 
                 ultrices hendrerit fames ac massa sapien. Morbi enim sit id tristique. Enim nisi congue purus nullam velit 
                 tellus et. Quisque nunc quis nec sit.Lorem ipsum dolor sit amet consectetur. Eget neque egestas habitasse felis. sit.
            </p>
        </div>

        <div class="spacer-05"></div>

        <grid class="grid grid-row">
            <p class="p-small"><span class="p">categories:</span> Hospital, Counselling</p>
        </grid>

        <div class="spacer-05"></div>

        <div class="grid grid-row my-6">
            <p class="">Related Tags</p>
        </div>
        <div class="grid grid-row">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-12 md:col-span-6">
                    <div class="grid grid-row">
                        <div class="grid grid-cols-12">
                            @for($i=0;$i<4;$i++)

                            <div class="col-span-3 px-2">
                                <x-button.secondary>
                                    Share <i class="fa fa-chevron-right ml-4"></i>
                                </x-button.secondary>
                            </div>

                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer-05"></div>

        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6 blog-form p-9">
                <form action="" method="post">
                    <div class="spacer-05"></div>
                    <div class="grid grid-row mb-4">
                        <p class="h5">
                            Leave A Comment
                        </p>
                    </div>
                    <div class="grid grid-row mb-4">
                        <p class="p">
                            Expresss how helpfulful this article was to you.
                        </p>
                    </div>
                    <div class="grid grid-row mt-4">
                        <p class="p-strong"><span class="label-required">*</span>Name</p>
                    </div>
                    <div class="grid grid-row mb-4">
                        <input type="text" name="name" id="name" class="input">
                    </div>
                    <div class="grid grid-row mt-4">
                        <p class="p-strong"><span class="label-required">*</span>Email</p>
                    </div>
                    <div class="grid grid-row mb-4">
                        <input type="text" id="email" name="email" class="input">
                    </div>
                    
                    <div class="grid grid-row mt-4">
                        <p class="p-strong">Comment</p>
                    </div>
                    <div class="grid grid-row mb-4">
                        <textarea id="message" name="message" required rows="4" class="input-message"></textarea>
                    </div>
                    <div class="grid grid-row mt-6">
                        <div class="grid grid-cols-12">
                            <div class="col-span-6">
                                <div class="grid grid-row">
                                    <x-button.primary class="ms-0 text-center">
                                        Send Message
                                    </x-button.primary>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                   </form>
            </div>

            <div class="col-span-12 md:col-span-6 ">

                <div style="height: 90%; display: flex; flex-direction: column;  overflow-y: auto;">
                    <div class="grid grid-row">
                        <div class="grid-cols-12 px-5">
                            <div class="col-start-4 col-span-8">
                        <p class="h5">
                            Comments (4)
                        </p>
                        </div>
                    </div>
                    </div>

                    <div class="grid grid-row my-7">

                        <div class="grid-cols-12 px-5">
                        <div class="col-start-4 col-span-8">
                            <div class="grid grid-row">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-2">
                                        <img src="{{ asset('images/img-blog-article-comment-1.png') }}" alt="" class="mx-auto ">
                                    </div>
                                    <div class="col-span-5 my-auto">
                                        <p class="h6-blog">Ali Rashid</p>
                                        <p class="smallB">5 hours ago</p>
                                    </div>
                                    <div class="col-end-12 col-span-3">
                                        <x-button.transparent>
                                            Share <i class="fa fa-chevron-right ml-4"></i>
                                        </x-button.transparent>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="spacer-05"></div> --}}
                            <div class="grid gid-row border-b">
                                <p class="p-v2 px-5 my-10">
                                    Lorem ipsum dolor sit amet consectetur. Enim enim pretium duis dignissim. Quisque diam et ultrices elementum sed
                                     ultrices adipiscing neque. Quis diam eget posuere ultricies. Quam aliquet diam auctor 
                                </p>
                            </div>
                            {{-- <div class="spacer-05 border-b"></div> --}}
                        </div>
                     </div>

                    </div>

                    <div class="grid grid-row my-7">

                        <div class="grid-cols-12 px-5">
                        <div class="col-start-4 col-span-8">
                            <div class="grid grid-row">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-2">
                                        <img src="{{ asset('images/img-blog-article-comment-1.png') }}" alt="" class="mx-auto ">
                                    </div>
                                    <div class="col-span-5 my-auto">
                                        <p class="h6-blog">Ali Rashid</p>
                                        <p class="smallB">5 hours ago</p>
                                    </div>
                                    <div class="col-end-12 col-span-3">
                                        <x-button.transparent>
                                            Share <i class="fa fa-chevron-right ml-4"></i>
                                        </x-button.transparent>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="spacer-05"></div> --}}
                            <div class="grid gid-row border-b">
                                <p class="p-v2 px-5 my-10">
                                    Lorem ipsum dolor sit amet consectetur. Enim enim pretium duis dignissim. Quisque diam et ultrices elementum sed
                                     ultrices adipiscing neque. Quis diam eget posuere ultricies. Quam aliquet diam auctor 
                                </p>
                            </div>
                            {{-- <div class="spacer-05 border-b"></div> --}}
                        </div>
                     </div>

                    </div>
                    
                </div>

                <div class="grid grid-row">
                    {{-- <x-button.link>
                        Share <i class="fa fa-chevron-right ml-4"></i>
                    </x-button.link> --}}
                    <a href="" class="btn" >view 2 comments <i class="fa fa-chevron-right ml-4"></i></a>
                </div>
            </div>
        </div>

        <div class="spacer-05"></div>

        <div class="grid grid-row">
            <p class="h3B">
                Related Articles
            </p>
        </div>

        <div class="grid grid-row my-9">
            <div class="grid grid-cols-12">
                
                    @for( $i = 0; $i < 3; $i++)
                            <div class="col-span-12 md:col-span-6 lg:col-span-4 px-2">
                                
                                    <a href="{{route('web.blog_detail')}}">
                                        <img src="{{ asset('images/img-blog-article-6.png') }}" alt="" class="w-full">
                                    <p class="h6-blog">Best Health Habits To Carryout At Home</p>
                                    <p class="smallB">published 18 january 2020</p>
                                    </a>
                                
                            </div>
                    @endfor
                
            </div>
        </div>

        <div class="spacer-1"></div>
    </x-container>

</div>
