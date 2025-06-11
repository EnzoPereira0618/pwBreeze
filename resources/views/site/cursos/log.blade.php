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
    <h1>Logística</h1>
    <hr>
    <h2>Logística é o planejamento do caminho feito por um produto ou serviço até chegar ao cliente de forma organizada, rápida e econômica. Para planejar esse caminho, o estudante vai precisar de conhecimentos de matemática, geografia e física. O aluno aprenderá sobre os processos de compra de matérias-primas, incluindo a escolha dos fornecedores, o registro dos pedidos de compra e o recebimento dos materiais adquiridos.<br>

O estudante vai aprender também como se deve movimentar as cargas e os produtos dentro de um estoque para decidir se utilizará, por exemplo, um carrinho ou uma empilhadeira, e como se deve armazenar cada tipo de produto e por quanto tempo. Vai estudar ainda sobre a entrega das mercadorias compradas pelos clientes: como organizar a carga para o transporte, qual a embalagem mais adequada (em caixas de papelão ou madeira, em páletes ou contêineres), qual é o tipo de transporte mais adequado para o produto e para o cliente (caminhões, embarcações, trem ou avião), e quais são as principais rotas que podem ser utilizadas. Além disso, o estudante aprenderá sobre os custos envolvidos em cada uma das atividades.<br>

O candidato que ingressar no curso técnico de Logística, na modalidade AMS, poderá prosseguir os estudos em uma Fatec no curso superior de tecnologia em Logística.
</h2>
</div>