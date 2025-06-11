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
    <h1>APM</h1>
    <hr>
    <h2>ASSOCIAÇÃO DE PAIS E MESTRES DA ESCOLA TÉCNICA ESTADUAL DA ZONA LESTE<br>
<br>
INFORMATIVO<br>
<br>
1 – O que é a APM?<br>
É uma instituição auxiliar da escola, que tem por finalidade colaborar no cumprimento do progresso educacional, na assistência escolar e na integração família-escola-comunidade. Não tem finalidade lucrativa.<br>
<br>
2 – Objetivo<br>
Mobilizar os recursos humanos, materiais e financeiros da comunidade para auxiliar a escola na melhoria do ensino, desenvolvimento de atividades de assistência ao escolar carente, conservação e manutenção do prédio, máquinas e equipamentos das instalações técnicas, programação de atividades culturais que envolvam pais, professores e alunos, execução de pequenas obras de construção no prédio escolar.<br>
<br>
3 – Formação<br>
Sua formação é composta pelo diretor da escola, professores, corpo administrativo, pais de alunos e alunos maiores de 18 anos.<br>
<br>
4 – Dados da nossa APM<br>
Associação de Pais e Mestres da Escola Técnica Estadual da Zona Leste<br>
CNPJ: 07.031.103/0001-68 (chave pix para contribuição)<br>
<br>
5 – Meios de Recursos – Facultativas<br>
Contribuição dos associados;<br>
Convênios e parcerias;<br>
Doações;<br>
Locação de armários;<br>
Aluguel da cantina.<br></h2>
</div>