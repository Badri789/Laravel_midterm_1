@extends('layouts.home')

@section('title')
    <title>Employees</title>
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <table>
        <caption>Employees</caption>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Position</th>
            <th>Phone</th>
            <th>Is Hired</th>
            <th>Edit</th>
        </tr>
        @foreach($employees as $employee)
            <tr>

                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->surname}}</td>
                <td>{{$employee->position}}</td>
                <td>{{$employee->phone}}</td>
                @if ($employee->is_hired === 1)
                    <td>hired</td>
                @else
                    <td>not hired</td>
                @endif
                <td><button href="{{route("employees.edit", $employee->id)}}" style="background-color: red; width: 100%" class="btn btn-primary">Edit</button></td>
            </tr>
        @endforeach
    </table>
@endsection

