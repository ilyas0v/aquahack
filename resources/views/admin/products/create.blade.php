@extends('admin.layouts.default')

@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                       <!-- FORM -->


                       <div class="row mt-4">
                            <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Yeni məhsul</strong>

                                            <div>

                                                @if($errors->any())
                                                    <ul class="alert alert-danger">
                                                        @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="{{ route('products.store') }}" autocomplete="off" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                @csrf


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Kateqoriya</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="category" id="category" class="form-control">
                                                            <option value="">Kateqoriya</option>
                                                            @foreach(config('aquametrics.CATEGORIES') as $cat)
                                                                <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Məhsul</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="product_id" id="product" class="form-control">
                                                            <option value="">Məhsul</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Say</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="text-input" name="count" placeholder="" class="form-control">
                                                    </div>
                                                </div>



                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Vaxt intervali</label>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <input type="date" id="text-input" name="start_time" placeholder="" class="form-control">
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        <input type="date" id="text-input" name="end_time" placeholder="" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Yerləşmə ərazisi</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="text-input" name="location" placeholder="" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="row form-group pull-right">
                                                    <button type="submit" class="btn btn-primary mr-2">
                                                    <i class="fa fa-dot-circle-o"></i> Save
                                                    </button>
                                                    <button type="reset" class="btn btn-danger mr-4">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>  
                                                
    
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        

                        <!-- END FORM -->

                    </div>
                </div>
            </div>
@endsection


@section('javascript')

<script>

    $(document).ready(function(){

        $('#category').on('change', function(){
            
            var cat_id = $(this).val();

            $.ajax({
                url    : "{{ route('products.get_products') }}",
                method : "GET",
                data   : {
                    cat_id : cat_id
                },

                dataType : 'json',

                success : function(res) {
                    
                    $('#product').html('');

                    res.map(function(product){
                        $('#product').append(`
                            <option value="${ product.id }">${ product.name }</option>
                        `);
                    });
                    
                },

                error : function(err) {
                    console.log(err);
                }
            })
        });

    });

</script>

@endsection