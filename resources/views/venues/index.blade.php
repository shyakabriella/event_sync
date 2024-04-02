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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
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
        <a href="{{ route('home') }}">
            <i class="fa fa-house nav-icon"></i>
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
    <!-- Trigger/Add Venue Button -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVenueModal">
        Add Venue
    </button>


    <table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th style="color:black">Name</th>
            <th style="color:black">Location</th>
            <th style="color:black">Capacity</th>
            <th style="color:black">Contact Info</th>
            <th style="color:black">Type</th>
            <th style="color:black">Amenities</th>
            <th style="color:black">Availability Start</th>
            <th style="color:black">Availability End</th>
            <th style="color:black">Actions</th> <!-- Optional, for Edit/Delete buttons -->
        </tr>
    </thead>
    <tbody>
        @foreach($venues as $venue)
        <tr>
            <td>{{ $venue->name }}</td>
            <td>{{ $venue->location }}</td>
            <td>{{ $venue->capacity }}</td>
            <td>{{ $venue->contact_info }}</td>
            <td>{{ $venue->type }}</td>
            <td>{{ $venue->amenities }}</td>
            <td>{{ $venue->availability_start }}</td>
            <td>{{ $venue->availability_end }}</td>
            <td>
                <!-- Example Action Buttons -->
                <a href="{{ route('venues.edit', $venue->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('venues.destroy', $venue->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


</div>

</div>

<!-- Add Venue Modal -->
<div class="modal fade" id="addVenueModal" tabindex="-1" aria-labelledby="addVenueModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addVenueModalLabel">Add New Venue</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to add new venue -->
        {!! Form::open(['route' => 'venues.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control', 'required']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location:</strong>
                    {!! Form::text('location', null, ['placeholder' => 'Location', 'class' => 'form-control', 'required']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity:</strong>
                    {!! Form::number('capacity', null, ['placeholder' => 'Capacity', 'class' => 'form-control']) !!}
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
                <strong>Type:</strong>
                {!! Form::select('type', [
                    '' => 'Select a Venue Type',
                    'concert_hall' => 'Concert Hall',
                    'theater' => 'Theater',
                    'conference_center' => 'Conference Center',
                    'banquet_hall' => 'Banquet Hall',
                    'sports_arena' => 'Sports Arena',
                    'club_lounge' => 'Club or Lounge',
                    'art_gallery_museum' => 'Art Gallery or Museum',
                    'outdoor_park_garden' => 'Outdoor Park or Garden',
                    'hotel_ballroom' => 'Hotel Ballroom',
                    'convention_hall' => 'Convention Hall',
                    'academic_venues' => 'Academic Venues',
                    'rooftop' => 'Rooftop',
                    'brewery_winery' => 'Brewery or Winery',
                    'barn_farm' => 'Barn or Farm',
                    'historic_sites' => 'Historic Sites',
                ], null, ['class' => 'form-control']) !!}
            </div>
        </div>

            

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Availability Start:</strong>
                {!! Form::date('availability_start', null, ['placeholder' => 'Start Date', 'class' => 'form-control']) !!}
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Availability End:</strong>
                    {!! Form::date('availability_end', null, ['placeholder' => 'End Date', 'class' => 'form-control']) !!}
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Booking Policy:</strong>
                    {!! Form::textarea('booking_policy', null, ['placeholder' => 'Booking Policy', 'class' => 'form-control']) !!}
                </div>
            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amenities:</strong>
                    {!! Form::textarea('amenities', null, ['placeholder' => 'Amenities', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    {!! Form::file('images', ['class' => 'form-control-file']) !!}
                    <small class="form-text text-muted">Allowed types: jpeg, png, jpg, gif, svg. Max size: 2MB</small>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


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

				<div class="friends-activity">
					<h1>Friends Activity</h1>
					<div class="card-container">
						<div class="card">
							<div class="card-user-info">
								<img src="" alt="" />
								<h2>Jane</h2>
							</div>
							<img class="card-img" src="" alt="" />
							<p>We completed the 30-Day Running Streak Challenge!🏃‍♀️🎉</p>
						</div>

						<div class="card card-two">
							<div class="card-user-info">
								<img src="" alt="" />
								<h2>Mike</h2>
							</div>
							<img class="card-img" src="" alt="" />
							<p>I just set a new record in cycling: 30 miles!💪</p>
						</div>
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

