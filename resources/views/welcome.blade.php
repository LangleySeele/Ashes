@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <!--<h1 class="text-white">{{ __('ASHes') }}</h1>
                        <a href='/characters' class="nav-link text-primary">
                        <i><img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			" class="card-img-top rounded-circle mx-auto d-block" src="images/Actor1.png" alt=""></i> {{ __('Characters') }}
                         </a>-->
                        <div class="col-sm" aling="left">
			            <div class="card text-center " style="width: 18rem; margin-top: 70px;">
			            <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			                " class="card-img-top rounded-circle mx-auto d-block" src="images/Actor1.png" alt="">
		                <div class="card-body">
			            <h5 class="Card-title">Personajes</h5>
			            <h5 class="Card-text">Aqui podras ver a los personajes del videojuego.</h5>
			            <a href="/characters" class="btn btn-primary">Ver mas...</a>
		                </div>
	                    </div>

                        <div class="col-sm">
			            <div class="card text-center " style="width: 18rem; margin-top: 70px;">
			            <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			                " class="card-img-top rounded-circle mx-auto d-block" src="images/0357caa9ff68093.jpg" alt="">
		                <div class="card-body">
			            <h5 class="Card-title">Historia</h5>
			            <h5 class="Card-text">Aqui podras ver la historia que esta escrita hasta ahora.</h5>
			            <a href="/historia" class="btn btn-primary">Ver mas...</a>
		                </div>
	                    </div>

                        <div class="col-sm">
			            <div class="card text-center " style="width: 18rem; margin-top: 70px;">
			            <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			                " class="card-img-top rounded-circle mx-auto d-block" src="images/003.png" alt="">
		                <div class="card-body">
			            <h5 class="Card-title">Dialogos</h5>
			            <h5 class="Card-text">Aqui podras ver los dialogos de cada personaje por escena.</h5>
			            <a href="/dialogs" class="btn btn-primary">Ver mas...</a>
		                </div>
	                    </div>

                        <!--<a href='/historia' class="nav-link text-primary">
                        <i><img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			" class="card-img-top rounded-circle mx-auto d-block" src="images/0357caa9ff68093.jpg" alt=""></i> {{ __('Historia') }}
                        </a>-->
                        <p class="text-lead text-light">
                            {{ __('Existen tantas verdades como personas.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
