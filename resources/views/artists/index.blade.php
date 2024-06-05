<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Event_Sync | auca</title>
</head>
<div class="container">
<main>
		<nav class="main-menu">
			<h1>Event_Sync</h1>
			<img class="logo" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/4cfdcb5a-0137-4457-8be1-6e7bd1f29ebb" alt="" />
			<ul>
			<li class="nav-item">
      <a href="{{ route('dashboard.event-organizer') }}">
      <i class="fas fa-tachometer-alt nav-icon"></i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>
    
    <!-- Event Organizers -->
    <li class="nav-item">
        <a   data-bs-toggle="modal" data-bs-target="#exampleModal" href="">
            <i class="fa fa-plus-square nav-icon"></i>
            <span class="nav-text">Create Event</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('events.index') }}">
            <i class="fa fa-calendar-alt nav-icon"></i>
            <span class="nav-text">Manage Events</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('artists.index') }}">
            <i class="fa fa-microphone nav-icon"></i>
            <span class="nav-text">Add_Artist</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('venues.index') }}">
            <i class="fa fa-building nav-icon"></i>
            <span class="nav-text">Venue</span>
        </a>
    </li>
   
    <li class="nav-item">
        <a href="{{ route('finances.index') }}">
            <i class="fa fa-wallet nav-icon"></i>
            <span class="nav-text">Financial</span>
        </a>
    </li>

<div class="container">
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Event</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="multiStepForm" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="modal-body">
              
              <div class="mb-3">
                <label for="eventName" class="form-label">Event Name:</label>
                <input type="text" class="form-control" id="eventName" name="name" required>
              </div>
              <div class="mb-3">
                <label for="eventDate" class="form-label">Event Date:</label>
                <input type="datetime-local" class="form-control" id="eventDate" name="date" required>
              </div>
              <div class="mb-3">
                <label for="eventLocation" class="form-label">Location:</label>
                <input type="text" class="form-control" id="eventLocation" name="location" required>
              </div>
              <div class="mb-3">
                <label for="eventCapacity" class="form-label">Capacity:</label>
                <input type="number" class="form-control" id="eventCapacity" name="capacity" required>
              </div>
              <div class="mb-3">
                <label for="eventType" class="form-label">Event Type:</label>
                <input type="text" class="form-control" id="eventType" name="event_type" required>
              </div>
              <div class="mb-3">
                <label for="eventDescription" class="form-label">Description:</label>
                <textarea class="form-control" id="eventDescription" name="description" required></textarea>
              </div>
              <div class="mb-3">
                <label for="eventImage" class="form-label">Event Image:</label>
                <input type="file" class="form-control" id="eventImage" name="image" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

    <li class="nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out-alt nav-icon"></i>
            <span class="nav-text">Log Out</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
                
			</ul>
		</nav>

		<section class="content">
			<div class="left-content">
				<div class="activities">
					<h1>Top Events</h1>
					<div class="activity-container">
						<div class="image-container img-one">
							<img src="/images/1.jpg" alt="tennis" />
							<div class="overlay">
								<h3>Gospel</h3>
							</div>
						</div>

						<div class="image-container img-two">
							<img src="/images/45.webp" alt="hiking" />
							<div class="overlay">
								<h3>Traditional</h3>
							</div>
						</div>

						<div class="image-container img-three">
							<img src="/images/g.jpg" alt="running" />
							<div class="overlay">
								<h3>Consert</h3>
							</div>
						</div>

						<div class="image-container img-four">
							<img src="/images/sgn.jpg" alt="cycling" />
							<div class="overlay">
								<h3>HIT SONGS</h3>
							</div>
						</div>

						<div class="image-container img-five">
							<img src="/images/i1.jpeg" alt="yoga" />
							<div class="overlay">
								<h3>Karaoke</h3>
							</div>
						</div>

						<div class="image-container img-six">
							<img src="/images/ff.jpg" alt="swimming" />
							<div class="overlay">
								<h3>Swimming</h3>
							</div>
						</div>
					</div>
                  
    <div class="container">
    <h1>Add Artist</h1>
    <!-- Trigger/Add Artist Button -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addArtistModal">
    Add Artist
  </button>

  <table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th style="color:black">Name</th>
            <th style="color:black">Genre</th>
            <th style="color:black">Contact</th>
            <th style="color:black">Image</th>
            <!-- <th style="color:black">Requirements</th>
            <th style="color:black">Availability</th>
            <th style="color:black">Past Performances</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach ($artists as $artist)
        <tr>
            <td>{{ $artist->name }}</td>
            <td>{{ $artist->genre }}</td>
            <td>{{ $artist->contact_info }}</td>
            <td>
                @if($artist->image)
                <img src="{{ asset('storage/' . $artist->image) }}" alt="Artist Image" style="width: 60px; height: auto;">
                @endif
            </td>
            <!-- <td>{{ $artist->performance_requirements }}</td>
            <td>{{ $artist->availability }}</td>
            <td>{{ $artist->past_performances }}</td> -->
        </tr>
        @endforeach
     </tbody>
  </table>
 </div>
</div>


<!-- Add Artist Modal -->
<div class="modal fade" id="addArtistModal" tabindex="-1" aria-labelledby="addArtistModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addArtistModalLabel">Add New Artist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to add new artist -->
        {!! Form::open(['route' => 'artists.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Genre:</strong>
        {!! Form::select('genre', [
            '' => 'Select a Genre',
            'rock' => 'Rock',
            'pop' => 'Pop',
            'jazz' => 'Jazz',
            'classical' => 'Classical',
            'electronic' => 'Electronic',
            'reggae' => 'Reggae',
            'blues' => 'Blues',
            'country' => 'Country',
            'hip_hop' => 'Hip Hop',
            'folk' => 'Folk',
        ], null, ['class' => 'form-control']) !!}
    </div>
</div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact Info:</strong>
            {!! Form::text('contact_info', null, ['placeholder' => 'Contact Info', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Email:</strong>
        {!! Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required']) !!}
    </div>
</div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            {!! Form::file('image', ['class' => 'form-control-file']) !!}
            <small class="form-text text-muted">Allowed types: jpeg, png, jpg, gif, svg. Max size: 2MB</small>
        </div>
    </div>


    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Availability:</strong>
            {!! Form::date('availability', null, ['placeholder' => 'Availability', 'class' => 'form-control']) !!}
            <small class="form-text text-muted">Format: YYYY-MM-DD or any string format</small>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Past Performances:</strong>
            {!! Form::date('past_performances', null, ['placeholder' => 'Past Performances', 'class' => 'form-control']) !!}
            <small class="form-text text-muted">Format: YYYY-MM-DD or any string format</small>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Performance Requirements:</strong>
            {!! Form::textarea('performance_requirements', null, ['placeholder' => 'Performance Requirements', 'class' => 'form-control']) !!}
        </div>
    </div> -->
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

{!! Form::close() !!}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
        	
		</div>
			<div class="right-content">
				<div class="user-info">
					<div class="icon-container">
						<i class="fa fa-bell nav-icon"></i>
						<i class="fa fa-message nav-icon"></i>
					</div>
					<h4>{{ Auth::user()->name }}</h4>
					<img src="" alt="" />
				</div>

				<div class="active-calories">
					<h1 style="align-self: flex-start">Active Calories</h1>
					<div class="active-calories-container">
						<div class="box" style="--i: 85%">
							<div class="circle">
								<h2>85<small>%</small></h2>
							</div>
						</div>
						<div class="calories-content">
							<p><span>Today:</span> 400</p>
							<p><span>This Week:</span> 3500</p>
							<p><span>This Month:</span> 14000</p>
						</div>
					</div>
				</div>

				<div class="mobile-personal-bests">
					<h1>Personal Bests</h1>
					<div class="personal-bests-container">
						<div class="best-item box-one">
							<p>Fastest 5K Run: 22min</p>
							<img src="" alt="" />
						</div>
						<div class="best-item box-two">
							<p>Longest Distance Cycling: 4 miles</p>
							<img src="" alt="" />
						</div>
						<div class="best-item box-three">
							<p>Longest Roller-Skating: 2 hours</p>
							<img src="" alt="" />
						</div>
					</div>
				</div>

				<!-- <div class="friends-activity">
					<h1>Friends Activity</h1>
					<div class="card-container">
						<div class="card">
							<div class="card-user-info">
								<img src="" alt="" />
								<h2>Jane</h2>
							</div>
							<img class="card-img" src="" alt="" />
							<p>We completed the 30-Day Running Streak Challenge!🏃‍♀️🎉</p>
						</div> -->

						<!-- <div class="card card-two">
							<div class="card-user-info">
								<img src="" alt="" />
								<h2>Mike</h2>
							</div>
							<img class="card-img" src="" alt="" />
							<p>I just set a new record in cycling: 30 miles!💪</p>
						</div> -->

					</div>
				</div>
			</div>
		</section>
	</main>
	
    <script>
      var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
      keyboard: true
      })
    </script>

</div>


<script>
  $(document).ready(function() {
    $('#addArtistForm').on('submit', function(e) {
      e.preventDefault(); // Prevent actual form submission
      // Example: alert or collect form data
      alert("Form submitted! (Replace this alert with your form handling logic)");
      // Here, you would typically gather the form data and send it to your server via AJAX
      $('#addArtistModal').modal('hide'); // Hide the modal after submission
    });
  });
</script>

<script src="/orders.js"></script>
<script src="/js/script.js"></script>

