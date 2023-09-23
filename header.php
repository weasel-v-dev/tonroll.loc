<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ton Roll</title>
  <link rel="stylesheet" href="/libs/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<body class="trl-bg-dark">

<div class="container g-0" style="max-width: 540px">
  <div class="px-2 pt-2">

    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center trl-bg rounded-4 p-1">
        <?php
        if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php") { ?>
          <button><img src="/assets/img/dynamic.png" class="pe-2 trl-avatar-header-icon" alt=""></button>
          <div class="trl-separator trl-bg-light"></div>
          <button><img src="/assets/img/i.png" class="ps-2 trl-avatar-header-icon" alt=""></button>
          <button><img src="/assets/img/armor.png" class="ps-2 trl-avatar-header-icon" alt=""></button>
        <?php } else { ?>
          <button><img src="/assets/img/i.png" class=" trl-avatar-header-icon" alt=""></button>
        <?php } ?>
      </div>
      <div class="trl-avatar trl-bg-green-blue d-flex justify-content-center align-items-center rounded-4">
        <img src="/assets/img/plug/avatar.png" alt="" >
      </div>
      <div class="d-flex align-items-center trl-bg rounded-4 p-1">
        <img src="/assets/img/wallet.png" class="pe-2 trl-avatar-header-icon--wallet" alt="">
        <div class="font-18 lh-0" style="margin-top: 3px;">$ 100000.00</div>
      </div>
    </div>
