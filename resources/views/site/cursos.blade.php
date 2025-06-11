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

        h4 {
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

        #curso {
            color: white;
            background-color: #696969;
            padding: 5px;
            width: 300px;
            margin-top: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: white;
            border-radius: 15px;
        }

        #Cursos1, #Cursos2, #Cursos3 {
            display: flex;
            justify-content: space-around; /* ou use 'space-between', 'center', etc., como preferir */
            flex-wrap: wrap; /* permite que quebrem linha se não couberem */
            gap: 20px; /* espaçamento entre as divs, opcional */
            margin-top: 50px;
        }

        #cursoButton {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 10px 15px;
            display: inline-block;
            transition: none;
        }

        #cursoButton:hover {
            background-color: #696969;
            text-decoration: underline;
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

<div id="Cursos1">
    <div id="curso">
            <h4><a id="cursoButton" href="{{ route('site.cursos.adm') }}">Administração</a></h4>
    </div>

    <div id="curso">
            <h4><a id="cursoButton" href="{{ route('site.cursos.cont') }}">Contabilidade</a></h4>
    </div>

    <div id="curso">
            <h4><a id="cursoButton" href="{{ route('site.cursos.ds') }}">Desenvolvimento de Sistemas</a></h4>
    </div>

    <div id="curso">
            <h4><a id="cursoButton" href="{{ route('site.cursos.fin') }}">Finanças</a></h4>
    </div>
</div>

<div id="Cursos2">
    <div id="curso">
            <h4><a id="cursoButton" href="{{ route('site.cursos.log') }}">Logística</a></h4>
    </div>

    <div id="curso">
            <h4><a id="cursoButton" href="{{ route('site.cursos.rh') }}">Recursos Humanos</a></h4>
    </div>

    <div id="curso">
            <h4><a id="cursoButton" href="{{ route('site.cursos.sj') }}">Serviços Jurídicos</a></h4>
    </div>
</div>
