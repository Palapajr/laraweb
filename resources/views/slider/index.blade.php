@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')
<div class="row"> 
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>@yield('title')</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive"><table class="table table-striped" id="table-1">
                <thead>                                 
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>  
                </table>
            </div>
          </div>                   
        
      </div>
    </div>
  </div>
@endsection