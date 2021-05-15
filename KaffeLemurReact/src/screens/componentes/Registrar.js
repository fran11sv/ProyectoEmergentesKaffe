import axios from 'axios'
import { Button, Form } from 'react-bootstrap'
import React, { Component } from 'react'
import { Link, useHistory } from 'react-router-dom'
export default class Registrar extends Component {
    constructor() {
        super();
        this.onChangeCategoryName = this.onChangeCategoryName.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
        this.state = {
            nombre_cli: '',
            apellido_cli: '',
            email_cli: '',
            usuario_cli: '',
            contra_cli: '',
            telefono_cli: '',
            direccion_cli: '',
        }
    }

    onChangeCategoryName(e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }
    onSubmit(e) {
        e.preventDefault();
        const clientes = {
            nombre_cli: this.state.nombre_cli,
            apellido_cli: this.state.apellido_cli,
            email_cli: this.state.email_cli,
            usuario_cli: this.state.usuario_cli,
            contra_cli: this.state.contra_cli,
            telefono_cli: this.state.telefono_cli,
            direccion_cli: this.state.direccion_cli,
        }
        axios.post('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/clientes/Crear', clientes)
            .then(res => window.location.reload());
    }
    render() {
        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col-md-4'>
                        <div className='card'>
                            <div className='card-header'>Regístrate</div>
                            <div className='card-body'>
                                <ul className='list-group list-group-flush'>
                                    <Form onSubmit={this.onSubmit}>
                                        <Form.Group>
                                            <Form.Label>Nombre de Usuario</Form.Label>
                                            <Form.Control 
                                            name="usuario_cli"
                                            value={this.state.usuario_cli}
                                            onChange={this.onChangeCategoryName}
                                            placeholder="Nombre Usuario"/>
                                        </Form.Group>
                                        <Form.Group>
                                            <Form.Label>Dirección</Form.Label>
                                            <Form.Control 
                                            name="direccion_cli"
                                            value={this.state.direccion_cli}
                                            onChange={this.onChangeCategoryName}
                                            placeholder="Dirección"/>
                                        </Form.Group>
                                        <Form.Group controlId="formBasicEmail">
                                            <Form.Label>Teléfono</Form.Label>
                                            <Form.Control 
                                            name="telefono_cli"
                                            value={this.state.telefono_cli}
                                            onChange={this.onChangeCategoryName}
                                            placeholder="Teléfono"/>
                                        </Form.Group>
                                        <Form.Group controlId="formBasicEmail">
                                            <Form.Label>Nombres</Form.Label>
                                            <Form.Control 
                                            name="nombre_cli"
                                            value={this.state.nombre_cli}
                                            onChange={this.onChangeCategoryName}
                                            placeholder="Nombres"/>
                                        </Form.Group>
                                        <Form.Group controlId="formBasicEmail">
                                            <Form.Label>Apellidos</Form.Label>
                                            <Form.Control 
                                            name="apellido_cli"
                                            value={this.state.apellido_cli}
                                            onChange={this.onChangeCategoryName}
                                            placeholder="Apellidos"/>
                                            </Form.Group>
                                        <Form.Group controlId="formBasicEmail">
                                            <Form.Label>Correo</Form.Label>
                                            <Form.Control 
                                            name="email_cli"
                                            value={this.state.email_cli}
                                            onChange={this.onChangeCategoryName}
                                            placeholder="Correo Electrónico"/>
                                        </Form.Group>
                                        <Form.Group controlId="formBasicPassword">
                                            <Form.Label>Password</Form.Label>
                                            <Form.Control 
                                            type="password"
                                            name="contra_cli"
                                            value={this.state.contra_cli}
                                            onChange={this.onChangeCategoryName}
                                            placeholder="Contraseña"/>
                                        </Form.Group>
                                        <br>
                                        </br>
                                        <Button variant="primary" type="submit">
                                            Registrar
                                        </Button>
                                    </Form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>);
    }
}