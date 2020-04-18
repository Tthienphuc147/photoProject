<!DOCTYPE html>

<html>

<head>

  <title>Laravel Ajax Multiple Image Upload with Preview Example</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>



  <style type="text/css">

    input[type=file]{

      display: inline;

    }

    #image_preview{

      border: 1px solid black;
      height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    padding: 0 32px;

    }

    #image_preview img{

      width: 200px;

      padding: 5px;

    }
    .image-item{
    align-items: center;
    justify-content: center;
    display: flex;
    width: 269px;
    height: 269px;
    flex-shrink: 0;
    position: relative;
    cursor: pointer;
    margin-right: 10px;
    will-change: transform, scroll-position, width, opacity;
    z-index: 1;
    -webkit-animation: tile-appear 0.6s;
    animation: tile-appear 0.6s;
    overflow: hidden;
    }
    .image-item .image-main-container{
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    width: 236px;
    height: 236px;
    margin-left: -7px;
    margin-top: -13px;
    -webkit-animation: fade-in 0.4s;
    animation: fade-in 0.4s;
    background-color: white;
    position: relative;
    }
    .image-main{
        top: 0px;
    left: -92.1667px;
    width: 421.333px;
    height: 237px;
    }
    .image-item .image-background {
    position: absolute;
    top: 0;
    width: 100%;
    }
  </style>



</head>

<body>



<div class="container">

  <h1>Laravel Ajax Multiple Image Upload with Preview Example</h1>

  <form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}

      <input type="file" id="uploadFile" name="uploadFile[]" multiple/>

      <input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>

  </form>



  <br/>

  <div id="image_preview">

  </div>

</div>



</body>



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



  $('form').ajaxForm(function()

   {

    alert("Uploaded SuccessFully");

   });



</script>

</html>
