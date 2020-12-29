



<div class="continer">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new content</div>
                <div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'article.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group {{ $errors->has('') ? 'has-error' : ''  }}">
					{{ Form::label('judul','judul') }}
					{{ Form::text('judul','',['placeholder' => 'write title here......','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				
				<div class="form-group {{ $errors->has('body') ? 'has-error' : ''  }}">
					{{ Form::label('isi','isi') }}
					{{ Form::textarea('isi','',['placeholder' => 'Masukkan deskripsi buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
					{{ Form::submit('submit',['class' => 'btn btn-primary']) }}
					{{ Form::reset('reset',['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

</body>
