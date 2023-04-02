@extends('layouts.portfolioDetails')
@section('title','Сайт-визитка')
@section('innerContent')
    <?php
    if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
        echo 'We don\'t have mysqli!!!';
    } else {
        echo 'Phew we have it!';
    }
        ?>
@endsection

