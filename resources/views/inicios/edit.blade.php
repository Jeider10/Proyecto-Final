@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Inicio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($inicio, ['route' => ['inicios.update', $inicio->id], 'method' => 'patch']) !!}

                        @include('inicios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection