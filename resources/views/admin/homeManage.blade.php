@extends('layouts.admin')

@section('title','首頁圖片管理')

@section('css')

@endsection

@section('content')



<table id="data-table" class="display">
    <thead>
        <tr>
            <th>名稱</th>
            <th>圖片</th>
            <th>標籤</th>
            <th>修改</th>
        </tr>
    </thead>
    <tbody>
        @if(count($images)>0)
            @foreach ($images as $image)
            <tr>
                <td>{{$image->name}}</td>
                <td>{{($image->image)?$image->image:'無'}}</td>
                <td>{{($image->alt)?$image->alt:'無'}}</td>
            <td><div class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="upload('{{$image->position}}','{{$image->name}}');">修改</div></td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>

      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">上傳圖片</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/uploadImg" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

                    {{ csrf_field()}}
                    <input type="hidden" id="img_position" name="position" value="">

                    <h5>位置</h5>
                    <h6 id="position_name"></h6>

                    <div class="form-group">
                        <label for="">選擇圖片：</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="">圖片標籤（可忽略）：</label>
                        <textarea name="alt" class="form-control"></textarea> 
                    </div>  
                
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">上傳</button>
            </div>
            </form>
          </div>
        </div>
      </div>

            

@endsection

@section('js')
<script>
function upload(value,name){
    $('#position_name').html(name);
    $('#img_position').val(value);
}
</script>
@endsection