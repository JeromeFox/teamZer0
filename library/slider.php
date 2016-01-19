<?php

function slider_regx_print($loc=''){
	$file = $loc.'slide.tut';
	$contents = file_get_contents($file);

	$reg_cont =	'/<start>(.|\n)*?<end>/';
	$reg_link =	'/<link>(.|\n)*?<\/link>/';
	$reg_img = 	'/<img>(.|\n)*?<\/img>/';
	$reg_h2 =	'/<h2>(.|\n)*?<\/h2>/';
	$reg_p = 	'/<p>(.|\n)*?<\/p>/';
	$reg_sub = 	'/<sub>(.|\n)*?<\/sub>/';

	preg_match_all($reg_cont, $contents, $matches);

	$num = (count($matches[0]));

	$i = 0;
	while ($i < $num){
		$match = ($matches[0][$i]);
		// REGEX
	
		// img
		preg_match_all($reg_img,$match,$fin_img);
		$tmp = $fin_img[0][0];
		$tmp = str_replace('<img>','',$tmp);
		$fin_img = str_replace('</img>','',$tmp);
		
		// link
		preg_match_all($reg_link,$match,$fin_link);
		$tmp = $fin_link[0][0];
		$tmp = str_replace('<link>','',$tmp);
		$fin_link = str_replace('</link>','',$tmp);
		
		// h2
		preg_match_all($reg_h2,$match,$fin_h2);
		$tmp = $fin_h2[0][0];
		$tmp = str_replace('<h2>','',$tmp);
		$fin_h2 = str_replace('</h2>','',$tmp);
		
		// p
		preg_match_all($reg_p,$match,$fin_p);
		$tmp = $fin_p[0][0];
		$tmp = str_replace('<p>','',$tmp);
		$fin_p = str_replace('</p>','',$tmp);
		
		// sub
		preg_match_all($reg_sub,$match,$fin_sub);
		$tmp = $fin_sub[0][0];
		$tmp = str_replace('<sub>','',$tmp);
		$fin_sub = str_replace('</sub>','',$tmp);
		
		//--------------
		echo ('	<li>');
		echo ('		<div id="splash">');
		echo ('			<table>');
		echo ('				<tr>');
		echo ('					<td>');
		echo ('						<a href="'.$fin_link.'"><img src="'.$fin_img.'" alt=""></a></img>');
		echo ('					</td>');
		echo ('					<td>');
		echo ('						<div class="text">');
		echo ('							<h2>'.$fin_h2.'</h2>');
		echo ('							<p>'.$fin_p.'</p>');
		echo ('							<br/>');
		echo ('							<div style="font-size:75%;">');
		echo ('								<p><sub>'.$fin_sub.'</sub></p>');
		echo ('							</div>');
		echo ('						</div>');
		echo ('					</td>');
		echo ('				</tr>');
		echo ('			</table>');
		echo ('			<br/>');
		echo ('		</div>');
		echo ('	</li>');
		//--------------
	
		$i ++;
	}
}

?>