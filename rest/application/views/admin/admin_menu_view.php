<?php
	$this->load->view("admin/header");
?>



<div id = "main">

  <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s10 m6 l6 breadcrumbs-left">
          <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">Products Page</h5>
        </div>
        <div class="col s10 m6 l6 breadcrumbs-right" style="text-align: right;">
          <a class="waves-effect waves-light btn modal-trigger" href="#modal1">
            <i class="material-icons left">add</i>Add Menu
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h4 class="card-title">Menu List
          </h4>
          <div class="row">
            <div class="col s12">
              <table class="display">
                <thead>
                  <tr>
                    <th>
                      <label>
                        <input type="checkbox" class="select-all" />
                        <span></span>
                      </label>
                    </th>
                    <th>Name</th>
                    <th>img</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                // die(print_r($menu));
	    		for($i = 0; $i < count($menu); $i ++)
	    		{
	    		?>
                  <tr>
                    <th>
                      <label>
                        <input type="checkbox" />
                        <span></span>
                      </label>
                    </th>
                    <td><?=$menu[$i]['name']?></td>
                    <td>
                      <img src="<?=$menu[$i]['img']?>" style = "width: 3rem">
                    </td>
                  </tr>

                <?php
                }
                ?>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



<!-- <input type="hidden" id = "show_modal" data-toggle="modal" data-target="#myModal"> -->

<div id="modal1" class="modal">
    <div class="modal-dialog">
    
      	<div class="modal-content">
	        <div class="modal-header">
	          	<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
	          	<h4 class="modal-title">Add New Product</h4>
	        </div>

	        <form method="post" style="" enctype="multipart/form-data" id="upload_form" name = "upload_form"/>
		        
		        <div class="modal-body">
	                <div class="col s8 m8 l8">
	                  <div id="Form-advance" class="card card card-default scrollspy">
	                    <div class="card-content">
	                      <form class="col s8">
	                        <div class="row">

	                          <div class="input-field col m12 s12">
	                            <input id="main_name" type="text">
	                            <label for="main_name">Name</label>
	                          </div>
	                          
	                        </div>
	                        <div class="row">
	                          <div class="col m12 s12 file-field input-field">
	                            <div class="btn float-right">
	                              <span>File</span>
	                              <input type="file" name="main_img" id = "main_img">
	                            </div>
	                            <div class="file-path-wrapper">
	                              <input class="file-path validate" type="text" placeholder="Upload product image">
	                            </div>
	                          </div>
	                        </div>
	                      </form>
	                    </div>
	                  </div>
	                </div>
	            </div>

		        <div class="modal-footer">
		          	<button type="button" class="btn btn-default" id = "add_main" style="color: white">Add</button>
		          	
		        </div>

		    </form>
      	</div>
    </div>
</div>



<?php

	$this->load->view("admin/footer");

?>



<script>
	$(document).ready(function(){
		$("#add_main").on("click",function(){

			var fd = new FormData(document.getElementById('upload_form'));

			var name = $("#main_name").val();
			
        	fd.append('name',name);

	        $.ajax({
	            url:'Admin_menu/add_menu',
	            // secureuri: false,
	            type:'post',
	            data : fd,
	            // crossOrigin : false,
	            contentType : false,
	            processData : false,

	            dataType: 'json',
	            success:function(res){
	                document.location.replace("admin_menu");	
	            }
	        });
	        return false;
		})
	})
</script>