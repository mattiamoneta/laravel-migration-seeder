<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Company</th>
        <th scope="col">Train</th>
        <th scope="col">Departure</th>
        <th scope="col">Arrival</th>
        <th scope="col">Canceled</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($trains as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->company}}</td>
                <td>{{$item->train_code}}</td>
                <td>{{$item->departure}}</td>
                <td>{{$item->arrival}}</td>
                @if ($item->canceled == 0)
                    <td>No</td>
                @else
                    <td>Yes</td>
                @endif
           </tr>
        @endforeach
     

      

     
    </tbody>
  </table>