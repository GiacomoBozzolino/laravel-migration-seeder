<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Dati treni</h2>
                @foreach ($trains as $train)
                <ul>
                    <li> 
                        Azienda:
                        {{$train->azienda}}
                    </li>
                    <li>
                        Stazione di partenza:
                        {{$train->stazione_partenza}}
                    </li>
                    <li>
                        Stazione di arrivo:
                        {{$train->stazione_arrivo}}
                    </li>
                    <li>
                        Orazio di partenza:
                        {{$train->orario_partenza}}
                    </li>
                    <li>
                        Orario di arrivo:
                        {{$train->orario_arrivo}}
                    </li>
                    <li>
                        Codice treno:
                        {{$train->codice_treno}}
                    </li>
                    <li>
                        Numero di carrozze:
                        {{$train->numero_carrozze}}
                    </li>
                    <li>
                        Il treno è in orario:
                        {{ $train->in_orario ? 'si' : 'no' }}
                    </li>
                    <li>
                        Il treno è stato cancellato:
                        {{ $train->cancellato ? 'si' : 'no' }}
                    </li>
                </ul>
                @endforeach

                <div class="col-12">
                    <h2>Dati stationi ferroviarie</h2>
                    @foreach ($stations as $station)
                    <ul>
                        <li>
                            Nome stazione:
                            {{$station->name}}
                        </li>
                        <li>
                            Città:
                            {{$station->city}}
                        </li>
                        <li>
                            Numero binari:
                            {{$station->n_track}}
                        </li>
                        <li>
                            
                            {{ $station->baggage_check ? 'Con deposito bagagli' : 'Senza deposito bagali' }}
                        </li>
                    </ul>



                    @endforeach
                    
                </div>
                
            </div>
        </div>
    </div>

    
</body>

</html>