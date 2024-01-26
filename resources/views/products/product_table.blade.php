<tbody>
    @foreach($products as $product)
        <tr>
            <td class="text-center">
                <label class="option block mn">
                    <input type="checkbox" name="selected-products[]" value="{{ $product->id }}">
                    <span class="checkbox mn"></span>
                </label>
            </td>
            <td class="">{{ $product->ProductID }}</td>
            <td class="w100">
                <img class="img-responsive mw40 ib mr10" style="margin-left: 15px;" title="{{ $product->ProdName }}" src="{{ asset($product->ProdImage) }}">
            </td>
            <td class="">{{ $product->ProdName }}</td>
            <td class="text-justify" style="width: 350px;">{{ $product->ProdDescription }}</td>
            <td class="">₱{{ number_format($product->UnitPrice, 2) }}</td>
            <td class="">{{ ($product->category)->CategoryName }}</td>
            <td class="text-justify">{{ $product->ProdMaterial }}</td>
            <td class="">{{ $product->ProdWeight }}</td>
            <td class="">{{ $product->ProdSize }}</td>
            <td class="">{{ $product->Stock }}</td>
        </tr>
    @endforeach
</tbody>