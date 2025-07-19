<nav class="flex justify-between items-center h-24 w-screen bg-[#003866] fixed top-0 z-50">
    <div class="h-[70px] w-auto ml-16">
        <img class="w-full h-full object-cover max-md:w-[70px] max-md:h-[70px]" src="{{ asset('images/Logo Jurnalistik 2.svg') }}" alt="">
    </div>
    <div class="flex gap-10 mr-16 max-md:hidden">
        <x-navbarlinks :href="route('welcome.index')" :active="request()->routeIs('welcome.index')">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          <h1>Home</h1>          
        </x-navbarlinks>

        <x-navbarlinks :href="route('news.index')" :active="request()->routeIs('news.index')" >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
          </svg>
        <h1>News</h1>          
        </x-navbarlinks>
    </div>

    <div class="burger lg:hidden">

      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 text-white mr-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
      
    </div>

    
    <div class="bg-[#011423] w-[300px] h-full fixed transition-all duration-500 ease-in-out -translate-x-full  top-0 z-40 nav">
      <div class="close">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 ml-5 mt-5 text-white">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
      </div>

      <div class="flex flex-col gap-10 ml-5 mt-5">
        <x-navbarlinks :href="route('welcome.index')" :active="request()->routeIs('welcome.index')">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          <h1>Home</h1>          
        </x-navbarlinks>

        <x-navbarlinks :href="route('news.index')" :active="request()->routeIs('news.index')" >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
          </svg>
        <h1>News</h1>          
        </x-navbarlinks>
    </div>
      
    </div>
</nav>




<script>
 const nav = document.querySelector(".nav")
 const burger = document.querySelector(".burger")
 const close = document.querySelector(".close")

 burger.addEventListener("click", () => {
  console.log("click");
  
  nav.classList.remove('-translate-x-full')
  nav.classList.add("translate-x-0")
  
 })

 close.addEventListener('click', () => {
  console.log("click2");
  

  nav.classList.add('-translate-x-full')
  nav.classList.remove("translate-x-0")
 })


 
</script>
