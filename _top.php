<?php
// layout/_top.php
require_once __DIR__ . '/../helper/auth.php';
isLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <title>Seblak Dago &mdash; Dashboard</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/seblak/assets/css/custom.css">
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <?php require_once __DIR__ . '/_header.php'; ?>
      <div class="main-content">
        <section class="section">
