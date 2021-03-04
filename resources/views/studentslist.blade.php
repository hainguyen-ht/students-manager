
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">CNE</th>
        <th scope="col">FIRSTNAME</th>
        <th scope="col">SECONDNAME</th>
        <th scope="col">AGE</th>
        <th scope="col">SPECIALITY</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
        <tr>
          <th>{{$student->cne}}</th>
          <th>{{$student->firstName}}</th>
          <th>{{$student->secondName}}</th>
          <th>{{$student->age}}</th>
          <th>{{$student->speciality}}</th>
          <th>
            
            <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ url('/delete/' .$student->id)}}" class="btn btn-sm btn-danger">Delete</a>

          </th>
        </tr>
      @endforeach
    </tbody>
  </table>
