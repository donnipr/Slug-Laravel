
<div class="continer">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="panel-body">
    <h2><strong>{{ $articles->judul }}</strong></h2><br/>
    <p>{!! $articles->isi !!}</p>
    <hr/>
    <p>{{ $articles->created_at->diffForHumans() }}</p><br/>
</div>
 </div>
</div>
</div>
</div>

