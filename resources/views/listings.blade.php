<h1>{{ $heading }}</h1>
@foreach ($listings as $listing)
    <h3><a href="/list/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h3>
    <p>{{ $listing['desc'] }}</p>
@endforeach