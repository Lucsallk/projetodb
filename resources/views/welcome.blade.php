<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrabalhoBD</title>
</head>

<style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<h2>Tabela de Produtos</h2>


<div class="row">
  <div class="column">
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
      </tr>
      <tr>
        <td>0001</td>
        <td>Macarrão</td>
        <td>Alimento</td>
      </tr>
      <tr>
        <td>0002</td>
        <td>Tomate</td>
        <td>Alimento</td>
      </tr>
      <tr>
        <td>0101</td>
        <td>Chave Estrela</td>
        <td>Ferramenta</td>
      </tr>
      <tr>
        <td>0102</td>
        <td>Martelo</td>
        <td>Ferramenta</td>
      </tr>
      <tr>
        <td>0201</td>
        <td>Pasta de Dentes</td>
        <td>Higiene Pessoal</td>
      </tr>
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Quantidade de Itens</th>
        <th>AVG Vendas</th>
      </tr>
      <tr>
        <td>0001</td>
        <td>Macarrão</td>
        <td>Alimento</td>
        <td>x</td>
        <td>y</td>
      </tr>
      <tr>
        <td>0002</td>
        <td>Tomate</td>
        <td>Alimento</td>
        <td>x</td>
        <td>y</td>
      </tr>
      <tr>
        <td>0101</td>
        <td>Chave Estrela</td>
        <td>Ferramenta</td>
        <td>x</td>
        <td>y</td>
      </tr>
      <tr>
        <td>0102</td>
        <td>Martelo</td>
        <td>Ferramenta</td>
        <td>x</td>
        <td>y</td>
      </tr>
      <tr>
        <td>0201</td>
        <td>Pasta de Dentes</td>
        <td>Higiene Pessoal</td>
        <td>x</td>
        <td>y</td>
      </tr>
    </table>
  </div>
</div>

<script src=" { { asset('site/jquery.js') } }"></script>
</body>
</html>