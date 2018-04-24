<br>
<a href="{{route('article.create')}}"> Create Article </a>
<br>
<br>
<table>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    <?php $no = 1; ?>
@foreach($article as $row)
     
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->title}}</td>
        <td>{{date('d F Y H:i', strtotime($row->created_at))}}</td>
        <td>
            <a href="{{route('article.edit', $row->id)}}"> Edit </a>
            <a href="{{route('article.show', $row->id)}}"> Detail </a>
       <form action="{{route('article.destroy', $row->id)}}" method="POST">
           {{method_field('DELETE')}}
           {{csrf_field()}}
           <button type="submit">Delete</button>
       </form>
        </td>
    </tr>
    
@endforeach

</table>

<br><br>


