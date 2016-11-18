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
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="UTF-8">
<?php 
	include "includes/header.php";
	session_start();
?>
</head>
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
			<!--<img src="assets/admin/layout4/img/logo-light.png" alt="logo" class="logo-default"/>-->
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
			<!-- BEGIN HEADER SEARCH BOX -->
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
											<?php
											echo '<img alt="" class="img-circle" src="../content/img/users/'.$_SESSION["usuario"]["id"].'.jpg"/>';
										?>
										<span class="username username-hide-on-mobile">
											<?php
													echo $_SESSION["usuario"]['nome'] . " - " .$_SESSION["usuario"]['descricao'];
											?>
										</span>
										</a>
										<ul class="dropdown-menu dropdown-menu-default">
											<li>
												<a href="extra_lock.html">
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
			<div class="col-sm-4 "></div>
				<div class="form-group col-sm-4 portlet light" id="filtro">
					<label><H1><b>Estádo:</b></H1></label>
					<select id="ddlEstado" class="form-control">
						<option value="">Selecione um estado</option>
						<?php 
							require('../repository/baseRepository.php');
							$result = selectQuery("select * from tb_estados");
							if($result){
								while ($row = $result->fetch_array()){
									echo '<option value="'.$row["id"].'">'.$row["uf"].'</option>';
								}
							}
						?>
					</select>
					<label><H1><b>Cidade:</b></H1></label>
					<select id="ddlCidade" class="form-control">
						<option value="">Selecione uma cidade</option>
					</select>
					<br>
					<div align="center">
					<button type="button" class="btn btn-success" onclick="escondeFiltro()">Buscar</button>
						
					</div>
				</div>			
			</div>
			<div class="portlet box green" id="grid" style="display: block">
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
							 <i class="fa fa-search"></i> 
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
							 <button type="button" class="btn btn-success fa fa-plus " > info</button>
						</td>
						
					</tr>
					<tr>
						<td>
							 Luan Vadia
						</td>
						<td>
							 SP
						</td>
						<td>
							 Patrocionio Paulista
						</td>
						<td class="">
							 Divertilandia
						</td>
						<td class="">	
							 Roupa
						</td>
						<td class="">
							 <button type="button" class="btn btn-success fa fa-plus " > info</button>
						</td>
						
					</tr>
					<tr>
						<td>
							 Rogerio Capivara
						</td>
						<td>
							 MG
						</td>
						<td>
							 Itau de Minas
						</td>
						<td class="">
							 Cracolandia
						</td>
						<td class="">	
							 Roupa
						</td>
						<td class="">
							 <button type="button" class="btn btn-success fa fa-plus " > info</button>
						</td>
						
					</tr>
					
					</tbody>
					</table>
					<div align="center">
						<button type="button" class="btn btn-success" onclick="escondeGrid()">Voltar</button>
					</div>
					 
				</div>
			</div>
			<div class="" align="center" >
				<a href="/doacaobrasil/controllers/authenticationController.php" class="btn btn-lg green">Voltar para pagina inicial </a>
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
				<img src="../content/img/logo-itau.png" style="width: 15%;margin-right:5px;"/>
				<img src="../content/img/logo-adidas.png" style="width: 15%;margin-right:5px;"/>
				<img src="../content/img/logo-cs.png" style="width: 15%;"/>
			</div>
			<div class="col-md-2 col-sm-2">
				Faça uma Doação:<br/>
				<b>Ajude-nos a ajudar:</b><br/>
				Toda a doação vai para o sistema
			</div>
			<div class="col-md-2 col-sm-2">
				<img src="../content/img/logo-paypal.png" style="width: 38%; cursor: pointer;"/>
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


<script>
function escondeFiltro(){
	document.getElementById("filtro").style.display = "none";
	document.getElementById("grid").style.display = "block";
}
function escondeGrid(){
	document.getElementById("filtro").style.display = "block";
	document.getElementById("grid").style.display = "none";
}
window.onload = function(){
	document.getElementById("grid").style.display = "none";
}
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
 RevosliderInit.initRevoSlider();
});

	$('#ddlEstado').change(function(){
		if($(this).val() == ""){
			$('#ddlCidade').html("<option>Selecione uma cidade</option>");
			return;
		}
		$('#ddlCidade').html("<option>Carregando...</option>").prop('disabled',true);
		$.get('/doacaobrasil/controllers/filtraCidadeEstado.php',{UF: $(this).val()})
			.success(function(data){
				$('#ddlCidade').html(data).prop('disabled',false);
			}).error(function(){
				alert('Falha ao buscar cidades');
			});
	});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>