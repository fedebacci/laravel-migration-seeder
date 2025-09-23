@extends('layouts.master')
@section('title', 'Laravel Migration Seeder - Home')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Home Page
                    </h1>

                    @foreach ($trains as $train)
                        <p>
                            {{ $train->agency }}
                             - 
                            {{ $train->departure_station }}
                             - 
                            {{ $train->arrival_station }}
                             - 
                            {{ $train->departure_time }}
                             - 
                            {{ $train->arrival_time }}
                             - 
                            {{ $train->train_code }}
                             - 
                            {{ $train->carriages }}
                             - 
                            {{ $train->in_time ? 'In orario' : 'In ritardo' }}
                             - 
                            {{ $train->deleted ? 'Cancellato' : 'Non cancellato' }}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
</section>
@endsection
