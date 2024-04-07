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
        <a href="{{ route('dashboard.artist') }}">
        <i class="fas fa-tachometer-alt nav-icon"></i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>
    
     <!-- Artists and Performers -->
	 <li class="nav-item">
        <a href="{{ route('dashboard.artist') }}">
            <i class="fa fa-calendar-check nav-icon"></i>
            <span class="nav-text">All Events</span>
        </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('invitations.index') }}">
          <i class="fa fa-envelope-open-text nav-icon"></i>
          <span class="nav-text">My Invitations</span>
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
								<h3>SECURE MUSIC</h3>
							</div>
							
						</div>
						
					</div>
					<hr/>
					<center><h4>All event and  Bookings</h4></center>
					<hr/>
					<div class="container">

					<table>
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Venue</th>
                    <th>Location</th>
                    <th>Artist</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->venue }}</td>
                        <td>{{ $event->location }}</td>
                        <td>
                            @foreach ($event->artists as $artist)
                                <span>{{ $artist->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $event->date }}</td>
                        <td class="action-buttons">
                            <button class="approve">Join</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

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
								
								<h2>Event/Artist</h2>
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



<script src="/orders.js"></script>
<script src="/js/script.js"></script>

