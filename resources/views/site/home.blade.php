<head>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            background-color: #ff0000;
            justify-content: center;
            font-weight: bold;
        }

        li {
            margin: 0 15px;
        }

        a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 10px 15px;
            display: inline-block;
            transition: background 0.3s;
        }

        a:hover {
            background-color: #8f3232;
        }

        h2 {
            font-size: 15pt;
        }

        h1 {
            text-align: left;
        }

        img {
            max-width: 100%;
            height: 150px;
        }

        #logoLink {
            display: inline-block;
            padding: 5px;
            background-color: #f0f0f0;
        }

        #Etec {
            padding: 5px;
            width: 75%;
            position: absolute;
            margin-top: 10px;
            left: 15%;
            border-width: 2px;
            border-style: solid;
            border-color: black;
            border-radius: 5px;
        }
        
    </style>
</head>

<a id="logoLink" href="{{ route('site.home') }}"><img src="{{ asset('img/cps.jpg') }}" /></a>

<ul>
    <li>
        <a href="{{ route('site.home') }}">Principal</a>
    </li>
    <li>
        <a href="{{ route('site.cursos') }}">Cursos</a>
    </li>
    <li>
        <a href="{{ route('site.departamentos') }}">Departamentos</a>
    </li>
    <li>
        <a href="{{ route('site.contato') }}">Contato</a>
    </li>
    <li>
        <a class="nav-link fs-5" href="{{ route('login') }}">Login</a>
    </li>
</ul>

<div id="Etec">
    <h1>Etec</h1>
    <hr>
    <h2>As 228 Etecs administradas pelo Centro Paula Souza contam com mais de 224 mil matriculados nos Ensinos Técnico, Integrado, Médio e Especialização Técnica.<br><br>
    Ao todo, são ofertados 262 cursos: 118 cursos técnicos (104 presenciais, 5 semipresenciais, 6 cursos online e 3 na modalidade aberta), 109 cursos de Ensino Médio integrado ao Técnico – 35 em tempo integral e 65 em um único período e 9 cursos na Articulação da Formação Profissional Média e Superior (AMS) – e 35 especializações técnicas.<br><br>
    O candidato também pode escolher entre as quatro opções de itinerários formativos de Ensino Médio ofertados nas Etecs.</h2>
</div>