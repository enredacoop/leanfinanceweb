
	<!-- Start Header 
	    ============================================= -->
	<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
		<div class="container">
			<div class="c-content-title-1 c-opt-1" style="visibility: visible; animation-name: fadeInUp; opacity: 1;">
					<h1 class="c-center c-font-bold"> Herramienta de valoración Enisa </h1>
					<p class="c-font-center">Rellena la tabla con los datos que aparecen en tus cuentas anuales.</p>
					<div class="c-line-center c-theme-bg"></div>
				</div>
		</div>
	</div>
	<!-- End Header -->
	

	<!-- Start Form
  ============================================= -->
  <form action="enviar/" onsubmit="evalueForm()" method="POST">
	<div class="c-content-box c-size-md">
		<div class="container">
			<div class="row c-margin-t-10 c-margin-b-10">
				<div class="col-md-12">
					<div class="c-content-title-1 c-title-pricing-1">
						<h3 class="c-font-uppercase c-font-bold">Obligatorio rellenar dos años consecutivos</h3>
						<p>Mientras más datos introduzcas, más precisa será la valoración obtenida.
						<div class="c-row c-try">
							<!--button class="btn btn-md c-btn-square c-btn-red c-btn-uppercase c-btn-bold"></button-->
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="c-content-pricing-1 c-opt-1">

					<table role="table" class="responsive herramienta_valoracion">
					  <thead role="rowgroup">
					    <tr role="row">
					    </tr>
					  </thead>
					  <tbody role="rowgroup">

					  	<!-- Año -->
					    <tr role="row">
					      <td role="cell" class="title">AÑO</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1" name="year_1" placeholder="" class="form-control c-square c-theme input-lg" required>
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2" name="year_2" placeholder="" class="form-control c-square c-theme input-lg" required>
					    	</td>
					    </tr>





					    <!-- Bloque A -->
					    <tr role="row">
					      <td role="cell">Importe neto de la cifra de negocios</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a0" name="year_1_a0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a0" name="year_2_a0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Variación de existencias de productos terminados y en curso de fabricación</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a1" name="year_1_a1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a1" name="year_2_a1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Trabajos realizados por la empresa para su activo</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a2" name="year_1_a2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a2" name="year_2_a2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otros ingresos de explotación</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a3" name="year_1_a3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a3" name="year_2_a3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Aprovisionamientos</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a4" name="year_1_a4" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a4" name="year_2_a4" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Gastos de personal</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a5" name="year_1_a5" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a5" name="year_2_a5" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otros gastos de explotación</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a6" name="year_1_a6" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a6" name="year_2_a6" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Amortización del inmovilizado</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a7" name="year_1_a7" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a7" name="year_2_a7" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deterioro y rtdo por enajenacion del inmovilizado</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a8" name="year_1_a8" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a8" name="year_2_a8" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otros resultados</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_a9" name="year_1_a9" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_a9" name="year_2_a9" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row" class="result">
					    	<td role="cell" class="title">A) Resultado de explotación</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_ra" name="year_1_ra" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_ra" name="year_2_ra" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>





					    <!-- Bloque B -->
					    <tr role="row">
					      <td role="cell">Ingresos financieros</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_b0" name="year_1_b0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_b0" name="year_2_b0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Gastos financieros</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_b1" name="year_1_b1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_b1" name="year_2_b1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Diferencias de cambio</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_b2" name="year_1_b2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_b2" name="year_2_b2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row" class="result">
					    	<td role="cell" class="title">B) Resultado financiero</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_rb" name="year_1_rb" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_rb" name="year_2_rb" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>





					    <!-- Bloque C -->
					    <tr role="row">
					      <td role="cell">Impuesto sobre beneficios</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_c0" name="year_1_c0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_c0" name="year_2_c0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row" class="result">
					    	<td role="cell" class="title">C) Resultado del ejercicio</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_rc" name="year_1_rc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_rc" name="year_2_rc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>

					    <tr role="row" class="separator">
					    	<td role="cell"></td>
					      <td role="cell"></td>
					      <td role="cell"></td>
					    </tr>
					    <tr role="row" class="separator">
					    	<td role="cell"></td>
					      <td role="cell"></td>
					      <td role="cell"></td>
					    </tr>





					    <!-- ACTIVO NO CORRIENTE -->
					    <tr role="row" class="result">
					    	<td role="cell" class="title">A) ACTIVO NO CORRIENTE</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_r_anc" name="year_1_r_anc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_r_anc" name="year_2_r_anc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Inmovilizado intangible</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_anc_0" name="year_1_anc_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_anc_0" name="year_2_anc_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Inmovilizado material</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_anc_1" name="year_1_anc_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_anc_1" name="year_2_anc_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Inversiones inmobiliarias</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_anc_2" name="year_1_anc_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_anc_2" name="year_2_anc_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Inversiones en empresas del grupo y asociadas a L/P</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_anc_3" name="year_1_anc_3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_anc_3" name="year_2_anc_3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Inversiones financieras L/P</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_anc_4" name="year_1_anc_4" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_anc_4" name="year_2_anc_4" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Activos por impuesto diferido</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_anc_5" name="year_1_anc_5" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_anc_5" name="year_2_anc_5" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deudores comerciales no corrientes</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_anc_6" name="year_1_anc_6" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_anc_6" name="year_2_anc_6" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>





					    <!-- ACTIVO CORRIENTE -->
					    <tr role="row" class="result">
					    	<td role="cell" class="title">B) ACTIVO CORRIENTE</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_r_ac" name="year_1_r_ac" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_r_ac" name="year_2_r_ac" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Existencias</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_ac_0" name="year_1_ac_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_ac_0" name="year_2_ac_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Clientes</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_ac_1" name="year_1_ac_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_ac_1" name="year_2_ac_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otros deudores</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_ac_2" name="year_1_ac_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_ac_2" name="year_2_ac_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Inversiones en empresas del grupo a C/P</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_ac_3" name="year_1_ac_3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_ac_3" name="year_2_ac_3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Inversiones financieras C/P</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_ac_4" name="year_1_ac_4" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_ac_4" name="year_2_ac_4" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Periodificaciones a corto plazo</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_ac_5" name="year_1_ac_5" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_ac_5" name="year_2_ac_5" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Efectivo</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_ac_6" name="year_1_ac_6" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_ac_6" name="year_2_ac_6" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row" class="result">
					    	<td role="cell" class="title">TOTAL ACTIVO</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="total_1_a" name="total_1_a" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="total_2_a" name="total_2_a" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>






					    <tr role="row" class="separator">
					    	<td role="cell"></td>
					      <td role="cell"></td>
					      <td role="cell"></td>
					    </tr>
					    <tr role="row" class="separator">
					    	<td role="cell"></td>
					      <td role="cell"></td>
					      <td role="cell"></td>
					    </tr>






					    <!-- PATRIMONIO NETO -->
					    <tr role="row" class="result">
					    	<td role="cell" class="title">A) PATRIMONIO NETO</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_r_pn" name="year_1_r_pn" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_r_pn" name="year_2_r_pn" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Capital</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pn_0" name="year_1_pn_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pn_0" name="year_2_pn_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Prima de emisión</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pn_1" name="year_1_pn_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pn_1" name="year_2_pn_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Reservas</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pn_2" name="year_1_pn_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pn_2" name="year_2_pn_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Resultado de ejercicios anteriores</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pn_3" name="year_1_pn_3" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pn_3" name="year_2_pn_3" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otras aportaciones de socio</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pn_4" name="year_1_pn_4" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pn_4" name="year_2_pn_4" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Resultado del ejercicio</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pn_5" name="year_1_pn_5" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pn_5" name="year_2_pn_5" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>





					    <!-- PASIVO NO CORRIENTE -->
					    <tr role="row" class="result">
					    	<td role="cell" class="title">B) PASIVO NO CORRIENTE</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_r_pnc" name="year_1_r_pnc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_r_pnc" name="year_2_r_pnc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Provisiones a L/P</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pnc_0" name="year_1_pnc_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pnc_0" name="year_2_pnc_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deudas L/P con entidades de crédito</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pnc_1" name="year_1_pnc_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pnc_1" name="year_2_pnc_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deudas L/p con acreedores por arrendamiento financiero</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pnc_2" name="year_1_pnc_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pnc_2" name="year_2_pnc_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otras deudas a L/P</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pnc_3" name="year_1_pnc_3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pnc_3" name="year_2_pnc_3" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deudas con empresas del grupo y asociadas a L/P</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pnc_4" name="year_1_pnc_4" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pnc_4" name="year_2_pnc_4" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Acreedores comerciales no corrientes</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pnc_5" name="year_1_pnc_5" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pnc_5" name="year_2_pnc_5" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>






					   	<!-- PASIVO CORRIENTE -->
					    <tr role="row" class="result">
					    	<td role="cell" class="title">C) PASIVO CORRIENTE</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_1_r_pc" name="year_1_r_pc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="year_2_r_pc" name="year_2_r_pc" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Provisiones a C/P</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pc_0" name="year_1_pc_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_0" name="year_2_pc_0" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deudas C/P con entidades de crédito</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pc_1" name="year_1_pc_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_1" name="year_2_pc_1" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deudas C/P con acreedores por arrendamiento financiero</td>
					      <td role="cell" class="">
					      	<input type="number" id="year_1_pc_2" name="year_1_pc_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_2" name="year_2_pc_2" class="form-control c-square c-theme input-lg" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otras deudas a C/P</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pc_3" name="year_1_pc_3" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_3" name="year_2_pc_3" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Deudas con empresas del grupo y asociados a C/P</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pc_4" name="year_1_pc_4" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_4" name="year_2_pc_4" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Proveedores</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pc_5" name="year_1_pc_5" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_5" name="year_2_pc_5" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Acreedores</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pc_6" name="year_1_pc_6" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_6" name="year_2_pc_6" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row">
					      <td role="cell">Otros acreedores</td>
					      <td role="cell" class="">
									<input type="number" id="year_1_pc_7" name="year_1_pc_7" class="form-control c-square c-theme" step="any">
					    	</td>
					      <td role="cell">
					      	<input type="number" id="year_2_pc_7" name="year_2_pc_7" class="form-control c-square c-theme" step="any">
					    	</td>
					    </tr>
					    <tr role="row" class="result">
					    	<td role="cell" class="title">TOTAL PASIVO</td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="total_1_p" name="total_1_p" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					      <td role="cell">
					      	<div class="input-group c-square">
					      		<input type="number" id="total_2_p" name="total_2_p" class="form-control c-square c-theme input-lg" readonly aria-describedby="basic-addon2" step="any">
									  <span class="input-group-addon" id="basic-addon2">€</span>
									</div>
					      </td>
					    </tr>





					    <tr role="row" class="separator">
					    	<td role="cell"></td>
					      <td role="cell"></td>
					      <td role="cell"></td>
					    </tr>
					    <tr role="row" class="separator">
					    	<td role="cell"></td>
					      <td role="cell"></td>
					      <td role="cell"></td>
					    </tr>


					  </tbody>
					</table>

					<div class="row">
						<div class="col-sm-12 col-md-8">
							<div class="form-group">
              <input type="text" id="form-name" name="form-name" placeholder="Escribe tu nombre" class="form-control c-square c-theme input-lg" required>
            </div>
          </div>
						<div class="col-sm-12 col-md-8">
							<div class="form-group">
              <input type="email" id="form-email" name="form-email" placeholder="Escribe tu email" class="form-control c-square c-theme input-lg" required>
            </div>
          </div>
						<div class="col-sm-12 col-md-8">
							<div class="form-group">
              <input type="text" id="form-phone" name="form-phone" placeholder="Escribe tu teléfono" class="form-control c-square c-theme input-lg" required>
            </div>
          </div>

						<div class="col-sm-12 col-md-8">
						<button type="submit" class="btn btn-lg btn-primary c-btn-uppercase c-btn-square c-btn-bold margin-mobile">Obtener valoración</button>
					</div>

				</div>
			</div>
		</div>
	</div>
	</form>
	<!-- End Form
  ============================================= -->
