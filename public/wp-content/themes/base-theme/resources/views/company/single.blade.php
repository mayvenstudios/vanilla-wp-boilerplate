@layout('layouts.master')

<?php /* Template Name: Sample Page Template */ ?>
@section('head')
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="title">That's {{ get_the_title() }} company page</div>
    <div class="content">
        {{ post()->name() }}
    </div>
</div>
@endsection
