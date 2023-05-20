@extends('layouts/admin')

@section('content')

<table class="table table-striped">
    
    <h2 class="text-center m-5">Dettagli del progetto : {{$project->project_name}}</h2>
    <tbody>
      <tr>
       
        <td>Nome Progetto : </td>
        <td>{{$project->project_name}}</td>
        
      </tr>
      <tr>
        
        <td>Descrizione:</td>
        <td>{{$project->project_description}}</td>
        
      </tr>
      <tr>
        
        <td>Link Github :</td>
        <td> <a href="">{{$project->github_link}}</a></td>
      </tr>

      <tr>
        <td>Data creazione : </td>
        <td>{{$project->created_at}}</td>
      </tr>

      <tr>
        <td>Creato da :</td>
        <td>{{$project->created_by}}</td>
      </tr>
    </tbody>
  </table>

  <div class="d-flex justify-content-center gap-3">
      <div><button class="btn btn-info" ><a href="{{route('admin.projects.edit' , $project->slug)}}">Modifica</a></button></div>
      <div><button class="btn btn-danger"><a href="">Elimina</a></button></div>

  </div>

@endsection