@extends('layout.mainlayout')

@section('content')
    <div class="container items-wrapper">
        <div class="row">
            <div class="col-lg-4 col-12 side-content-items">
                <div class="card bg-dark border-0 rounded-1 shadow ">
                    <div class="card-body text-white mx-2">
                        <div class="text-center mb-2 d-lg-block d-none">
                            <img src="{{ asset('storage/photo/'.$game->thumbnail) }}" width="160" alt="">
                        </div>
                        <h2 class="heading-title max-content">{{ $game->name }}</h2>
                        <div class="mt-4">
                            <div class="row ">
                                <div class="col-1 p-0 d-lg-none d-block me-3 me-md-0">
                                    <img src="{{asset('storage/photo/'.$game->thumbnail)}}" width="43" alt="">
                                </div>
                                <div class="col align-items-center">
                                    <p class="opacity-50 mb-0 ">{{ $game->developer }}</p>
                                    <p class="text-primary ">Open 24 Jam</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>{{ $game->short_description }}</p>
                            <p>Cara Top Up {{ $game->name }} :</p>
                            <ul>
                                <li><p> {!! nl2br($game->tutorial) !!}</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="card bg-dark border-0 rounded-1 shadow text-white mt-lg-0 mt-4">
                    <div class="card-header">
                        <p class="fs-5 mb-2">Lengkapi Data</p>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3">
                                    <label>User ID</label>
                                    <input type="number" name="" id="" placeholder="Masukan User ID" class="form-control rounded-1">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label>Server ID</label>
                                    <input type="number" name="" id="" placeholder="Masukan Server ID" class="form-control rounded-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark border-0 rounded-1 shadow text-white mt-4">
                    <div class="card-header">
                        <p class="fs-5 mb-2">Pilih Nominal</p>
                    </div>
                    <div class="card-body mx-2">
                        <div class="row">
                            {{-- <p class="fs-5">Top Up</p> --}}
                            
                            @for ($i = 0; $i < 19; $i++)
                            <div class="col-lg-4 col-md-4 col-6 gy-2 px-1">
                                <div class="list-group shadow h-100">
                                    <input type="radio" name="radioValue" id="nominal-{{$game->value}}" value="{{$game->value}}" class="d-none">
                                    <label for="nominal-{{$game->value}}" class="list-group-items h-100">
                                        <div class="row">
                                            <div class="col ">
                                                <div class="row">
                                                    <div class="col  nominal-name">140 (127+13) Diamonds</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col  nominal-price"><i>Rp 33.900</i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="card bg-dark border-0 rounded-1 shadow text-white mt-4">
                    <div class="card-header">
                        <p class="fs-5 mb-2">Pilih Metode Pembayaran</p>
                    </div>
                    <div class="card-body">
                        <div class="accordion " id="accordionExample">
                            <div class="accordion-item rounded-3">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark px-3 rounded-0" data-bs-toggle="collapse" data-bs-target="#payment-dana" aria-expanded="false" aria-controls="payment-dana">
                                  <div class="d-flex justify-content-between w-100">
                                    <div class="text-white fs-sm">E-Wallet</div>
                                    <div class="text-white fs-sm">Rp. 132,400</div>
                                  </div>
                                </button>
                              </h2>
                              <div id="payment-dana" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                  <div class="accordion-body bg-soft-dark">
                                      <label for="payment-method-dana" class="d-block w-100 h-100 payment-method mb-2" style="cursor: pointer">
                                        <input type="radio" name="payment-method" id="payment-method-dana" class="d-none">
                                        <div class="card bg-white-dark ">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between w-100">
                                                    <span class="fs-md">DANA</span>
                                                    <span class="fs-md">Rp. 132,400</span>
                                                </div>
                                                <hr class="mx-1">
                                            </div>
                                        </div>
                                      </label>
                                      <label for="payment-method-gopay" class="d-block w-100 h-100 payment-method mb-2" style="cursor: pointer">
                                        <input type="radio" name="payment-method" id="payment-method-gopay" class="d-none">
                                        <div class="card bg-white-dark ">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between w-100">
                                                    <span class="fs-md">GOPAY</span>
                                                    <span class="fs-md">Rp. 132,400</span>
                                                </div>
                                                <hr class="mx-1">
                                            </div>
                                        </div>
                                      </label>
                                </div>
                            </div>

                            </div>
                          </div>
                    </div>
                </div>

                <div class="card bg-dark border-0 rounded-1 shadow text-white mt-4">
                    <div class="card-header">
                        <p class="fs-5 mb-2">Nomor Whatsapp</p>
                    </div>
                    <div class="card-body mx-2">
                        <p class="mb-1 opacity-75"><i>Nomor HP anda</i></p>
                        <input type="number" name="telp" id="" placeholder="Nomor Whatsapp [628xxxx]" class="form-control">
                    </div>
                </div>

                <div class="text-end mt-4">
                    <button class="btn btn-primary border-0 rounded-1"><i class="bi bi-cart"></i> Order</button>
                </div>

            </div>
        </div>
    </div>
@endsection
