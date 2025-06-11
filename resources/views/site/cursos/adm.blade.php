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
    <h1>Administração</h1>
    <hr>
    <h2>Como funcionam as organizações, desde empresas privadas até ONGs, passando por órgãos públicos, comércio e indústria. O estudante vai precisar de conhecimentos de língua portuguesa, matemática, história e geografia para compreender os principais assuntos do curso, como história da administração, evolução das organizações ao longo do tempo, contabilidade, leis que regulam o funcionamento das empresas e redação de documentos.<br>

O aluno vai aprender ainda a analisar as chances de um negócio ou produto ser bem-sucedido e o comportamento do consumidor. Estudará também técnicas de atendimento ao cliente, empreendedorismo (iniciativas para realizar novos negócios) e como uma organização planeja alcançar seus objetivos e define suas metas para o futuro.<br>

O candidato que ingressar no curso técnico de Administração, na modalidade AMS, poderá prosseguir os estudos em uma Fatec no curso superior de tecnologia em Processos Gerenciais.
</h2>
</div>