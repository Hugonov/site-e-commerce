<?php
// var_dump($_GET);

$tea = [
            ['name'=> 'Blue of London', 
            'desc'=>'Thé noir à la bergamote',
            'ref'=>'133742',
            'img'=>'img/product/product3.jpg',
            'prix'=>'9.00'],
            ['name'=> 'Thé des Lords', 
            'desc'=>'Thé noir au Jasmin',
            'ref'=>'258444',
            'img'=>'img/product/product6_big.jpg',
            'prix'=>'8,20'],
            ['name'=> 'Thé des Vahinés', 
            'desc'=>'Thé noir des îles',
            'ref'=>'646116',
            'img'=>'img/product/product3.jpg',
            'prix'=>'9,40'],
            ['name'=> 'Thé du hammam', 
            'desc'=>'Thé vert chaud et relaxant',
            'ref'=>'7895611',
            'img'=>'img/product/product1.jpg',
            'prix'=>'8,40']
    ]; 
    
    
$nb = (int)$_GET['id'];
$id = $tea[$nb];
$name = $id['name'];
$desc = $id['desc'];
$ref = $id['ref'];
$img = $id['img'];
$prix = $id['prix'];




require 'product.phtml';