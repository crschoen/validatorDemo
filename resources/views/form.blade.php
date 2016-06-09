<div style="height:120px"></div>
@foreach($errors->all() as $error)
    <p style="border: 1px solid red">{{ $error }}</p>
@endforeach

<form action="/" method="POST">
    @for($i = 0; $i < 2; $i++)
        <fieldset>
            <legend>product {{ $i + 1 }}</legend>

            <label for="products[{{ $i }}][name]">name</label>
            <input type="text" id="products[{{ $i }}][name]" name="products[{{ $i }}][name]" value="{{ $i ? 'Hard Drive' : 'HDMI Cable' }}">

            <label for="products[{{ $i }}][price]">price</label>
            <input type="text" id="products[{{ $i }}][price]" name="products[{{ $i }}][price]" value="{{ $i ? 100 : 10 }}">

            <label for="products[{{ $i }}][sku]">sku</label>
            <input type="text" id="products[{{ $i }}][sku]" name="products[{{ $i }}][sku]" value="{{ str_random(6) }}">
        </fieldset>
    @endfor

    <input style="background-color: #0FF;color:#F0F" type="submit" value="send this thing off">
</form>
