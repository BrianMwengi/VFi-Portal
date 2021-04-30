@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
               <br />
                    @if($layout == 'show')
                    <div class="container-fluid mt-4">
                    <div class="row">
                        <section class="col">
                        @include('VFiList') 
                        
                        <aside>
                        <a class="btn btn-primary" href="/dashboard">Create</a>
                        </aside>
                            </section>


        </div>
    </div>
@endif    
@endsection