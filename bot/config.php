<?php
	$album = 'https://vk.com/album-185203024_263586008';
	$res = parse_url($album);
	$path = substr($res['path'], 6);
	$array = explode('_', $path);
	$owner_id = $arr[0];
	$album_id = $arr[1];

	// 'd7bae75aaf20260cf4cb55983f85eff1a9cf722c3deb43e0b7eb2d4d1a698bafc9016ed74c9cdfff2034a'
	// group token ed72afb68f5b0df93c22d9eaa10edc6a540eb4ffd979fbde9d9d582495f474ff472ee1fe70e977bfdf9db
	$conf = [
		'standalone' => 'd7bae75aaf20260cf4cb55983f85eff1a9cf722c3deb43e0b7eb2d4d1a698bafc9016ed74c9cdfff2034a',
		'group_token' => 'ed72afb68f5b0df93c22d9eaa10edc6a540eb4ffd979fbde9d9d582495f474ff472ee1fe70e977bfdf9db',
		'contorm_token' => 'a313c247',
		'mess' => "Фото в студию",
		'not_command' => 'Ничего не понял!',
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