<?php get_header(); ?>


<?php

// TODO: Added to home
get_template_part( 'public/partials/templates/home/header', 'home' ); ?>

<?php get_template_part( 'public/partials/templates/home/description', 'home' ); ?>

<?php get_template_part( 'public/partials/templates/home/services', 'home' ); ?>


<section class="lg:h-1000p pb-28 lg:pb-0">

    <div class="container w-1240p max-w-full mx-auto px-4 relative -mt-60">
        <div class="w-full lg:w-4/5">
            <figure>
                <img src="<?php echo INHEALTH_DIR_URI . 'public/img/rec.png'; ?>" alt="image" loading="lazy">
            </figure>
        </div>
        <div class="bg-primary text-white rounded-2xl py-12 lg:py-20 px-8 lg:px-16 mx-auto relative -top-28 lg:absolute lg:-translate-x-0 lg:left-auto lg:top-1/2 transform lg:-translate-y-1/2 lg:right-0 w-10/12 lg:w-1/2">
            <p class="text-base lg:text-2xl avenir-regular">Podés contactarnos vía mail o rápidamente a través de nuestras redes sociales por cualquier inquietud o pregunta que tengas.</p>
            <p class="text-base lg:text-2xl mt-4 lg:mt-8 avenir-italic">Queremos informar, educar, acompañar y contarte nuestras iniciativas.</p>
            <div class="text-center mt-5 lg:mt-10">
                <a href="https://www.instagram.com/multiplesexpresiones/" target="_blank" class="bg-secondary avenir-demi text-white text-xl xl:text-3xl py-3 px-16 inline-block rounded-full" href="">Conócenos</a>
            </div>
        </div>
    </div>

</section>


<section class="lg:h-500p bg-gray-200 px-0 xl:px-40">
    <div class="container max-w-full w-1240p mx-auto px-4 relative">
        <div class="relative lg:absolute -top-24 lg:-top-48 w-full">
            <div class="bg-white border border-solid border-secondary rounded-2xl py-12 px-4 lg:px-16 relative lg:absolute lg:top-1/2 lg:transform lg:-translate-y-1/2 lg:right-0 w-10/12 mx-auto lg:w-2/5 z-10">
                <form id="form-site" class="w-full">
                    <input type="text" id="form-name" class="font-montserrat w-full border border-solid border-secondary py-3 placeholder-secondary px-4 rounded-full text-secondary outline-none" placeholder="Nombre">
                    <input type="email" id="form-email" class="font-montserrat mt-4 w-full border border-solid border-secondary py-3 placeholder-secondary px-4 rounded-full text-secondary outline-none" placeholder="Email">
                    <textarea placeholder="Déjanos tu mensaje" class="font-montserrat h-32 mt-4 w-full border border-solid border-secondary py-3 placeholder-secondary px-4 rounded-2xl text-secondary outline-none" name="form-message" id="form-message" cols="30" rows="10"></textarea>
                    <div class="flex justify-end mt-6">
                        <button type="submit" class="bg-primary font-montserrat text-white text-base lg:text-lg py-2 px-12 inline-block rounded-full">Enviar</button>
                    </div>
                    <p class="res-form"></p>
                </form>
            </div>

            <div class="bg-primary text-white rounded-2xl pt-40 lg:pt-24 pb-24 px-8 lg:px-16 w-full lg:w-4/5 relative -top-28 lg:top-0">
                <h3 class="text-3xl text-secondary font-bold font-barlow">Contacto</h3>
                <div class="mt-10 grid grid-cols-1 gap-1">
                    <p class="text-lg avenir-regular">Fundación Múltiples Expresiones</p>
                    <p class="text-lg avenir-regular">Parmenio Ferrer 6389, B° Granja de Funes - X5147 Córdoba</p>
                    <p class="text-lg avenir-regular break-words">multiples_expresiones@yahoo.com.ar</p>
                    <p class="text-lg avenir-regular">3516 66-6229 - 3517 59-4923</p>
                </div>
                <p class="mt-10 text-base avenir-regular">Síguenos en redes</p>

                <div class="flex gap-4 text-white mt-4">
                    <a target="_blank" href="https://www.facebook.com/estimulaciontempranamultiplesexpresiones" class="w-8 h-8 rounded-full border border-white border-solid flex items-center justify-center">
                        <svg class="ic" aria-hidden="true"><use xlink:href="<?php echo INHEALTH_DIR_URI . 'public/img/ic.svg#ic-facebook-f'; ?>"/></svg>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/multiplesexpresiones/" class="w-8 h-8 rounded-full border border-white border-solid flex items-center justify-center">
                        <svg class="ic" aria-hidden="true"><use xlink:href="<?php echo INHEALTH_DIR_URI . 'public/img/ic.svg#ic-instagram'; ?>"/></svg>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/fundacion-multiples-expresiones-8344b55b/" class="w-8 h-8 rounded-full border border-white border-solid flex items-center justify-center">
                        <svg class="ic" aria-hidden="true"><use xlink:href="<?php echo INHEALTH_DIR_URI . 'public/img/ic.svg#ic-linkedin-in'; ?>"/></svg>
                    </a>
                </div>

                <a target="_blank" href="https://www.google.com/maps/place/Fundaci%C3%B3n+M%C3%BAltiples+Expresiones/@-31.3495503,-64.2448955,18z/data=!3m1!4b1!4m6!3m5!1s0x94329eb264dbb709:0x46f24229dee5d32a!8m2!3d-31.3495503!4d-64.2425266!16s%2Fg%2F11g8_51l90" class="inline-block mt-10 text-base uppercase avenir-regular underline">Ver en mapa</a>
            </div>


        </div>
    </div>


</section>


<section class="bg-gray-200 lg:pt-10 pb-10 relative">
    <div class="container max-w-full w-1240p mx-auto px-4">
        <div class="flex justify-between flex-col lg:flex-row items-center">

            <figure class="mb-8 lg:mb-0">
                <img class="w-auto h-20" src="<?php echo INHEALTH_DIR_URI . 'public/img/logo.png' ?>" alt="logo">
            </figure>

            <div class="text-xs flex flex-col gap-0.5 text-gray-600 mt-8 lg:mt-0">
                <p class="text-11p avenir-regular text-center lg:text-right">Fundación Múltiples Expresiones</p>
                <p class="text-11p avenir-regular text-center lg:text-right">Parmenio Ferrer 6389, B° Granja de Funes - X5147 Córdoba
                <p class="text-11p avenir-regular text-center lg:text-right">multiples_expresiones@yahoo.com.ar</p>
                <p class="text-11p avenir-regular text-center lg:text-right">3516 66-6229 - 3517 59-4923</p>
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>