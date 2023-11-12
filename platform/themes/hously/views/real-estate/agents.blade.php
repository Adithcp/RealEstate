@php
    Theme::set('navStyle', 'light');
@endphp

{!! Theme::partial('breadcrumb') !!}

<style>
    .img-wrapper {
  max-width: 100%;
  height: 65vw;
  display: flex;
  justify-content: center;
  align-items: flex-start;
}
img {
  max-width: 100%;
  max-height: 100%;
}
@media screen and (min-width: 576px) {
  .carousel-inner {
    display: flex;
  }
  .carousel-item {
    display: block;
    margin-right: 0;
    flex: 0 0 calc(100% / 3);
  }
  .img-wrapper {
    height: 21vw;
  }
}
.carousel-inner {
  padding: 1em;
}
.card {
  margin: 0 0.5em;
  border-radius: 0;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  font-size: 0.9em;
}

.carousel-control-prev,
.carousel-control-next {
  width: 6vh;
  height: 6vh;
  background-color: #e1e1e1;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0.5;
}
.carousel-control-prev:hover,
.carousel-control-next:hover {
  opacity: 0.8;
}

</style>

<div>
<div id="carouselExampleControls" class="carousel">
  <div class="carousel-inner" id="carousel-inner">
    <div class="carousel-item active">
      <div class="card">
        <div class="img-wrapper">
          <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title 1</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of
            the card's content.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card">
        <div class="img-wrapper">
          <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of
            the card's content.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card">
        <div class="img-wrapper">
          <img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-3.jpg" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title 3</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of
            the card's content.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" onclick="carouselClick('previous')" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" onclick="carouselClick('next')" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-16 lg:mt-24">
    @include(Theme::getThemeNamespace('views.real-estate.partials.agents-list'))

    {{ $accounts->links(Theme::getThemeNamespace('partials.pagination')) }}
</div>


<script>
    const carouselClick = async (value) => {
        let element = document.getElementById('carousel-inner');
        element.innerHTML = '';
        let htmlContent = '';
        if(value == 'next'){
            htmlContent = '<div class="carousel-item"> <div class="card"><div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-2-card-1.jpg" alt="..."></div><div class="card-body"><h5 class="card-title">Card title 4</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk ofthe cards content.</p><a href="#" class="btn btn-primary">Learn More</a></div></div></div><div class="carousel-item"><div class="card"><div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-2-card-2.jpg" alt="..."></div><div class="card-body"><h5 class="card-title">Card title 5</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk ofthe card s content.</p><a href="#" class="btn btn-primary">Learn More</a></div></div></div><div class="carousel-item"><div class="card"><div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-2-card-3.jpg" alt="..."></div><div class="card-body"><h5 class="card-title">Card title 6</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk ofthe card s content.</p><a href="#" class="btn btn-primary">Learn More</a></div></div></div><div class="carousel-item"><div class="card"><div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/bootstrap-multiple-items-carousel-slide-3-card-1.jpg" alt="..."></div><div class="card-body"><h5 class="card-title">Card title 7</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk ofthe card s content.</p><a href="#" class="btn btn-primary">Learn More</a></div></div></div>';
        } else{
            htmlContent = '<div class="carousel-item active"><div class="card"><div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-1.jpg" alt="..."></div><div class="card-body"><h5 class="card-title">Card title 1</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card s content.</p><a href="#" class="btn btn-primary">Learn More</a></div></div></div><div class="carousel-item"><div class="card"><div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg" alt="..."></div><div class="card-body"><h5 class="card-title">Card title 2</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card s content.</p><a href="#" class="btn btn-primary">Learn More</a></div></div></div><div class="carousel-item"><div class="card"><div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-3.jpg" alt="..."></div><div class="card-body"><h5 class="card-title">Card title 3</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card s content.</p><a href="#" class="btn btn-primary">Learn More</a></div></div></div>';
        }
        let url = "{{ route('carousel.get.agents') }}";
        alert(url);
        let params = {
            'value' : value
        }
        const datas = await getData(url, params);
        // alert(datas);
        console.log(datas);  

        element.innerHTML = htmlContent;
        
    }
    const getData = (url, params) => {
        return new Promise((resolve, reject) => {
            $.get(url, params, (data) => {
                resolve(data);
            }).fail((error) => {
                reject(error);
            });
        });
    }
</script>
