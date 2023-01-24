<!doctype html>
<head>

</head>
<body>
<div>
    <form action="{{URL('/payment')}}"method="post">
        @csrf
        <h1>Shirt</h1>
        <span>Price: $200 </span>
        <input type="hidden"name="amount"value="200">
        <button type="submit">PayPal</button>
    </form>

</div>
</body>
</html>
