<h1 class="card-title text-center mb-4 text-pink mt-5 pt-3">View Registered Events</h1>
<style>
.card {
  margin-bottom: 20px;
}
        .card-title {
          color: #ff0066;
        }
        .card-actions {
          display: flex;
          justify-content: space-between;
        }
</style>
<div class="container my-5">
<?php foreach ($events as $event): ?>
  <div class="card py-3 h-100 w-100">
    <div class="card-body">
      <h3 class="card-title"><?= esc($event['eventName']) ?></h3>
      <h5 class="card-text"><?= esc($event['category']) ?></h5>
      <p class="card-text"><?= esc($event['eventDescription']) ?></p>
      <p class="card-text"><strong>Date:</strong> <?= esc($event['eventDate']) ?></p>
      <p class="card-text"><strong>Time:</strong> <?= esc($event['eventTime']) ?></p>
      <p class="card-text"><strong>Location:</strong> <?= esc($event['location']) ?></p>
      <p class="card-text"><strong>Max Participants:</strong> <?= esc($event['maxParticipants']) ?></p>
      <p class="card-text"><strong>Ticket Price:</strong> Ksh. <?= esc($event['pricePerTicket']) ?></p>
      <p class="card-text"><strong>availableTickets:</strong> <?= esc($event['availableTickets']) ?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>
