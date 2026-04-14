<!--COMO PEGAR A COTAÇÃO ATUALIZADA DO DÓLAR NA BASE DE DADOS DO BANCO CENTRAL DO BRASIL?

1º Entrar no link: dadosabertos.bcb.gov.br ou entrar no site do Banco Central e pesquisar "Dados Abertos";
2º Clicar em "Dólar Comercial (venda e compra) cotações diárias";
3º Clicar na API de "Cotação do Dólar por período";
4º Clicar no link do serviço, ele irá abrir num gerador de URL;
5º Configurar dessa forma: Data final (dia atual); Data inicial (desde quando vc quer puxar essas cotações); Máximo (quantas cotações vc vai querer [1]); Ordenação (dataHoraCompra desc); Saída (json); Campos (Cotação de Compra);
6º Copiar a URL formada e colocar ela dentro de uma variável em aspas simples! E utilizar contra-barra (\) nas aspas simples que estão na URL;
7º Depois de criar as variaveis "inicio" e "fim", vc deve alterar as datas na URL por essas variáveis (lembrando, entre aspas simples e concatenando!);
-->

<pre>
    <?php 
        $inicio = date("m-d-Y", strtotime("-7 days")); // ele vai pegar a data do sistema (computador) a 7 dias atras

        $fim = date("m-d-Y"); // pega a data atual do sistema

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim  .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true); // por ser uma url no formato json, tem q colocar esse json_decode, o true transforma isso numa array e o false (ou vazio) transforma isso em objeto

        var_dump($dados);

        $cotação = $dados["value"]["0"]["cotacaoCompra"]; // colocar igualzinho esta no var_dump

        echo "A cotação foi $cotação";
    ?>
</pre>