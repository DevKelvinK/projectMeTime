  <!-- PAGE INDEX -->
  <main class="relative top-0 w-full pt-[80px] min-[321px]:pt-[40px] sm:pt-0">
    <div class="bg-[url('/assets/images/bgHero.svg')] bg-no-repeat bg-cover bg-center w-full h-[520px] 2xl:h-[660px] sm:h-[560px]"></div>

    <div class="font-rale text-center flex flex-col items-center justify-center gap-5">
      <h1 class="text-[40px] font-bold">Bem-vindos a <br /> Galeria do Salão!</h1>
      <p class="text-xl text-gray-Tertiary w-[320px]">Siga os passos para agendar seu próximo atendimento conosco.</p>
    </div>

    <div class="font-rale font-bold w-full flex items-center justify-center gap-4 mt-10">
      <button id="showModal" type="button" class="w-[150px] py-4 rounded-[10px] cursor-pointer text-center text-pink-primary hover:bg-pink-secondary hover:text-white focus:outline-pink-secondary">Conhecer</button>

      <a href="#" class="removeTab w-[150px] py-4 rounded-[10px] cursor-pointer text-center text-white bg-pink-primary shadow-[0_4px_30px_rgba(0,48,120,0.10)] hover:bg-pink-secondary hover:text-white focus:outline-pink-secondary">Agendar</a>
    </div>
  </main>

  <!-- MODAL SOCIAL MEDIA -->
<dialog class="hidden fixed inset-0 w-full h-full px-4 flex flex-col items-center justify-center bg-black/10 backdrop-blur-sm">
  <!-- Logo -->
  <div class="flex pt-1 pb-2 mb-4 md:pt-[75px] 2xl:pt-[0px] 2xl:mt-[-12px]">
    <img src="/assets/images/Logo.svg" alt="Logo MeTime" class="w-[95px] sm:w-[132px]">
  </div>

  <div class="relative overflow-y-auto max-h-[80vh] rounded-[10px] bg-gradient-to-b from-white/50 to-pink-secondary sm:max-h-[90vh] sm:overflow-hidden md:pt-8 xl:w-[80%]">
    <!-- close modal -->
    <button id="closeModal" class="absolute right-5 top-5 p-1 bg-pink-secondary/30 rounded-lg leading-none cursor-pointer focus:outline-pink-secondary focus:bg-pink-secondary/60 hover:bg-pink-secondary/60">
      <i class="ph ph-x text-xl font-bold leading-none sm:leading-none sm:text-2xl"></i>
    </button>

    <!-- conteúdo -->
    <section class="h-full mt-[50px] mx-auto md:mt-0">
      <h1 class="font-rale font-bold text-4xl text-center">Conheça Nosso Trabalho!</h1>

      <div class="w-full mt-7 pb-4 flex flex-col gap-4 items-center sm:px-4">
        <!-- CARD 1 -->
        <article class="flex flex-col w-full max-w-[90%] h-[470px] pb-3 rounded-[10px] bg-gradient-to-r from-pink-primary to-pink-secondary overflow-hidden shadow-[5px_5px_15px_rgba(0,0,0,0.20)] md:flex-row md:max-w-[740px] md:h-[200px] md:pb-0 lg:max-w-[888px]">
          <div class="bg-[url('/assets/images/imageSM1.png')] bg-cover bg-top w-full h-[51%] md:w-[45%] md:h-full lg:w-[37%]"></div>

          <div class="flex items-center flex-col text-center justify-center font-rale pt-2 h-[49%] w-full md:h-full md:w-[63%]">
            <h2 class="font-bold text-xl mb-4 ">Quer ver de perto nossos resultados?</h2>
            <p class="font-semibold text-gray-secondary mb-5 w-[90%]">Confira os trabalhos incríveis dos nossos profissionais no nosso Instagram e inspire-se para o seu próximo visual.</p>
            <div class="mx-auto flex items-center justify-center gap-2">
              <i class="ph ph-instagram-logo gradient-instagram text-3xl md:text-2xl lg:text-3xl"></i>
              <a href="#" class="italic underline text-sm w-[60%] rounded-[4px] outline-none focus:gradient-instagram focus:outline-white hover:gradient-instagram lg:text-base md:w-[55%] md:px-1 lg:w-full lg:px-2">Siga a gente no Instagram e veja nossas transformações!</a>
              <i class="ph ph-instagram-logo gradient-instagram text-3xl md:text-2xl lg:text-3xl"></i>
            </div>
          </div>
        </article>

        <!-- CARD 2 -->
        <article class="flex flex-col w-full max-w-[90%] h-[470px] pb-3 rounded-[10px] bg-gradient-to-l from-pink-primary to-pink-secondary overflow-hidden shadow-[5px_5px_15px_rgba(0,0,0,0.20)] md:flex-row-reverse md:max-w-[740px] md:h-[200px] md:pb-0 lg:max-w-[888px] xl:ml-[150px]">
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
        <article class="flex flex-col w-full max-w-[90%] h-[470px] pb-3 rounded-[10px] bg-gradient-to-r from-pink-primary to-pink-secondary overflow-hidden shadow-[5px_5px_15px_rgba(0,0,0,0.20)] md:flex-row md:max-w-[740px] md:h-[200px] md:pb-0 lg:max-w-[888px]">
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
</dialog>