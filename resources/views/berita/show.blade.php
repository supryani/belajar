@extends('layouts.app')
@section('content')
<div class="content>"
    <div class="card">
        <div class="card-body">

<div class="body m-10">
    <div class="form-group">
       {!! Form::label('judul', 'judul'); !!} 
       {!! Form::label('judul',$berita->judul,['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
       {!! Form::label('isi', 'isi'); !!} 
       {!! Form::label('isi',$berita->isi,['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
       {!! Form::label('created_at', 'waktu_tambah'); !!} 
       {!! Form::label('created_at',$berita->created_at->format('d/m/Y'),['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
       {!! Form::label('updated_at', 'waktu_ubah'); !!} 
       {!! Form::label('updated_at',$berita->updated_at->format('d/m/Y'),['class' => 'form-control']); !!}
    </div>
    
    <a href="{!! route('berita.index') !!}" class="btn btn-warning">Kembali</a>
    </div>
</div>
</div>
</div>
@endsection