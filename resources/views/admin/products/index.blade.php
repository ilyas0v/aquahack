@extends('admin.layouts.default')

@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Məhsullarım</h2>
                                    <a href="{{ route('products.create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Əlavə et
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4">

                            @foreach($user_products as $up) 
                            <div class="col-md-4" data-toggle="modal" data-target="#product_{{ $up->product_id }}">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:55px; height:55px;" alt="" src="{{ config('aquametrics.IMAGES')[$up->product_id] }}">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="text-light display-6">{{ $up->product_object['name'] }}</h6>
                                                    @if($up->product_object['category'] == 1)
                                                        <p style="color:#fff;">Say: {{ $up->count }}</p>
                                                    @else
                                                        <p style="color:#fff;">Sahə: {{ $up->count }} m<sup>2</sup></p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <p style="font-size:12px;">Interval: <b>{{ $up->start_time->format('d.m.Y') }} - {{ $up->end_time->format('d.m.Y') }}</b></p>
                                                <p>{{ $up->water_consumption }} mm</p>
                                                @php($mm_to_m = $up->water_consumption * 0.01)
                                                @php($m_cube = $mm_to_m * $up->count)
                                                <p>{{ $m_cube * 0.07 }} AZN</p>
                                            </li>
                                        </ul>

                                    </section>
                                </aside>
                            </div>
                            @endforeach


                            <!-- <div class="col-md-4">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:55px; height:55px;" alt="" src="data:image/jpeg;base64,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">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="text-light display-6">Pomidor</h6>
                                                    <p style="color:#fff;">1 sot</p>
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <p>100 mm (ay)</p>
                                                <p>14 AZN</p>
                                            </li>
                                        </ul>

                                    </section>
                                </aside>
                            </div> -->



                        </div>

                    </div>
                </div>
            </div>







@foreach($user_products as $up)
<!-- modal small -->
<div class="modal fade" id="product_{{ $up->product_id }}" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">{{ $up->product_object['name'] }}</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            @foreach(config('aquametrics.MONTHS') as $i => $m)
                                @php($cons = $up->getMonthlyWaterConsumption($i))
                                @php($mm_to_m = $cons * 0.01)
                                @php($m_cube = $mm_to_m * $up->count)
                                <p>
                                    <b>{{ $m }}</b> : {{ $cons }} mm  
                                    <span class="badge badge-primary">{{ $m_cube * 0.07 }} AZN</span>
                                </p>
                            @endforeach
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal small -->
@endforeach

@endsection