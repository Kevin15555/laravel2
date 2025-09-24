@extends('layout')

@php($noSidebar = true)

@section('title', 'History Absen')

@section('content')
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

<style>
  body {
    background-color: #f9fafb;
    font-family: 'Inter', sans-serif;
    color: #333;
    font-size: 13px;
  }

  .header-orange {
    background-color: #f36f21;
    color: white;
    padding: 12px 20px;
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
    transition: color 0.2s ease;
  }

  .btn-logout:hover {
    color: #ffd6ba;
  }

  .main-box {
    background: white;
    max-width: 900px;
    margin: 30px auto;
    padding: 24px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  }

  .top-buttons {
    display: flex;
    justify-content: flex-end;
    gap: 8px;
    margin-bottom: 20px;
    flex-wrap: wrap;
  }

  .btn-orange {
    background-color: #f36f21;
    border: none;
    color: white;
    padding: 7px 16px;
    font-size: 13px;
    font-weight: 500;
    border-radius: 6px;
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(243, 111, 33, 0.2);
    transition: all 0.2s ease;
  }

  .btn-orange:hover {
    background-color: #d85c17;
    transform: translateY(-1px);
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
  }

  thead {
    background-color: #f36f21;
    color: white;
  }

  table th, table td {
    padding: 10px 8px;
    text-align: center;
    border-bottom: 1px solid #f0f0f0;
  }

  table tbody tr:nth-child(even) {
    background-color: #fcfcfc;
  }

  table tbody tr:hover {
    background-color: #fff5ee;
  }

  @media (max-width: 768px) {
    .main-box {
      margin: 15px;
      padding: 20px;
    }

    .top-buttons {
      flex-direction: column;
      align-items: flex-end;
    }

    .btn-orange {
      width: 100%;
      justify-content: center;
    }

    table th, table td {
      font-size: 12px;
      padding: 8px;
    }
  }
</style>

<!-- HEADER -->
<div class="header-orange">
  <div>History Absen</div>
  <button class="btn-logout" title="Logout">
    <i class="bi bi-box-arrow-right"></i>
  </button>
</div>

<!-- MAIN CONTENT -->
<div class="main-box">
  <div class="top-buttons"><a href="{{ route('absensi') }}" class="btn btn-orange">
  <i class="bi bi-arrow-left"></i> Back
</a>
  <a href="{{ route('pengajuan') }}" class="btn-orange">
  <i class="bi bi-file-earmark-text"></i> Pengajuan
</a>
    <button class="btn-orange"><i class="bi bi-calendar-check"></i> Absen</button>
  </div>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Bulan</th>
        <th>Izin</th>
        <th>Cuti</th>
        <th>Onsite</th>
        <th>Wfh</th>
      </tr>
    </thead>
    <tbody>
      {{-- Kosong --}}
    </tbody>
  </table>
</div>
@endsection
