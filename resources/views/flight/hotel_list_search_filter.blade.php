@foreach($hotels as $hotel)
    <div class="hotel-item">
        <h3>{{ $hotel->name }}</h3>
        <p>{{ $hotel->address }}</p>
        <!-- other details -->
    </div>
@endforeach