<form action="{{route('article.show', $article->id)}}" method="post">
   <input type="hidden" name="id" value="{{$article->id}}">
    <table>
        <tr>
            <td>Title</td>
            <td><p> : {{$article->title}}</p></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><p> : {{$article->content}}</p></td>
        </tr>
    
    {{csrf_field()}}
    
    </table>
    
</form>