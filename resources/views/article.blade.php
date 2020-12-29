


<div class="container"><a class="btn btn-success" href="{{ route('article.create') }}">Add post
<span class="glyphicon glyphicon-chevron-plus">
    	
    </span></a></div>
<hr/>
<div class="container">
@foreach($articles as $article)
<div class="row">
    <h2><strong>{{ $article->judul }}</strong></h2>
    </div>
    <p> {!! substr($article->isi,0,55) !!}</p>
    <a class="btn btn-primary"  href="{{ route('article.show', $article->slug_judul) }}">read more
    <span class="glyphicon glyphicon-chevron-right">
    	
    </span>
    </a>
    <p>{{ $article->created_at->diffForHumans() }}</p>
    
    <hr/>
 @endforeach
 {{ $articles->links() }}
 </div>

</body>

