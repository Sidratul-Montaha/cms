@extends('welcome')
@section('operation')


    <center><a href="{{route('admin.list')}}" type="button" class="btn btn-primary align-content-center">
            ADD ADMIN
        </a></center>


    <table class="table table-bordered table-hover">

        <thead>
        <th > Id </th>
        <th > Name </th>
        <th > Email </th>
        <th> Contact </th>
        <th> Password </th>
        <th> Actions </th>

        </thead>

        <tbody>
        @foreach($adminlist as $data )
            <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->number}}</td>
            <td>{{$data->password}}</td>

            <td>
                <a class="btn btn-info" href="">update</a>
                <a class="btn btn-pinterest" href="">delete</a>
            </td>
            </tr>
        @endforeach
        </tbody>



    </table>



@endsection
