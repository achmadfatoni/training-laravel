@extends('layout')

@section('container')
    <div class="row">
        <div class="col-md-12">
            @if($listBiodata->count() <= 0)
                <p class="center">Tidak ada biodata</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th class="center">Name</th>
                        <th class="center">Address</th>
                        <th class="center">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listBiodata as $biodata)
                        <tr>
                            <td>{!! $biodata->name !!}</td>
                            <td>{!! $biodata->address !!}</td>
                            <td>{!! $biodata->email !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@stop