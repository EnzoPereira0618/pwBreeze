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
    <h1>Secretaria Acadêmica</h1>
    <hr>
    <h2>
    Horários de Atendimentos<br>
Segunda-Feira&nbsp;&nbsp;&nbsp;&nbsp;Quarta-Feira&nbsp;&nbsp;&nbsp;&nbsp;Sexta-Feira<br>
08h00min. às 09h30min.&nbsp;&nbsp;&nbsp;&nbsp;08h00min. às 09h30min.&nbsp;&nbsp;&nbsp;&nbsp;08h00min. às 09h30min.<br>
14h30min. às 15h30min.&nbsp;&nbsp;&nbsp;&nbsp;14h30min. às 15h30min.&nbsp;&nbsp;&nbsp;&nbsp;14h30min. às 15h30min.<br>
19h30min. às 20h30min.&nbsp;&nbsp;&nbsp;&nbsp;19h30min. às 20h30min.&nbsp;&nbsp;&nbsp;&nbsp;19h30min. às 20h30min.<br>
Equipe<br>
Diretor de Serviços Acadêmicos – Ênio Ramos Araújo<br>
Agente Técnico e Administrativo – Diva Neide Bortoli<br>
Contato<br>
E-mail: e211acad@cps.sp.gov.br<br>
Telefones: (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009<br>
<br>
    </h2>
</div>