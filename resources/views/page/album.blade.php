@extends('masterPageAlbum')
@section('content')
<div class="block-choose-img">


    <div class="fluid-container">
        <div class="row block-upload-img">

            <div class="col-md-6 img-wall text-right">
                <button class="btn-default BtnLarge "  type="button"  onclick="chooseAlbum()"> Chọn hình cho tranh treo tường</button>
            </div>
            <div class="col-md-6 img-book">
                <button class="btn-default BtnLarge" type="button" onclick="chooseBook()">Chọn hình cho book</button>
            </div>
        </div>

        <br/>

        <form action="/imagesupload" method="post" enctype="multipart/form-data" id="albumType">
            {{ csrf_field() }}
            <div class="content-ablum">
                <div class="upload-image">
                    <input  type="file" id="uploadFile" name="uploadFile[]" multiple/>
                </div>
                <div class="main-content mt-3">

                    <div id="image_preview">
                        <div class='image-item'>
                            <div class='image-main-container'>
                            </div>
                            <img class ='image-background' src='/public/white.svg' style='width:269px;height:269px'/>
                        </div>
                    </div>

                </div>
                <input class="fix-order" type="submit" class="btn btn-success" name='submitImage' value="Đặt hàng"/>
            </div>
        </form>
        {{-- <form action="/bookupload" method="post" enctype="multipart/form-data" id="bookType">
            <section id="tabs" class="project-tab">
                <div class="fluid-container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Chọn ảnh bìa sách</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Chọn ảnh trang sách</a>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane  show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row pb-5">
                                        <div class="col-md-12">

                                          <div id="mdb-lightbox-ui"></div>

                                          <div class="mdb-lightbox mt-5">
                                            @foreach ($bookCover as $item)
                                            <a href="">
                                            <figure class="col-md-4 text-center mt-5 picture-item" id="">


                                                <img alt="picture" src="{{$item->image_url}}" class="img-fluid">

                                                <div class="select-cover" id={}>
                                                    <i class="fas fa-check"></i>
                                                </div>
                                              </figure>
                                            </a>
                                            @endforeach




                                          </div>

                                        </div>
                                      </div>
                                </div>
                                <div class="tab-pane " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="content-ablum">
                                        <div class="upload-image">
                                            <input  type="file" id="uploadFile1" name="uploadFile1[]" multiple/>
                                        </div>
                                        <div class="main-content mt-3">

                                            <div id="image_preview1">
                                                <div class='image-item'>
                                                    <div class='image-main-container'>

                                                    </div>
                                                    <img class ='image-background' src='/public/white.svg' style='width:269px;height:269px'/>
                                                </div>
                                            </div>

                                        </div>
                                        <input class="fix-order" type="submit" class="btn btn-success" name='submitImage' value="Đặt hàng"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </form> --}}





    </div>




</div>

<script type="text/javascript">



    $("#uploadFile").change(function(){

       $('#image_preview').html("");

       var total_file=document.getElementById("uploadFile").files.length;

       for(var i=0;i<total_file;i++)

       {

        $('#image_preview').append(
            "<a href='#ex1_"+i+"'"+ "rel='modal:open'>"+
            "<div class='image-item'>"+
              "<div class='image-main-container'>"+
                  "<img class='image-main' src='"+URL.createObjectURL(event.target.files[i])+"'>"+
              "</div>"+
              "<img id='image_"+i+"'" +  "class ='image-background' src='/public/white.svg' style='width:269px;height:269px'/>"+
            "</div>"+
            "</a>"+
            "<div id='ex1_"+i+"'"+ "class='modal modal-body'>"+
            "<h3 class='text-center' style='color:grey'>Chụm và thu phóng</h3>"+
            "<div class='image-item'>"+
                "<div class='image-main-container'>"+
                    "<img class='image-main' src='"+URL.createObjectURL(event.target.files[i])+"'>"+
                "</div>"+
                "<img class ='image-background' src='/public/white.svg' style='width:269px;height:269px'/>"+
              "</div>"+
          "</div>"

       );

       }

    });
    // $("#uploadFile1").change(function(){

    //     $('#image_preview1').html("");

    //     var total_file=document.getElementById("uploadFile1").files.length;

    //     for(var i=0;i<total_file;i++)

    //     {

    //     $('#image_preview1').append(
    //         "<a href='#ex2_"+i+"'"+ "rel='modal:open'>"+
    //         "<div class='image-item'>"+
    //         "<div class='image-main-container'>"+
    //             "<img class='image-main' src='"+URL.createObjectURL(event.target.files[i])+"'>"+
    //         "</div>"+
    //         "<img id='image_"+i+"'" +  "class ='image-background' src='/public/white.svg' style='width:269px;height:269px'/>"+
    //         "</div>"+
    //         "</a>"+
    //         "<div id='ex2_"+i+"'"+ "class='modal modal-body'>"+
    //         "<h3 class='text-center' style='color:grey'>Chụm và thu phóng</h3>"+
    //         "<div class='image-item'>"+
    //             "<div class='image-main-container'>"+
    //                 "<img class='image-main' src='"+URL.createObjectURL(event.target.files[i])+"'>"+
    //             "</div>"+
    //             "<img class ='image-background' src='/public/white.svg' style='width:269px;height:269px'/>"+
    //         "</div>"+
    //     "</div>"

    //     );

    //     }

    // });
        function chooseAlbum() {
        let album = document.getElementById("albumType");
        let book = document.getElementById("bookType");
        album.style.display = 'block';
        book.style.display = 'none';

        }
        function chooseBook() {
        let album = document.getElementById("albumType");
        let book = document.getElementById("bookType");
        album.style.display = 'none';
        book.style.display = 'block';

        }


  </script>
@endsection


