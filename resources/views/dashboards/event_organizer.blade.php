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
								<h3>CONCERT</h3>
							</div>
						</div>
					</div>
				</div>


				<div class="left-bottom">
					<div class="weekly-schedule">
						<h1>Event List</h1>
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
							<img src="{{ asset('images/homepage/' . $event->image) }}" alt="Event Image">
							</div>                                  
						</div>
						<div class="event-actions">
							
							<button class="btn">Publish</button>
							<div style="display: flex; flex-direction: column; align-items: center; margin-top: 5px;">
								<a href="javascript:void(0)" onclick="editEvent({{ $event->toJson() }})" title="Edit">
									<i class="fas fa-edit" style="color: #007bff; cursor: pointer;"></i>
								</a>

								<script>
									function editEvent(eventData) {
										document.getElementById('eventName').value = eventData.name;
										document.getElementById('eventDate').value = formatDateForInput(eventData.date);
										document.getElementById('eventLocation').value = eventData.location;
										document.getElementById('eventCapacity').value = eventData.capacity;
										document.getElementById('eventType').value = eventData.event_type;
										document.getElementById('eventDescription').value = eventData.description;
										document.getElementById('multiStepForm').setAttribute('action', `/events/${eventData.id}?_method=PUT`);
										var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
										myModal.show();
									}

									function formatDateForInput(dateString) {
										const date = new Date(dateString);
										const formatted = date.toISOString().slice(0, 16); 
										return formatted;
									}

								</script>
								<form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline;">
									@csrf
									@method('DELETE')
									<button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;" onclick="return confirm('Are you sure?')">
										<i class="fas fa-trash" style="color: red;"></i>
									</button>
								</form>
							</div>
						</div>
					</div>

				@endforeach			
			</div>

						<div class="pagination-wrapper">
							{{ $events->links('pagination::bootstrap-5') }} {{-- Use this for Bootstrap 5 --}}
						</div>
					</div>

					<div class="personal-bests">
						<h1>Personal Bests</h1>
						<div class="personal-bests-container">
							<div class="best-item box-one">
								<p>Amazing KARAOKE</p>
								<img src="/images/22.jpg" alt="" />
							</div>
							<div class="best-item box-two">
								<p>Hit concert</p>
								<img src="/images/f.webp" alt="" />
							</div>
							<div class="best-item box-three">
								<p>Longest Concert</p>
								<img src="/images/1.jpg" alt="" />
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
						<h1>Requested Venue</h1>

						<div class="calendar">
							@foreach($venueRequests as $request)
								<div class="day-and-activity activity-one">
									<div class="day">
										<h1>{{ $request->created_at->format('d') }}</h1>
										<p>{{ $request->created_at->format('D') }}</p>
									</div>
									<div class="activity">
									<h2>
										@if($request->venue)
											<a href="{{ route('venues.show', $request->venue->id) }}">
												{{ $request->venue->name }}
											</a>
										@else
											<a href="{{ route('venues.show', 1) }}">
												Venue Name
											</a>
										@endif
									</h2>
									<div class="status">
										@if($request->status == 'approved')
											<span class="badge badge-success">Approved</span>
										@else
											<span class="badge badge-warning">Pending</span>
										@endif
									</div>
								</div>
							</div>
						@endforeach
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



<script src="/orders.js"></script>
<script src="/js/script.js"></script>

