<?php

use PhpParser\Node\Stmt\Echo_;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



    <title> <?= $title ?> </title>

    <style>
        .content {
            height: 400px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=" <?= base_url('/'); ?> ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" <?= base_url('/mobil'); ?> ">Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" <?= base_url('/motor'); ?> ">Motor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>