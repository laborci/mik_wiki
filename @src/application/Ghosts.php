<?php namespace Application;

use Andesite\Ghost\Decorator;

/**
 * @ghost-off User
 * @ghost Blogpost
 * @ghost Page
 * @ghost Site
 */
class Ghosts{
	public function site(Decorator $decorator){
		$decorator->hasAttachment('headImage')->maxFileCount(1)->acceptExtensions('png', 'jpg');
	}

	public function page(Decorator $decorator){
		$decorator->hasAttachment('files');
		$decorator->hasAttachment('gallery')->acceptExtensions('jpg', 'png', 'gif', 'jpeg');
	}

	public function blogpost(Decorator $decorator){
		$decorator->hasAttachment('files');
		$decorator->hasAttachment('gallery')->acceptExtensions('jpg', 'png', 'gif', 'jpeg');
		$decorator->hasAttachment('leadImage')->acceptExtensions('jpg', 'png', 'gif', 'jpeg')->maxFileCount(1);
	}
}