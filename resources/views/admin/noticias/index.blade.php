@extends('layout.app')
@section('title','Noticias')
@section('conteudo')
<div class="mt-4">
    <div>
        <h2>Noticias</h2>
        <a href="/admin/noticias/create"
            class="btn btn-success">novo</a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <tr>
                <th>titulo</th>
                <th>data</th>
                <th>Autor</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($noticias as $noticia)
            <tr>
                <td>{{$noticia->titulo}}</td>
                <td>{{$noticia->data}}</td>
                <td>{{$noticia->autor-nome}}</td>
                <td>
                    <!-- href é o link da pagina /admin/noticias/1/show -->
                    <!-- route (admin.noticias.show',$noticia) -->
                    <a href="/admin/noticias/{{$noticia->id}}"
                        class="btn btn-sm btn-primary">
                        <i class="bi bi-pass"></i>
                    </a>
                </td>
                <a href="/admin/noticias/{{$noticia->id}}/edit"
                    class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil"></i>
                </a>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger"
                        data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"
                        data-noticia-id="{{$noticia->id}}">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


<!-- Modal de exclusão -->
<div class="modal fade" id="confirmDeleteModal"
    tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5> class="modal-title" id="confirmDEleteModalLabel">
                    Confirmar Remoção</h5>
                <button type="button" class="btn btn-close"
                    data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Voce tem certeza que quer remover?
            </div>
            <div class="modal-footer">
                <form id="deleteform" action=""
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal>Cancelar</button>
        <button type=" submit" class="btn btn-danger">
                        Remover</button>

            </div>
        </div>
    </div>

    <script>
        var confirmDeleteModal =
            document.getelementbyid('confirmDeleteModal');

        confirmDeleteModal
            .addEventlistener("show.bs.modal", function(event) {
                var button = event.relatedtarget
                var noticiaId = button.getAttribute('data-noticia-id');
                var form = document.getELementeById('DeleteForm');
                form.action = "/admin/noticias/" + noticiaId;
            });
    </script>
    @endsection