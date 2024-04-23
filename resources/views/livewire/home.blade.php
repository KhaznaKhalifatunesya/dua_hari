<div>
    <nav class="navbar navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid px-3">
            <nav aria-label="breadcrumb">
                <div class="row">
                    <div class="col">
                <img src="https://image.shutterstock.com/image-vector/dotted-spiral-vortex-royaltyfree-images-600w-2227567913.jpg" width="36" alt="">

                    </div>
                    <div class="col">
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>

                    </div>
                </div>
              </nav>
            <div class="collapse navbar-collapse me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
    
                </div>
                <ul class="navbar-nav  justify-content-end">
    
                    <li class="nav-item d-flex align-items-center">
                        @if (auth()->user())
                        @if (auth()->user()->role == 'Pimpinan')
                        <a href="{{ route('konsumen') }}" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-share me-sm-1"></i>
                            <span class="d-sm-inline d-none">Daftar Konsumen</span>
                        </a>
                        @else
                        <a href="{{ route('transaksi') }}" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-share me-sm-1"></i>
                            <span class="d-sm-inline d-none">Transaksi</span>
                        </a>
                        @endif
                        @else
                        <a href="{{ route('login') }}" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Login</span>
                        </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="row mt-3">
        <div class="col table-responsive">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-white text-capitalize ps-3">Daftar Laundry</h6>
                            </div>
                            <div class="col">
                                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                    <div wire:ignore class="input-group input-group-outline text-white">
                                        <label class="form-label text-white">Cari Berdasarkan Kode</label>
                                        <input type="text" class="form-control text-white" wire:model='searchorder'
                                        wire:input='resetPageOrder'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body px-0 pb-2">
                    <table class="table table-striped table-hover table-responsive text-center">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kode</th>
                                <th>Total Harga</th>
                                <th>Jenis Pelayanan</th>
                                <th>Status</th>
                                <th>Status Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr>
                                    <td>{{ $order->updated_at->format('d-m-y') }}</td>
                                    <td>{{ $order->kode_laundry }}</td>
                                    <td>{{ 'Rp' . number_format($order->total_harga, 0, ',', '.') }}</td>
                                    <td>{{ $order->layanan->nama_layanan }}</td>
                                    <td class="@if ($order->status == 'baru') bg-danger @elseif($order->status == 'proses') bg-warning @else bg-success @endif text-white border"
                                        style="text-transform: uppercase;">
                                        {{ $order->status }}
                                    </td>
                                    <td class="@if ($order->pembayaran->status_pembayaran == 'lunas') bg-success @else bg-danger @endif text-white"
                                        style="text-transform: uppercase;">
                                        {{ $order->pembayaran->status_pembayaran }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        <h5 class="text-center">Belum ada orderan</h5>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col">
            {{ $orders->links() }}
        </div>
    </div>
</div>
