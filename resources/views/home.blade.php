<x-layout>

  <body>
    <section id="home" class="pt-36 scroll-smooth dark:text-white">
      <div class="container">
        <div class="flex flex-wrap lg:flex-nowrap">
          <!-- Text section -->
          <div x-data="{ show: false }" x-init="show = true" class="w-full self-center px-4 lg:w-1/2 order-1 lg:order-1" :class="{ 'opacity-100': show, 'opacity-0': !show }" x-transition:enter="transition-opacity duration-1000">
            <h1 class="text-base font-bold text-primary md:text-xl ">Halo Semua 👋, Saya <span class="block font-bold text-dark text-4xl mt-1 dark:text-primary-50">Muhammad Reza Ubaidillah</span></h1>
            <h2 class="font-medium text-slate-500 mb-5 lg:text-2xl dark:text-white">Machine Learning Enthusiast & Informatics Student</h2>
            <a href="/#contact" class="text-base font-semibold text-white bg-primary-950 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-90 ease-in-out dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 hover:animate-bounce">Hubungi Saya</a>
          </div>
          <!-- Image section -->
          <div x-data="{ show: false }" x-init="show = true" class="w-full self-end px-4 lg:w-1/2 order-2 lg:order-2" :class="{ 'translate-x-0': show, 'translate-x-full': !show }" x-transition:enter="transition-transform duration-1000">
            <div class="relative mt-10 lg:mt-0 lg-right-0">
              <img src="{{ Storage::url('img/me.png') }}" alt="Muhammad Reza Ubaidillah" class="max-w-full mx-auto rounded-full ">
              <span class="absolute -bottom-5 -z-10 left-1/2 -translate-x-1/2 md:scale-125  ">
                <svg width="500" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#082f49" d="M46.7,-78.8C61,-72.8,73.2,-61,78.1,-46.9C83,-32.9,80.7,-16.4,79.3,-0.8C77.9,14.8,77.5,29.6,71,41.1C64.6,52.6,52.2,60.8,39.4,68.1C26.5,75.5,13.3,82,-1.5,84.7C-16.4,87.4,-32.7,86.2,-44.8,78.4C-57,70.7,-64.9,56.4,-72.4,42.2C-79.9,28,-86.9,14,-88.8,-1.1C-90.8,-16.3,-87.6,-32.5,-79.3,-45.2C-71,-58,-57.5,-67.2,-43.5,-73.3C-29.4,-79.4,-14.7,-82.4,0.8,-83.8C16.3,-85.1,32.5,-84.8,46.7,-78.8Z" transform="translate(100 100)" scale(3) />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="pt-36 pb-32 scroll-smooth">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary-900 text-lg mb-3 dark:text-primary-50">About Me</h4>
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-primary-50">Halooow👋👋👋</h2>
            <p class=" font-medium text-base text-secondary max-w-xl lg:text-lg dark:text-primary-50">I'm Muhammad Reza Ubaidillah, an enthusiastic informatics student at Mulawarman University with a deep passion for Artificial Intelligence, Machine Learning, and Data Analysis. My journey in the tech world is driven by an insatiable curiosity and a commitment to lifelong learning. My academic background has equipped me with a strong foundation in informatics, while my hands-on projects and research have allowed me to delve into the fascinating realms of AI and ML. I thrive on the challenge of turning data into actionable insights and innovative solutions.</p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-11 dark:text-primary-50">Lets Connect</h3>
            <p class="font-medium text-base text-secondary mb-6 lg:text-lg dark:text-primary-50 pt-1">I'm always open to meeting new people and building connections. Feel free to reach out to me if you have any questions, want to discuss a project, or just want to share experiences. You can contact me through.</p>
            <div class="flex items-center">
              <a href="https://www.instagram.com/mrezaubaidillah_/?hl=en" target="_blank" class="dark:text-white w-9 h-9 mr-3 rounded-full flex justify-center items-center border-slate-300 hover:border-primary hover:bg-primary-950 hover:text-white ">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/muhammadrezaubaidillah/" target="_blank" class="dark:text-white w-9 h-9 mr-3 rounded-full flex justify-center items-center border-slate-300 hover:border-primary hover:bg-primary-950 hover:text-white ">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LinkedIn</title>
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>
              </a>
              <a href="https://github.com/rezaubaidillah" target="_blank" class=" dark:text-white w-9 h-9 mr-3 rounded-full flex justify-center items-center border-slate-300 hover:border-primary hover:bg-primary-950 hover:text-white ">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>GitHub</title>
                  <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                </svg>
              </a>
            </div>
          </div>
        </div>

      </div>


    </section>

    <section id="contact" class="bg-white dark:bg-gray-900 py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Me</h2>
    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
        I'm excited to hear from you! Whether you have a question, want to collaborate on a project, or just want to connect.
    </p>
    <div class="space-y-6">
        <div class="flex items-center space-x-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"/>
            </svg>
            <p class="text-lg font-medium text-gray-900 dark:text-white">muhammadrezaubaidillah15@gmail.com</p>
        </div>
        <div class="flex items-center space-x-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
            </svg>
            <p class="text-lg font-medium text-gray-900 dark:text-white">+6285157988668</p>
        </div>
    </div>
</section>

  </body>
</x-layout>