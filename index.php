<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VibraFem</title>
    <meta name="author" content="David Grzyb" />
    <meta name="description" content="" />

    <!-- Tailwind -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");

      .font-family-karla {
        font-family: karla;
      }
    </style>

    <!-- AlpineJS -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Font Awesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="bg-white font-family-karla">
    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-blue-800 shadow">
      <div
        class="w-full container mx-auto flex flex-wrap items-center justify-between"
      >
        <nav>
          <ul
            class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline"
          >
          
            <li>
              <a class="hover:text-gray-200 hover:underline px-4" href="index.php"
                >VibraFem</a
              >
            </li>
          </ul>
        </nav>

        <div class="flex items-center text-lg no-underline text-white pr-6">
          
          <a class="pl-6" href="https://www.instagram.com/vibra_masf5/">
            <i class="fab fa-instagram"></i>
          </a>
        
        </div>
      </div>
    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
      <div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('Vibra.png'); height: 60vh; max-height:460px;">
      <div class="flex flex-col items-center py-12">
       
      <p class="lead fw-normal text-white-50 mb-0"></p>
      </div>
      </div>
    </header>

    <!-- Topic Nav -->
    <nav
      class="w-full py-4 border-t border-b bg-gray-100"
      x-data="{ open: false }"
    >
      
      <div
        :class="open ? 'block': 'hidden'"
        class="w-full flex-grow sm:flex sm:items-center sm:w-auto"
      >
        <div
          class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2"
        >
          
          <a href="team.php" class="hover:bg-gray-400 rounded py-2 px-4 mx-2"
            >VibraFem. Equipo Futbol Femenino</a
          >
      
        </div>
      </div>
    </nav>

    <div class="container mx-auto flex flex-wrap py-6">
      <!-- Posts Section -->
      <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        <article class="flex flex-col shadow my-4">
          <!-- Article Image -->
          <a href="team.php" class="hover:opacity-75">
            <img
              src="./images/equipo.jpeg"
            />
          </a>
          <div class="bg-white flex flex-col justify-start p-6">
            <a href="team.php" class="text-blue-700 text-sm font-bold uppercase pb-4"
              >Nuestro Equipo</a
            >
            <a href="team.php" class="text-3xl font-bold hover:text-gray-700 pb-4"
              >VibraFem equipo de futbol femenino</a
            >
            <a href="team.php" class="pb-6"
              >Le presentamos nuestro plantel</a
            >
            <a href="team.php" class="uppercase text-gray-800 hover:text-black"
              >Conocer equipo <i class="fas fa-arrow-right"></i
            ></a>
          </div>
        </article>

        <article class="flex flex-col shadow my-4">
          <!-- Article Image -->
          <a href="#" class="hover:opacity-75">
            <img
              src="./images/insta2.jpeg"
            />
          </a>
          <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"
              >Queres formar parte de nuestro equipo</a
            >
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4"
              >Unite a nosotras!</a
            >
            <p href="#" class="text-sm pb-3">
              By
              <a href="#" class="font-semibold hover:text-gray-800"
                >VibraFem</a
              >
            </p>
            <a 
            target="_blank"
            href="http://wa.me/5493413557711" class="pb-6"
              >Te invitamos a que te comuniques con nosotras para unirte!</a
            >
            <a
            target="_blank"
             href="http://wa.me/5493413557711" class="uppercase text-gray-800 hover:text-black"
              >Comunicate <i class="fas fa-arrow-right"></i
            ></a>
          </div>
        </article>

       

        
      </section>

      <!-- Sidebar Section -->
      <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
          <p class="text-xl font-semibold pb-5">Amistoso</p>
          <p class="pb-2">
            Estamos buscando un equipo para jugar un amistoso. No dudes en comunicarte!
          </p>
          <a
          target="_blank"
            href="http://wa.me/5493413557711"
            class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4"
          >
          Comunicate con Nosotras!
          </a>
        </div>

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
          <p class="text-xl font-semibold pb-5">Instagram</p>
          <div class="grid grid-cols-3 gap-3">
            <img
              class="hover:opacity-75"
              src="./images/insta.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta2.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta3.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta4.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta5.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta6.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta7.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta8.jpeg"
            />
            <img
              class="hover:opacity-75"
              src="./images/insta9.jpeg"
            />
          </div>
          <a
          target="_blank"
            href="https://www.instagram.com/vibra_masf5/"
            class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6"
          >
            <i class="fab fa-instagram mr-2"></i> Siguenos! VibraFem
          </a>
        </div>
         <!-- Sponsor -->
         <div class="w-full bg-white shadow flex flex-col my-4 p-6">
          <p class="text-xl font-semibold pb-5">Sponsor</p>
          <p class="text-xl font-semibold pb-5">TENTO HELADOS</p>
          <p class="pb-2">
            Agradecemos su apoyo incondicional a nosotras!
          </p>
          <div class="grid grid-cols-3 gap-3">
            <img
              class="hover:opacity-100"
              src="./images/tento.jpeg"
            />
            <img
              class="hover:opacity-100"
              src="./images/tento2.jpeg"
            />
          
            <img
              class="hover:opacity-100"
              src="./images/tento4.jpeg"
            />
            
          </div>
          <a
          target="_blank"
            href="https://www.instagram.com/tentoheladosok/"
            class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6"
          >
            <i class="fab fa-instagram mr-2"></i> tentoheladosok
          </a>
        </div>

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
          <p class="text-xl font-semibold pb-5">SPONSOR</p>
          <p class="pb-2">
            Estamos buscando mas sponsor que nos ayuden a crecer
          </p>
          <a
          target="_blank"
            href="http://wa.me/5493413557711"
            class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4"
          >
            Comunicate con Nosotras!
          </a>
        </div>
      </aside>
    </div>

    <footer class="w-full border-t bg-white pb-12">
      <div
        class="relative w-full flex items-center invisible md:visible md:pb-12"
        x-data="getCarouselData()"
      >
        <button
          class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
          x-on:click="decrement()"
        >
          &#8592;
        </button>
        <template
          x-for="image in images.slice(currentIndex, currentIndex + 6)"
          :key="images.indexOf(image)"
        >
          <img class="w-1/6 hover:opacity-75" :src="image" />
        </template>
        <button
          class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
          x-on:click="increment()"
        >
          &#8594;
        </button>
      </div>
      <div class="w-full container mx-auto flex flex-col items-center">
        <div
          class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6"
        >
          
        </div>
        <div class="uppercase pb-6">
          <a href="https://www.instagram.com/jorge_bellerate/">&copy; Pipolag</a>
          </div>
      </div>
    </footer>

    <script>
      function getCarouselData() {
        return {
          currentIndex: 0,
          images: [
            "./images/carousel9.jpeg",
            "./images/carousel.jpeg",
            "./images/carousel2.jpeg",
            "./images/carousel3.jpeg",
            "./images/carousel5.jpeg",
            "./images/carousel7.jpeg",
            "./images/carousel9.jpeg",
            "./images/carousel10.jpeg",
            "./images/carousel11.jpeg",
            "./images/carousel12.jpeg",
            "./images/carousel13.jpeg",
            "./images/carousel15.jpeg",
          ],
          increment() {
            this.currentIndex =
              this.currentIndex === this.images.length - 6
                ? 0
                : this.currentIndex + 1;
          },
          decrement() {
            this.currentIndex =
              this.currentIndex === this.images.length - 6
                ? 0
                : this.currentIndex - 1;
          },
        };
      }
    </script>
  </body>
</html>
