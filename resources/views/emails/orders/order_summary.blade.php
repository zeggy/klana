@component('mail::message')
    <div class="container" style="text-align: center">
        <div>
            <i>Your trip has been confirm to DESA and KLANA has make it transparency</i>
            <p class="gold-text" style="text-align:center;
            color: #b38600;
            font-size: 5vh;">{{ $transaction->trip['title'] }}</p>
            <i>Your trip has been confirmed</i>
            <p class="gold-text" style="text-align:center;
            color: #b38600;
            font-size: 5vh;">INV/12112018/XVIII/11/XI/2018</p>
            <i>Thank you for your trusted and contributed together to develop and caring DESA in (based on the destination)</i>
        </div>
        <br/>
        <div class="grey-background" style="background-color: #c0c0c0; margin: 0 35%; padding: 5px 30px;">
            <i>See who is gonna be your partner in this trip</i>
        </div>

        <div class="information">
            <div class="package-name">
                <p style="text-align:center;">{{ $transaction->trip['title'] }}</p>
                <p style="text-align:center;">By {{ $transaction->vendor['name'] }}</p>
                <p style="text-align:center;">Rating: 4.5/5</p>
                <p style="text-align:center;">Location: {{ $transaction->trip['location'] }}</p>
                <p style="text-align:center;">Date: {{ $transaction->trip['date'] }}</p>
                @component('mail::button', ['url' => route('get_trip_detail', $transaction->trip), 'color' => 'success'])
                View Order
                @endcomponent
            </div>
        </div>

        <br>
        <hr>
        <br>

        <div>
            <p style="text-align: center;">PAYMENT INFORMATION</p>

            @component('mail::table')

            | NAME OF PACKAGE | NUMBER OF MEMBER TAX | TOTAL PRICE |
            | --------------- |:--------------------:| -----------:|
            | {{ $transaction->trip['title'] }} | {{ $transaction->trip['price'] }} | {{ $transaction->total_amount }}
            @endcomponent
        </div>

        <br>
        <hr>
        <br>

        <div>
            <p style="text-align: center;">DETAIL INFORMATION</p>

            @component('mail::table')
            | NUMBER OF MEMBER | HISTORY OF DISEASE ALERGY INFORMATION | SPECIAL REQUEST |
            | ---------------- |:-------------------------------------:| ---------------:|
            | 8                | -                                     | -               |
            @endcomponent
        </div>

        <br>
        <hr>
        <br>

        <div>
            <p style="text-align: center">REFUNDABLE POLICIES</p>

            <div class="grey-background" style="background-color: #c0c0c0; margin: 0 15%; padding: 5px 30px;">
                    <i>We apologize, all the transaction is not refundable after 14 days before the trip. But we guarantee you'll gonna have a remarkable journey with your new fellas.</i>
            </div>
        </div>
    </div>
@endcomponent