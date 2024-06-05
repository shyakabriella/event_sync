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
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <!-- In your layout's head section -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Before closing body tag -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    

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
                    
                <h2>Lets Manage Event</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif


				</div>
                <div class="container">
                <table class="table">
                <thead>
                    <tr>
                        <th style="color:black;">Event Name</th>
                        <th style="color:black;">Location</th>
                        <th style="color:black;">Add_Artist</th>
                        <th style="color:black;">Date</th>
                        <!-- <th style="color:black;">Action</th> -->
                    </tr>
                </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->location }}</td>
        <td>
    
            <a href="#!" class="btn btn-success btn-sm" data-toggle="modal" data-target="#artistListModal{{$event->id}}">
                <i class="fas fa-plus"></i>
            </a>

            <span id="selectedArtist{{ $event->id }}">
                @if (session()->has('selectedArtistName'))
                    {{ session('selectedArtistName') }}
                @endif
            </span>
        </td>

                
            <td>{{ $event->date }}</td>
            <!-- <td>
                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Publish</a>
                <!-- <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> -->
            </td> -->
        </tr>
        @endforeach

    </tbody>
</table>             
</div>
        
@foreach ($events as $event)
<!-- Modal for each event -->
<div class="modal fade" id="artistListModal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="artistListModalLabel{{ $event->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="artistListModalLabel{{ $event->id }}">Select an Artist for {{ $event->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('events.assignArtist', $event->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    @foreach ($artists as $artist)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="artist_id[]" id="artist{{ $artist->id }}" value="{{ $artist->id }}">
                        <label class="form-check-label" for="artist{{ $artist->id }}">
                            {{ $artist->name }}
                        </label>
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach




<script>
    let selectedArtists = [];

    function updateSelectedArtists(eventId, artistId, artistName) {
        const index = selectedArtists.findIndex(artist => artist.id === artistId);

        if (index === -1) {
            selectedArtists.push({ id: artistId, name: artistName });
        } else {
            selectedArtists.splice(index, 1);
        }

        const selectedArtistsTable = document.getElementById(`selectedArtistsTable${eventId}`);
        selectedArtistsTable.innerHTML = selectedArtists.map(artist => `<tr><td>${artist.name}</td></tr>`).join('');
    }

    function addSelectedArtists(eventId) {
        $.ajax({
            url: "{{ route('events.assignArtist', $event->id) }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                artist_ids: selectedArtists.map(artist => artist.id)
            },
            success: function (response) {
                console.log(response);
                // Clear the selected artists array
                selectedArtists = [];

                // Clear the selected artists list in the modal
                const selectedArtistsTable = document.getElementById(`selectedArtistsTable${eventId}`);
                selectedArtistsTable.innerHTML = '';

                // Close the modal
                $(`#artistListModal${eventId}`).modal('hide');
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
</script>


<script>
    function validateCheckbox(eventId) {
        var checkboxes = document.querySelectorAll('#artistForm' + eventId + ' input[type="checkbox"]');
        var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        if (!checkedOne) {
            alert('Please select at least one artist.');
            return false;
        }
        document.getElementById('artistForm' + eventId).submit();
    }

    
</script>

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

				

				<div class="friends-activity">
					<h1>Friends Activity</h1>
					<div class="card-container">
						<div class="card">
							<div class="card-user-info">
								<h2>Artist/Event</h2>
							</div>
							


 <div class="calendar">
    @foreach ($events as $event)
        <div class="day-and-activity activity-one">
            <div class="day">
                <h1>{{ \Carbon\Carbon::parse($event->date)->format('d') }}</h1>
                <p>{{ \Carbon\Carbon::parse($event->date)->format('D') }}</p>
            </div>
            <div class="activity">
                <h2>{{ $event->name }}</h2>
                <div class="participants">
                    @foreach ($event->artists as $artist)
                        <span>{{ $artist->name }}</span>
                    @endforeach
                </div>
            </div>
            <form action="{{ route('events.sendInvitations', $event->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn">Invite</button>
            </form>
        </div>
    @endforeach
</div>


					
					

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
    const rows = Array.from(document.querySelectorAll('tr'));

    function slideOut(row) {
    row.classList.add('slide-out');
    }

    function slideIn(row, index) {
    setTimeout(function() {
        row.classList.remove('slide-out');
    }, (index + 5) * 200);  
    }

    rows.forEach(slideOut);

    rows.forEach(slideIn);
</script>


<script>
    let selectedArtists = {};

    function updateSelectedArtist(eventId) {
        var selectedArtistId = document.querySelector('input[name="artist_id"]:checked').value;
        var selectedArtistName = document.querySelector('label[for="artist' + selectedArtistId + '"]').textContent;
        if (!selectedArtists[eventId]) {
            selectedArtists[eventId] = [];
        }
        selectedArtists[eventId].push(selectedArtistName);
        document.querySelector('#selectedArtist' + eventId).textContent = selectedArtists[eventId].join(', ');
        return true; // Allow form submission
    }
</script>

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/orders.js"></script>
<script src="/js/script.js"></script>

