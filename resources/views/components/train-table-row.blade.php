@if ($deleted == "1")
    <tr class="table-danger">
@else
    <tr>
@endif 
        <td scope="row">
            {{ $train_code }}
        </td>
        <td scope="row">
            {{ $agency }}
        </td>
        <td scope="row">
            {{ $departure_station }}
        </td>
        <td scope="row">
            {{ $arrival_station }}
        </td>
        <td scope="row">
            {{ $departure_time }}
        </td>
        <td scope="row">
            {{ $arrival_time }}
        </td>
        <td scope="row">
            {{ $carriages }}
        </td>
        <td scope="row">
            {{ $in_time }}
        </td>
        <td scope="row">
            {{ $deleted ? 'Cancellato' : 'Non cancellato' }}
        </td>
    </tr>
