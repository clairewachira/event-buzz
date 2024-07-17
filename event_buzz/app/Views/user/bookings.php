<div class="container-fluid d-flex align-items-center justify-content-center py-5">
    <div class="card mt-5 w-75">
        <div class="card-body">
            <h1 class="card-title text-center mb-4 text-pink">List of Bookings</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-pink">
                        <tr>
                            <th>Booking ID</th>
							<th>Number of Tickets</th>
							<th>Event ID</th>
                            <th>Amount</th>
                            <th>Receipt Number</th>
                            <th>Payment Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking): ?>
                        <tr>
                            <td><?= esc($booking['bookingId']) ?></td>
                            <td><?= esc($booking['numberOfTickets']) ?></td>
                            <td><?= esc($booking['eventId']) ?></td>
                            <td><?= esc($booking['amountPaid']) ?></td>
                            <td><?= esc($booking['paymentDate']) ?></td>
                            <td><?= esc($booking['phoneNumber']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
