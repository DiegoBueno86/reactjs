<!DOCTYPE html>
<html lang="en">
<head>
	<title>@tucasitadecambio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/1.jpeg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/react.min.js"></script>
    <script src="js/react-dom.min.js"></script>
    <script src="js/browser.min.js"></script>
</head>
<body>
	<br />
	<div id="tucasitapp_div" ></div>
    <script type="text/babel">
		class Tucasitapp extends React.Component {
			constructor(props)
			{
				super(props);
				this.resettheapp = this.resettheapp.bind(this);
				this.validate_phonenumber = this.validate_phonenumber.bind(this);
				this.save_phonenumber = this.save_phonenumber.bind(this);
				this.crearDestinatario = this.crearDestinatario.bind(this);
				this.validarCedulaNuevoDest = this.validarCedulaNuevoDest.bind(this);
				this.ingresardinero = this.ingresardinero.bind(this);
				this.monto_a_girar_update = this.monto_a_girar_update.bind(this);
				this.state = 
				{ 
					el_telefono: null, 
					el_nombre: null, 
					el_email: null, 
					lista_destinatarios: null, 
					tarifa: null, 
					monto_a_girar: null, 
					tipo_cambio: 0, 
					id_destinatario_escogido: null, 
					the_status: 100, 
					nombre_nd: null, 
					cedula_nd: null, 
					cuenta_nd: null, 
					banco_nd: null, 
					t_cta_nd: null, 
					validarCedulaNuevoDest: null
				};
			}
			resettheapp()
			{
				this.setState({el_telefono: null, 
					el_nombre: null, 
					el_email: null, 
					lista_destinatarios: null, 
					tarifa: null, 
					monto_a_girar: null, 
					tipo_cambio: 0, 
					id_destinatario_escogido: null, 
					the_status: 100, 
					nombre_nd: null, 
					cedula_nd: null, 
					cuenta_nd: null, 
					banco_nd: null, 
					t_cta_nd: null, 
					validarCedulaNuevoDest: null});
			}
			render_header()
			{
				return(<div className="row" >
							<div className="col col-4 offset-4 col-sm-4 offset-sm-4 col-md-2 offset-md-5" >
								<a className="inheritor" onClick={this.resettheapp} >
									<img src="img/1.jpeg" className="rounded inheritor" alt="Ícono de tu casita de cambio"  />
								</a>
							</div>
						</div>);
			}
			render_ask_phoneNumber()
			{
				return (
					<div className="container-fluid" >
						{this.render_header()}
						<br />
						<div className="row" >
							<div className="col col-10 offset-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4" >
								<div className="form-group">
									<input 
										type="text" 
										className="form-control" 
										id="telefono" 
										placeholder="# telefónico" 
									/>
								</div>
							</div>
						</div>
						<div className="row" >
							<div className="col col-6 offset-3 col-sm-4 offset-sm-4 col-md-2 offset-md-5" >
								<button 
									type="button" 
									className="btn btn-success inheritor" 
									onClick={this.validate_phonenumber}
								>Buscar</button>
							</div>
						</div>
					</div>
				);
			}
			validate_phonenumber()
			{
				this.setState({the_status: 200,el_telefono: '64044101'});
			}
			render_nuevoCliente()
			{
				return (
					<div className="container-fluid" >
						{this.render_header()}
						<br />
						<div className="row" >
							<div className="col col-10 offset-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4" >
								<h3>Cliente Nuevo</h3>
								<h4># Tel. {this.state.el_telefono}</h4>
								<br />
								<div className="form-group">
									<input 
										type="text" 
										className="form-control" 
										id="nombre" 
										placeholder="Nombre" 
									/>
									<input 
										type="text" 
										className="form-control" 
										id="email" 
										placeholder="e-mail" 
									/>
								</div>
							</div>
						</div>
						<div className="row" >
							<div className="col col-6 offset-3 col-sm-4 offset-sm-4 col-md-2 offset-md-5" >
								<button 
									type="button" 
									className="btn btn-success inheritor" 
									onClick={this.save_phonenumber}
								>Guardar</button>
							</div>
						</div>
					</div>
				);
			}
			save_phonenumber()
			{
				this.setState({
					the_status: 300,
					el_nombre: 'Diego Bueno',
					el_email: 'abc@d.e', 
					lista_destinatarios: [
						{
							"id":"0", 
							"nombre":"Miryam Bueno", 
							"cedula":"V5235348", 
							"cuenta":"01020304050607080910", 
							"banco":"Banco de Venezuela", 
							"tipodecuenta":"ahorro"
						}, 
						{
							"id":"1", 
							"nombre":"Miryam Bu002", 
							"cedula":"V5235002", 
							"cuenta":"01022222222222222222", 
							"banco":"Banco de Venezuela", 
							"tipodecuenta":"ahorro"
						}, 
						{
							"id":"2", 
							"nombre":"Miryam Bu003", 
							"cedula":"V5235003", 
							"cuenta":"01033333333333333333", 
							"banco":"Banco de Venezuela", 
							"tipodecuenta":"ahorro"
						} 
					]});
			}
			render_listarDestinatarios()
			{
				return (
					<div className="container-fluid" >
						{this.render_header()}
						<br />
						<div className="row" >
							<div className="col col-10 offset-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4" >
								<h4># Tel. {this.state.el_telefono}</h4>
								<h5>{this.state.el_nombre}</h5>
								<br />
								<h4>Lista de destinatarios</h4>
								<table className="table">
									<thead>
										<tr>
											<th>(Cuenta) Nombre</th>
										</tr>
									</thead>
									<tbody>
										{this.state.lista_destinatarios.map((dest_item) => <tr>
											<td>
												<a 
													onClick={this.ingresardinero} 
												>({dest_item.cuenta.substring(0,4)}...{dest_item.cuenta.substring(15,20)})<br />{dest_item.nombre}</a>
											</td>
										</tr>)}
									</tbody>
								</table>
							</div>
						</div>
						<div className="row" >
							<div className="col col-6 offset-1 col-sm-4 offset-sm-3 col-md-2 offset-md-4" >
								<button 
									type="button" 
									className="btn btn-success inheritor" 
									onClick={this.crearDestinatario}
								>Agregar Dest.</button>
							</div>
						</div>
					</div>
				);
			}
			crearDestinatario()
			{
				this.setState({the_status: 400});
			}
			render_crearDestinatario()
			{
				return (
					<div className="container-fluid" >
						{this.render_header()}
						<br />
						<div className="row" >
							<div className="col col-10 offset-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4" >
								<h4># Tel. {this.state.el_telefono}</h4>
								<h5>{this.state.el_nombre}</h5>
								<br />
								<h4>Nuevo Destinatario</h4>
								<div className="form-group">
									<input 
										type="text" 
										className="form-control" 
										id="nombredest" 
										placeholder="Nombre" 
									/>
									<select className="form-control col-4 theinlined" id="tipodecedula">
										<option>V</option>
										<option>E</option>
										<option>J</option>
										<option>O</option>
									</select>
									<input 
										type="text" 
										className="form-control col-8 theinlined" 
										id="cedula" 
										placeholder="Cédula" 
										onChange={this.validarCedulaNuevoDest}
									/>
									<br />
									<input 
										type="text" 
										className="form-control" 
										id="cuenta" 
										placeholder="Cuenta" 
									/>
								</div>
								<div className="form-check">
									<label className="form-check-label" for="t_ctaa">
										<input type="radio" className="form-check-input" id="t_ctaa" name="t_cta" value="ahorro" />Ahorro
									</label>
								</div>
								<div className="form-check">
									<label className="form-check-label" for="t_ctac">
										<input type="radio" className="form-check-input" id="t_ctac" name="t_cta" value="corriente" />Corriente
									</label>
								</div>
								<br />
							</div>
						</div>
						<div className="row" >
							<div className="col col-6 offset-1 col-sm-4 offset-sm-3 col-md-2 offset-md-4" >
								<button 
									type="button" 
									className="btn btn-success inheritor" 
									onClick={this.save_phonenumber}
								>Guardar</button>
							</div>
						</div>
					</div>
				);
			}
			validarCedulaNuevoDest()
			{
			}
			ingresardinero()
			{
				this.setState({the_status: 500,id_destinatario_escogido: 1});
			}
			monto_a_girar_update()
			{
				this.setState({monto_a_girar: document.getElementById('montoagirarinput').value});
			}
			render_ingresardinero()
			{
	const id_aux = this.state.id_destinatario_escogido;
	const destseleccionado = this.state.lista_destinatarios.find(function (destselaux) { return destselaux.id == id_aux;});
				return (
					<div className="container-fluid" >
						{this.render_header()}
						<br />
						<div className="row" >
							<div className="col col-10 offset-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4" >
								<label>Envía:</label>
								<h5># Tel. {this.state.el_telefono}</h5>
								<h6>{this.state.el_nombre}</h6>
								<br />
								<label>Recibe:</label>
								<h5>{destseleccionado.nombre}</h5>
								<h6>{destseleccionado.cuenta}</h6>
								<br />
								<h6>Tarifa 2.500 BsS x $</h6>
								<br />
								<div className="form-group">
									<label>Monto a enviar:</label>
									<input 
										type="text" 
										className="form-control" 
										id="montoagirarinput" 
										placeholder="Monto $" 
										onChange={this.monto_a_girar_update}
										value={this.state.monto_a_girar}
									/>
									<label>Monto recibe:</label>
									<input 
										type="text" 
										className="form-control" 
										id="montoarecibir" 
										readonly="true" 
										value={(this.state.monto_a_girar * 2500)}
									/>
								</div>
							</div>
						</div>
						<div className="row" >
							<div className="col col-6 offset-1 col-sm-4 offset-sm-3 col-md-2 offset-md-4" >
								<button 
									type="button" 
									className="btn btn-success inheritor" 
									onClick={this.save_phonenumber}
								>Guardar</button>
							</div>
						</div>
					</div>
				);
			}
			render() 
			{
				if ( this.state.the_status == 100 )
				{
					return this.render_ask_phoneNumber();
				}
				else if ( this.state.the_status == 200 )
				{
					return this.render_nuevoCliente();
				}
				else if ( this.state.the_status == 300 )
				{
					return this.render_listarDestinatarios();
				}
				else if ( this.state.the_status == 400 )
				{
					return this.render_crearDestinatario();
				}
				else if ( this.state.the_status == 500 )
				{
					return this.render_ingresardinero();
				}
				else
				{
					return (
						<div className="container-fluid" >
							<div className="row" >
								<div className="col col-4 offset-4 col-sm-4 offset-sm-4 col-md-2 offset-md-5" >
									The Status has an unconsidered value
								</div>
							</div>
						</div>
					);
				}
			}
		}
		ReactDOM.render(<Tucasitapp />, document.getElementById('tucasitapp_div'));
    </script>
</body>
