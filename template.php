<?
//Custom 
//-- Clear the casche always
db_query("DELETE FROM {cache};");

/* __________________________________________________
 *
 *	Below are reworked layout of certain functions.
 *
 *
 * __________________________________________________
 */

// -- Navigation UL
function openABM2010_menu_tree($tree) 
{
	//-- rework the left nav view
	return '<ul class="leftNav">'. $tree .'</ul>';
}

// -- Navigation LI
function openABM2010_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) 
{
	$class = "";
	if ($in_active_trail) 
		$class = " class=\"activeNav\"";
	return "<li".$class.">". $link . $menu ."</li>\n";
}

// -- Theme the display of the attachments table
function openABM2010_upload_attachments($files) 
{
	$contents = "";
	
	foreach ($files as $file) 
	{
		$file = (object)$file;
		if ($file->list && empty($file->remove)) 
		{
			$imageClass = grabClass($file->filemime);
			$contents .= "<p class=\"".$imageClass."\"><a href=\"".$file->filepath."\">".$file->description."</a>".$file->filename.", ".format_size($file->filesize)."</p>"; 
		}
	}

	if (!empty($contents)) 
	{
		return "<div class=\"attachments\"><h4>Downloads</h4>".$contents."</div>";
	}
}


//-- Mainly for the attachments section
function grabClass($fileType)
{
	if(preg_match("/image/i", $fileType))
		return "image";
	
	if(preg_match("/pdf/i", $fileType))
		return "pdf";

	if(preg_match("/audio/i", $fileType))
		return "audio";

	if(preg_match("/video/i", $fileType))
		return "video";

	if(preg_match("/html/i", $fileType))
		return "html";

	if(preg_match("/excel/i", $fileType) || preg_match("/calc/i", $fileType) || preg_match("/lotus-1-2-3/i", $fileType) || preg_match("/x-gnumeric/i", $fileType) || preg_match("/spread/i", $fileType))
		return "excel";

	if(preg_match("/present/i", $fileType) || preg_match("/impress/i", $fileType) || preg_match("/powerpoint/i", $fileType))
		return "ppt";

	if(preg_match("/document/i", $fileType) || preg_match("/writer/i", $fileType) || preg_match("/word/i", $fileType))
		return "doc";

	if(preg_match("/archive/i", $fileType) || preg_match("/lha/i", $fileType) || preg_match("/lhz/i", $fileType) || preg_match("/lzop/i", $fileType) || preg_match("/rar/i", $fileType) || preg_match("/rpm/i", $fileType) || preg_match("/tzo/i", $fileType) || preg_match("/deb/i", $fileType) || preg_match("/compress/i", $fileType) || preg_match("/arj/i", $fileType) || preg_match("/ace/i", $fileType) || preg_match("/zip/i", $fileType) || preg_match("/stuffit/i", $fileType) || preg_match("/tar/i", $fileType))
		return "zip";

	if(preg_match("/mathematica/i", $fileType) || preg_match("/xml/i", $fileType) || preg_match("/asp/i", $fileType) || preg_match("/awk/i", $fileType) || preg_match("/cgi/i", $fileType) || preg_match("/csh/i", $fileType) || preg_match("/m4/i", $fileType) || preg_match("/perl/i", $fileType) || preg_match("/php/i", $fileType) || preg_match("/ruby/i", $fileType) || preg_match("/script/i", $fileType) || preg_match("/emacs/i", $fileType) || preg_match("/haskell/i", $fileType) || preg_match("/lua/i", $fileType) || preg_match("/matlab/i", $fileType) || preg_match("/python/i", $fileType) || preg_match("/sql/i", $fileType) || preg_match("/tcl/i", $fileType))
		return "js";

	return "general";
}

//-- fixing up the events display for each item
function openABM2010_event($element) {

	//print "<pre>";
	//print_r($element);
	//print "</pre>";
	
  //return theme('form_element', $element, '<div class="container-inline">'. $element['#children'] .'</div>');
}


//-- Change the login information 
//-- (only changed the Capitol 'O' in out
function openABM2010_lt_loggedinblock()
{
	global $form;
	print "<pre>";
	print_r($user);
	print "</pre>";
	global $user;
	return check_plain($user->name) .' | ' . l(t('Log Out'), 'logout');
}


?>