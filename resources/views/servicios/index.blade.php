
@extends('layouts.layout')

@section('content')
    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Nuestros servicios</h6>
                <h1>May Studio Salon </h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            @foreach($servicios as $servicios)
                <div class="service-item position-relative">
                    <img class="img-fluid" src="{{ asset('storage/' . $servicios->duracion) }}" alt="{{ $service->nombre }}">
                    <div class="service-text text-center">
                        <h4 class="text-white font-weight-medium px-3">{{ $servicios->nombre }}</h4>
                        <p class="text-white px-3 mb-3">{{ $servicios->descripcion }}</p>
                        <div class="w-100 bg-white text-center p-4">
                            <a class="btn btn-primary" href="">Hacer una reserva</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Agendar cita</h1>
                    <form action="{{ route('cita.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control bg-transparent p-4" placeholder="Your Name" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control bg-transparent p-4" placeholder="Your Email" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" name="date" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" name="time" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="service_id" class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        @foreach($servicios as $servicios)
                                            <option value="{{ $servicios->id }}">{{ $servicios->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
