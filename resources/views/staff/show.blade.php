@extends('app')
  
  @section('content')
      <h2 class="page-header">
          <a href="{{ Request::header('referer') }}" class="btn btn-default btn-xs">Back</a>
          Staff Detail
      </h2>

      <div class="form-inline text-center lead">
          <div class="col-md-4">
              <div class="imgfile">
                   <img src="{{{ $staff->imgfile }}}" title="imgfile" style="max-width:400px">
              </div>
          </div>
          <div class="col-md-4">
              <div class="name">{{{ $staff->l_name.' '.$staff->f_name }}}</div>
              <div class="mail">Mail: {{{ $staff->mail }}}</div>
              <div class="enter_at">Enter At: {{{ $staff->enter_at }}}</div>
              <div class="degree">Degree: {{{ $staff->degree }}}</div>
          </div>
      </div>


      <table class="table table-striped table-hover">
          <thead>
          <tr>
              <th>Utime</th>
              <th>Department</th>
              <th>Section</th>
              <th>Rank</th>
              <th>Tel</th>
          </tr>
          </thead>
          <tbody>
              @foreach($staff_detail as $staff_detail)
              <tr>
                   <td>{{{ $staff_detail->utime }}}</td>
                   <td>{{{ $staff_detail->department }}}</td>
                   <td>{{{ $staff_detail->section }}}</td>
                   <td>{{{ $staff_detail->rank }}}</td>
                   <td>{{{ $staff_detail->tel }}}</td>
              </tr>
               @endforeach
          </tbody>
      </table>
  @endsection
