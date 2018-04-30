@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Plants <br />
                    <a href='/plants/create'>Add Plants</a>
                </div>

                <div class="card-body">
                    <table class="table" border='1'>
                        <tr>
                            <td>Name</td>
                            <td>Comments</td>
                            <td>Image File Name</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach($plants as $plant)
                            <tr>
                                <td>{{ $plant['name'] }}</td>
                                <td>{{ $plant['comments'] }}</td>
                                <td>{{ $plant['imageFileName'] }}</td>
                                <td><a href='/plants/edit/{{ $plant['id'] }}'>Edit</a></td>
                                <td><a href='/notes/plant/{{$plant['id']}}'>Notes</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection