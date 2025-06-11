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
    <h1>Etec da Zona Leste</h1>
    <hr>
    <h2>Localizada na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste é um importante polo educacional da região.<br><br>

Desde sua fundação, a escola tem como missão oferecer ensino técnico e tecnológico de qualidade, preparando os alunos para os desafios do mercado de trabalho e incentivando a busca pela excelência acadêmica.<br><br>

Com o passar dos anos, a instituição ampliou sua oferta de cursos e modernizou suas instalações, adaptando-se às demandas da sociedade. Oferece formações técnicas em áreas como informática, administração e eletrônica, com o apoio de uma equipe qualificada de professores e funcionários.<br><br>

Além do ensino regular, a Etec Zona Leste promove atividades extracurriculares, como projetos de pesquisa, competições, eventos culturais e esportivos, contribuindo para a formação integral dos estudantes.</h2>
</div>