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
</ul>

<div id="Etec">
    <h1>Coordenação de Cursos</h1>
    <hr>
    <h2>
    
As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino, à supervisão de sua execução, ao controle das atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas, bem como pela otimização dos recursos físicos e didáticos disponíveis para os cursos mantidos pelas Etecs.<br>
<br>
Coordenador Novotec<br>
Giovanna Littiere (Novotec Administração)<br>
Leandro (Novotec Logística)<br>
Marcelo Collado (Novotec Desenvolvimento de Sistemas)<br>
Cibelle Ferreria Francoso (Novotec RH)<br>
Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)<br>
Coordenador Curso Técnico<br>
Monyse Tesser Panacci (Técnico em Adminstração)<br>
Dainele (Técnico em Contabilidade)<br>
Ediney Ciasi Barreto (Técnico em Desenvolvimento de Sistemas)<br>
Silvano Lack de Brito (Técnico em Logística / Técnico em Serviços Jurídicos)<br>
Contato<br>
Telefones: (11) 2045-4018<br>
    </h2>
</div>