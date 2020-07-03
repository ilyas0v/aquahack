@extends('admin.layouts.default')


@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        
                        @include('admin.words.header')

                        <!-- TABLE -->

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Word(az)</th>
                                                <th>Word(de)</th>
                                                <th>Level</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($words as $p)
                                                <tr>
                                                    <td>{{ $p->id }}</td>
                                                    <td>{{ $p->word_az }}</td>
                                                    <td>{{ $p->word_de }}</td>
                                                    <td>{{ $p->level ? $p->level->name : '' }}</td>

                                                    <td>
                                                        <div class="d-flex flex-direction-row justify-content-end">
                                                            <a href="{{ route('words.edit', $p->id) }}" class="btn btn-secondary">Edit</a>

                                                            <form action="{{ route('words.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Silmek istediyinizden eminsinizmi?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-danger" value="Delete">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            {!! $words->links() !!}
                        </div>

                        <!-- END TABLE -->

                    </div>
                </div>
            </div>
@endsection