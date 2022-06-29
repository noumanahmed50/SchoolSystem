@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Create Payment</h6>
            {{-- {!! Qs::getPanelOptions() !!} --}}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-store" method="post" action="{{ route('payments.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Name of Student <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="title" value="{{ old('title') }}" required type="text" class="form-control" placeholder="SN">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="my_class_id" class="col-lg-3 col-form-label font-weight-semibold">Class </label>
                            <div class="col-lg-9">
                                <select class="form-control select-search" name="class_id" id="my_class_id">
                                    <option value="">All Classes</option>
                                    @foreach($my_classes as $school_class)
                                        <option {{ old('school_class_id') ==$school_class->id ? 'selected' : '' }} value="{{$school_class->id}}"> {{$school_class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="method" class="col-lg-3 col-form-label font-weight-semibold">Payment Method</label>
                            <div class="col-lg-9">
                                <select class="form-control select" name="method" id="method">
                                    <option selected value="Cash">Cash</option>
                                    <option  value="Online">Online</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-lg-3 col-form-label font-weight-semibold">Amount (PKR) <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ old('amount') }}" required name="amount" id="amount" type="number">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="amount" class="col-lg-3 col-form-label font-weight-semibold">Ref_no  </label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ old('ref_no') }}" required name="ref_no" id="amount" type="number">
                            </div>
                        </div>
                     

                        <div class="form-group row">
                            <label for="description" class="col-lg-3 col-form-label font-weight-semibold">Description</label>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ old('description') }}" name="description" id="description" type="text">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="description" class="col-lg-3 col-form-label font-weight-semibold">Year of Payment</label>
                            
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ old('year') }}" name="year" id="Year" type="number">
                                <option value="">Payment Year</option>
                             @foreach ($my_classes as $school_session)
                                                    <option value="{{$school_session->id}}">
                                                        {{$school_session->year}}</option>
                                                @endforeach
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Payment Create Ends--}}

@endsection
