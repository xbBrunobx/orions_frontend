<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" ng-app>
    <head>
 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
            
        <link rel="stylesheet" type="text/css" media="all" href="CSS/cssOrions.css">
        <link rel="stylesheet" type="text/css" media="all" href="CSS/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="all" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="CSS/slider.css">
        <link rel="stylesheet" type="text/css" media="all" href="CSS/acordeon.css">
            
        <title> Orions </title>
    
    </head>
    <body>
        <!-- CABECALHO -->
        <div id="topo">
            <!-- Logotipo -->
            <div id="logo">
                <img src="img/logo_orions.png"/>
            </div>
                <!-- Botao menu responsivo -->
                <input type="checkbox" id="bt_menu"/>
                <label for="bt_menu">&#9776;</label>
            <!-- Menu -->    
            <div id="menu">
                   
                <nav class="menres">
                <ul>
                    <li>
                        <h5> <a id="at" href="index.php" class="men">HOME</a> </h5> 
                    </li>
                    <li>
                        <h5> <a id="in" href="quemsomos.php" class="men">QUEM SOMOS</a> </h5>
                    </li>
                </ul>
                </nav>   
                
            </div>
        </div>
        
        <!-- PARTE 1 DO SITE -->
        <div id="p1">
            <!-- TEXTO PRINCIPAL -->
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
        
            <!-- SLIDES -->
            <figure>
                <span id="trs1" class="trs prev"><img src="img/seta2.jpg"/></span>
                <span id="trs2" class="trs next"><img src="img/seta1.jpg"/></span>

		<div id="slider">
                    <a href="#" class="trs"><img id="sli" src="img/banner.jpg" alt="Legenda da imagem 1" /></a>
                    <a href="#" class="trs"><img id="sli" src="img/imagem2.jpg" alt="Legenda da imagem 2" /></a>		
		</div>

		<figcaption></figcaption>
            </figure>
            
        </div>
        <!-- EFEITO SANFONA 1 -->
        <div class="accordion-item">
                
            <input type="checkbox" name="accordion" id="accordion-1" />
                
            <div class="accordion-content">
                <h4>HOSPEDAGEM DE SITES</h4><br><br><br>
                <hr id="hrinv" size="4" width="88" color="#fcba00"/>
                    
                <img class="imghosp" src="img/hospedagem.jpg"/>
                        
                <p class="pa">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet risus rhoncus massa rhoncus sollicitudin id sed justo. Mauris sit amet tortor quis elit fringilla aliquet. Integer euismod tristique condimentum. Morbi sollicitudin sit amet dui sed pellentesque. Etiam bibendum ultrices lacus vitae laoreet. Fusce volutpat magna non vulputate aliquet. Sed vel mauris nisi. Sed enim tellus, viverra sit amet ante vel, lacinia elementum orci. Mauris fermentum aliquet tristique. Etiam efficitur sapien vitae purus fringilla posuere. Quisque commodo orci a velit viverra laoreet.</p>
                <p class="pa">Phasellus luctus malesuada pharetra. Donec sodales, sem id consequat dignissim, nibh arcu vulputate tortor, sed eleifend nisi est et arcu. Vivamus vulputate commodo rutrum. Quisque suscipit posuere hendrerit. Praesent vestibulum a sapien quis facilisis. Nam ut facilisis lectus. Praesent a dapibus nisl. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <label for="accordion-1"><img id="fechar" src="img/close_servico.png"></label>
            </div>
                        
        </div>
        <!-- Efeito Sanfona 2 -->
        <div class="accordion-item">
                
            <input type="checkbox" name="accordion" id="accordion-2" />
                
            <div class="accordion-content2">
                <h4>MARKETING DIGITAL</h4><br><br><br>
                <hr id="hrinv" size="4" width="88" color="#fcba00"/>
                    
                <img class="imghosp" src="img/marketing-digital.jpeg"/>
                        
                <p class="pa">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet risus rhoncus massa rhoncus sollicitudin id sed justo. Mauris sit amet tortor quis elit fringilla aliquet. Integer euismod tristique condimentum. Morbi sollicitudin sit amet dui sed pellentesque. Etiam bibendum ultrices lacus vitae laoreet. Fusce volutpat magna non vulputate aliquet. Sed vel mauris nisi. Sed enim tellus, viverra sit amet ante vel, lacinia elementum orci. Mauris fermentum aliquet tristique. Etiam efficitur sapien vitae purus fringilla posuere. Quisque commodo orci a velit viverra laoreet.</p>
                <p class="pa">Phasellus luctus malesuada pharetra. Donec sodales, sem id consequat dignissim, nibh arcu vulputate tortor, sed eleifend nisi est et arcu. Vivamus vulputate commodo rutrum. Quisque suscipit posuere hendrerit. Praesent vestibulum a sapien quis facilisis. Nam ut facilisis lectus. Praesent a dapibus nisl. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <label for="accordion-2"><img id="fechar" src="img/close_servico.png"></label>
            </div>
                      
        </div>
        <!-- Efeito Sanfona 3 -->
        <div class="accordion-item">
                
            <input type="checkbox" name="accordion" id="accordion-3" />
                
            <div class="accordion-content3">
                <h4>CRIAÇÃO DE SITES</h4><br><br><br>
                <hr id="hrinv" size="4" width="88" color="#fcba00"/>
                    
                <img class="imghosp" src="img/criacaodesites.png"/>
                        
                <p class="pa">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet risus rhoncus massa rhoncus sollicitudin id sed justo. Mauris sit amet tortor quis elit fringilla aliquet. Integer euismod tristique condimentum. Morbi sollicitudin sit amet dui sed pellentesque. Etiam bibendum ultrices lacus vitae laoreet. Fusce volutpat magna non vulputate aliquet. Sed vel mauris nisi. Sed enim tellus, viverra sit amet ante vel, lacinia elementum orci. Mauris fermentum aliquet tristique. Etiam efficitur sapien vitae purus fringilla posuere. Quisque commodo orci a velit viverra laoreet.</p>
                <p class="pa">Phasellus luctus malesuada pharetra. Donec sodales, sem id consequat dignissim, nibh arcu vulputate tortor, sed eleifend nisi est et arcu. Vivamus vulputate commodo rutrum. Quisque suscipit posuere hendrerit. Praesent vestibulum a sapien quis facilisis. Nam ut facilisis lectus. Praesent a dapibus nisl. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <label for="accordion-3"><img id="fechar" src="img/close_servico.png"></label>
            </div>
                      
        </div>
        <!-- Efeito Sanfona 4 -->
        <div class="accordion-item">
                
            <input type="checkbox" name="accordion" id="accordion-4" />
                
            <div class="accordion-content4">
                <h4>IDENTIDADE VISUAL</h4><br><br><br>
                <hr id="hrinv" size="4" width="88" color="#fcba00"/>
                    
                <img class="imghosp" src="img/identidadevisual.jpeg"/>
                        
                <p class="pa">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet risus rhoncus massa rhoncus sollicitudin id sed justo. Mauris sit amet tortor quis elit fringilla aliquet. Integer euismod tristique condimentum. Morbi sollicitudin sit amet dui sed pellentesque. Etiam bibendum ultrices lacus vitae laoreet. Fusce volutpat magna non vulputate aliquet. Sed vel mauris nisi. Sed enim tellus, viverra sit amet ante vel, lacinia elementum orci. Mauris fermentum aliquet tristique. Etiam efficitur sapien vitae purus fringilla posuere. Quisque commodo orci a velit viverra laoreet.</p>
                <p class="pa">Phasellus luctus malesuada pharetra. Donec sodales, sem id consequat dignissim, nibh arcu vulputate tortor, sed eleifend nisi est et arcu. Vivamus vulputate commodo rutrum. Quisque suscipit posuere hendrerit. Praesent vestibulum a sapien quis facilisis. Nam ut facilisis lectus. Praesent a dapibus nisl. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <label for="accordion-4"><img id="fechar" src="img/close_servico.png"></label>
            </div>
                      
        </div>
        
        <!-- PARTE 2 DO SITE -->
        <div id="p2">
            <center><h2>SERVIÇOS</h2></center>
            <center><hr id="hrs" whidth="88" size="4" color="#FCBA00"/></center>
            <!-- SERVIÇO 1 -->
            <div id="ser1">
                <center><img  class="icon" src="img/icon1.png"</center>
                
                <center> <b><h3>Hospedagem de Sites</h3></b> </center>
                <center><p id="pser1">Lorem ipsum dolor sit</p> </center>
                <center><p id="pser1">amet,consectetur </p> </center>
                <center><p id="pser1">adipiscing elit</p> </center>
                <center><label for="accordion-1"><img  class="plus" src="img/icon5.png"></label> </center>
                                    
            </div>
            <!-- SERVIÇO 2 -->    
            <div id="ser2">
                <center><img class="icon" src="img/icon2.png"</center>
                
                <center> <b><h3>Marketing Digital</h3></b> </center>
                <center><p>Lorem ipsum dolor sit</p> </center>
                <center><p>amet,consectetur </p> </center>
                <center><p>adipiscing elit</p> </center>
            
                <center><label for="accordion-2"><img  class="plus" src="img/icon5.png"></label></center>
                           
            </div>
            <!-- SERVIÇO 3-->
            <div id="ser3">
                <center><img class="icon" src="img/icon3.png"</center>
                
                <center> <b><h3>Criação de Sites</h3></b> </center>
                <center><p>Lorem ipsum dolor sit</p> </center>
                <center><p>amet,consectetur </p> </center>
                <center><p>adipiscing elit</p> </center>
                <center><label for="accordion-3"><img  class="plus" src="img/icon5.png"></label> </center>
            </div>
            <!-- SERVIÇO 4-->
            <div id="ser4">
                <center><img class="icon" src="img/icon4.png"</center>
                
                <center> <b><h3>Identidade Visual</h3></b> </center>
                <center><p>Lorem ipsum dolor sit</p> </center>
                <center><p>amet,consectetur </p> </center>
                <center><p>adipiscing elit</p> </center>
                <center><label for="accordion-4"><img  class="plus" src="img/icon5.png"> </label></center>
            </div>
        </div>
        <!-- PARTE 3 DO SITE -->
        <div id="p3">
            <h2>NEWSLETTER</h2><br>
            <hr id="hrs" whidth="88" size="4" color="#FCBA00"/>
            
            <p class="news1">Assine nosso</p>
            <p class="news1">newsletter e receba</p>
            <p class="news1">todas as novidades do</p>
            <p class="news1">time <span>Orions</span>!</p>
            <br>
            <p class="news2">Lorem ipsum dolor sit amet, consectetur</p>
            <p class="news2">adipiscing elit Integer pharetra laoret</p>
            <p class="news2">mauris in porttitor. Nullam scelerisque</p>
            <p class="news2">interdum massa non volutpat. Nam vei</p>
            <p class="news2">dapibus ex.</p>
            
            <!-- FORMULARIO -->
            <form>
                <input class="inputstxt" type="text" placeholder="Nome" /><br>
                <input class="inputstxt" type="text" placeholder="Email" /><br>
                <input class="inputstel" type="text" placeholder="Telefone" />
                <input id="button" type="button" text="Enviar" value="ENVIAR" />
            </form>
            
        </div>
        <!-- RODAPÉ -->
        <div id="roda">
            <a href="#"><img id="stopo" src="img/back_to_top.png"></a>
            <center><img id="logoroda" src="img/logo_orions_rodape.png"/></center>
            <center><h3>© 2017</h3></center>
            <center><a href="https://www.facebook.com/Orionsguara/"><img class="rs" src="img/iconfb.png"/></a><a href="https://www.instagram.com/?hl=pt-br"><img class="rs" src="img/iconinsta.png"/></a></center>
        </div>
        <?php
        // put your code here
        ?>
        
        <!-- SCRIPTS -->
        <script src="JS/angular.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/SLIDES.js"></script>
    </body>
</html>
