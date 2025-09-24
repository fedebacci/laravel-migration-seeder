@extends('layouts.master')
@section('title', 'Laravel Migration Seeder - Home')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-5">
                        Trains
                    </h1>
                    

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">
                                    Train Code
                                </th>
                                <th scope="col">
                                    Agency
                                </th>
                                <th scope="col">
                                    Departure Station
                                </th>
                                <th scope="col">
                                    Arrival Station
                                </th>
                                <th scope="col">
                                    Departure Time
                                </th>
                                <th scope="col">
                                    Arrival Time
                                </th>
                                <th scope="col">
                                    Carriages
                                </th>
                                <th scope="col">
                                    In Time
                                </th>
                                <th scope="col">
                                    Deleted
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($trains as $train)


                                <x-train-table-row>
                                    <x-slot name="train_code">
                                        {{ $train->train_code }}
                                    </x-slot>
                                    <x-slot name="agency">
                                        {{ $train->agency }}
                                    </x-slot>
                                    <x-slot name="departure_station">
                                        {{ $train->departure_station }}
                                    </x-slot>
                                    <x-slot name="arrival_station">
                                        {{ $train->arrival_station }}
                                    </x-slot>
                                    <x-slot name="departure_time">
                                        {{ $train->departure_time }}
                                    </x-slot>
                                    <x-slot name="arrival_time">
                                        {{ $train->arrival_time }}
                                    </x-slot>
                                    <x-slot name="carriages">
                                        {{ $train->carriages }}
                                    </x-slot>
                                    <x-slot name="in_time">
                                        {{ $train->in_time }}
                                    </x-slot>
                                    <x-slot name="deleted">
                                        {{ $train->deleted }}
                                    </x-slot>
                                </x-train-table-row>

                                
                            @endforeach

                        </tbody>
                    </table>


                    <hr class="my-5 py-5">






































                    <h1 class="text-center mb-5">
                        Arrivals to %Borgo%
                    </h1>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">
                                    Train Code
                                </th>
                                <th scope="col">
                                    Agency
                                </th>
                                <th scope="col">
                                    Departure Station
                                </th>
                                <th scope="col">
                                    Arrival Station
                                </th>
                                <th scope="col">
                                    Departure Time
                                </th>
                                <th scope="col">
                                    Arrival Time
                                </th>
                                <th scope="col">
                                    Carriages
                                </th>
                                <th scope="col">
                                    In Time
                                </th>
                                <th scope="col">
                                    Deleted
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($trainsLocalArrivals as $train)
                                <x-train-table-row>
                                    <x-slot name="train_code">
                                        {{ $train->train_code }}
                                    </x-slot>
                                    <x-slot name="agency">
                                        {{ $train->agency }}
                                    </x-slot>
                                    <x-slot name="departure_station">
                                        {{ $train->departure_station }}
                                    </x-slot>
                                    <x-slot name="arrival_station">
                                        {{ $train->arrival_station }}
                                    </x-slot>
                                    <x-slot name="departure_time">
                                        {{ $train->departure_time }}
                                    </x-slot>
                                    <x-slot name="arrival_time">
                                        {{ $train->arrival_time }}
                                    </x-slot>
                                    <x-slot name="carriages">
                                        {{ $train->carriages }}
                                    </x-slot>
                                    <x-slot name="in_time">
                                        {{ $train->in_time }}
                                    </x-slot>
                                    <x-slot name="deleted">
                                        {{ $train->deleted }}
                                    </x-slot>
                                </x-train-table-row>
                            @endforeach

                        </tbody>
                    </table>


                    <hr class="my-5 py-5">




                    <h1 class="text-center mb-5">
                        Departures from %Borgo%
                    </h1>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">
                                    Train Code
                                </th>
                                <th scope="col">
                                    Agency
                                </th>
                                <th scope="col">
                                    Departure Station
                                </th>
                                <th scope="col">
                                    Arrival Station
                                </th>
                                <th scope="col">
                                    Departure Time
                                </th>
                                <th scope="col">
                                    Arrival Time
                                </th>
                                <th scope="col">
                                    Carriages
                                </th>
                                <th scope="col">
                                    In Time
                                </th>
                                <th scope="col">
                                    Deleted
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($trainsLocalDepartures as $train)
                                {{-- @if ($train->deleted == 1)
                                    <tr class="table-danger">
                                @else
                                    <tr>
                                @endif                                
                                        <td scope="row">
                                            {{ $train->train_code }}
                                        </td>
                                        <td>
                                            {{ $train->agency }}
                                        </td>
                                        <td>
                                            {{ $train->departure_station }}
                                        </td>
                                        <td>
                                            {{ $train->arrival_station }}
                                        </td>
                                        <td>
                                            {{ $train->departure_time }}
                                        </td>
                                        <td>
                                            {{ $train->arrival_time }}
                                        </td>
                                        <td>
                                            {{ $train->carriages }}
                                        </td>
                                        <td>
                                            {{ $train->in_time ? 'In orario' : 'In ritardo' }}
                                        </td>
                                        <td>
                                            {{ $train->deleted ? 'Cancellato' : 'Non cancellato' }}
                                        </td>
                                    </tr> --}}
                                <x-train-table-row>
                                    <x-slot name="train_code">
                                        {{ $train->train_code }}
                                    </x-slot>
                                    <x-slot name="agency">
                                        {{ $train->agency }}
                                    </x-slot>
                                    <x-slot name="departure_station">
                                        {{ $train->departure_station }}
                                    </x-slot>
                                    <x-slot name="arrival_station">
                                        {{ $train->arrival_station }}
                                    </x-slot>
                                    <x-slot name="departure_time">
                                        {{ $train->departure_time }}
                                    </x-slot>
                                    <x-slot name="arrival_time">
                                        {{ $train->arrival_time }}
                                    </x-slot>
                                    <x-slot name="carriages">
                                        {{ $train->carriages }}
                                    </x-slot>
                                    <x-slot name="in_time">
                                        {{ $train->in_time }}
                                    </x-slot>
                                    <x-slot name="deleted">
                                        {{ $train->deleted }}
                                    </x-slot>
                                </x-train-table-row>
                            @endforeach

                        </tbody>
                    </table>

                    






                </div>
            </div>
        </div>
</section>
@endsection
