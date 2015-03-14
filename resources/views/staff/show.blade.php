@extends('app')
  
  @section('content')
      <h2 class="page-header">Staff Detail</h2>

      <div class="text-left">
         <a href="{{ Request::header('referer') }}" class="btn btn-default btn-xs">Back</a>
      </div>

      <div class="text-center">
          <div class="name">{{{ $staff->l_name.' '.$staff->f_name }}}</div>
          <div class="mail">{{{ $staff->mail }}}</div>
      </div>

      <table class="table table-striped table-hover">
          <thead>
          <tr>
              <th>Utime</th>
              <th>Department</th>
              <th>Rank</th>
              <th>Tel</th>
          </tr>
          </thead>
          <tbody>
              @foreach($staff_detail as $staff_detail)
              <tr>
                   <td>{{{ $staff_detail->utime }}}</td>
                   <td>{{{ $staff_detail->department }}}</td>
                   <td>{{{ $staff_detail->rank }}}</td>
                   <td>{{{ $staff_detail->tel }}}</td>
              </tr>
               @endforeach
          </tbody>
      </table>
  @endsection
