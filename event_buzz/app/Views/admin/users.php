<div class="container-fluid d-flex align-items-center justify-content-center py-5">
    <div class="card mt-5 w-75">
        <div class="card-body">
            <h1 class="card-title text-center mb-4 text-pink">List of Users</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-pink">
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Joined On</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['userId']) ?></td>
                            <td><?= esc($user['fullName']) ?></td>
                            <td><?= esc($user['phoneNumber']) ?></td>
                            <td><?= esc($user['createdAt']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
