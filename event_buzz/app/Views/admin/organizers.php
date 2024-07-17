<div class="container-fluid d-flex align-items-center justify-content-center py-5">
    <div class="card mt-5 w-75">
        <div class="card-body">
            <h1 class="card-title text-center mb-4 text-pink">Registered Organizers</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-pink">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Join On</th>
                        </tr>
					</thead>
                    <tbody>
                        <?php foreach ($organizers as $organizer): ?>
                        <tr>
                            <td><?= esc($organizer['organizerId']) ?></td>
                            <td><?= esc($organizer['organizerName']) ?></td>
                            <td><?= esc($organizer['emailAddress']) ?></td>
                            <td><?= esc($organizer['phoneNumber']) ?></td>
                            <td><?= esc($organizer['createdAt']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
