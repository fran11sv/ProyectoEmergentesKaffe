import React, { Component } from 'react';
import axios from 'axios';
import { Form, Button } from 'react-bootstrap'


export default class AgregarCliente extends Component {

    constructor()
    {
        super();
        this.onChangeCategoryName = this.onChangeCategoryName.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
        this.state={
            nombre_cli:'',
            apellido_cli:'',
            email_cli:'',
            usuario_cli:'',
            contra_cli:'',
            telefono_cli:'',
            direccion_cli:'',
        }
    }

    onChangeCategoryName(e){
        this.setState({
                [e.target.name]: e.target.value
                })
    }
    onSubmit(e)
    {
        e.preventDefault();
        if (this.props.cliente!==null){
            const clientes ={
                nombre_cli: this.state.nombre_cli,
                apellido_cli: this.state.apellido_cli,
                email_cli: this.state.email_cli,
                usuario_cli: this.state.usuario_cli,
                contra_cli: this.state.contra_cli,
                telefono_cli: this.state.telefono_cli,
                direccion_cli: this.state.direccion_cli,
                _id: this.props.cliente._id
            }
            axios.put('http://localhost/ProyectoKaffe/KaffeLemurLaravel/public/api/clientes/Editar', clientes)
            .then(res => window.location.reload());
        }
        else{
            const clientes ={
                nombre_cli: this.state.nombre_cli,
                apellido_cli: this.state.apellido_cli,
                email_cli: this.state.email_cli,
                usuario_cli: this.state.usuario_cli,
                contra_cli: this.state.contra_cli,
                telefono_cli: this.state.telefono_cli,
                direccion_cli: this.state.direccion_cli,
            }
            axios.post('http://localhost/ProyectoKaffe/KaffeLemurLaravel/public/api/clientes/Crear', clientes)
            .then(res => window.location.reload());
        }
    }

    render() {
        return (
            <div>
            <Form onSubmit= {this.onSubmit}>
                
                    { this.props.cliente !== null ? 
                    <Form.Group >
                    <Form.Label>Nombre de cliente</Form.Label>
                    <Form.Control name="nombre_cli" 
                    defaultValue={this.props.cliente.nombre_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Nombre de cliente" />

                    <Form.Label>Apellido de cliente</Form.Label>
                    <Form.Control name="apellido_cli" 
                    defaultValue={this.props.cliente.apellido_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Apellido de cliente" />
                    
                    <Form.Label>Correo de cliente</Form.Label>
                    <Form.Control name="email_cli" 
                    defaultValue={this.props.cliente.email_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Correo de cliente" />

                    <Form.Label>Usuario de cliente</Form.Label>
                    <Form.Control name="usuario_cli" 
                    defaultValue={this.props.cliente.usuario_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Usuario de cliente" />

                    <Form.Label>Contraseña de cliente</Form.Label>
                    <Form.Control name="contra_cli" 
                    defaultValue={this.props.cliente.contra_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Contraseña de cliente" />

                    <Form.Label>Telefono de cliente</Form.Label>
                    <Form.Control name="telefono_cli" 
                    defaultValue={this.props.cliente.telefono_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Telefono de cliente" />

                    <Form.Label>Direccion de cliente</Form.Label>
                    <Form.Control name="direccion_cli" 
                    defaultValue={this.props.cliente.direccion_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Direccion de cliente" />
                    </Form.Group> 
                    :
                    <Form.Group >
                    <Form.Label>Nombre de cliente</Form.Label>
                    <Form.Control name="nombre_cli" 
                    value={this.state.nombre_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Nombre de cliente" />

                    <Form.Label>Apellido de cliente</Form.Label>
                    <Form.Control name="apellido_cli" 
                    value={this.state.apellido_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Apellido de cliente" />
                    
                    <Form.Label>Correo de cliente</Form.Label>
                    <Form.Control name="email_cli" 
                    value={this.state.email_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Correo de cliente" />

                    <Form.Label>Usuario de cliente</Form.Label>
                    <Form.Control name="usuario_cli" 
                    value={this.state.usuario_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Usuario de cliente" />

                    <Form.Label>Contraseña de cliente</Form.Label>
                    <Form.Control name="contra_cli" 
                    value={this.state.contra_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Contraseña de cliente" />

                    <Form.Label>Telefono de cliente</Form.Label>
                    <Form.Control name="telefono_cli" 
                    value={this.state.telefono_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Telefono de cliente" />

                    <Form.Label>Direccion de cliente</Form.Label>
                    <Form.Control name="direccion_cli" 
                    value={this.state.direccion_cli}
                    onChange={this.onChangeCategoryName}
                    placeholder="Direccion de cliente" />

                    </Form.Group> 
                    }
                               
                
                <Button type="submit" variant="primary">{this.props.cliente !== null ? "Editar": "Agregar"}</Button>
            </Form>
            </div>
        )
    }
}