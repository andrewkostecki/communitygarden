@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Users <br />
                <!-- <a href='/systems/create'>Add User</a> -->
            </div>

                <div class="card-body">
                    <table class=table border="1">
                        <tr>
                            <td>Name</td>
                            <td>Image File Name</td>
                            <td></td>
                        </tr>
                        @foreach($systems as $system)
                        <tr>
                            <td>{{ $system['name'] }}</td>
                            <td>{{ $system['imageFileName'] }}</td>
                            <td><a href='/systems/edit/{{ $system['id'] }}'>Edit</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection