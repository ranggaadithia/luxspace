<x-home-layout>
 <div class="flex md:items-center" style="height: 90vh">
  <div class="md:w-1/2 md:block hidden text-center">
    <h1 class="text-5xl font-semibold">The Room <br />You've Dreaming</h1>
    <p class="mt-5 mb-10 text-lg text-slate-700 leading-relaxed">
      We provide classy furniture<br />
      makes the room feel homey
    </p>
    <a href="" class="button-md">Explore Now</a>
  </div>
  <div
    class="md:w-1/2 w-full relative bg-[url('../../src/img/inte2.jpg')] bg-cover bg-no-repeat bg-center bg-fixed h-full md:bg-none"
  >
    <img
      src="src/img/image-section-1.png"
      class="md:block hidden h-full w-full brightness-75"
      alt=""
    />
    <div
      class="flex flex-col items-center justify-center h-full text-center bg-black/30 md:hidden"
    >
      <h1 class="text-4xl font-semibold text-white">
        The Room <br />You've Dreaming
      </h1>
      <p class="mt-5 mb-10 text-lg leading-relaxed text-white">
        Kami menyediakan furniture berkelas yang <br />
        membuat ruangan terasa homey
      </p>
      <a href="" class="button-md">Explore Now</a>
    </div>
    <button
      class="absolute right-2 -bottom-1 md:inset-0 drop-shadow-2xl"
      id="button-play"
    >
      <i
        class="bi bi-play-fill md:text-6xl md:px-5 md:pt-4 md:pb-4 text-3xl px-3 py-2 text-white bg-pink-500 rounded-full"
      ></i>
    </button>
  </div>
</div>
<section id="catalog">
  <div class="w-full bg-slate-50 py-20 px-4 mx-auto">
    <h3 class="text-2xl font-semibold">
      Browse The Room <br />
      That We Designed For You
    </h3>
    <div
      class="grid grid-cols-1 md:grid-rows-2 md:grid-cols-9 mt-5 md:gap-4"
    >
      <a
        href="products.html"
        class="relative overflow-hidden rounded-xl h-40 md:row-span-1 md:col-span-4 md:h-full hover:drop-shadow-lg transition-all"
      >
        <img
          src="src/img/{{ $categories[0]->cover }}"
          alt=""
          class="object-cover h-full w-full"
          loading="lazy"
        />
        <div
          class="absolute flex justify-center flex-col inset-y-0 right-8 md:right-16"
        >
          <h5 class="font-medium text-lg">{{ $categories[0]->name }}</h5>
          <p>803 items</p>
        </div>
      </a>
      <a
        href="products.html"
        class="relative overflow-hidden rounded-xl h-40 mt-3 md:row-span-2 md:h-full md:col-span-2 md:mt-0 hover:drop-shadow-lg transition-all"
      >
        <img
          src="src/img/{{ $categories[3]->cover }}"
          alt=""
          class="object-cover h-full w-full"
          loading="lazy"
        />
        <div
          class="absolute flex justify-center flex-col inset-y-0 right-8 md:inset-x-0 md:items-center md:justify-start md:top-10"
        >
          <h5 class="font-medium text-lg">{{ $categories[3]->name }}</h5>
          <p>2.509 items</p>
        </div>
      </a>
      <a
        href="products.html"
        class="relative overflow-hidden rounded-xl h-40 mt-3 md:row-span-2 md:h-full md:col-span-3 md:mt-0 hover:drop-shadow-lg transition-all"
      >
        <img
          src="src/img/{{ $categories[1]->cover }}"
          alt=""
          loading="lazy"
          class="object-cover h-full w-full"
        />
        <div
          class="absolute flex justify-center flex-col inset-y-0 right-8 md:inset-x-0 md:items-center md:justify-start md:top-10"
        >
          <h5 class="font-medium text-lg">{{ $categories[1]->name }}</h5>
          <p>1.822 items</p>
        </div>
      </a>
      <a
        href="products.html"
        class="relative overflow-hidden rounded-xl h-40 mt-3 md:col-span-4 md:mt-0 md:h-full hover:drop-shadow-lg transition-all"
      >
        <img
          src="src/img/{{ $categories[2]->cover }}"
          alt=""
          loading="lazy"
          class="object-cover h-full w-full"
        />
        <div
          class="absolute flex justify-center flex-col inset-y-0 right-8 md:right-16"
        >
          <h5 class="font-medium text-lg">Children Room</h5>
          <p>481 items</p>
        </div>
      </a>
    </div>
  </div>
</section>
<section id="showcase">
  <div class="px-4 md:px-8 mt-10 mx-auto">
    <h1 class="text-center text-2xl font-semibold">
      Just Arrived<br />
      This Summer For You
    </h1>
    <div
      href="product.html"
      class="snap-x lg:snap-none flex snap-mandatory overflow-scroll lg:overflow-hidden mt-5 pb-12 lg:justify-between"
    >
      <a
        href="product.html"
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden"
      >
        <img
          src="src/img/product-1.webp"
          alt=""
          loading="lazy"
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Gwyneth Ivory Boucle<br />
            Swivel Chair
          </h3>
          <p class="mt-1 pb-5">IDR 12.999.000</p>
        </div>
      </a>
      <a
        href="product.html"
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden block"
      >
        <img
          src="src/img/product-3.webp"
          alt=""
          loading="lazy"
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Laszlo Warm White<br />
            Boucle Swivel Chair
          </h3>
          <p class="mt-1 pb-5">IDR 12.999.000</p>
        </div>
      </a>
      <a
        href="product.html"
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden"
      >
        <img
          src="src/img/product-4.webp"
          alt=""
          loading="lazy"
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Mardones Camel Brown<br />
            Velvet Lounge Chair
          </h3>
          <p class="mt-1 pb-5">IDR 15.000.000</p>
        </div>
      </a>
      <a
        href="product.html"
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden"
      >
        <img
          src="src/img/product-2.webp"
          alt=""
          loading="lazy"
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Fitz Channeled Green<br />
            Velvet Swivel Chair
          </h3>
          <p class="mt-1 pb-5">IDR 14.599.000</p>
        </div>
      </a>
    </div>
  </div>
</section>

@push('scripts')
    <script>
     window.addEventListener("scroll", function () {
 const nav = document.querySelector("nav");
 if (window.scrollY > 10) {
   nav.classList.add("bg-glass");
 } else {
   nav.classList.remove("bg-glass");
 }
});

const humList = document.getElementById("humberger-menu");

humList.addEventListener("click", () => {
 humList.classList.toggle("text-pink-400");
 const listMenu = document.getElementById("list-menu");
 const nav = document.querySelector("nav");
 nav.classList.add("bg-glass");
 listMenu.classList.toggle("hidden");
 listMenu.classList.toggle("flex");
});

const searchBar = document.getElementById("search-bar");
const searchButton = document.querySelectorAll("#search-button");

// Fungsi untuk menyembunyikan searchBar
function hideSearchBar() {
 searchBar.classList.add("hidden");
}

// Event listener untuk saat tombol "Esc" ditekan
document.addEventListener("keyup", (e) => {
 if (e.key === "Escape") {
   hideSearchBar();
 }
});

// Event listener untuk saat dokumen di-klik
document.addEventListener("click", (event) => {
 // Periksa apakah elemen yang diklik bukan bagian dari searchBar atau searchButton
 if (
   !searchBar.contains(event.target) &&
   !Array.from(searchButton).some((button) =>
     button.contains(event.target)
   )
 ) {
   hideSearchBar();
 }
});

searchButton.forEach((button) => {
 button.addEventListener("click", () => {
   button.classList.toggle("text-pink-400");
   const nav = document.querySelector("nav");
   nav.classList.add("bg-glass");
   searchBar.classList.toggle("hidden");

   // Tambahkan penundaan sebelum mendapatkan fokus pada elemen input
   setTimeout(() => {
     const inputElement = searchBar.querySelector(
       'input[name="keyword"]'
     );
     inputElement.focus();
   }, 100);
 });
});

window.addEventListener("scroll", function () {
 const nav = document.getElementById("nav-product");
 const icons = document.querySelectorAll("#nav-icon");

 if (window.scrollY > 10) {
   icons.forEach((e) => {
     e.classList.remove("text-white");
     e.classList.add("text-slate-800");
   });
   nav.classList.remove("bg-black");
   nav.classList.remove("bg-opacity-40");
   nav.classList.add("bg-white");
 } else {
   icons.forEach((e) => {
     e.classList.add("text-white");
     e.classList.remove("text-slate-800");
   });
   nav.classList.add("bg-black");
   nav.classList.add("bg-opacity-40");
   nav.classList.remove("bg-white");
 }
});



    </script>
@endpush

</x-home-layout>