@extends('layouts.app')
@section('content')
<div class="card">


     <div class="tab-content">
           <div class="tab-pane fade show active" id="all-payments">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Ref_No</th>
                            <th>Class</th>
                            <th>Method</th>
                            <th>Fee Month</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_classes as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->amount }}</td>
                            <td>{{ $p->ref_no }}</td>
                            <td>{{ $p->class_id ? $p->class->class_name : '' }}</td>
                            <td>{{ ucwords($p->method) }}</td>
                            <td>{{ $p->description }}</td>
                            <td>

                              {{--Edit--}}
                                {{-- <a class="btn btn-primary" href="{{route('payments.edit',$p->id)}}"> Edit</a> --}}
                                 {{--Delete--}}
                                 <a class="btn btn-danger"  href="{{route('payments.destroy',$p->id)}}" > Delete</a> 
                             </td> 
                        </tr>
                        @endforeach
                        <a href="{{route('payments.create')}}">
                        <button class="btn btn-primary" style="float:right;">Add New Payment</button>
                        </a>
                    </tbody>
                </table> 
            </div> 

            
            {{-- <div class="tab-pane fade" id="pc-{{ $mc->id }}"> --}}
                {{-- <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Ref_No</th>
                            <th>Class</th>
                            <th>Method</th>
                            <th>Fee Month</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_classes as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->amount }}</td>
                            <td>{{ $p->ref_no }}</td>
                            <td>{{ $p->my_class_id ? $p->class->class_name : '' }}</td>
                            <td>{{ ucwords($p->method) }}</td>
                            <td>{{ $p->description }}</td>

                                            Edit --}}
                                            {{-- <a href="" class="dropdown-item"><i class="icon-pencil"></i> Edit</a> --}}
                                            {{--Delete--}}
                                            {{-- <a id="" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a> --}}
                                            {{-- <form method="post" id="item-delete-" action="" class="hidden">@csrf @method('delete')</form> --}}
                            {{-- </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>

             </div> --}}
            {{-- @endforeach
        </div> --}}


{{-- 
    <div class="card-header header-elements-inline">
        <h5 class="card-title"><i class="icon-cash2 mr-2"></i> Select year</h5>
        
    </div>

    <div class="card-body">
        <form method="post" action="{{ route('payments.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="year" class="col-form-label font-weight-bold">Select Year <span class="text-danger">*</span></label>
                                <select data-placeholder="Select Year" required id="year" name="year" class="form-control select">
                                     @isset($my_classes)
                                                @foreach ($my_classes as $p)
                                                    <option value="{{$p->id}}">
                                                        {{$p->year}}</option>
                                                @endforeach
                                            @endisset
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2 mt-4">
                            <div class="text-right mt-1">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>
</div> --}}

 {{-- @if($selected)  --}}
{{-- <div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Manage Payments for  Session</h6>
       
    </div>

     <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#all-payments" class="nav-link active" data-toggle="tab">All Classes</a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Class Payments</a>
                <div class="dropdown-menu dropdown-menu-right">  --}}
                    {{-- @foreach($my_classes as $mc)
                    <a href="#pc-{{ $mc->id }}" class="dropdown-item" data-toggle="tab">{{ $mc->name }}</a>
                    @endforeach --}}
                {{-- </div>
            </li>
        </ul>  --}}

       
    {{-- </div>
</div> --}}
{{-- @endif --}}


@endsection   