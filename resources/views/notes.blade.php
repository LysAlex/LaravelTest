<table class="table table-bordered">


<div class="table-wrapper">

    <tr>
        <th><h2><b> Nom </b></h2></th>
        <th><h2><b> Matière </b></h2></th>
        <th><h2><b> Note </b></h2></th>
    </tr>
        
      <tr>
          @foreach($notes as $note)
          
          <td>{{ $note -> nom }}</td>
          <td>{{ $note -> matiere }}</td>
          <td>{{ $note -> notes }}</td>
          </tr>

</div>
@endforeach
</table>