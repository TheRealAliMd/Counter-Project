@extends('layout.app')

@section('content')
	<!-- Queue Table -->
	<div class="w3-container" id="queue-table">
	  <h2>Queue List</h2>

		<div style="margin:10px; float:left;">
		<!--	<div class="w3-bar w3-black">
		    <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')">Counter1</button>
		    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Counter2</button>
		    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Counter3</button>
		    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Counter4</button>
		    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Counter5</button>
		    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Counter6</button>
		    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Counter7</button>
		  </div>-->

	  	<div id="table" class="w3-container w3-border city">
				<table class="w3-table w3-bordered w3-hoverable" >
			    <thead>
			      <tr>
							<th>No.</th>
			        <th>Ticket Number</th>
			        <th>Estimated Waiting Time</th>
			        <th>Teacher</th>
			      </tr>
			    </thead>
<<<<<<< HEAD
			    @if ($tickets != null)
						@if ($tickets->count() < 1)
							<tr><td>1</td><td>0000</td><td>Unknown</td><td>1 min</td></tr>
						@else
							@foreach($tickets as $ticket)
								<tr><td>1</td><td>0001</td><td>Abdullah</td><td>1 min</td></tr>
							@endforeach
						@endif
					@else
						<tr><td>1</td><td>0000</td><td>Unknown</td><td>1 min</td></tr>
					@endif
=======
			    
			    <tr><td>2</td><td>0002</td><td>2 min</td><td>Khalded</td></tr>
					<tr><td>3</td><td>0003</td><td>3 min</td><td>Ahamd</td></tr>
					<tr><td>4</td><td>0004</td><td>4 min</td><td>Hasan</td></tr>
					<tr><td>5</td><td>0005</td><td>5 min</td><td>Ali</td></tr>
>>>>>>> a34ab9365d450caa5d70e4e07ef2d24a3f354d86
			  </table>
		  </div>
		</div>

		<div class="w3-card-2 w3-center" style="padding:40px; width:400px; margin-left:20px;float:left;">
			<div>
				<p class="w3-xxxlarge w3-center">Serving Now</p>
				<p class="w3-jumbo w3-center">0000</p>
			</div>
			<div>
				<button class="w3-btn w3-green w3-round-large w3-xxlarge w3-hover-grey" id="callbtn" style="margin:5px">Call Next</button>
				<button class="w3-btn w3-lime w3-round-large w3-xxlarge w3-hover-grey" id="donebtn" style="margin:5px">Done</button>
			</div>
			<div>
				<button class="w3-btn w3-green w3-round-large w3-xlarge w3-hover-grey" id="recallbtn" style="margin:5px">Recall</button>
				<button class="w3-btn w3-red w3-round-large w3-xlarge w3-hover-grey" id="skipbtn" style="margin:5px">Skip</button>
			</div>
		</div>
	</div>
@endsection