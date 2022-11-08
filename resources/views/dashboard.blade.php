<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

<div class="container text-center mb-5 ">
    <table id="books" class="table table-responsive table-hover table-responsive">
        <thead class="thead-dark">
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoría</th>
                <th>Fecha de lanzamiento</th>
                <th>Fecha de publicación</th>
            </tr>
        </thead>
    </table>
</div>

@stack('scriptDataTable')
<script>

    $(document).ready(function(){
        $('#books').DataTable({
            // serverSide: true,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'

            },
            ajax : {
                url: "{{ url('getBooks') }}",
                dataSrc: 'books'
            },
            columns: [
                {data: 'title'},
                {data: 'author'},
                {data: 'category'},
                {data: 'release_date',
                    render: DataTable.render.datetime('D/M/YYYY')
                    // render: DataTable.datetime('D MMM YYYY')
                },
                {data: 'publish_date',
                render: DataTable.render.datetime('D/M/YYYY')}
            ]
        });
    });

</script>
