@extends('layouts.master')

@section('title', 'LibreApps')

@section('main')

@include('parts.headings.more', ['heading' => 'Updated', 'more_url' => '/update'])

@include('parts.galleries.app', ['apps' => $apps])

@include('parts.headings.more', ['heading' => 'New', 'more_url' => '/new'])

@include('parts.galleries.app', ['apps' => $apps])

@include('parts.headings.more', ['heading' => 'Top Rated', 'more_url' => '/top'])

@include('parts.galleries.app', ['apps' => $apps])

<div class="section landscape blurlight">
    <div class="container">
        <h1>The Power of Freedom</h1>
        <p>
            LibreApps is the great collection of pure free/libre software applications for your favorite
            GNU/Linux operating system.
        </p>
        <p>
            19,292 FOSS applications in one place
        </p>
        <p>
            98,076 reviews from 18,802 users
        </p>
        <p>
            <a class="btn btn-primary btn-lg">Get The App</a>
            <a class="btn btn-default btn-lg">What's free software?</a>
        </p>
    </div>
</div>

<h2 class="section-header container-fluid">
    Featured Screenshots
</h2>

@include('parts.galleries.screenshot')

<h2 class="section-header container-fluid">
    Upvoted Reviews
</h2>

@include('parts.galleries.review', ['reviews' => $reviews])

<div id="platforms" class="section landscape blurlight">
    <div class="container">
        <img class="logo" src="img/logo/gnu.png" title="GNU">
        <img class="logo" src="img/logo/linux.png" title="Linux Kernel">
        <img class="logo" src="img/logo/kde.png" title="KDE">
        <img class="logo" src="img/logo/gnome.png" title="GNOME">
        <img class="logo" src="img/logo/archlinux.png" title="Arch Linux">
        <img class="logo" src="img/logo/centos.png" title="CentOS">
        <img class="logo" src="img/logo/debian.png" title="Debian">
        <img class="logo" src="img/logo/fedora.png" title="Fedora">
        <img class="logo" src="img/logo/opensuse.png" title="openSUSE">
        <img class="logo" src="img/logo/ubuntu.png" title="Ubuntu">
    </div>
</div>

@endsection