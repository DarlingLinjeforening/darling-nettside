<script setup></script>

<template>
  <!-- <nav >
  <div >
    <a href="/" >
        <span >Darling</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" >
        <span >Open main menu</span>
        <svg >
            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div >
      <ul >
        <li>
          <RouterLink to="/"  >Home</RouterLink>
        </li>

        <li>
          <RouterLink to="/events"  >Events</RouterLink>
        </li>

        <li>
          <RouterLink to="/about"  >About us</RouterLink>
        </li>

        <li>
          <RouterLink to="/job-offers"  >Job offers</RouterLink>
        </li>

        <li>
          <RouterLink to="/contact"  >Contact</RouterLink>
        </li>
        
      </ul>
    </div>
  </div>
</nav> -->

  <nav class="flex flex-row text-white justify-between bg-darling-purple p-4">
      <div>
        <a href="/">
          <span > <img class="h-8 " src="/images/Darling-logo-white.png" alt=""></span>
        </a>
      </div>
      <div class="flex flex-row">
        <ul class="flex flex-row gap-20">
          <li>
            <RouterLink to="/">Home</RouterLink>
          </li>

          <li>
            <RouterLink to="/events">Events</RouterLink>
          </li>

          <li>
            <RouterLink to="/about">About us</RouterLink>
          </li>

          <li>
            <RouterLink to="/job-offers">Job offers</RouterLink>
          </li>

          <li>
            <RouterLink to="/contact">Contact</RouterLink>
          </li>
        </ul>
      </div>
  </nav>
</template>
