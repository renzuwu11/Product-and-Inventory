<tbody>
    @foreach($products as $product)
        <tr>
            <td class="text-center">
                <label class="option block mn">
                    <input type="checkbox" name="selected-products[]" value="{{ $product->id }}">
                    <span class="checkbox mn"></span>
                </label>
            </td>
            <td class="w100">
                <img class="img-responsive mw40 ib mr10" title="{{ $product->ProdName }}" src="{{ asset($product->ProdImage) }}">
            </td>
            <td class="">{{ $product->ProdName }}</td>
            <td class="">{{ $product->ProdDescription }}</td>
            <td class="">₱{{ number_format($product->UnitPrice, 2) }}</td>
            <td class="">{{ $product->Stock }}</td>
        </tr>
    @endforeach
</tbody>
