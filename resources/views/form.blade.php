@foreach($errors->all() as $error)
    <p style="border: 1px solid red">{{ $error }}</p>
@endforeach

<form action="/" method="POST">
    @for($i = 0; $i < 4; $i++)
        <fieldset>
            <legend>product {{ $i + 1 }}</legend>

            <label for="products[{{ $i }}][name]">name</label>
            <input type="text" id="products[{{ $i }}][name]" name="products[{{ $i }}][name]">

            <label for="products[{{ $i }}][price]">price</label>
            <input type="text" id="products[{{ $i }}][price]" name="products[{{ $i }}][price]">

            <label for="products[{{ $i }}][sku]">sku</label>
            <input type="text" id="products[{{ $i }}][sku]" name="products[{{ $i }}][sku]">
        </fieldset>
    @endfor

    <input style="background-color: #0FF" type="submit" value="send this thing off">
</form>
