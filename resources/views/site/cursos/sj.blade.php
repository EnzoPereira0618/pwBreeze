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
    <h1>Serviços Jurídicos</h1>
    <hr>
    <h2>Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do Direito. Vai aprender sobre a Constituição Federal (direito constitucional), a punição aos crimes (direito penal), as regras para relações e disputas entre as pessoas e também as normas para disputas e questões familiares (direito civil), o funcionamento dos órgãos públicos (direito administrativo), as regras para os negócios entre empresas e pessoas (direito empresarial), como deve ser a relação entre patrão e empregado, considerando direitos e deveres de cada um (direito do trabalho), cobrança de tributos, como os impostos (direito tributário) e a proteção garantida aos consumidores (direito do consumidor), entre outros assuntos. O estudante vai conhecer também como são elaborados e redigidos os processos, contratos e documentos jurídicos. Além de aprender sobre as leis, o aluno vai estudar conceitos de administração de empresas, matemática financeira, técnicas de atendimento ao cliente e inglês instrumental. A língua portuguesa é fundamental.
</h2>
</div>