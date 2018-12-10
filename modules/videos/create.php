<?php
$modetype = "add";
$msg="";
if(isset($_POST['submit-form'])) {
        $img_file = $_FILES["img_preview"]["name"];
        $img_type = $_FILES["img_preview"]["type"];
        $destino = "img/videos/".utf8_decode($sku_id).".jpg";

        $img_file2 = $_FILES["thumb_path"]["name"];
        $img_type2 = $_FILES["thumb_path"]["type"];
        $destino2 = "img/videos/".utf8_decode($sku_id)."_thumb.jpg";

        if(copy($_FILES["img_preview"]['tmp_name'],$destino)){
          echo "Todo bien";
          }

          if(copy($_FILES["thumb_path"]['tmp_name'],$destino2)){
          echo "Todo bien";
          }
        $new_image = utf8_decode($sku_id)."_thumb.jpg";

        $levelmodules = json_encode($levelmodules);
        $data = array( 
            "sku" => "'$sku_id'",
            "vimeo_id" => "'$videoid'",
            "embed_video" => "'$embed'",
            "download_url" => "'$download'",
            "vimeoPreview_id" => "'$preview_id'",
            "previewPath" => "'$img_file'",
            "previewThumPath" => "'$new_image'",
            "price" => "'$price_video'",
            "offerPrice" => "'$offer_price'",
            "language_title_id" => "'$title_language'",
            "language_intro_id" => "'$intro_language'",
            "language_description_id" => "'$description_language'",
            "format" => "'$format_video'",
            "id_autor" => "'$autor'",

        );
        if ($mode == "add") {
            $db->insert($data, "video");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["add_success"]."</div>";
        }
        
}

?>
<div class="content">


  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Crear Videos</h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/videos/list"><?=$lan["users_title"]?></a></li>
        <li class="active"></li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="<?=BASE_URL?>/m/users/list" class="btn btn-light"><?=$lan["cancel"]?></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

<!-- START CONTAINER -->
<div class="container-padding margin-b-50">
  <?php 


        if($msg != ""){         
            echo "
            <div class='row'>
                <div class='col-md-12'>
                    $msg
                </div>
            </div>";
        }  
    ?> 
    <div class="row">
<div class="col-md-12 padding-0">
      <div class="panel panel-transparent">
            <div class="panel-body">
              
                <div role="tabpanel">

                  <!-- Nav tabs -->
                  
                 

                  <!-- Tab panes -->
                  <form method="POST" enctype="multipart/form-data" action="<?=BASE_URL?>/m/videos/create">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Sku</label>
                            <input type="text" class="form-control" name="sku_id" value="" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Vimeo ID</label>
                            <input type="text" class="form-control" name="videoid" value="" required>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Embed URL</label>
                            <input type="text" class="form-control" name="embed" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Download URL</label>
                            <input type="text" class="form-control" name="download" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Vimeo Preview ID</label>
                            <input type="text" class="form-control" name="preview_id" value="">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="input1" class="form-label">Imagen de Muestra</label>
                            <input type="file" class="form-control" name="img_preview" value="" onchange="readURL(this);">
                            <img id="prew" src="" width="100">
                          </div>
                        </div>
                        <script type="text/javascript">
                          function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#prew').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                          };
                        </script>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="input1" class="form-label">Thumb de Muestra</label>
                            <input type="file" class="form-control" name="thumb_path" value="" onchange="readIMG(this);">
                            <img id="thumb" src="" width="100">
                          </div>
                        </div>
                        <script type="text/javascript">
                          function readIMG(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#thumb').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                          };
                        </script>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Precio</label>
                            <input type="text" class="form-control" name="price_video" value="">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Precio Oferta</label>
                            <input type="text" class="form-control" name="offer_price" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="sel1">Titulo</label>
                            <select name="title_language" class="form-control" id="sel1">
                                <?php 
                                  $list_title = $db->onlySelect("text_language");
                                    foreach ($list_title as $key => $value) {
                                      echo "<option value='".$list_title[$key]["id"]."'>".utf8_encode($list_title[$key]["text_spanish"])."</option>";
                                    }
                                  
                                 ?>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="sel1">Intro</label>
                          <select name="intro_language" class="form-control" id="sel1">
                            <?php 
                                  $list_title = $db->onlySelect("text_language");
                                    foreach ($list_title as $key => $value) {
                                      echo "<option value='".$list_title[$key]["id"]."'>".utf8_encode($list_title[$key]["text_spanish"])."</option>";
                                    }
                                  
                                 ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="sel1">Descripcion</label>
                          <select name="description_language" class="form-control" id="sel1">
                            <?php 
                                  $list_title = $db->onlySelect("text_language");
                                    foreach ($list_title as $key => $value) {
                                      echo "<option value='".$list_title[$key]["id"]."'>".utf8_encode($list_title[$key]["text_spanish"])."</option>";
                                    }
                                  
                                 ?>
                          </select>
                        </div>
                      </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Formato</label>
                            <input type="text" class="form-control" name="format_video" value="">
                          </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                          <label for="sel1">Autor</label>
                          <select name="autor" class="form-control" id="sel1">
                            <?php 
                                  $list_autor = $db->onlySelect("autor");
                                    foreach ($list_autor as $key => $value) {
                                      echo "<option value='".$list_autor[$key]["id"]."'>".utf8_encode($list_autor[$key]["name"])."</option>";
                                    }
                                  
                                 ?>
                          </select>
                        </div>
                      </div>
                      </div>
                    </div>
                    
                   
                  </div> 
                </div>              

            </div>
            <div class="panel-footer">
                <input type="hidden" name="account_id" value="">
                <input type="hidden" name="mode" value="<?=$modetype?>">
                <input type="hidden" name="levelid" value="<?=$levelid?>">
              <button type="submit" name="submit-form" class="btn btn-default">Enviar</button>
              </form>
            </div>

      </div>
    </div>
    </div>

</div>
<!-- END CONTAINER -->