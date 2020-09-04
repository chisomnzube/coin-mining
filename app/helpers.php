<?php


function postImage($path)
  	{
  		 //return $path ? asset(Voyager::image($path)) : asset('img/product/noimage.jpg');
      return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/product/noimage.jpg');
  	}