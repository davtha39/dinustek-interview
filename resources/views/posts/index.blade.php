@foreach($posts as $p)
    <h2>{{ $p->title }}</h2>
    <p>{{ $p->content }}</p>
    <p>Kategori: {{ $p->category->nme }}</p>
@endforeach