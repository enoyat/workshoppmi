@extends('dashboard')
@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Warning</h1>
        <hr class="my-2">
        <p>Maaf anda tidak diperkenankan akses halaman ini</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Kembali</a>
        </p>
    </div>
@endsection
