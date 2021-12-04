<div>
    <a href="{{route('cart')}}" type="button" class="btn btn-primary">
        <i class="fas fa-shopping-cart"></i>
    </a>
   
    {{-- getTotalQuantity --}}
    {{\Cart::session(auth()->id())->getContent()->count()}}
</div>
