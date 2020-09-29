@extends('layouts.master')
@section('content')

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('pk_test_51HMyRfJNG7JBtCCyJIrDFgwubxYLr1DVsE71DJBvTEqhMGVjKSEvazJ35M3GiBufwbNq8teQ4aDM4YqIUoWbs0jq00lUd4My2g');
    var session_id = {!! json_encode($session_id) !!};
    window.onload = function(params) {
        stripe.redirectToCheckout({
            sessionId: session_id
        }).then(function (result){});
    };
</script>
@endsection