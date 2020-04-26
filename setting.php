<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "oB+dxq4x/QW0LK5ChAdkW8lA/NB45OZBqL9esFEklV4HE+s0s/uYj87W/pFC8TVux4iE28au22uaTj7by26TAeG+yYwl4bgAvV4xam3djBZRhaC2iYxroQNVYYqyfv84hAsnHS8/Di9m6w7OP8LElQdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "53166c3cef8967db426b9328f1066bac";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
