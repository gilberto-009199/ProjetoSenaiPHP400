<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <title>Fale Conosco</title>
<?php include_once './head.php';?>
    </head>
    <body>
        <header>
            <div class="ItemCaixaHeader">
                <nav>
                    <div class="CaixaMenu" role="menu">
                        <div class="ItemMenu BordaDireita" role="menuitem"> Home</div>
                        <div class="ItemMenu BordaDireita" role="menuitem"> Notícias</div>
                        <div class="ItemMenu BordaDireita" role="menuitem"> Sobre</div>
                        <div class="ItemMenu BordaDireita" role="menuitem"> Promoções</div>
                        <div class="ItemMenu BordaDireita" role="menuitem"> Nossas Bancas</div>
                        <div class="ItemMenu" role="menuitem"> Fale Conosco</div>
                    </div>                    
                </nav>
            </div>
            <div class="ItemCaixaHeader">
                    <div class="Logo">
                        <img alt=" Logo do site" title="logo" height="32" width="32" src="img/logo2.png">
                       <p>BugBunny</p>
                    </div>
                </div>
        </header>
        <div role="banner">
            <script src="libs/Chart.js/Chart.js"></script>
            <canvas id="Grafico" height="300" width="1000">
                               
            </canvas>
            <script>
            var canvas = document.getElementById("Grafico");
            var myChart = new Chart(canvas, {
                type: 'line',
                data: {
                    labels:["janeiro","fevereiro","março","abril","maio","Junho","Julho","Agosto"],
                    datasets:[{
                            label:"Ultimos envios - 5 meses",
                            data:[12,24,13,9,10,16,7,17],
                            borderWidth:7,
                            borderColor:"#454df0",
                            backgroundColor:"transparent",
                    },{
                            label:"Atentimentos - 5 meses",
                            data:[12,10,13,8,11,10,2,15],
                            borderWidth:7,
                            borderColor:"#006D5C",
                            backgroundColor:"#00ffeb",
                    }]
                },
                options: {
                    title:{
                        display:true,
                        text:"Chamados"
                    }
                }
            });
            </script>
        </div>
        <div id="main" role="main">
            <div class="row">
                <div class="cold6 BordaDireita" style="float: left;">
                    <form name="frmTiket" method="POST">
                        <table>
                            <tr>
                                <td><label  class="Obrigatorio" for="txtNome">Nome:*</label></td>
                                <td> <input id="txtNome" type="text" name="txtNome" value="" required/> </td>
                            </tr>
                            <tr>
                                <td><label  for="txtTelefone">Telefone:</label></td>
                                <td> <input id="txtTelefone" type="text" name="txtTelefone" value="" /> </td>
                            </tr>
                            <tr>
                                <td> <label class="Obrigatorio" for="txtCelular"> Celular:*</label> </td>
                                <td> <input id="txtCelular" type="text" name="txtCelular" value="" required/> </td>
                            </tr>
                            <tr>
                                <td><label  class="Obrigatorio" for="txtEmail">E-mail:*</label></td>
                                <td> <input id="txtHomePage" type="text" name="txtHomePage" value="" required/> </td>
                            </tr>
                            <tr>
                                <td><label for="txtHomePage">Home Page:</label></td>
                                <td> <input id="txtHomePage" type="text" name="txtHomePage" value="" /> </td>
                            </tr>
                            <tr>
                                <td><label for="txtFcebook"> Link no Facebook:</label></td>
                                <td> <input id="txtFcebook" type="text" name="txtFacebook" value="" /> </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td><label for="areaCritica">Sugestão/Critica</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea id="areaCritica" name="ariaCritica" rows="4" cols="20">
                                                </textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </td>                               
                            </tr>
                            <tr>
                                <td><label for="txtProduto">Informações de Produto </label></td>
                                <td> <input id="txtProduto" type="text" name="txtProduto" value="" /> </td>
                            </tr>
                            <tr>
                                <td><label class="Obrigatorio" for="slcSexo">Sexo:*</label></td>
                                <td>
                                    <select id="slcSexo" name="slcSexo" required>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="Obrigatorio" for="slcProfissao">Profissão:*</label></td>
                                <td>
                                    <select id="slcProfissao" name="slcProfissao" required>
                                        <option value="cabeleireiro">Cabeleireiro</option>
                                        <option value="sapateiro">Sapateiro</option>
                                        <option value="vendedor">Vendedor</option>
                                        <option value="motoristacaminhao">Motorista de Caminhão</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input id="btnSubmit" type="submit" value="Enviar" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="cold3" style="float: left; padding-left: 20px;">
                    Tipos de Ticket
                </div>
            </div>            
        </div>
        <footer>
            
        </footer>
    </body>
</html>
