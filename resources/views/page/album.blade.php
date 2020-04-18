@extends('masterPageAlbum')
@section('content')
<div class="block-choose-img">
    <form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="fluid-container">
        <div class="row block-upload-img">

            <div class="col-md-12 img-wall">
                <button class="btn-default BtnLarge"  type="button"> Chọn hình cho tranh treo tường</button>
                <div class="upload-image">
                    <input  type="file" id="uploadFile" name="uploadFile[]" multiple/>
                </div>
            </div>
            {{-- <div class="col-md-6 img-book">
                <button class="btn-default BtnLarge">Chọn hình cho book</button>
            </div> --}}
        </div>
            <input class="fix-order" type="submit" class="btn btn-success" name='submitImage' value="Đặt hàng"/>
        <br/>

        <div class="main-content">

            <div id="image_preview">

            </div>

        </div>



    </div>




</div>
</form>
<script type="text/javascript">



    $("#uploadFile").change(function(){

       $('#image_preview').html("");

       var total_file=document.getElementById("uploadFile").files.length;

       for(var i=0;i<total_file;i++)

       {

        $('#image_preview').append(
            "<div class='image-item'>"+
              "<div class='image-main-container'>"+
                  "<img class='image-main' src='"+URL.createObjectURL(event.target.files[i])+"'>"+
              "</div>"+
              "<img class ='image-background' src='/public/white.svg' style='width:269px;height:269px'/>"+
            "</div>"

       );

       }

    });



  </script>
@endsection


