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
  
<div class="modal fade" id="createTicketModal" tabindex="-1" aria-labelledby="createTicketModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createTicketModalLabel">Create New Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="ticketForm" action="{{ route('tickets.store') }}" method="POST">
        @csrf 
        <div class="modal-body">
          <input type="hidden" name="event_id" id="event_id">
          
          <div class="mb-3">
            <label for="ticketName" class="form-label">Ticket Name:</label>
            <input type="text" class="form-control" id="ticketName" name="name" required>
          </div>

          <div class="mb-3">
            <label for="seatType" class="form-label">Seat Type:</label>
            <select class="form-select" id="seatType" name="seat_type" required>
              <option value="">Select Seat Type</option>
              <option value="VIP">VIP</option>
              <option value="General">General Admission</option>
              <option value="Balcony">Balcony</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label for="" class="form-label">Ticket Price (Rwf):</label>
            <input type="number" class="form-control" id="ticketPrice" name="price" required>
          </div>
          
          <div class="mb-3">
            <label for="ticketQuantity" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="ticketQuantity" name="quantity" required>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create Ticket</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    function setEventId(eventId) {
    document.getElementById('event_id').value = eventId;
}

</script>



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
                    <h1>Financial</h1>
    
                        @foreach($events as $event)
                        <div class="row mb-3">
                            <!-- Event Card -->
                            <div class="col-md-6">
                                <div class="card">
                                    <img src="{{ asset('images/homepage/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $event->name }}</h5>
                                        <!-- Trigger modal for creating a ticket for this event -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTicketModal" onclick="setEventId({{ $event->id }})">
                                            Create Ticket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Aggregated Ticket Info for the Event -->
                            <div class="col-md-6">
                                <div class="d-flex flex-row flex-wrap">
                                    @php
                                        $aggregatedTickets = $event->tickets->groupBy('seat_type')
                                            ->map(function ($tickets, $seat_type) {
                                                return [
                                                    'seat_type' => $seat_type,
                                                    'price' => $tickets->first()->price,
                                                    'quantity' => $tickets->sum('quantity'),
                                                    'quantity_booked' => $tickets->sum('quantity_booked'),
                                                ];
                                            });
                                    @endphp
                                    @foreach($aggregatedTickets as $ticket)
                                        <div class="card mb-2 me-2" onclick="handleTicketClick('{{ $ticket['seat_type'] }}')">
                                            <div class="card-body">
                                                <h6 class="card-title">{{ $ticket['seat_type'] }}</h6>
                                                <p class="card-text">Price: {{ number_format($ticket['price']) }} Rwf</p>
                                                <p class="card-text">Available Seats: {{ $ticket['quantity'] }}</p>
                                                <p class="card-text">Total Amount: {{ number_format($ticket['price'] * $ticket['quantity']) }} Rwf</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
        
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
					<!-- <h1 style="align-self: flex-start">Active Calories</h1> -->
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
							<!-- <p>Fastest 5K Run: 22min</p> -->
							<img src="" alt="" />
						</div>
						<div class="best-item box-two">
							<!-- <p>Longest Distance Cycling: 4 miles</p> -->
							<img src="" alt="" />
						</div>
						<div class="best-item box-three">
							<!-- <p>Longest Roller-Skating: 2 hours</p> -->
							<img src="" alt="" />
						</div>
					</div>
				</div>

				<div class="friends-activity">
					<h1>Friends Activity</h1>
					<div class="card-container">
						

						
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

