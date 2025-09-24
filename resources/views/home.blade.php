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
                                @if ($train->deleted == 1)
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
                                    </tr>
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
                                @if ($train->deleted == 1)
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
                                    </tr>
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
                                @if ($train->deleted == 1)
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
                                    </tr>
                            @endforeach

                        </tbody>
                    </table>

                    






                </div>
            </div>
        </div>
</section>
@endsection
