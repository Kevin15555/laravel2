@extends('layout')

@php($noSidebar = true)

@section('title', 'Pengajuan / Perizinan')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

<style>
  body {
    background-color: #f5f5f5;
    font-family: 'Segoe UI', sans-serif;
    font-size: 13px;
    color: #333;
  }

  .header-orange {
    background-color: #f36f21;
    color: white;
    padding: 14px 24px;
    font-size: 16px;
    font-weight: 600;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #e3641a;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  }

  .btn-logout {
    background: none;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
  }

  .form-box {
    background-color: white;
    width: 720px;
    max-width: 95%;
    margin: 40px auto;
    padding: 30px 40px;
    border-radius: 16px;
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.05);
  }

  .form-group {
    display: flex;
    align-items: flex-start;
    margin-bottom: 16px;
  }

  .form-group label {
    width: 140px;
    font-weight: 500;
    padding-top: 6px;
  }

  .form-group input[type="text"],
  .form-group input[type="date"],
  .form-group textarea {
    flex: 1;
    padding: 6px 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 13px;
  }

  .form-group input[type="file"] {
    border: none;
    font-size: 13px;
  }

  .form-group textarea {
    resize: vertical;
    min-height: 80px;
  }

  .form-buttons {
    text-align: right;
    margin-top: 24px;
  }

  .btn-orange {
    background-color: #f36f21;
    color: white;
    border: none;
    padding: 7px 16px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 500;
    margin-left: 8px;
    cursor: pointer;
    transition: background 0.2s ease;
  }

  .btn-orange:hover {
    background-color: #d85c17;
  }
</style>

<div class="header-orange">
  <div>Pengajuan / Perizinan</div>
  <button class="btn-logout" title="Logout">
    <i class="bi bi-box-arrow-right"></i>
  </button>
</div>

<div class="form-box">
  <form action="#" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" />
    </div>

    <div class="form-group">
      <label>Jabatan</label>
      <input type="text" name="jabatan" />
    </div>

    <div class="form-group">
      <label>Pengajuan</label>
      <input type="text" name="jenis_pengajuan" />
    </div>

    <div class="form-group">
      <label>Tanggal</label>
      <input type="date" name="tanggal_mulai" style="margin-right: 10px;" />
      <span style="padding: 5px 0;">s/d</span>
      <input type="date" name="tanggal_selesai" style="margin-left: 10px;" />
    </div>

    <div class="form-group">
      <label>Dokumen Pendukung</label>
      <input type="file" name="dokumen" />
    </div>

    <div class="form-group">
      <label>Alasan</label>
      <textarea name="alasan"></textarea>
    </div>

    <div class="form-buttons">
      <a href="{{ url()->previous() }}" class="btn-orange">Back</a>
      <button type="submit" class="btn-orange">Save</button>
    </div>
  </form>
</div>
@endsection
