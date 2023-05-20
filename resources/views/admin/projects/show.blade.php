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
      <div><button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button></div>
      <div><button class="btn btn-warning"><a href="{{route('admin.projects.index')}}">Torna all'indice dei progetti</a></button></div>
    </div>

  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler eliminare il progetto : <strong>{{$project->project_name}}</strong> ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-danger">Elimina Progetto</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection