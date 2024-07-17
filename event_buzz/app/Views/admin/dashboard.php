  <style>
    body {
      background-color: #f8f9fa;
    }
    .dashboard-header {
      text-align: center;
      margin: 30px 0;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
      padding: 40px 20px;
    }
    .card:hover {
      transform: translateY(-10px);
    }
    .card-link {
      text-decoration: none;
      color: inherit;
    }
    .card-link:hover {
      text-decoration: none;
    }
    .card-title {
      font-size: 1.5rem;
      margin-top: 10px;
    }
    .card-icon {
      font-size: 3rem;
	}
	i {
	color: 
	}
  </style>
</head>
<body>

  <div class="container mt-5 pt-5 pb-3">
    <div class="dashboard-header">
      <h1 class="text-pink">Admin Dashboard</h1>
    </div>
    <div class="row">
      <!-- Registered Organizers Card -->
      <div class="col-md-4 mb-4">
        <a href="/admin/organizers" class="card-link">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-users card-icon text-pink"></i>
              <h5 class="card-title">Registered Organizers</h5>
              <p class="card-text">View and manage all registered organizers.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Registered Users Card -->
      <div class="col-md-4 mb-4">
        <a href="/admin/users" class="card-link">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-user card-icon text-pink"></i>
              <h5 class="card-title">Registered Users</h5>
              <p class="card-text">View and manage all registered users.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Registered Events Card -->
      <div class="col-md-4 mb-4">
        <a href="/admin/events" class="card-link">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-calendar-alt card-icon text-pink"></i>
              <h5 class="card-title">Registered Events</h5>
              <p class="card-text">View and manage all registered events.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
