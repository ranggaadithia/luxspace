<x-home-layout>
 <div class="lg:flex lg:mt-20 lg:container lg:mx-auto lg:px-8 mt-12">
  <div class="w-full h-96 lg:h-screen lg:w-1/2 lg:sticky lg:top-0">
    <div
      class="swiper mySwiper h-full w-full border-b-2 border-slate-200 lg:border-2 lg:rounded-lg"
    >
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="src/img/sofa.webp"
            alt=""
            class="h-full w-full block object-cover object-top"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="src/img/sofa3.webp"
            alt=""
            class="h-full w-full block object-cover"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="src/img/sofa7.webp"
            alt=""
            class="h-full w-full block object-cover"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="src/img/sofa5.webp"
            alt=""
            class="h-full w-full block object-cover"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="src/img/sofa6.webp"
            alt=""
            class="h-full w-full block object-cover"
          />
        </div>
      </div>
      <div
        class="swiper-pagination !px-2 !py-1 !bg-slate-50 !border-2 !border-slate-300 !rounded-md !w-fit ml-3"
      ></div>

      <div
        class="swiper-button-next !text-pink-400 !hidden lg:!block"
      ></div>
      <div
        class="swiper-button-prev !text-pink-400 !hidden lg:!block"
      ></div>
    </div>
  </div>

  <div class="px-4 mx-auto lg:w-1/2">
    <div class="pt-3 py-5 border-b-2 border-slate-50">
      <h1 class="text-3xl font-medium">Single Camel Velvet Sofa</h1>
      <p class="mt-2 text-lg">IDR 19.399.000</p>
    </div>
    <div class="pb-6 border-b-2 border-slate-50">
      <p class="mt-6 leading-relaxed text-lg">
        Swivel chair by Lawson-Fenning draws on the designers' admiration of
        California interior design in the 1950s and 1960s.
      </p>

      <p class="mt-1 leading-relaxed text-lg">
        Inviting seat fully swivels 360 degrees, appearing to float above a
        circular base of wood certified sustainable by the Forest
        Stewardship Council.
      </p>
    </div>
    <div class="justify-between mt-6 mb-6 hidden lg:flex lg:justify-start">
      <button
        class="px-3 py-2 border-2 flex flex-row items-center rounded-md focus:border-none focus:ring focus:ring-pink-300"
      >
        <span class="block w-4 h-4 bg-sky-300 rounded-full"></span>
        <p class="ml-1 font-medium">Blue Sky</p>
      </button>
      <button
        class="px-3 py-2 mx-3 border-2 flex flex-row items-center rounded-md focus:border-none focus:ring focus:ring-pink-300"
      >
        <span class="block w-4 h-4 bg-amber-700 rounded-full"></span>
        <p class="ml-1 font-medium">Amber</p>
      </button>
      <button
        class="px-3 py-2 border-2 flex flex-row items-center rounded-md focus:border-none focus:ring focus:ring-pink-300"
      >
        <span class="block w-4 h-4 bg-violet-700 rounded-full"></span>
        <p class="ml-1 font-medium">Lavender</p>
      </button>
    </div>
    <div
      class="bg-white-700 drop-shadow-[0_0px_10px_rgba(0,0,0,0.10)] flex-row justify-between hidden lg:flex border-b-2 pb-2 border-slate-50"
    >
      <a
        href="/cart.html"
        class="w-full px-6 py-1 text-center border-2 border-pink-300 rounded-lg text-pink-400 font-medium text-lg hover:bg-pink-400 hover:text-white transition-colors hover:border-pink-400"
      >
        Buy Now
      </a>
      <div class="mx-2"></div>
      <a
        href="/cart.html"
        class="w-full py-2 text-center bg-pink-400 text-white font-semibold rounded-lg"
      >
        <i class="bi bi-bag-plus"></i> Cart
      </a>
    </div>
    <div id="accordionExample" class="lg:mt-10 -mx-4 lg:mx-auto">
      <div
        class="rounded-t-lg border border-t-1 border-neutral-200 bg-white"
      >
        <h2 class="mb-0" id="headingOne">
          <button
            class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-pink-400 [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
            type="button"
            data-te-collapse-init
            data-te-collapse-collapsed
            data-te-target="#collapseOne"
            aria-expanded="false"
            aria-controls="collapseOne"
          >
            Dimentions
            <span
              class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-pink-400 transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                />
              </svg>
            </span>
          </button>
        </h2>
        <div
          id="collapseOne"
          class="!visible hidden"
          data-te-collapse-item
          aria-labelledby="headingOne"
          data-te-parent="#accordionExample"
        >
          <div class="px-10 py-5">
            <strong>OVERALL DIMENSIONS</strong>
            <br />
            Width: 35"<br />
            Depth: 33"<br />
            Height: 28"<br />

            <img
              src="src/img/sofa-dem.webp"
              alt=""
              
              class="rounded-md mt-5 lg:p-10"
            />
            <br />
            <strong>SEAT DIMENSIONS</strong><br />
            Width: 21" <br />Depth: 22"<br />
            Height: 17"<br /><br />
            <strong>DIAGIONAL DIMENSIONS</strong> <br />
            Depth: 36"<br />
            Depth: 45"<br /><br />
            <strong>BACK CUSHION HEIGHT</strong> <br />Height: 28"<br /><br />
            <strong>SEAT DIMENSIONS</strong><br />
            Width: 21"<br />
            Depth: 22"<br />
            Height: 17"<br /><br />
            <strong>ARM DIMENSIONS</strong><br />
            Height: 28"
          </div>
        </div>
      </div>
      <div class="border border-t-0 border-neutral-200 bg-white">
        <h2 class="mb-0" id="headingTwo">
          <button
            class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-pink-400 [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
            type="button"
            data-te-collapse-init
            data-te-collapse-collapsed
            data-te-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo"
          >
            Reviews (21) <i class="bi bi-star-fill ml-1"></i>
            <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i>
            <span
              class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-pink-400 transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                />
              </svg>
            </span>
          </button>
        </h2>
        <div
          id="collapseTwo"
          class="!visible hidden"
          data-te-collapse-item
          aria-labelledby="headingTwo"
          data-te-parent="#accordionExample"
        >
          <div class="px-5 py-4">
            <div class="flex text-2xl my-5 items-center justify-between">
                <div class="flex items-center">
                  <h3 class="mr-3">4.7</h3>
                  <div class="flex gap-x-1">
                    <i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i
                    ><i class="bi bi-star-fill"></i>
                  </div>
                  <span class="text-sm ml-3 underline font-light"
                    >21 reviewers</span
                  >
              </div>
              <button class="border text-base px-2 py-1 rounded-md border-black" id="add-review-button">add review</button>
            </div>
            <div class="border-t-2 border-dotted hidden" id="form-review">
              <div class="my-5">
                  <div class="mt-3">
                    <input type="text" class="border px-2 py-2 rounded-md w-full focus:border-pink-400" placeholder="write your name.." name="name" id="name">
                  </div>
                  <div class="mt-3">
                    <textarea name="review" id="review" rows="4" class="border w-full rounded-md px-2 py-1" placeholder="write your review..." ></textarea>
                  </div>
                  <button class="px-3 py-1 rounded-md border border-pink-400 text-pink-500 font-semibold hover:bg-pink-400 hover:text-white transition-colors ease-in-out duration-200" id="submit-review">review</button>
              </div>
            </div>
            <div class="" id="content-review"></div>
            <div class="border-t-2 border-dotted">
              <div class="my-5">
                <div class="flex gap-x-1">
                  <i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                </div>
                <h3 class="font-semibold">Chic and modern</h3>
                <p class="font-light">
                  We bought two of these chairs to go in a sitting ares
                  along with a bar chest we also purchased from CB2 and we
                  couldnt be happier with the purchase. The velvet fabric is
                  buttery soft, the chair is super chic and modern and very
                  comfortable
                </p>
              </div>
            </div>
            <div class="border-t-2 border-dotted">
              <div class="my-5">
                <div class="flex gap-x-1">
                  <i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                </div>
                <p class="font-light">
                  <i> This customer provided a rating-only review. </i>
                </p>
              </div>
            </div>
            <div class="border-t-2 border-b-2 border-dotted">
              <div class="my-5">
                <div class="flex gap-x-1">
                  <i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                </div>
                <h3 class="font-semibold">Timeless Lux</h3>
                <p class="font-light">
                  No need to think about it, the color is very suttle to
                  match with anything the quality is too notch and they are
                  very comfortable without need to break them in, best
                  suited for comfortable formal livingroom, would get the
                  best use for lounging, they are a pleasure to look at
                </p>
              </div>
            </div>
            <a href="" class="text-center underline mt-5 block"
              >view all reviews</a
            >
          </div>
        </div>
      </div>

      <div class="border border-t-0 border-neutral-200 bg-white">
        <h2 class="mb-0" id="headingThree">
          <button
            class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-pink-400 [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
            type="button"
            data-te-collapse-init
            data-te-collapse-collapsed
            data-te-target="#collapseThree"
            aria-expanded="false"
            aria-controls="collapseThree"
          >
            Instalation
            <span
              class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-pink-400 transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                />
              </svg>
            </span>
          </button>
        </h2>
        <div
          id="collapseThree"
          class="!visible hidden"
          data-te-collapse-item
          aria-labelledby="headingThree"
          data-te-parent="#accordionExample"
        >
          <div class="px-5 py-4 font-light">
            Assembly may be required for this item based on shipping
            location and delivery method. Items shipped via In-Home Delivery
            will be placed in the room of your choice and assembled.
            <br /><br />
            All packaging will be removed and recycled at our warehouse for
            Local In-Home Delivery, or placed at your curbside or nearest
            trash pickup area for Long Distance In-Home Delivery. Items
            shipped via Basic Freight Delivery or picked up in store will
            require assembly. Easy-to-follow instructions will be included
            in your order and are also available by clicking the Assembly
            Instructions link below. You can view your assigned delivery
            method in your Cart. If you have any questions, please email or
            call us at 800.606.6252.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<model-viewer
  src="src/img/sofa.glb"
  ios-src="src/img/sofa.usdz"
  poster="src/img/sofa2.webp"
  alt="sofa model"
  shadow-intensity="1"
  camera-controls
  auto-rotate
  ar
  class="w-full h-96 bg-slate-50"
>
  <button
    slot="ar-button"
    id="ar-button"
    class="w-52 py-3 bg-white rounded-full text-pink-400 ring-1 ring-pink-400 absolute inset-x-0 bottom-12 flex justify-center mx-auto items-center"
  >
    <img src="src/img/augmented-reality.png" alt="" class="w-6 mr-2" />
    <p>View in your room</p>
  </button>
  <button
    class="w-fit px-5 py-2 bg-white rounded-full text-pink-400 ring-1 ring-pink-400 absolute top-12 right-12 justify-center mx-auto items-center hidden md:flex"
  >
    <p>AR view on your mobile.</p>
    <img src="src/img/augmented-reality.png" alt="" class="w-6 ml-2" />
  </button>
</model-viewer>

<div class="bg-white pt-12 pb-20">
  <div class="px-4 md:px-8 mx-auto">
    <h1 class="text-2xl font-semibold capitalize">
      Complete Your Room<br />
      With What We Designed
    </h1>
    <div
      class="snap-x lg:snap-none flex snap-mandatory overflow-scroll lg:overflow-hidden mt-5 pb-12 lg:justify-between"
    >
      <div
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden"
      >
        <img
          src="src/img/product-1.webp"
          alt=""
          
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Gwyneth Ivory Boucle<br />
            Swivel Chair
          </h3>
          <p class="mt-1 pb-5">IDR 12.999.000</p>
        </div>
      </div>
      <div
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden"
      >
        <img
          src="src/img/product-3.webp"
          alt=""
          
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Laszlo Warm White<br />
            Boucle Swivel Chair
          </h3>
          <p class="mt-1 pb-5">IDR 12.999.000</p>
        </div>
      </div>
      <div
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden"
      >
        <img
          src="src/img/product-4.webp"
          alt=""
          
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Mardones Camel Brown<br />
            Velvet Lounge Chair
          </h3>
          <p class="mt-1 pb-5">IDR 15.000.000</p>
        </div>
      </div>
      <div
        class="snap-center drop-shadow-md mx-3 w-9/5 bg-white w-fit shrink-0 rounded-md overflow-hidden"
      >
        <img
          src="src/img/product-2.webp"
          alt=""
          
          class="drop-shadow-sm w-72 md:w-70"
        />

        <div class="px-3 mt-3">
          <h3 class="text-xl font-semibold leading-tight">
            Fitz Channeled Green<br />
            Velvet Swivel Chair
          </h3>
          <p class="mt-1 pb-5">IDR 14.599.000</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div
  class="bg-white-700 bg-white drop-shadow-[0_0px_10px_rgba(0,0,0,0.10)] fixed inset-x-0 bottom-0 p-4 flex flex-row justify-between lg:hidden z-20"
>
  <button
    onclick="variantModalOn()"
    class="w-full px-6 py-1 text-center border-2 border-pink-300 rounded-lg text-pink-400 font-medium text-lg"
  >
    Buy Now
  </button>
  <div class="mx-2"></div>
  <button
    onclick="variantModalOn()"
    class="w-full py-2 text-center bg-pink-400 text-white font-semibold rounded-lg"
  >
    <i class="bi bi-bag-plus"></i> Cart
  </button>
</div>

<div
  class="bg-white-700 bg-white fixed inset-x-0 p-4 z-20 drop-shadow-[0_0px_30px_rgba(0,0,0,0.10)] rounded-t-3xl bottom-0 translate-y-full transition-transform duration-300 ease-in-out"
  id="variant-modal"
>
  <h2 class="text-xl font-semibold">
    <button onclick="variantModalClose()">
      <i class="bi bi-x-lg"></i>
    </button>
    Product Variants
  </h2>
  <div class="flex flex-row mt-5 border-b-2 pb-3">
    <img
      src="src/img/sofa3.webp"
      alt=""
      class="w-1/2 border-2 rounded-lg object-cover"
    />
    <div class="ml-3 flex flex-col justify-center">
      <h2 class="text-lg font-semibold leading-tight">
        Single Camel Velvet Sofa
      </h2>
      <p class="mt-1">IDR 19.399.000</p>
    </div>
  </div>
  <div class="mt-3">
    <h2 class="font-semibold text-lg">Colors</h2>
    <div class="flex justify-between mt-2 pb-20">
      <button
        class="px-3 py-2 border-2 flex flex-row items-center rounded-md focus:border-none focus:ring focus:ring-pink-300"
      >
        <span class="block w-4 h-4 bg-sky-300 rounded-full"></span>
        <p class="ml-1 font-medium">Blue Sky</p>
      </button>
      <button
        class="px-3 py-2 border-2 flex flex-row items-center rounded-md focus:border-none focus:ring focus:ring-pink-300"
      >
        <span class="block w-4 h-4 bg-amber-700 rounded-full"></span>
        <p class="ml-1 font-medium">Amber</p>
      </button>
      <button
        class="px-3 py-2 border-2 flex flex-row items-center rounded-md focus:border-none focus:ring focus:ring-pink-300"
      >
        <span class="block w-4 h-4 bg-violet-700 rounded-full"></span>
        <p class="ml-1 font-medium">Lavender</p>
      </button>
    </div>
  </div>
  <div
    class="bg-white-700 bg-white drop-shadow-[0_0px_10px_rgba(0,0,0,0.10)] fixed inset-x-0 bottom-0 p-4 flex flex-row justify-between"
  >
    <a
      href="/cart.html"
      class="w-full px-6 py-1 text-center border-2 border-pink-300 rounded-lg text-pink-400 font-medium text-lg"
      >Buy Now</a
    >
    <div class="mx-2"></div>
    <a
      href="/cart.html"
      class="w-full py-2 text-center bg-pink-400 text-white font-semibold rounded-lg"
      ><i class="bi bi-bag-plus"></i> Cart</a
    >
  </div>
</div>
@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script
  type="module"
  src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
></script>
    
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
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

  function variantModalOn() {
    const modal = document.getElementById("variant-modal");
    modal.classList.remove("translate-y-full");
  }

  function variantModalClose() {
    const modal = document.getElementById("variant-modal");
    modal.classList.add("translate-y-full");
  }


  const addReviewButton = document.getElementById("add-review-button");
  const formReview = document.getElementById("form-review");

  addReviewButton.addEventListener("click", () => {
    formReview.classList.toggle("hidden");
  });

  const submitReview = document.getElementById("submit-review");
  const name = document.getElementById("name")
  const review = document.getElementById("review");
  const contentReview = document.getElementById("content-review");

  submitReview.addEventListener("click", () => {
    if (name.value == "" || review.value == "") {
      alert("Please fill the form");
    } else {
      formReview.classList.toggle("hidden");
      contentReview.innerHTML += `
      <div class="border-t-2 border-dotted">
              <div class="my-5">
                <div class="flex gap-x-1">
                  <i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                </div>
                <h3 class="font-semibold">${name.value}</h3>
                <p class="font-light">
                  ${review.value}
                </p>
              </div>
            </div>`
    }
  });
</script>
@endpush
</x-home-layout>