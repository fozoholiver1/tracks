
<footer class="container py-5 " style="bottom:2%;">
    <div class="row">
      <div class="col-12 col-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        <small class="d-block mb-3 text-muted">&copy; 2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        @guest
            @else
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="/home">Home page </a></li>
              <li><a class="text-muted" href="/a/all">Artist Home</a></li>
              <li><a class="text-muted" href="/a/create">create artist</a></li>
              <li><a class="text-muted" href="/songs/create">create Song</a></li>
            </ul>
        @endguest
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">javascript</a></li>
          <li><a class="text-muted" href="#">Laravel</a></li>
          <li><a class="text-muted" href="#">Anime.js</a></li>
          <li><a class="text-muted" href="#"> Bootstrap$</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Developer</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="www.linkweb.ga">F.Oliver</a></li>
          <li><a class="text-muted" href="/contact">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Usefull Links</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">My Github</a></li>
          <li><a class="text-muted fa fa-facebook" href="#"> facebook</a></li>
          <li><a class="text-muted fa-twitter-square" href="#">Twitter</a></li>
        </ul>
      </div>
    </div>
  </footer>
