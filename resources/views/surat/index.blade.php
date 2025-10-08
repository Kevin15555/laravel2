@extends('layout')

@section('title', 'Daftar Surat')

@section('content')
<div class="container-fluid py-4">
    <h3 class="fw-bold mb-4 text-orange">📑 Daftar Pemakaian Surat</h3>

    <div class="card shadow-sm rounded-4 p-3 border-0">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-orange text-center">
                    <tr>
                        <th>No</th>
                        <th>Tujuan Penggunaan Surat</th>
                        <th>Tanggal</th>
                        <th>Kode Surat</th>
                        <th>Divisi</th>
                        <th>Oleh</th>
                        <th>Tujuan</th>
                        <th>TTD</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Data dari Project Bank DKI --}}
                    <tr><td>7</td><td>BAST GO LIVE</td><td>27/05/2024</td><td>132/IOTA-BDKI/BA/067/VIII/2022</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>8</td><td>Perjanjian Kerjasama PT Bank DKI dengan IOTANESIA</td><td>02/10/2023</td><td>137/IOTA-BDKI/PKS/046/XI/2023</td><td>PM</td><td>Wan Adli</td><td>Bank DKI</td><td></td></tr>
                    <tr><td>9</td><td>Berita Acara Serah Terima Data Pencairan Mikro Digital Lending</td><td>03/01/2024</td><td>138/IOTA-BDKI/BAST/046/I/2024</td><td>Sales</td><td>Wan Adli</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>10</td><td>Surat Permohonan Pembayaran Mikro Digital Lending BDKI</td><td>03/01/2024</td><td>139/IOTA-BDKI/SPB/046/I/2024</td><td>Sales</td><td>Wan Adli</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>11</td><td>Invoice Pengajuan Data Pencairan Mikro Per. Okt’23,Nov’23,Des’23</td><td>03/01/2024</td><td>140/IOTA-BDKI/INV/046/I/2024</td><td>Sales</td><td>Wan Adli</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>5</td><td>BAST atas perhitungan dan pencairan kredit Mikro</td><td>05/03/2024</td><td>141/IOTA-BDKI/BAST/046/III/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>6</td><td>Surat Permohonan Pembayaran pencairan kredit Mikro</td><td>05/03/2024</td><td>142/IOTA-BDKI/SPB/046/III/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>7</td><td>Invoice Pengajuan Data Pencairan Mikro PER. Januari’24 - Maret’24</td><td>05/03/2024</td><td>143/IOTA-BDKI/INV/046/III/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>8</td><td>BAST atas perhitungan dan pencairan kredit Mikro</td><td>30/04/2024</td><td>144/IOTA-BDKI/BAST/046/IV/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>9</td><td>Surat Permohonan Pembayaran pencairan Mikro April 2024</td><td>30/04/2024</td><td>145/IOTA-BDKI/SPB/046/IV/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>10</td><td>Invoice Pengajuan Data Pencairan Mikro PER. April’24</td><td>30/04/2024</td><td>146/IOTA-BDKI/INV/046/IV/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>12</td><td>BAST PIR</td><td>27/05/2024</td><td>150/IOTA-BDKI/BAST/046/V/2023</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>13</td><td>BAST atas perhitungan dan pencairan kredit Mei’24</td><td>04/06/2024</td><td>151/IOTA-BDKI/BAST/046/VI/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>14</td><td>Surat Permohonan Pembayaran pencairan kredit Mei’24</td><td>04/06/2024</td><td>152/IOTA-BDKI/SPB/046/VI/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>15</td><td>Invoice Pengajuan pencairan kredit Mei’24</td><td>04/06/2024</td><td>153/IOTA-BDKI/INV/046/VI/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>16</td><td>BAST atas Selisih perhitungan dan pencairan kredit Okt-Des’23</td><td>13/06/2024</td><td>154/IOTA-BDKI/BAST/046/VI/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>17</td><td>Surat Permohonan Pembayaran selisih pencairan PER. Okt-Des’23</td><td>13/06/2024</td><td>155/IOTA-BDKI/SPB/046/VI/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>18</td><td>Invoice Pengajuan Selisih Data Pencairan PER. Okt-Des’23</td><td>13/06/2024</td><td>156/IOTA-BDKI/INV/046/VI/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>19</td><td>BAST atas perhitungan dan pencairan kredit Jun’24 - Mikro Konven</td><td>02/07/2024</td><td>157/IOTA-BDKI/BAST/046/VII/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>20</td><td>BAST atas perhitungan dan pencairan kredit Jun’24 - Mikro Syariah</td><td>02/07/2024</td><td>158/IOTA-BDKI/BAST/046/VII/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>21</td><td>Surat Permohonan Pembayaran pencairan kredit Jun’24 - Mikro Konven</td><td>02/07/2024</td><td>158A/IOTA-BDKI/SPB/046/VII/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>22</td><td>Surat Permohonan Pembayaran pencairan kredit Jun’24 - Mikro Syariah</td><td>02/07/2024</td><td>158B/IOTA-BDKI/SPB/046/VII/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>23</td><td>Invoice Pengajuan Data Pencairan PER. Jun’24</td><td>02/07/2024</td><td>159/IOTA-BDKI/INV/046/VII/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>24</td><td>BAST atas perhitungan dan pencairan kredit Jul’24 - Mikro Konven</td><td>09/08/2024</td><td>160/IOTA-BDKI/BAST/046/VIII/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>
                    <tr><td>25</td><td>BAST atas perhitungan dan pencairan kredit Jul’24 - Mikro Syariah</td><td>09/08/2024</td><td>160B/IOTA-BDKI/BAST/046/VIII/2024</td><td>Admin</td><td>Nandita</td><td>Grup Bisnis BDKI</td><td></td></tr>

                    {{-- Data dari Project BNI Move --}}
                    <tr><td>59</td><td>Formulir Rekapitulasi Tingkat Komponen Dalam Negeri (TKDN) - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove</td><td>03/08/2023</td><td>059/IOTA/TDKN/VIII/2023</td><td>Admin</td><td>Egie</td><td>Pak Irfan, BNI PFA</td><td></td></tr>
                    <tr><td>60</td><td>Berita Acara Progress Pekerjaan (BAPP) 50% - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove</td><td>03/08/2023</td><td>060/IOTA/BAPP/075/X/2023</td><td>Admin</td><td>Nandita</td><td>Mba Yuan, BNI SBP</td><td></td></tr>
                    <tr><td>61</td><td>SPB - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (50%)</td><td>09/11/2023</td><td>061/IOTA-BNI/075/SPB/XI/2023</td><td>Adm</td><td>Egie</td><td>BNI</td><td></td></tr>
                    <tr><td>62</td><td>INVOICE - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (50%)</td><td>09/11/2023</td><td>062/IOTA-BNI/INV/XI/2023</td><td>Adm</td><td>Egie</td><td>BNI</td><td></td></tr>
                    <tr><td>63</td><td>BA Pembayaran - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (50%)</td><td>09/11/2023</td><td>063/IOTA-BNI/BAP/XI/2023</td><td>Adm</td><td>Egie</td><td>BNI</td><td></td></tr>
                    <tr><td>64</td><td>BAPP - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (50%)</td><td>07/03/2024</td><td>064/IOTA-BNI/BAPP/075/III/2024</td><td>Adm</td><td>Nandita</td><td>BNI</td><td></td></tr>
                    <tr><td>65</td><td>BAST - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (45%)</td><td>08/03/2024</td><td>065/IOTA-BNI/BAST/075/III/2024</td><td>Adm</td><td>Nandita</td><td>BNI</td><td></td></tr>
                    <tr><td>66</td><td>Surat Pengantar Berita Acara - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (45%)</td><td>08/03/2024</td><td>066/IOTA-BNI/SPB/075/III/2024</td><td>Adm</td><td>Nandita</td><td>BNI</td><td></td></tr>
                    <tr><td>67</td><td>SPB - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (45%)</td><td>08/03/2024</td><td>067/IOTA-BNI/SPB/075/III/2024</td><td>Adm</td><td>Nandita</td><td>BNI</td><td></td></tr>
                    <tr><td>68</td><td>INVOICE - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (45%)</td><td>08/03/2024</td><td>068/IOTA-BNI/INV/075/III/2024</td><td>Adm</td><td>Nandita</td><td>BNI</td><td></td></tr>
                    <tr><td>69</td><td>BA Pembayaran - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove (50%)</td><td>08/03/2024</td><td>069/IOTA-BNI/BAP/075/III/2024</td><td>Adm</td><td>Nandita</td><td>BNI</td><td></td></tr>
                    <tr><td>70</td><td>BA Klarifikasi Jangka Waktu Pelaksanaan Pekerjaan - Jasa Enhancement Pengadaan Dashboard Monitoring BNIMove</td><td>28/03/2024</td><td>070/IOTA-BNI/BAKL/075/III/2024</td><td>Adm</td><td>Nandita</td><td>BNI</td><td></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
