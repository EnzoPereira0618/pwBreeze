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
    <h1>Finanças</h1>
    <hr>
    <h2>Português, matemática e geografia são disciplinas básicas para a compreensão do curso de Finanças. Essa base vai ser importante para aprender, por exemplo, matemática financeira e economia, que são fundamentais para analisar relatórios que expliquem a situação financeira de uma empresa – lucros obtidos, dívidas a pagar, entre outros. O estudante vai aprender a analisar diversas operações financeiras, como financiamentos, empréstimos e aplicações. Também aprenderá a apurar resultados para verificar as possibilidades de um negócio ser bem-sucedido. Durante o curso, o aluno vai conhecer as leis que regulam o funcionamento das empresas e vai aprender a elaborar documentos como notas fiscais, orçamento e recibos de pagamento. O aluno vai aprender também a fazer planilhas no computador para registrar e analisar informações.
</h2>
</div>