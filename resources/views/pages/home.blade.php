@extends('base')

@section('title', 'Home |'.config('app.name')  )

@section('content')


            <div class="content">
            <h1>Bienvenue</h1>

                <div class="block">
                    
                    <img class="logo" src="{{asset('img/ecole.jfif')}}" alt='La joie' >  
                    L’histoire de l’école est très liée au développement d’Outremont.

                    La construction d’une partie de l’école a été amorcée en 1913. En septembre 1914, une centaine d’élèves ont fréquenté l’école. Par la suite, la construction a repris et l’édifice actuel a été terminé en 1923. Cette école dont l’architecture est de style art déco est l’une des plus anciennes et des plus belles du parc immobilier de la commission scolaire. Son aménagement intérieur symétrique a abrité dans chacune des parties tantôt des filles et des garçons, tantôt des francophones et des anglophones. Des retrouvailles ont été organisées en décembre 2004 pour célébrer le 90e anniversaire de l’école.  
                    <p>
                                    L’éducation est un droit fondamental inscrit dans la Déclaration Universelle des Droits de l’Homme comme dans la Convention relative aux Droits de l’Enfant. Elle doit être un moyen de donner aux enfants comme aux adultes la possibilité de devenir des participants actifs de la transformation des sociétés dans lesquelles ils vivent.

                    L’éducation joue également un rôle important dans la réduction de la pauvreté et des inégalités. Elle rend les populations moins vulnérables et favorise leur participation au développement, l’exercice de la citoyenneté et la bonne gouvernance.
                    Dans les pays, ce sont les gouvernements qui ont la responsabilité de définir les politiques d’éducation. Mais les États du Sud peinent à mettre en place des mesures globales favorisant l’accès à l’éducation pour tous. Bon nombre d’entre eux ne disposent pas de ressources suffisantes pour offrir un accès universel à l’éducation à leurs citoyens et les priorités des gouvernements, en termes budgétaires, ne convergent pas toujours avec celles édictées par la communauté internationale.
                    </p>  
            </div>
            </div>

@endsection('content')