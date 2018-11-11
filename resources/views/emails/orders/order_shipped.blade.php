@component('mail::message')
Dear Mr./Mrs. {{ $transaction->user->name }},<br>
<br>
Selamat! <br>
Pesanan anda dari toko {{ $transaction->vendor->name }} dengan kode transaksi 
{{ config('app.name') }}
@endcomponent