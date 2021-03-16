@extends('layouts.master')
@section('content')

    <div class="card">
      <div class="card-header">
        Student List <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#createStudent" >Create New</a>
      </div>
      <div class="card-body">
       <table class="table table-hover" id="studentTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
{{--            <tr>--}}
{{--              <th scope="row">1</th>--}}
{{--              <td>Mark</td>--}}
{{--              <td>Otto</td>--}}
{{--              <td>@mdo</td>--}}
{{--            </tr>--}}
          </tbody>
        </table>
      </div>
    </div>

    <!-- Create Student Modal -->
    <div class="modal fade" id="createStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form id="studentCreateForm" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label>First name</label>
                <input name="firstName" type="text" class="form-control" placeholder="Enter First name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input name="lastName" type="text" class="form-control" placeholder="Enter last name">
              </div>
                <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control" placeholder="Enter Email">
              </div>
                <div class="form-group">
                <label>Phone</label>
                <input name="phone" type="number" class="form-control" placeholder="Enter Phone">
              </div>
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="saveStudent" type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
        </div>
      </div>
    </div>
@push('script')
    <script type="text/javascript">
        $(document).ready(function (){

            //get student data via ajax call
            $.get('{{route('student.data')}}', function(response){
                console.log(response);
                $.each(response, function (i, value){
                    $('#studentTable tbody')
                        .append('<tr><td>'+ value.id+'</td><td>'+ value.first_name+'</td><td>'+value.last_name +'</td><td>'+value.email+'</td><td>'+value.phone+'</td><td><a href="#" data-eid="'+value.id+'" class="btn btn-warning btn-sm>">Edit</a> <a href="#" data-did="'+value.id+'" class="btn btn-danger btn-xs>">Delete</a></td></tr>');
                });
            });

            //csrf token setup in ajax header
            $.ajaxSetup({
                 headers: {
                     // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') or
                     'X-CSRF-TOKEN' : '{{csrf_token()}}',
                 },
            });

            //insert student data via ajax call
            $(document).on('submit', '#studentCreateForm', function (e){
                $('#createStudent').modal('hide');
                e.preventDefault();
                let formData = $(this).serialize();
                let formDataArray = $(this).serializeArray();
                $.ajax({
                    url: "{{route('student.store')}}",
                    type:"POST",
                    data:formDataArray,
                    cache:false,
                    success:function (response){
                        if(response){
                            console.log(response);
                            // $('#studentTable tbody')
                            //     .prepend('<tr><td>'+ response.id+'</td><td>'+ response.first_name+'</td><td>'+response.last_name +'</td><td>'+response.email+'</td><td>'+response.phone+'</td></tr>');
                        }
                    },
                    error:function(error){
                        console.log(error);
                    },
                })
            });//end insert operation


        });

    </script>
@endpush
@endsection
