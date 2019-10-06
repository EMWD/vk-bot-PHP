<?php
	$album = 'https://vk.com/album-185203024_263586008';
	$res = parse_url($album);
	$path = substr($res['path'], 6);
	$array = explode('_', $path);
	$owner_id = $arr[0];
	$album_id = $arr[1];


	$conf = [
		'standalone' => '********************************************************************************',
		'group_token' => '********************************************************************************',
		'contorm_token' => 'a313c247',
		'mess' => "Let me photo",
		'not_command' => 'Understood nothing!',
		'owner_id' => $owner_id,
		'album_id' => $album_id,
		'group_id' => '185203024',
		'apiurl' => 'https://api.vk.com/method/',
		'photos' => 'photos.txt',
		'temp_link' => 'temp_album.txt',
		'random_id' => mt_rand(0000000000, 999999999999),
		'v' => '5.50'

	]
?>
