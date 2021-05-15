import axios from 'axios'
import { Button, Form } from 'react-bootstrap'
import React, { Component } from 'react'
import { Link, useHistory } from 'react-router-dom'
export default class LogIn extends Component {
    constructor() {
        super();
        this.onChangeCategoryName = this.onChangeCategoryName.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
        this.state = {
            email_cli: '',
            contra_cli: '',
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
            email_cli: this.state.email_cli,
            contra_cli: this.state.contra_cli,
        }
        axios.get('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/clientes/Login', clientes)
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
                                            Login
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