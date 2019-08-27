@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Edit</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
            </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ route('kabupaten.update', $datas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="nama">id:</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id }}">
            </div>
            <div class="form-group">
                <label for="email">Kode:</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $datas->code }}">
            </div>
            <div class="form-group">
                <label for="nohp">Deskripsi:</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $datas->description }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
        @endforeach
    </div>
</section>
@endsection