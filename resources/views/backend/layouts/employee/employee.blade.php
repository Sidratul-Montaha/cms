@section('welcome')
    @section('operation')


        <center><a href="{{route('emp.form')}}" type="button" class="btn btn-primary align-content-center">
                ADD EMPLOYEE
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
            @foreach($empform as $emp )
                <tr>
                    <th scope="row">{{$emp->id}}</th>
                    <td>{{$emp->name}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp>number}}</td>
                    <td>{{$emp->password}}</td>

                    <td>
                        <a class="btn btn-info" href="">update</a>
                        <a class="btn btn-pinterest" href="">delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>



        </table>



    @endsection
