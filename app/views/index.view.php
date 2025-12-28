  <!-- PAGE INDEX -->
  <main class="relative top-0 w-full pt-[80px] min-[321px]:pt-[40px] sm:pt-0">
    <div class="bg-[url('/assets/images/bgHero.svg')] bg-no-repeat bg-cover bg-center w-full h-[520px] 2xl:h-[660px] sm:h-[560px]"></div>

    <div class="font-rale text-center flex flex-col items-center justify-center gap-5">
      <h1 class="text-[40px] font-bold">Bem-vindos a <br /> Galeria do Salão!</h1>
      <p class="text-xl text-gray-Tertiary w-[320px]">Siga os passos para agendar seu próximo atendimento conosco.</p>
    </div>

    <div class="font-rale font-bold w-full flex items-center justify-center gap-4 mt-10">
      <a href="socialMedia" class="w-[150px] py-4 rounded-[10px] cursor-pointer text-center text-pink-primary hover:bg-pink-secondary hover:text-white focus:outline-pink-secondary">Conhecer</a>
      <a href="#" class="w-[150px] py-4 rounded-[10px] cursor-pointer text-center text-white bg-pink-primary shadow-[0_4px_30px_rgba(0,48,120,0.10)] hover:bg-pink-secondary hover:text-white focus:outline-pink-secondary">Agendar</a>
    </div>
  </main>

  <!-- PAGE SOCIAL MEDIA -->
  <div class="fixed z-[10] inset-0 w-full flex items-center justify-center px-4 bg-white/10 backdrop-blur-sm opacity-1 transition-opacity duration-300 ease-in-out">
    <div class="absolute inset-0 z-10 w-[200px] h-[100px] mx-auto pb-2 pt-[70px] flex items-center justify-center bg-white sm:w-full sm:h-[130px] sm:pt-[90px]">
      <a href="#" class="absolute -left-[70px] rounded-full focus:outline-pink-secondary sm:left-10">
        <i class="ph-bold ph-arrow-left text-2xl"></i>
      </a>

      <!-- Logo -->
      <img src="/assets/images/Logo.svg" alt="Logo MeTime" class="w-[95px] sm:w-[132px]">
    </div>

    <div class="relative overflow-y-auto max-h-[80vh] rounded-[10px] mt-8 bg-gradient-to-b from-white/50 to-pink-secondary sm:max-h-[90vh] sm:overflow-hidden">
      <!-- borda -->
      <div class="sticky inset-0 w-[100%] h-[30px] bg-gradient-to-b from-white to-transparent md:mt-[60px]"></div>

      <!-- conteúdo -->
      <section class="mt-[50px] h-full mx-auto pb-5 md:mt-0">
        <h1 class="font-rale font-bold text-4xl text-center">Conheça Nosso Trabalho!</h1>

        <div class="w-full mt-7 flex flex-col gap-4 items-center sm:px-4">
          <!-- CARD 1 -->
          <article class="flex flex-col w-full max-w-[90%] h-[470px] pb-3 rounded-[10px] bg-gradient-to-r from-pink-primary to-pink-secondary overflow-hidden md:flex-row md:max-w-[740px] md:h-[200px] md:pb-0 lg:w-[888px]">
            <div class="bg-[url('/assets/images/imageSM1.png')] bg-cover bg-top w-full h-[51%] md:w-[45%] md:h-full lg:w-[37%]"></div>

            <div class="flex items-center flex-col text-center justify-center font-rale pt-2 h-[49%] w-full md:h-full md:w-[63%]">
              <h2 class="font-bold text-xl mb-4 ">Quer ver de perto nossos resultados?</h2>
              <p class="font-semibold text-gray-secondary mb-5 w-[90%]">Confira os trabalhos incríveis dos nossos profissionais no nosso Instagram e inspire-se para o seu próximo visual.</p>
              <div class="mx-auto flex items-center justify-center gap-2">
                <i class="ph ph-instagram-logo gradient-instagram text-3xl md:text-2xl lg:text-3xl"></i>
                <a href="#" class="italic underline text-sm w-[60%] rounded-[4px] outline-none focus:gradient-instagram focus:outline-white hover:gradient-instagram lg:text-base md:w-[55%] md:px-1 lg:px-2">Siga a gente no Instagram e veja nossas transformações!</a>
                <i class="ph ph-instagram-logo gradient-instagram text-3xl md:text-2xl lg:text-3xl"></i>
              </div>
            </div>
          </article>

          <!-- CARD 2 -->
          <article class="flex flex-col w-full max-w-[90%] h-[470px] pb-3 rounded-[10px] bg-gradient-to-l from-pink-primary to-pink-secondary overflow-hidden md:flex-row-reverse md:max-w-[740px] md:h-[200px] md:pb-0 lg:w-[888px] xl:ml-[150px]">
            <div class="bg-[url('/assets/images/imageSM2.png')] bg-cover bg-top w-full h-[51%] md:w-[45%] md:h-full lg:w-[37%]"></div>

            <div class="flex flex-col items-center text-center justify-center font-rale pt-2 h-[49%] w-full md:h-full md:w-[63%]">
              <h2 class="font-bold text-xl mb-4 w-[80%] lg:w-[100%]">Dúvidas ou quer saber qual serviço ideal para você?</h2>
              <p class="mx-auto w-2/3 font-semibold text-gray-secondary mb-5 lg:w-1/2">Nossa equipe está pronta para te atender e orientar.</p>
              <div class="mx-auto flex items-center justify-center gap-2">
                <i class="ph ph-whatsapp-logo text-[#25D366] text-3xl md:text-2xl lg:text-3xl"></i>
                <a href="#" class="italic underline text-sm rounded-[4px] w-[55%] outline-none hover:no-underline focus:no-underline hover:text-[#25D366] focus:text-[#25D366] focus:outline-white lg:text-base md:w-auto md:px-0 lg:px-2">Chame a gente no WhatsApp e fale direto conosco!</a>
                <i class="ph ph-whatsapp-logo text-[#25D366] text-3xl md:text-2xl lg:text-3xl"></i>
              </div>
            </div>
          </article>

          <!-- CARD 3 -->
          <article class="flex flex-col w-full max-w-[90%] h-[470px] pb-3 rounded-[10px] bg-gradient-to-r from-pink-primary to-pink-secondary overflow-hidden md:flex-row md:max-w-[740px] md:h-[200px] md:pb-0 lg:w-[888px]">
            <div class="bg-[url('/assets/images/imageSM3.png')] bg-cover bg-top w-full h-[51%] md:w-[45%] md:h-full lg:w-[37%]"></div>

            <div class="flex items-center flex-col text-center justify-center font-rale pt-2 h-[49%] w-full md:h-full md:w-[63%]">
              <h2 class="font-bold text-xl mb-4 w-[80%] md:w-[100%]">Quer dicas, bastidores e resultados reais?</h2>
              <p class="font-semibold text-gray-secondary mb-5 lg:w-[70%] w-[90%]">No nosso YouTube você acompanha conteúdos exclusivos dos nossos profissionais.</p>
              <div class="mx-auto flex items-center justify-center gap-2">
                <i class="ph ph-youtube-logo text-[#C4302B] text-3xl md:text-2xl lg:text-3xl"></i>
                <a href="#" class="italic underline text-sm rounded-[4px] w-[60%] px-1 outline-none hover:no-underline focus:no-underline hover:text-[#C4302B] focus:text-[#C4302B] focus:outline-white lg:text-base md:w-auto md:px-0 lg:px-2">Inscreva-se no canal e não perca nenhuma novidade!</a>
                <i class="ph ph-youtube-logo text-[#C4302B] text-3xl md:text-2xl lg:text-3xl"></i>
              </div>
            </div>
          </article>
        </div>
      </section>
    </div>
  </div>
  </>