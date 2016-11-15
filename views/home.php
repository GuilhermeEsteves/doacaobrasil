<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-- 8 -->
<html lang="pt" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<?php 
	include "includes/header.php"
?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<!--<img src="assets/admin/layout4/img/logo-light.png" alt="logo" class="logo-default"/> -->
			</a>
			<!--<div class="menu-toggler sidebar-toggler">
			</div>-->
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BFOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN TODO DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user dropdown-dark">
						<form class="form-inline margin-bottom-40" role="form">
							<ul class="nav navbar-nav pull-right">
							<!-- END TODO DROPDOWN -->
							<!-- BEGIN USER LOGIN DROPDOWN -->
							<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
								<li class="dropdown dropdown-user">
									<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
										<img alt="" class="img-circle" src="../content/img/balao.jpg"/>
										<span class="username username-hide-on-mobile">
										Conversas</span>									
									</a>
								</li>
								<li class="dropdown dropdown-user">
									<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
										<?php
											echo '<img alt="" class="img-circle" src="../content/img/users/'.$_SESSION["usuario"]["id"].'.jpg"/>';
										?>
										<span class="username username-hide-on-mobile">
											<?php
													echo $_SESSION["usuario"]['nome'] . " - " .$_SESSION["usuario"]['descricao'];
											?>
										</span>
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-default">
										<li>
											<a href="javascript:void(0);">
											<i class="icon-lock"></i> Configuração </a>
										</li>
										<li>
											<a href="javascript:void(0);" 
												onclick="window.location.href='/doacaobrasil'">
											<i class="icon-logout"></i> Sair </a>
										</li>
									</ul>
									
								</li>
								
								
							<!-- END USER LOGIN DROPDOWN -->
							</ul>
							
						</form>
						
						
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" style="margin-left: 0px;">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<!--<div class="page-title">
					
				</div>-->
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<div class="btn-group btn-theme-panel">
						<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>THEME</h3>
									<ul class="theme-colors">
										<li class="theme-color theme-color-default" data-theme="default">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Dark Header</span>
										</li>
										<li class="theme-color theme-color-light active" data-theme="light">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Light Header</span>
										</li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 seperator">
									<h3>LAYOUT</h3>
									<ul class="theme-settings">
										<li>
											 Theme Style
											<select class="layout-style-option form-control input-small input-sm">
												<option value="square">Square corners</option>
												<option value="rounded" selected="selected">Rounded corners</option>
											</select>
										</li>
										<li>
											 Layout
											<select class="layout-option form-control input-small input-sm">
												<option value="fluid" selected="selected">Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</li>
										<li>
											 Header
											<select class="page-header-option form-control input-small input-sm">
												<option value="fixed" selected="selected">Fixed</option>
												<option value="default">Default</option>
											</select>
										</li>
										<li>
											 Top Dropdowns
											<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
												<option value="light">Light</option>
												<option value="dark" selected="selected">Dark</option>
											</select>
										</li>
										<li>
											 Sidebar Mode
											<select class="sidebar-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
										<li>
											 Sidebar Menu
											<select class="sidebar-menu-option form-control input-small input-sm">
												<option value="accordion" selected="selected">Accordion</option>
												<option value="hover">Hover</option>
											</select>
										</li>
										<li>
											 Sidebar Position
											<select class="sidebar-pos-option form-control input-small input-sm">
												<option value="left" selected="selected">Left</option>
												<option value="right">Right</option>
											</select>
										</li>
										<li>
											 Footer
											<select class="page-footer-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			
			<div class="row">
				<div class="row">
					<!-------------------------------------------------------------------------------------->
					<div class="portlet box green col-md-4 col-sm-12">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-comments"></i>Ultimas cinco doações
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable">
								<table class="table table-striped table-hover" >
								<thead>
								<tr>
									<th>DATA</th>
									<th>Quantidade de Itens</th>
									<th>Detalhes</th>										
								</tr>
								</thead>
								<tbody>
									<tr>
										<td>06/09/2016</td>
										<td align="center">31</td>
										<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhes">Detalhes</button></td>										
									</tr>
									<tr>
										<td>06/09/2016</td>
										<td align="center">31</td>
										<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhes">Detalhes</button></td>										
									</tr>
									<tr>
										<td>06/09/2016</td>
										<td align="center">31</td>
										<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhes">Detalhes</button></td>										
									</tr>
									<tr>
										<td>06/09/2016</td>
										<td align="center">31</td>
										<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhes">Detalhes</button></td>										
									</tr>
									<tr>
										<td>06/09/2016</td>
										<td align="center">31</td>
										<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhes">Detalhes</button></td>										
									</tr>
								</tbody>
								</table>
							</div>
							<div align="center">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNovaDoacao">Nova Doação</button>
								<a href="historicoDoacao.html" class="btn btn-success">Histórico de Atividade</a>
								<!--modal-->
								<div class="modal fade" id="modalNovaDoacao">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&imes;</span></button>
												<h2 class="modal-title"><b>Gostaria de escolher pra quem doar?</b></h2>
											</div>
											<div class="modal-body" >
												
													<h4>Gostaria de escolher para quem doar???</br>É rapido, é só escolher e clicar. ^^</h4>
													</br>
													<a href="escolherEspecifico.html"><button type="button" class="btn btn-success">Escolha para quem doar AQUI.</button></a>
											</div>
											<div class="modal-body">
													
													<h4>Não quer escolher???</br>Deixe que o sistema escolha por você. ^^</h4>
													</br>
													<a href="novaDoacao.html"><button type="button" class="btn btn-success">Escolhemos por você.</button></a>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-------------------------------------------------------------------------------------->
					<div class="col-md-4 col-sm-12">
						<!-- BEGIN PORTLET-->
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption caption-md">
									<i class="icon-bar-chart theme-font-color hide"></i>
									<span class="caption-subject theme-font-color bold uppercase">Ranking Doação</span>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-scrollable table-scrollable-borderless">
									<table class="table table-hover table-light">
									<thead>
									<tr class="uppercase">
										<th colspan="2">
											Doador
										</th>
										<th>
											Quantidade
										</th>
										<th>
											Alguma coisa
										</th>
									</tr>
									</thead>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar4.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Brain</a>
										</td>
										<td>
											800
										</td>
										<td>
											45
										</td>
									</tr>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar5.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Nick</a>
										</td>
										<td>
											700
										</td>
										<td>
											12
										</td>
									</tr>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar6.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Tim</a>
										</td>
										<td>
											600
										</td>
										<td>
											450
										</td>
									</tr>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar7.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Tom</a>
										</td>
										<td>
											500
										</td>
										<td>
											50
										</td>
									</tr>
									</table>
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
					</div>

					<div class="col-md-4 col-sm-12">
						<!-- BEGIN PORTLET-->
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption caption-md">
									<i class="icon-bar-chart theme-font-color hide"></i>
									<span class="caption-subject theme-font-color bold uppercase">Ranking Voluntário</span>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-scrollable table-scrollable-borderless">
									<table class="table table-hover table-light">
									<thead>
									<tr class="uppercase">
										<th colspan="2">
											Voluntário
										</th>
										<th>
											Quantidade
										</th>
										<th>
											Alguma coisa
										</th>
									</tr>
									</thead>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar4.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Brain</a>
										</td>
										<td>
											800
										</td>
										<td>
											45
										</td>
									</tr>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar5.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Nick</a>
										</td>
										<td>
											700
										</td>
										<td>
											12
										</td>
									</tr>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar6.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Tim</a>
										</td>
										<td>
											600
										</td>
										<td>
											450
										</td>
									</tr>
									<tr>
										<td class="fit">
											<img class="user-pic" src="assets/admin/layout3/img/avatar7.jpg">
										</td>
										<td>
											<a href="javascript:;" class="primary-link">Tom</a>
										</td>
										<td>
											500
										</td>
										<td>
											50
										</td>
									</tr>
									</table>
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
					</div>
					<div class="portlet box green col-md-4 col-sm-12">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-comments"></i>Ultimas cinco Atividades
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable">
								<table class="table table-striped table-hover" >
								<thead>
								<tr>
									<th>
											DATA
									</th>
									<th>
											Quantidade de Itens
									</th>
									<th>
											Detalhes
									</th>										
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
											06/09/2016
									</td>
									<td align="center">
											31
									</td>
									<td>
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhesAtv">Detalhes</button>
									</td>										
								</tr>
								<tr>
									<td>
											06/09/2016
									</td>
									<td align="center">
											10
									</td>
									<td>
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhesAtv">Detalhes</button>
									</td>										
								</tr>
								<tr>
									<td>
											06/09/2016
									</td>
									<td align="center">
											50
									</td>
									<td>
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhesAtv">Detalhes</button>
									</td>										
								</tr>
								<tr>
									<td>
											06/09/2016
									</td>
									<td align="center">
											8
									</td>
									<td>
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetalhesAtv">Detalhes</button>
									</td>										
								</tr>
								</tbody>
								</table>

							</div>
							<div align="center">
								<a href="novaAtividade.html" class="btn btn-success">Nova Atividade</a>
								<a href="historicoAtvVoluntario.html" class="btn btn-success">Histórico de Atividade</a>
							</div>
							
						</div>
					</div>
				</div>			
			</div>			
			<!-- END PAGE CONTENT INNER -->
		</div>
		
	</div>
	<!-- END CONTENT -->
</div>
<!-- END HEADER -->
<div class="page-footer">
		<div class="row" style="background-color:white; box-shadow: 1px 1px 10px 10px #888888">
			<div class="col-md-2 col-sm-2">
				<div class="login-options">
					<ul class="social-icons"><br>
						<li>
							<a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
						</li>
						<li>
							<a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
						</li>
						<li>
							<a class="social-icon-color instagram" data-original-title="Goole Plus" href="javascript:;"></a>
						</li>
						<li>
							<a class="social-icon-color youtube" data-original-title="Linkedin" href="javascript:;"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<b>Contato:</b><br/>
				<b>Tel:</b>(16) 9817-6016 </br>
				<b>Email:</b> contato@doacaobrasil.com.br
			</div>
			<div class="col-md-3 col-sm-3">
				<b>Parceiros:</b><br/>
				<img src="logo-itau.png" style="width: 15%;margin-right:5px;"/>
				<img src="logo-adidas.png" style="width: 15%;margin-right:5px;"/>
				<img src="logo-cs.png" style="width: 15%;"/>
			</div>
			<div class="col-md-2 col-sm-2">
				Faça uma Doação:<br/>
				<b>Ajude-nos a ajudar:</b><br/>
				Toda a doação vai para o sistema
			</div>
			<div class="col-md-2 col-sm-2">
				<img src="logo-paypal.png" style="width: 38%; cursor: pointer;"/>
			</div>
		</div>
		<div class="modal fade" id="modalDetalhes" >
			<div class="modal-dialog" style="width:70%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&imes;</span></button>
						<h2 class="modal-title"><b>Detalhe da Doação</b></h2>
					</div>
					<div class="modal-body" >
						<!-- GRID -->
						<div class="portlet box green" id="grid" >
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-search"></i>Escolha para quem doar
					</div>
				</div>
				<div class="portlet-body flip-scroll">
					<table class="table table-bordered table-striped table-condensed flip-content">
					<thead class="flip-content">
					<tr>
						<th width="20%">
							 Nome
						</th>
						<th class="">
							 Tipo
						</th>
						<th>
							 Item
						</th>
						<th class="">
							 Quantidade
						</th>
						<th class="">
							 Tamanho
						</th>
						<th class="">
							 Sexo
						</th>
						<th class="">
							 Observação
						</th>
						<th class="">
							 Data
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 Guilherme Esteves
						</td>
						<td>
							 Roupa
						</td>
						<td>
							 Camisa
						</td>
						<td class="">
							 5
						</td>						
						<td class="">
							 PP
						</td>
						<td class="">
							 M
						</td>
						<td class="">
							 
						</td>
						<td class="">
							 10/09/2015
						</td>
					</tr>
					
					</tbody>
					</table>
					
					 
				</div>

			</div>
		</div>
			<!-- 88888888888888 Modal Detalhes Atividade 8888888888888888888888 -->

					</div>
				</div>
			</div>	
		<div class="modal fade" id="modalDetalhesAtv">
			<div class="modal-dialog" style="width:70%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&imes;</span></button>
						<h2 class="modal-title"><b>Detalhe da Doação</b></h2>
					</div>
					<div class="modal-body" >
						<!-- GRID -->
						<div class="portlet box green" id="grid" >
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-search"></i>Atividade
					</div>
				</div>
				<div class="portlet-body flip-scroll">
					<table class="table table-bordered table-striped table-condensed flip-content">
					<thead class="flip-content">
					<tr>
						<th width="20%">
							 Nome
						</th>
						<th class="">
							 Estado
						</th>
						<th>
							 Cidade
						</th>
						<th class="">
							 Bairro	
						</th>
						<th class="">
							 Tipo
						</th>
						<th class="">
							 Item
						</th>
						<th class="">
							 Quantidade
						</th>
						<th class="">
							 Data
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 Guilherme Esteves
						</td>
						<td>
							 SP
						</td>
						<td>
							 Franca
						</td>
						<td class="">
							 Noemia
						</td>						
						<td class="">
							 Roupa
						</td>
						<td class="">
							 Camisa
						</td>
						<td class="">
							 5
						</td>
						<td class="">
							 10/09/2015
						</td>
					</tr>
					
					</tbody>
					</table>
					
					 
				</div>

			</div>
	</div>
	</div>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>

 <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='assets/global/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

 <!-- BEGIN RevolutionSlider -->  
    <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    <script src="../../assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
 RevosliderInit.initRevoSlider();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>