
    <div class="container-lg mt-4">
        <div class="row">
            <div class="col-12 col-md-7 mb-4 order-2 order-md-1">
                <div class="w-100">
                    <div class="rounded-f mt-4 bg-white p-4">
                        <div class="d-flex justify-content-between">
                            <h4>
                                Transactions
                            </h4>
                            <button class="bg-secondary-light rounded-pill border-0 px-4 fw-bold">
                                <i class="fa fa-filter"></i> Filter
                            </button>



                        </div>
                        <div class="table-responsive position-relative mt-4">

                            <table class="table  table-hover">
                                <thead class="overflow-hidden">
                                <tr>
                                    <th>Product</th>
                                    <th>User</th>
                                    <th>Amount Sold</th>
                                    <th>Amount Gained</th>
                                </tr>
                                </thead>
                                <tbody class="sort">
                                @forelse ([1, 2, 3, 4, 5, 6] as $w)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle p-3 bg-secondary-light" src="{{asset('images/Arrow 1.png')}} ">
                                                <div class="ml-2 ">
                                                    <span>Fudral Dress IntoRita</span>
                                                    <span>20th October 1pm</span>
                                                    {{-- <span>{{ showDateTime($history->created_at, 'M d Y @g:i:a') }}</span> --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>Ivan Djoukeng</td>
                                        <td>13, 500F</td>
                                        <td>2, 500F</td>

                                    </tr>
                                    @empty
                                    <tr class="d-flex justify-content-center">
                                       <td>
                                        <h4 class="text--muted">nothing found</h4>
                                        </td>
                                    </tr>

                                @endforelse


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-12 col-md-5 order-1 order-md-2 mb-4">
                <div class="rounded-f bg-white p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Wallet</h4>
                    </div>
                   
                            <div class="rounded-f bg-secondary-2 p-4 mb-4 " >
                                <div class="w-100 d-flex justify-content-end">
                                    <div class="rounded-f border border-white p-3">
                                        <img src="{{asset('images/wallet-card.png')}}" alt="">
                                    </div>
                                </div>
                                <p class="text-white">
                                    Account Balance
                                </p>
                                <h2 class="text-white">
                                    154, 500 XAF
                                </h2>
                            </div>



                    <hr class="mt-4">

                    <div class="mt-4">
                        <h4>Do More</h4>
                        <div class="mt-4 row ">
                                <div class="col-6 mb-4">
                                    <div class="rounded-f bg-orange p-4 d-flex justify-content-center align-items-center w-100 h-100">
                                        <a href="#">
                                            <span>
                                                                <center><img src="{{asset('images/add.png')}}" alt=""></center>
                    
                                                                <p class=""><center class="text-white">@lang('Add Protucts')</center>
                                                </p>
                                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="rounded-f bg-danger p-4 d-flex justify-content-center align-items-center w-100 h-100">
                                        <a href="#">
                                             <span>
                                                            <center><img src="{{asset('images/add.png')}}" alt=""></center>
                    
                                                            <p class=""><center class="text-white">Store</center>
                                                 </p>
                                                        </span>
                                        </a><!-- quick-link-card end -->
                                    </div>
                                </div>
                    

                                <div class="col-6 mb-4">
                                    <div class="rounded-f bg-green p-4 d-flex justify-content-center align-items-center w-100 h-100">
                                        <a href="#">
                                            <span>
                                                <center><img src="{{asset('images/exchange.png')}}" alt=""></center>
                                                <p class=""><center class="text-white">@lang('Sells')</center>
                                                </p>
                                            </span>
                                        </a><!-- quick-link-card end -->
                                    </div>
                                </div>

                
                                <div class="col-6 mb-4">
                                    <div class="rounded-f bg-secondary p-4 d-flex justify-content-center align-items-center w-100 h-100">
                                        <a href="#">
                                             <span>
                                                <center><img src="{{asset('images/exchange.png')}}" alt=""></center>
                                                <p class=""><center class="text-white">@lang('My Followers')</center>
                                                 </p>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                    
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

