@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-align-justify"></i><span>Menu</span>
          </button>

          <div class="navseparator"></div>

          <h3 class="title">Database Barang</h3>
        </nav>

    <script>
      $(document).ready(function(){
        $('#sidebarCollapse').on('click',function(){
          $('#sidebar').toggleClass('active');
        });
      });
    </script>
@endsection
