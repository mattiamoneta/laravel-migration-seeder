<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Train</th>
        <th scope="col">Departure</th>
        <th scope="col">Arrival</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($trains as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->train_code}}</td>
                <td>{{$item->departure}}</td>
                <td>{{$item->arrival}}</td>
           </tr>
        @endforeach
     

      

     
    </tbody>
  </table>