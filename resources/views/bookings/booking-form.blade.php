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
        <a href="{{ route('home') }}">
            <i class="fa fa-house nav-icon"></i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>
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
							<img src="/images/ff.jpg" alt="tennis" />
							<div class="overlay">
								<h3>KARAOKE</h3>
							</div>
						</div>

						<div class="image-container img-two">
							<img src="/images/1.jpg" alt="hiking" />
							<div class="overlay">
								<h3>IGISOPE</h3>
							</div>
						</div>

						<style>
							.video-container {
								position: relative;
							}

							.overlay {
								position: absolute;
								top: 0;
								left: 0;
								width: 100%;
								height: 100%;
								background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
								color: white;
								display: flex;
								flex-direction: column;
								justify-content: center;
								align-items: center;
							}

							.overlay h2,
							.overlay p {
								margin: 0;
							}

						</style>

						<div class="video-container">
							<video width="320" height="240" controls>
								<source src="/video/shay.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
							
						</div>



						<div class="image-container img-four">
							<img src="/images/22.jpg" alt="cycling" />
							<div class="overlay">
								<h3>Gospel</h3>
							</div>
						</div>

						<div class="image-container img-five">
							<img src="/images/45.webp" alt="yoga" />
							<div class="overlay">
								<h3>Kinyarwanda</h3>
							</div>
						</div>

						<div class="image-container img-six">
							<img src="/images/f.webp" alt="swimming" />
							<div class="overlay">
								<h3>New Concert</h3>
							</div>
						</div>
					</div>
                    <hr />

					<style>
    .weekly-schedule {
        max-width: 500px;
        margin: 20px auto;
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: 'Montserrat', sans-serif;
    }

    .weekly-schedule h1, .weekly-schedule h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-step {
        display: none; /* Initially hide all steps */
    }

    .form-step.active {
        display: block; /* Only show the active step */
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    select,
    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>


					
				<div class="weekly-schedule">
					<h1>Let's Get In Touch With You</h1>
					<form id="multiStepForm" action="{{ route('submit-booking') }}" method="POST">
						@csrf
						<input type="hidden" name="event_id" value="{{ $event->id }}">

						<!-- Step 1: Personal Details -->
						<div class="form-step" id="step1">
							<h2>Book Seat for {{ $event->name }}</h2>
							<input type="text" name="name" placeholder="Your Name" required>
							<input type="text" name="phone_number" placeholder="Phone Number" required>
							<input type="email" name="email" placeholder="Email" required>
							<input type="text" name="national_id" placeholder="National ID" required>
							<select name="province" required>
								<option value="">Select Province</option>
								<option value="North">North</option>
								<option value="South">South</option>
								<option value="Western">Western</option>
								<option value="Eastern">Eastern</option>
								<option value="Kigali City">Kigali City</option>
							</select>
							<input type="text" name="district" placeholder="District" required>
							<input type="text" name="sector" placeholder="Sector" required>
							<button type="button" onclick="showStep(2)">Next</button>
						</div>

						<!-- Step 2: Event Details -->
						<div class="form-step" id="step2" style="display: none;">
							<h2>Event Details</h2>
							<p>Description: {{ $event->description }}</p>
							<p>Event name: {{ $event->name }}</p>
							<p>event_Type: {{ $event->event_type }}</p>
							<div class="ticket-info">
								<p class="card-text">Price: <span id="ticketPrice">{{ number_format($ticket->price, 2) }}</span> Rwf</p>
								<p class="card-text">Available Seats: {{ $ticket->quantity }}</p>
								<label for="num_tickets">Number of Tickets:</label>
								<input type="number" id="num_tickets" name="num_tickets" min="1" max="{{ $ticket->quantity }}" required onchange="calculateTotal()">
								<br>
								<p class="card-text">Total Amount: <span id="totalAmount">0.00</span> Rwf</p>
							</div>
							<select name="payment_option" required>
								<option value="">Select Payment Option</option>
								<option value="BK">BK</option>
								<option value="Equity">Equity</option>
								<option value="Mobile Money">Mobile Money</option>
								<option value="Airtel Money">Airtel Money</option>
							</select>
							<br><br>
							<button type="button" onclick="showStep(1)">Back</button><br><br>
							<button type="submit" name="action" value="book_now">Book Now</button><br><br>
							<button type="submit" name="action" value="pay_now">Pay Now</button>
						</div>
					</form>
				</div>
			</div>

				</div> 
				<div class="left-bottom">

			<div class="personal-bests">
				<h1>Event_Description</h1>


				<div class="personal-bests-container">
				
					
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


	</div>
</section>
</main>


<script>
const navItems = document.querySelectorAll(".nav-item");

	navItems.forEach((navItem, i) => {
		navItem.addEventListener("click", () => {
			navItems.forEach((item, j) => {
				item.className = "nav-item";
			});
			navItem.className = "nav-item active";
		});
	});

</script>

<script>
function calculateTotal() {
var ticketPrice = parseFloat(document.getElementById('ticketPrice').textContent);
var numTickets = parseInt(document.getElementById('num_tickets').value);
var totalAmount = ticketPrice * numTickets;
document.getElementById('totalAmount').textContent = totalAmount.toFixed(2);
}

</script>
<script>
function showStep(step) {
// Hide all steps
var steps = document.getElementsByClassName('form-step');
for (var i = 0; i < steps.length; i++) {
	steps[i].style.display = 'none';
}

// Show the specified step
document.getElementById('step' + step).style.display = 'block';	
}

</script>

<script>
	function showStep(step) {
    var steps = document.getElementsByClassName('form-step');
    for (var i = 0; i < steps.length; i++) {
        // Hide all steps
        steps[i].style.display = 'none';
    }
    // Show the current step
    steps[step - 1].style.display = 'block';
}

// Initialize the form to show the first step
showStep(1);


</script>