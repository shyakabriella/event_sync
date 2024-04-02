

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
        <a href="{{ route('venues.index') }}">
            <i class="fa fa-building nav-icon"></i>
            <span class="nav-text">Venue</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('analytics.index') }}">
            <i class="fa fa-chart-line nav-icon"></i>
            <span class="nav-text">Event Analytics</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('finances.index') }}">
            <i class="fa fa-wallet nav-icon"></i>
            <span class="nav-text">Financial Overview</span>
        </a>
    </li>
    
    <!-- Artists and Performers -->
    <li class="nav-item">
        <a href="">
            <i class="fa fa-calendar-check nav-icon"></i>
            <span class="nav-text">My Bookings</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="">
            <i class="fa fa-envelope-open-text nav-icon"></i>
            <span class="nav-text">Event Invitations</span>
        </a>
    </li>
    
    <!-- Venue Owners/Managers -->
    <li class="nav-item">
        <a href="">
            <i class="fa fa-key nav-icon"></i>
            <span class="nav-text">My Venues</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="">
            <i class="fa fa-handshake nav-icon"></i>
            <span class="nav-text">Venue Bookings</span>
        </a>
    </li>
    
    <!-- General Settings & Log Out -->
    <li class="nav-item">
        <a href="">
            <i class="fa fa-sliders nav-icon"></i>
            <span class="nav-text">Settings</span>
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
							<img src="" alt="tennis" />
							<div class="overlay">
								<h3>Tennis</h3>
							</div>
						</div>

						<div class="image-container img-two">
							<img src="" alt="hiking" />
							<div class="overlay">
								<h3>Hiking</h3>
							</div>
						</div>

						<div class="image-container img-three">
							<img src="" alt="running" />
							<div class="overlay">
								<h3>Running</h3>
							</div>
						</div>

						<div class="image-container img-four">
							<img src="" alt="cycling" />
							<div class="overlay">
								<h3>Cycling</h3>
							</div>
						</div>

						<div class="image-container img-five">
							<img src="" alt="yoga" />
							<div class="overlay">
								<h3>Yoga</h3>
							</div>
						</div>

						<div class="image-container img-six">
							<img src="" alt="swimming" />
							<div class="overlay">
								<h3>Swimming</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="left-bottom">
					<div class="weekly-schedule">
						<h1>Weekly Schedule</h1>
						<div class="calendar">
							<div class="day-and-activity activity-one">
								<div class="day">
									<h1>13</h1>
									<p>mon</p>
								</div>
								<div class="activity">
									<h2>Swimming</h2>
									<div class="participants">
										<img src="" style="--i: 1" alt="" />
										<img src="" style="--i: 2" alt="" />
										<img src="" style="--i: 3" alt="" />
										<img src="" style="--i: 4" alt="" />
									</div>
								</div>
								<button class="btn">Join</button>
							</div>

							<div class="day-and-activity activity-two">
								<div class="day">
									<h1>15</h1>
									<p>wed</p>
								</div>
								<div class="activity">
									<h2>Yoga</h2>
									<div class="participants">
										<img src="" style="--i: 1" alt="" />
										<img src="" style="--i: 2" alt="" />
									</div>
								</div>
								<button class="btn">Join</button>
							</div>

							<div class="day-and-activity activity-three">
								<div class="day">
									<h1>17</h1>
									<p>fri</p>
								</div>
								<div class="activity">
									<h2>Tennis</h2>
									<div class="participants">
										<img src="" style="--i: 1" alt="" />
										<img src="" style="--i: 2" alt="" />
										<img src="" style="--i: 3" alt="" />
									</div>
								</div>
								<button class="btn">Join</button>
							</div>

							<div class="day-and-activity activity-four">
								<div class="day">
									<h1>18</h1>
									<p>sat</p>
								</div>
								<div class="activity">
									<h2>Hiking</h2>
									<div class="participants">
										<img src="" style="--i: 1" alt="" />
										<img src="" style="--i: 2" alt="" />
										<img src="" alt="" />
										<img src="" style="--i: 4" alt="" />
										<img src="" style="--i: 5" alt="" />
									</div>
								</div>
								<button class="btn">Join</button>
							</div>
						</div>
					</div>

					<div class="personal-bests">
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

