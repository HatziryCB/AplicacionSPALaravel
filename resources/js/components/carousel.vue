<template>
    <!-- Carrusel -->
    <div class="container-fluid p-0 mb-4 pb-4">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
                <li data-target="#header-carousel" data-slide-to="4"></li>
                <li data-target="#header-carousel" data-slide-to="5"></li>
                <li data-target="#header-carousel" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="/img/cejas.jpg" alt="cejas" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate_animated animate_fadeInDown" style="letter-spacing: 3px;">May Studio Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Diseño de cejas</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate_animated animate_fadeInUp" href="{{route('citas.index')}}">Agendar cita</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" alt="mascarilla" src="/img/mascarilla.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate_animated animate_fadeInDown" style="letter-spacing: 3px;">May Studio Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Tratamientos faciales</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate_animated animate_fadeInUp" href="{{route('citas.index')}}">Agendar cita</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" alt="laminado" src="/img/laminado.webp" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate_animated animate_fadeInDown" style="letter-spacing: 3px;">May Studio Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Laminado de cejas</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate_animated animate_fadeInUp" href="{{route('citas.index')}}">Agendar cita</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" alt="manicura" src="/img/manicura.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate_animated animate_fadeInDown" style="letter-spacing: 3px;">May Studio Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Manicura</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate_animated animate_fadeInUp" href="{{route('citas.index')}}">Agendar cita</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" alt="maquillaje" src="/img/maquillaje.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate_animated animate_fadeInDown" style="letter-spacing: 3px;">May Studio Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Maquillaje Profesional</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate_animated animate_fadeInUp" href="{{route('citas.index')}}">Agendar cita</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" alt="masaje" src="/img/masaje.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate_animated animate_fadeInDown" style="letter-spacing: 3px;">May Studio Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Masajes</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate_animated animate_fadeInUp" href="{{route('citas.index')}}">Agendar cita</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" alt="laminado 2" src="/img/laminado2.webp" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate_animated animate_fadeInDown" style="letter-spacing: 3px;">May Studio Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Tintura de cejas</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate_animated animate_fadeInUp" href="{{route('citas.index')}}">Agendar cita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carrusel -->
</template>

<script>
export default {
    mounted() {
        console.log('Carrousel montado.')
    }
}
</script>
