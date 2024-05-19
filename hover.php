<style>

@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");

    /* Container needed to position the overlay. Adjust the width as needed */
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

/* Make the image to responsive */
.image {
  width: 100%;
  height: auto;
}

/* The overlay effect (full height and width) - lays on top of the container and over the image */
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: transparent;
}

/* When you mouse over the container, fade in the overlay icon*/
.container:hover .overlay {
  opacity: 1;
}

/* The icon inside the overlay is positioned in the middle vertically and horizontally */
.icon {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-40%, 10%);
  text-align: center;
}

.icon1 {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-40%, 10%);
  text-align: center;
  
}

/* When you move the mouse over the icon, change color */
.fa-user:hover {
  color: #eee;
}
</style>

<div class="container">
  <img src="img/artist/5.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <a href="#" class="icon" title="User Profile">
    <i style="margin-left: -200%;" class="bi bi-heart-fill"></i>
    </a>
    <a href="#" class="icon1" title="User Profile">
    <i style="margin-left: 70%;" class="bi bi-play-circle"></i>
    </a>
    
  </div>
</div>
