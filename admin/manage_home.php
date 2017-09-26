<?php 
include("include/header.php");
include("image.class.php");
?>
<?php
if($_REQUEST['flag'] == "1")
{
	if($_FILES['page_image']['name'] != "")
	{
		$updir = "photo/";
		$upname1=str_replace(' ','',time().$_FILES['page_image']['name']);
		$upname = $updir.$upname1;
		if(move_uploaded_file($_FILES[page_image][tmp_name],$upname))
		{
			$save_to_file = true;
			$image_quality = 100;
			$image_type = -1;
			$max_x1 = 120;
			$max_y1 = 90;
			$cut_x1 = 0;
			$cut_y1 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th1_';
			$to_name = str_replace(' ','',time().$_FILES['page_image']['name']);
			$save_to_file = 1;
			ini_set('memory_limit', '-1');
			$img = new Zubrag_image;
			$img->max_x        = $max_x1;
			$img->max_y        = $max_y1;
			$img->cut_x        = $cut_x1;
			$img->cut_y        = $cut_y1;
			$img->quality      = $image_quality;
			$img->save_to_file = $save_to_file;
			$img->image_type   = $image_type;
			$img->GenerateThumbFile($images_folder . $from_name, $thumbs_folder . $to_name);
			$picname1=$thumbs_folder . $to_name;
			
			$save_to_file = true;
			$image_quality = 100;
			$image_type = -1;
			$max_x2 = 555;
			$max_y2 = 130;
			$cut_x2 = 0;
			$cut_y2 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th2_';
			$to_name = str_replace(' ','',time().$_FILES['page_image']['name']);
			$save_to_file = 1;
			ini_set('memory_limit', '-1');
			$img = new Zubrag_image;
			$img->max_x        = $max_x2;
			$img->max_y        = $max_y2;
			$img->cut_x        = $cut_x2;
			$img->cut_y        = $cut_y2;
			$img->quality      = $image_quality;
			$img->save_to_file = $save_to_file;
			$img->image_type   = $image_type;
			$img->GenerateThumbFile($images_folder . $from_name, $thumbs_folder . $to_name);
			$picname2=$thumbs_folder . $to_name;
		}
	}
	mysql_query("insert into `cms` set `page_title` ='$_REQUEST[page_title]', `page_desc` = '$_REQUEST[page_desc]', `page_image_thumb1` = '$picname1', `page_image_thumb2` = '$picname2', `page_image_big` = '$upname'");
	echo "<script>location.href='manage_home.php?msg=1'</script>";
}
if($_REQUEST['flag'] == "2")
{
	if($_FILES['page_image']['name'] != "")
	{
		$updir = "photo/";
		$upname1=str_replace(' ','',time().$_FILES['page_image']['name']);
		$upname = $updir.$upname1;
		if(move_uploaded_file($_FILES[page_image][tmp_name],$upname))
		{
			$save_to_file = true;
			$image_quality = 100;
			$image_type = -1;
			$max_x1 = 120;
			$max_y1 = 90;
			$cut_x1 = 0;
			$cut_y1 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th1_';
			$to_name = str_replace(' ','',time().$_FILES['page_image']['name']);
			$save_to_file = 1;
			ini_set('memory_limit', '-1');
			$img = new Zubrag_image;
			$img->max_x        = $max_x1;
			$img->max_y        = $max_y1;
			$img->cut_x        = $cut_x1;
			$img->cut_y        = $cut_y1;
			$img->quality      = $image_quality;
			$img->save_to_file = $save_to_file;
			$img->image_type   = $image_type;
			$img->GenerateThumbFile($images_folder . $from_name, $thumbs_folder . $to_name);
			$picname1=$thumbs_folder . $to_name;
			
			$save_to_file = true;
			$image_quality = 100;
			$image_type = -1;
			$max_x2 = 555;
			$max_y2 = 130;
			$cut_x2 = 0;
			$cut_y2 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th2_';
			$to_name = str_replace(' ','',time().$_FILES['page_image']['name']);
			$save_to_file = 1;
			ini_set('memory_limit', '-1');
			$img = new Zubrag_image;
			$img->max_x        = $max_x2;
			$img->max_y        = $max_y2;
			$img->cut_x        = $cut_x2;
			$img->cut_y        = $cut_y2;
			$img->quality      = $image_quality;
			$img->save_to_file = $save_to_file;
			$img->image_type   = $image_type;
			$img->GenerateThumbFile($images_folder . $from_name, $thumbs_folder . $to_name);
			$picname2=$thumbs_folder . $to_name;
		}
		mysql_query("update `cms` set `page_image_thumb1` = '$picname1', `page_image_thumb2` = '$picname2', `page_image_big` = '$upname' where `page_id` = '$_REQUEST[page_id]'");
	}
	mysql_query("update `cms` set `page_title` ='$_REQUEST[page_title]', `page_desc` = '$_REQUEST[page_desc]' where `page_id` = '$_REQUEST[page_id]'");
	echo "<script>location.href='manage_home.php?msg=2'</script>";
}
if($_REQUEST['flag'] == "delete")
{
	mysql_query("delete from `cms` where `page_id` = '$_REQUEST[del_id]'");
	echo "<script>location.href='manage_home.php?msg=3'</script>";
}
?>
<script type="text/javascript" language="javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" language="javascript">
	tinyMCE.init({
		mode : "exact",
		elements : "ajaxfilemanager",
		theme : "advanced",
		plugins : "advimage,advlink,media,contextmenu",
		theme_advanced_buttons1_add_before : "newdocument,separator",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,forecolor,backcolor,liststyle",
		theme_advanced_buttons2_add_before: "cut,copy,separator,",
		theme_advanced_buttons3_add_before : "",
		theme_advanced_buttons3_add : "media",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		extended_valid_elements : "hr[class|width|size|noshade]",
		file_browser_callback : "ajaxfilemanager",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : true,
		apply_source_formatting : true,
		force_br_newlines : true,
		force_p_newlines : false,	
		relative_urls : true
	});

	function ajaxfilemanager(field_name, url, type, win) {
		var ajaxfilemanagerurl = "../../../../admin/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
		var view = 'detail';
		switch (type) {
			case "image":
			view = 'thumbnail';
				break;
			case "media":
				break;
			case "flash": 
				break;
			case "file":
				break;
			default:
				return false;
		}
		tinyMCE.activeEditor.windowManager.open({
			url: "../../../../admin/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?view=" + view,
			width: 782,
			height: 640,
			inline : "yes",
			close_previous : "no"
		},{
			window : win,
			input : field_name
		});
	}

</script>
<div id="page">
	<div class="inner">   
        <!--Start Of Edit Section -->
   <?php
   if($_REQUEST['flag'] == "edit" || $_REQUEST['flag'] == "add")
   {
   		$show=mysql_fetch_array(mysql_query("select * from `cms` where page_id = '$_REQUEST[edit_id]'"));
   ?>
        <div class="section">
            <div class="title_wrapper">
                <h2>Manage Home Pages<?php echo $show['page_title']; ?></h2>
                <span class="title_wrapper_left"></span>
                <span class="title_wrapper_right"></span>
            </div>
            <div class="section_content">
                <!--[if !IE]>start section content top<![endif]-->
                <div class="sct">
                    <div class="sct_left">
                        <div class="sct_right">
                            <div class="sct_left">
                                <div class="sct_right">                                  
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="search_form general_form" method="post" enctype="multipart/form-data">
                                    	<input type="hidden" name="page_id" value="<?php echo $show['page_id']; ?>"/>
									<?php
                                    if($_REQUEST['flag'] =="add")
                                    {
                                    ?>
                                        <input type="hidden" name="flag" value="1"/>
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    	<input type="hidden" name="flag" value="2"/>
                                    <?php
                                    }
                                    ?>
                                        <fieldset>
                                            <div class="forms">
                                            	<div class="row">
                                                	<label>Page Title:</label>
                                                	<div class="inputs">
                                                    	<span class="input_wrapper">
                                                        	<input class="text" name="page_title" type="text" value="<?php echo $show['page_title']; ?>" />
                                                        </span>
                                                	</div>
                                            	</div>
                                                <div class="row">
                                                	<label>Page Image:</label>
                                                	<div class="inputs">
                                                    	<span class="input_wrapper blank">
                                                        	<img src="<?php echo $show['page_image_thumb1'] ?>" width="100" alt="<?php echo $show['page_title'] ?>">&nbsp;<input class="text" name="page_image" id="page_image" type="file"/>
                                                        </span>
                                                	</div>
                                            	</div>
                                              <div class="row" style="height:450px; width:850px; margin-bottom:20px;">
                                                    <label>Page Description:</label>
                                                  <div class="inputs"><span class="input_wrapper textarea_wrapper blank">
                                                    <textarea class="text" style="width:850px; height:450px;" name="page_desc" id="ajaxfilemanager" ><?php echo stripslashes($show['page_desc']); ?></textarea>
                                                  </span></div>
                                              </div>
  
                                            	<div class="row">
                                                <div class="buttons"> 
                                                    <ul style="list-style-type:none;">
                                                        <li><span class="button send_form_btn"><span><span><?php if($_REQUEST['flag'] == "add"){ ?>SAVE<?php } 
														if($_REQUEST['flag'] == "edit")
														{ ?>UPDATE<?php } ?></span></span>
                                                        <input name="" type="submit" /></span></li>
                                                        <li><span class="button cancel_btn"><span><span>CANCEL</span></span>
                                                        <input name="" type="submit" /></span></li>
                                                    </ul>    
                                                           
                                                </div>
                                            </div>
                                           </div>
                                        </fieldset>  
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
  
            </div>
		</div>     
  <?php
  	}
	/*  End Of Edit Section */ 
	else
	{
		$sql=mysql_query("select * from `cms` order by `page_id`");
  ?>                     
     	<div class="section">
    		<div class="title_wrapper">
        		<h2>Manage Home Pages</h2>
       			<span class="title_wrapper_left"></span>
        		<span class="title_wrapper_right"></span>
    		</div>
			<div class="section_content">
                <div class="sct">
                    <div class="sct_left">
                        <div class="sct_right">
                            <div class="sct_left">
                                <div class="sct_right">
							  <?php
                                if($_REQUEST['msg'] == "1")
                                {
                              ?>
                                    <ul class="system_messages">
                                        <li class="green"><span class="ico"></span><strong class="system_title">Successfully Added !</strong></li>
                                    </ul>
							  <?php
                                }
								if($_REQUEST['msg'] == "2")
                                {
                              ?>
                                    <ul class="system_messages">
                                        <li class="green"><span class="ico"></span><strong class="system_title">Successfully Updated !</strong></li>
                                    </ul>
							  <?php
                                }
								if($_REQUEST['msg'] == "3")
                                {
                              ?>
                                    <ul class="system_messages">
                                        <li class="green"><span class="ico"></span><strong class="system_title">Successfully Deleted !</strong></li>
                                    </ul>
							  <?php
                                }
								
                              ?>       
                                    <form action="#">
                                    <fieldset>
                                    <!--[if !IE]>start table_wrapper<![endif]-->
                                    <div class="table_wrapper">
                                        <div class="table_wrapper_inner">
                                        <table cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <th>No.</th>
                                                <th><a href="#">Page Name</a></th>
                                                <th><a href="#">Page Image</a></th>
                                                <th style="width: 96px;">Actions</th>
                                            </tr>
										<?php
                                        $i=1;
                                        while($show=mysql_fetch_array($sql))
                                        {
                                        ?>
                                            <tr class="first">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $show['page_title']; ?></td>
                                                <td><img src="<?php echo $show['page_image_thumb1']; ?>" alt="<?php echo $show['page_title']; ?>"/></td>
                                                <td style="width: 96px;">
                                                    <div class="actions_menu">
                                                        <ul>
                                                            <li><a class="edit" href="manage_home.php?flag=edit&edit_id=<?php echo $show['page_id']; ?>">Edit</a></li>
                                                            <li><a class="delete" href="manage_home.php?flag=delete&del_id=<?php echo $show['page_id']; ?>">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>	
										<?php
                                        $i++;
                                        }
                                        ?>
                                        </tbody></table>
                                        </div>
                                    </div>
                                    <div class="table_menu">
                                       <ul class="left">
                                            <li><a href="manage_home.php?flag=add" class="button add_new"><span><span>ADD NEW</span></span></a></li>
                                        </ul>
                                    </div>
                                    </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
			</div>
            <!--[if !IE]>end section content<![endif]-->
        </div>
  <?php
	}
  ?>  
    </div>
</div>
<?php 
	include("include/left_sidebar.php");
	include("include/footer.php");
	?>