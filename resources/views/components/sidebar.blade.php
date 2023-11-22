<div class="flex-shrink-0 p-3 sticky-top border-end" style="width: 280px;">
 <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
  <img src="{{ asset('/src/img/logo.png') }}" alt=""> 
  {{-- <span class="fs-5 fw-semibold">LuxSpace Dashboard</span> --}}
 </a>
 <ul class="list-unstyled ps-0">
   <li class="mb-1">
     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
       Pengolahan Data
     </button>
     <div class="collapse show" id="home-collapse">
       <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
         <li><a href="/score" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Categories</a></li>
         <li><a href="/distribusi-frekuensi" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Products</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reviews Product</a></li>
       </ul>
     </div>
   </li>
   <li class="mb-1">
     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
       Recap Penjualan
     </button>
     <div class="collapse" id="dashboard-collapse">
       <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Table Z Chi Kuadrat</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Table Z Liliefors</a></li>
       </ul>
     </div>
   </li>
   <li class="mb-1">
     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
       Data Pembelian
     </button>
     <div class="collapse" id="orders-collapse">
       <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li>
       </ul>
     </div>
   </li>
   <li class="mb-1">
     <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
       Data Pengiriman
     </button>
     <div class="collapse" id="account-collapse">
       <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
         <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
       </ul>
     </div>
   </li>
 </ul>
</div>
