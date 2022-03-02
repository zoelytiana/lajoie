@extends('base')

@section('title', 'Contact us |'.config('app.name')  )

@section('content')


		
		<div class="content">
        <h2>Contactez-nous </h2>
        <div class="block flex">
            <article>
                <h3><i class="fa fa-send" aria-hidden="true"></i></h3>
				<abbr title="e-mail">Mail :</abbr><a href="mailto:contact@3wa.fr"> contact@lajoie.mg</a>
            </article>
            <article>
            	<h3><i class="fa fa-phone" aria-hidden="true"></i></h3>
				<abbr title="Téléphone">Tel :</abbr><a href="tel:+33140581972"> +020 22 405 59</a>
            </article>
			<article>
				<h3><i class="fa fa-envelope" aria-hidden="true"></i></h3>
				<address>
					<strong>La Joie</strong><br>
					Manjakaray<br>
					101 Antananarivo<br>
				</address>
			</article>
        </div>
		</div>

@endsection('content')