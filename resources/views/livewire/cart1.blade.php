

<div wire:poll.5s>
    
    

  
            @foreach (App\Http\Controllers\CartController::index() as $room)
  
            <div class="room-grid-item">
              <figure class="gradient-overlay-hover link-icon">
                <a href="room.html">
                  <img src={{$room->associatedModel->drive_image ?? "images/rooms/deluxe/deluxe.jpg" }} class="img-fluid" alt="Image">
                </a>

                <button type=submit wire:click = "removeRoomFromCart({{ $room->id }})">
                  <div class="room-edit">
                  <i>x</i>
                  </div>
                </button>

                <div class="room-price">{{ $room->associatedModel->price }} / night</div>
              </figure>
              <div class="room-info">
                <h2 class="room-title">
                  <a href="room?id={{ $room->associatedModel->id }}">{{ $room->name }}</a>
                </h2>
                <p>in {{ $room->associatedModel->hotel->name }}</p>
              </div>
            </div>
  
  
            @endforeach
  




</div>
