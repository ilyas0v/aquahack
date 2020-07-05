@extends('admin.layouts.default')

@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                              <div class="au-card">
                                <div id="calendar"></div>
                              </div>
                            </div><!-- .col -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('javascript')
<script type="text/javascript">
    $(function() {

        // for now, there is something adding a click handler to 'a'
        var tues = moment().day(2).hour(19);


        var products = [];

        @foreach($user_products as $i => $up)
            for(var i=1;i < 100 ; i++) {

                var n = tues.clone().add({{ $i + 1  }} + i, 'days');
                console.log("isoString: " + n.toISOString());
                products.push({
                    title: '{{ $up->product_object["name"] }}',
                    start: n.toISOString(),
                    allDay: false,
                    url: '#'
                });

            }
        @endforeach

        // setup a few events
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            events: products
        });


    });
</script>
@endsection