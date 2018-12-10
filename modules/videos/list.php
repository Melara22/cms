<?php
if(isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    $videoid = $_GET['id'];

  if($mode=="delete"){
    $db->delete("video", "id = $videoid");
      $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["delete_success"]."</div>";
  }
}



?>

<div class="content">
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
  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title"><?=$lan["video_title"]?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/users/list"><?=$lan["video_title"]?></a></li>
        <li class="active"><?=$lan["video_title"]?></li>
      </ol>
      
<div class="right">
      <div class="btn-group" role="group" aria-label="...">
       <a class="btn btn-default" href="http://localhost/CMS/m/videos/create">Agregar</a>
      </div>
    </div>

  </div>
  <!-- End Page Header -->


<div class="container-default">


  <!-- Start Row -->
  <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body table-responsive">

            <table id="example0" class="table display">
                <thead>
                    <tr>
                        <th>Sku</th>
                        <th>Vimeo ID</th>
                        <th>Embed Vimeo</th>
                        <th>Precio</th>
                        <th>Precio Oferta</th>
                        <th>Formato</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //list of levels
                        $datarow = $db->select("levels","id > 0");
                        foreach ($datarow as $key => $value) {
                            $alllevels[$datarow[$key]["id"]] = $datarow[$key]["name"];
                        }
                        //get all users
                        $list_videos = $db->select("video","id > 0 ORDER BY id ASC");
                        foreach ($list_videos as $key => $value) {


                            
                            
                            $id = $list_videos[$key]["id"];
                        echo "
                            <tr>

                                <td><img src='../../img/videos/".$list_videos[$key]["previewThumPath"]."' class='avatarlist'>".$list_videos[$key]["sku"]."</td>

                                <td>".$list_videos[$key]["vimeo_id"]."</td>
                                <td>".$list_videos[$key]["embed_video"]."</td>
                                <td>".$list_videos[$key]["price"]."</td>
                                <td>".$list_videos[$key]["offerPrice"]."</td>
                                <td>".$list_videos[$key]["format"]."</td>";
                        echo "  <td>
                                <center>
                                    <div class='btn-group' role='group' aria-label='...'>
                                        <a href='".BASE_URL."/m/videos/update&id=$id' class='btn btn-light btn-xs'><i class='fa fa-pencil'></i></a>";
                        if (in_array("Delete", $modulesthislevel)) {      
                            echo "<a href=\"javascript:confirmDelete('".BASE_URL."/m/videos/list&mode=delete&id=".$id."')\" class='btn btn-light btn-xs'><i class='fa fa-remove'></i></a>";
                        }
                        echo "                                    
                                    </div>
                                </center>
                                    
                                </td>
                            </tr>                
                        ";
                        }

                    ?>

                </tbody>
            </table>


        </div>

      </div>
    </div>
    <!-- End Panel -->
  </div>



</div>