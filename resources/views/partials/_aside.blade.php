

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
        <a href="{{ route('events.create') }}">
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
            <span class="nav-text">ArtManagement</span>
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
				</div>

				<div class="left-bottom">
					<div class="weekly-schedule">
						<h1>Book Your seat on event</h1>
						
						<div class="weekly-schedule">
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
										<button class="btn" onclick="window.location.href='{{ route('book-seat', $event->id) }}'">Book Seat</button>

											<div style="display: flex; flex-direction: column; align-items: center; margin-top: 5px;">
											
												
											</div>
										</div>
									</div>
								@endforeach			
						</div>

					</div>

					<div class="personal-bests">
						<h1>Event_Description</h1>
						<div class="personal-bests-container">
						<table>
							<thead>
								<tr>
									<th>Event Name</th>
									<th>Artists</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($events as $event)
									<tr>
										<td>{{ $event->name }}</td>
										<td>
											@foreach ($event->artists as $artist)
												<span>{{ $artist->name }}</span>{{ !$loop->last ? ', ' : '' }}
											@endforeach
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
							
							
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
								
							</div>
							<img class="card-img" src="/images/1.jpg" alt="" />
							<p>Amazing Concert is comming🏃‍♀️🎉</p>
						</div>

						<div class="card card-two">
							<div class="card-user-info">
								
							</div>
							<img class="card-img" src="/images/f.webp" alt="" />
							<p>Super hit KARAOKE Coming soon💪</p>
						</div>
					</div>
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

