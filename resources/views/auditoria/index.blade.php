@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Usuarios</h4>
                            <a href="{{url("admin/auditoria/create")}}" class="btn btn-success mb-2">Agregar</a>
                           
                            <table class="table admin-table">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    
                                    <th>Nombre</th>
                                    
                                    <th></th>
                                </tr>
                                @foreach($auditorias as $audi)
                                    {{-- @if($client->active_user=='enabled') --}}
                                        <tr>
                                            <td>{{$audi->id}}</td>
                                            
                                            <td>{{$audi->nombre}}</td>
                                            
                                            <td>
                                                <form action="{{url('admin/auditoria')}}/{{$audi->id}}" method="POST"
                                                      class="pull-left px-1">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-xs">Eliminar
                                                    </button>
                                                </form>



                                                <a href="{{url('admin/auditoria')}}/{{$audi->id}}/edit"
                                                   class="btn btn-info btn-xs px-1">Editar</a>
                                               
                                                
                                            </td>
                                        </tr>
                                    {{-- @endif --}}
                                @endforeach

                                </tbody>
                            </table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
