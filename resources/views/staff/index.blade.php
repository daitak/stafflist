@extends('app')
  
  @section('content')
      <h2 class="page-header">Staff Search</h2>


      <form class="form-inline text-center lead" role="form" method="GET" action="/staff/index">
          <div class="form-group">
              <div class="col-md-6">
                  <input type="keyword" class="form-control" name="keyword" value="">
              </div>
          </div>
  
          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                      Search
                  </button>
              </div>
          </div>
      </form>

      <table class="table table-striped table-hover">
          <thead>
          <tr>
              <th>Mail</th>
              <th>Name</th>
              <th></th>
          </tr>
          </thead>
          <tbody>
              @foreach($staff_list as $staff)
              <tr>
                   <td>{{{ $staff->mail }}}</td>
                   <td>{{{ $staff->l_name .' '. $staff->f_name }}}</td>
                   <td><a href="/staff/show/{{{ $staff->mail }}}" class="btn btn-default btn-xs">Detail</a></td>
              </tr>
               @endforeach
          </tbody>
      </table>
  @endsection
