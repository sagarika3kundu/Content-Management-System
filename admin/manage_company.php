<?php 
include("include/header.php");
include("image.class.php");
?>
<?php
if($_REQUEST['flag'] == "1")
{
    
	
	if($_FILES['event_image']['name'] != "")
	{
		$updir = "photo/";
		$upname1=str_replace(' ','',time().$_FILES['event_image']['name']);
		$upname = $updir.$upname1;
		if(move_uploaded_file($_FILES[event_image][tmp_name],$upname))
		{
			$save_to_file = true;
			$image_quality = 100;
			$image_type = -1;
			$max_x1 = 120;
			$max_y1 = 120;
			$cut_x1 = 0;
			$cut_y1 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th1_';
			$to_name = str_replace(' ','',time().$_FILES['event_image']['name']);
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
			$max_x2 = 250;
			$max_y2 = 190;
			$cut_x2 = 0;
			$cut_y2 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th2_';
			$to_name = str_replace(' ','',time().$_FILES['event_image']['name']);
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
	mysql_query("insert into `news` set  `short_desc` = '".addslashes($_REQUEST[short_desc])."', `thumb_image1` = '$picname1', `thumb_image2` = '$picname2', `big_image` = '$upname',`event_desc` = '".addslashes($_REQUEST[event_desc])."'");
	echo "<script>location.href='manage_company.php?msg=1'</script>";
}
if($_REQUEST['flag'] == "2")
{
	
	if($_FILES['event_image']['name'] != "")
	{
		$updir = "photo/";
		$upname1=str_replace(' ','',time().$_FILES['event_image']['name']);
		$upname = $updir.$upname1;
		if(move_uploaded_file($_FILES[event_image][tmp_name],$upname))
		{
			$save_to_file = true;
			$image_quality = 100;
			$image_type = -1;
			$max_x1 = 120;
			$max_y1 = 120;
			$cut_x1 = 0;
			$cut_y1 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th1_';
			$to_name = str_replace(' ','',time().$_FILES['event_image']['name']);
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
			$max_x2 = 250;
			$max_y2 = 190;
			$cut_x2 = 0;
			$cut_y2 = 0;
			$images_folder = 'photo/';
			$from_name=$upname1;
			$thumbs_folder = 'photo/th2_';
			$to_name = str_replace(' ','',time().$_FILES['event_image']['name']);
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
		mysql_query("update `news` set `thumb_image1` = '$picname1', `thumb_image2` = '$picname2', `big_image` = '$upname' where `event_id` = '$_REQUEST[event_id]'");
	}
	mysql_query("update `news` set `short_desc` = '".addslashes($_REQUEST[short_desc])."', `event_desc` = '".addslashes($_REQUEST[event_desc])."' where `event_id` = '$_REQUEST[event_id]'");
	echo "<script>location.href='manage_company.php?msg=2'</script>";
}
if($_REQUEST['flag'] == "delete")
{
	mysql_query("delete from `news` where `event_id` = '$_REQUEST[del_id]'");
	echo "<script>location.href='manage_company.php?msg=3'</script>";
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
<script type="text/javascript" language="javascript">
	tinyMCE.init({
		mode : "exact",
		elements : "ajaxfilemanager2",
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
   		$show=mysql_fetch_array(mysql_query("select * from `news` where `event_id` = '$_REQUEST[edit_id]'"));
   ?>
        <div class="section">
            <div class="title_wrapper">
                <h2>Manage <?php echo $show['category_name']; ?></h2>
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
                                    	<input type="hidden" name="event_id" value="<?php echo $show['event_id']; ?>"/>
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
                                            	
                                                
                                                
                                                <div class="row" style="height:250px; width:700px; margin-bottom:20px;">
                                                    <label> News Short Description:</label>
                                                  <div class="inputs"><span class="input_wrapper textarea_wrapper blank">
                                                    <textarea class="text" style="width:700px; height:250px;" name="short_desc" id="ajaxfilemanager" ><?php echo stripslashes($show['short_desc']); ?></textarea>
                                                  </span></div>
                                              </div>
                                                <div class="row">
                                                	<label>Event Image:</label>
                                                	<div class="inputs">
                                                    	<span class="input_wrapper blank">
                                                        	<img src="<?php echo $show['thumb_image1'] ?>" width="100" alt="<?php echo $show['event_id'] ?>">&nbsp;<input class="text" name="event_image" id="event_image" type="file"/>
                                                        </span>
                                                	</div>
                                            	</div>
                                                
                                              <div class="row" style="height:450px; width:800px; margin-bottom:20px;">
                                                    <label>News Description:</label>
                                                  <div class="inputs">
                                                  <span class="input_wrapper textarea_wrapper blank">
                                                    <textarea class="text" style="width:800px; height:450px;" name="event_desc" id="ajaxfilemanager2" ><?php echo stripslashes($show['event_desc']); ?></textarea>
                                                  </span>
                                                  </div>
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
		$sql=mysql_query("select * from `news` order by `event_id`");
  ?>                     
     	<div class="section">
    		<div class="title_wrapper">
        		<h2>Manage Company News</h2>
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
                                                <th><a href="#">News</a></th>
                                                <th><a href="#">Image</a></th>
                   
                                                <th style="width: 96px;">Actions</th>
                                            </tr>
										<?php
                                        $i=1;
                                        while($show=mysql_fetch_array($sql))
                                        {
                                        ?>
                                            <tr class="first">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $show['short_desc']; ?></td>
                                                
                                                <td><img src="<?php echo $show['thumb_image1']; ?>" alt="<?php echo $show['event_name']; ?>"/></td>

                                                <td style="width: 96px;">
                                                    <div class="actions_menu">
                                                        <ul>
                                                            <li><a class="edit" href="manage_company.php?flag=edit&edit_id=<?php echo $show['event_id']; ?>">Edit</a></li>
                                                            <li><a class="delete" href="manage_company.php?flag=delete&del_id=<?php echo $show['event_id']; ?>" onclick="return confirm('Are you sure to delete the record?')">Delete</a></li>
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
                                            <li><a href="manage_company.php?flag=add" class="button add_new"><span><span>ADD NEW</span></span></a></li>
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