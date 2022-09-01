@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title ml-0 mb-4">Add Career</h4><br>
                                <form class="forms-sample" method="post" action="{{ route('edit-career-data') }}" id="edit_career">
                                    @csrf

                                    <input type="hidden" name="edit_career_id" value="{{$careerRec->id}}">
                
                                    <div class="form-group">
                                        <label>Technology Name</label>
                                        <input type="text" class="form-control" id="tech_name" name="tech_name" value="{{ $careerRec->technology }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification" value="{{ $careerRec->qualification }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" id="experience" name="experience" value="{{ $careerRec->experience }}">
                                    </div>
                
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" id="location" name="location" value="{{ $careerRec->location }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Time</label>
                                        <input type="text" class="form-control" id="time" name="time" value="{{ $careerRec->time }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary" value="{{ $careerRec->salary }}">
                                    </div>
                                    
                                    
                                    <div class="form-group add_requirement">
                                        <div class="row align-items-center mb-2">
                                            <div class="col-6">
                                                <label class="mb-0">Requirement</label>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <div class="mr-2"><a class="delete btn">-</a></div>
                                                <div><a class="add" class="btn add-more">+</a></div> 
                                            </div>
                                        </div>

                                        @php
                                            $key = 0;
                                        @endphp
                                        @foreach(json_decode($careerRec->requirement) as $value)
                                        @php
                                            $key++;
                                            $class = ($key == 1) ? 'form-control' : 'form-control_add';
                                        @endphp
                                            <input type="text" class="{{ $class }}" id="requirement" name="requirement[]" value="{{ $value }}">
                                        @endforeach
                                    </div>

                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="number" class="form-control" id="position" name="position" value="{{ $careerRec->position }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light" id="cancle-btn" type="button">Cancel</button>
                
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection