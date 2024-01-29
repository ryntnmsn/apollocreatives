<div id="banners" class="splide pb-20 pt-10">
    <div class="splide__track">
          <ul class="splide__list">
            @foreach ($banners as $banner)
            <li class="splide__slide py-60 rounded-2xl"
                style="
                    background-image: url('{{ asset('storage/' . $banner->image) }}');
                    background-position:center;
                    background-size:cover
                ">
            </li>
            @endforeach
             
          </ul>
    </div>
  </div>