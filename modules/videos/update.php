<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $datarow = $db->select("video","id = $id");
    $sku = $datarow[0]['sku'];
    $vimeo_id = $datarow[0]['vimeo_id'];
    $embed = $datarow[0]['embed_video'];
    $download = $datarow[0]['download_url'];
    $preview_id = $datarow[0]['vimeoPreview_id'];
    $img_file = $datarow[0]['previewPath'];
    $img_file2 = $datarow[0]['previewThumPath'];
    $price_video = $datarow[0]['price'];
    $offer_price = $datarow[0]['offerPrice'];
    $title_language = $datarow[0]['language_title_id'];
    $intro_language = $datarow[0]['language_intro_id'];
    $description_language = $datarow[0]['language_description_id'];
    $format_video = $datarow[0]['format'];
    $autor = $datarow[0]['id_autor'];
    

}

?>

<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title"><?=$sku?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/users/list"><?=$lan["users_title"]?></a></li>
        <li class="active"><?=$sku?></li>
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
    <div class="row">
<div class="col-md-12 padding-0">
      <div class="panel panel-transparent">
            <div class="panel-body">
              
                <div role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab" aria-expanded="true" class="active"><?=$lan["general"]?></a></li>
                    
                    
                  </ul>

                  <!-- Tab panes -->
                  <form action="<?=BASE_URL?>/m/videos/list" method="POST">
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Sku</label>
                            <input type="text" class="form-control" name="sku_id" value="<?=$sku?>" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Vimeo ID</label>
                            <input type="text" class="form-control" name="videoid" value="<?=$vimeo_id?>" required>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Embed URL</label>
                            <input type="text" class="form-control" name="embed" value="<?=$embed?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Download URL</label>
                            <input type="text" class="form-control" name="download" value="<?=$download?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Vimeo Preview ID</label>
                            <input type="text" class="form-control" name="preview_id" value="<?=$preview_id?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Imagen de Muestra</label>
                            <input type="file" class="form-control" name="img_preview" value="">
                            <img src="" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="input1" class="form-label">Thumb de Muestra</label>
                            <input type="file" class="form-control" name="thumb_path" value="">
                          </div>
                        </div>
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
                <input type="hidden" name="account_id" value="<?=$id?>">
              <button type="submit" name="submit-form" class="btn btn-default"><?=$lan["save"]?></button>
              </form>
            </div>

      </div>
    </div>
    </div>

</div>
<!-- END CONTAINER -->