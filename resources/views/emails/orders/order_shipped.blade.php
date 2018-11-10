@component('mail::message')
Dear Mr./Mrs. {{ $transaction->user->name }},<br>
<br>
Selamat! <br>
Pesanan anda dari toko {{ $transaction->vendor->name }} dengan kode transaksi {{ $transaction->id }} telah dikirim!<br>
Nomor Resi: {{ $receipt_number }}<br>
Jasa Pengiriman: {{ $transaction->detailByShop->first()->shipment->shipping_method }}
Tanggal Pengiriman: {{ $transaction->detailByShop->first()->shipment->shipping_date }}<br>
Estimasi waktu pengiriman: {{ $transaction->detailByShop->first()->shipment->etd }} hari<br>
Mohon menunggu pesanan anda tiba.<br>
<br>
Pesanan anda telah dikirim ke alamat berikut: <br>
{{ $transaction->address->address_category }}<br>
{{ $transaction->address->receiver_name }}<br>
{{ $transaction->address->address }}<br>
{{ $transaction->address->province }}, {{ $transaction->address->city }}<br>
{{ $transaction->address->postal_code }}<br>
<br>
Jika anda tidak menerima pesanan anda sesuai dengan estimasi waktu pengiriman diatas, silahkan menghubungi kami dengan membalas email ini dengan judul "Pesanan dengan kode {{ $transaction->id }} belum sampai"<br>
<br>
Rincian pesanan:<br>
@component('mail::table')
| Nama Barang  | Brand | Harga | Jumlah | Total Harga |
| :----------- | :---- | :---- | :----- | :---------- |
@foreach($transaction->detailByShop as $detail)
| {{ $detail->product->name }} | {{ $detail->shop->name }} | {{ $detail->price }} | {{ $detail->quantity }} | {{ $detail->amount }} |
@endforeach
@endcomponent
Tanggal Transaksi: {{ $transaction->transaction_date }}<br>
<br>
Terima kasih sudah berbelanja di Coullection.com<br>
<br>
<br>
Salam kami,<br>
{{ config('app.name') }}
@endcomponent