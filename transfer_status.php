<?php
	/*
	Plugin Name: Transfer.ro File Information
	Plugin URI: http://api.transfer.ro
	Description: This plugin retrieves uploaded's file information and status.
	Author: Webmaker
	Version: 1.0
	Author URI: http://www.webmaker.ro
	*/
	
	function transfer_api($content)
	{
		preg_match_all('/<a href=\"(.*dl.transfer.ro.*)\">(.*)<\/a>/', $content, $links);
		for($i = 0; $i < count($links[0]); $i++)
		{
			$zip = parse_url($links[1][$i]);
			$xml = @simplexml_load_string(file_get_contents('http://api.transfer.ro/getDetails'.$zip['path']));
			if($xml)
			{
				$title = 'File name: '.$xml->filename.', ';
				$title .= ' size: '.$xml->size.', ';
				$title .= ' upload date: '.$xml->uploaded.', '; 
				$title .= ' expires on: '.$xml->expires.', '; 
				$title .= ' number of downloads: '.$xml->downloaded.'. '; 
				$title .= ' Files: ';
				
			if(count($xml->files->file) == 1)
			{
				$title .= ' file: '.$xml->files->file.'. '; 
			}
			else 
			{
				foreach($xml->files->file as $file)
				{
					$title .= $file.'; '; 
				}
				$title = substr($title, 0, -2);
				$title .= '.';
			}
			}
			else 
			{
				$title = '';
			}
			$content = str_replace($links[0][$i], '<a href="'.$links[1][$i].'" title="'.$title.'">'.$links[2][$i].'</a>', $content);
			
		}
		return $content;
	}

	add_filter('the_content', 'transfer_api');
?>