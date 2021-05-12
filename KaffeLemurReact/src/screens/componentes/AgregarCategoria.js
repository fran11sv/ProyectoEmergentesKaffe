import React, { Component } from 'react';
import axios from 'axios';
import { Form, Button } from 'react-bootstrap'


export default class AgregarCategoria extends Component {

    constructor()
    {
        super();
        this.onChangeCategoryName = this.onChangeCategoryName.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
        this.state={
            categoria:''
        }
    }

    onChangeCategoryName(e){
        this.setState({
            categoria: e.target.value
      })
    }
    onSubmit(e)
    {
        e.preventDefault();
        if (this.props.categoria!==null){
            const categorias ={
                categoria: this.state.categoria,
                _id: this.props.categoria._id
            }
            axios.put('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/categorias/Editar', categorias)
            .then(res => window.location.reload());
        }
        else{
            const categorias ={
                categoria: this.state.categoria
            }
            axios.post('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/categorias/Crear', categorias)
            .then(res => window.location.reload());
        }
    }

    render() {
        return (
            <div>
            <Form onSubmit= {this.onSubmit}>
                <Form.Group >
                    <Form.Label>Nombre de Categoria</Form.Label>
                    { this.props.categoria !== null ? 
                    <Form.Control id="categoria" 
                    defaultValue={this.props.categoria.categoria}
                    onChange={this.onChangeCategoryName}
                    placeholder="Nombre de Categoria" />:
                    <Form.Control id="categoria" 
                    value={this.state.categoria}
                    onChange={this.onChangeCategoryName}
                    placeholder="Nombre de Categoria" />
                    }
                </Form.Group>
                
                <Button type="submit" variant="primary">{this.props.categoria !== null ? "Editar": "Agregar"}</Button>
            </Form>
            </div>
        )
    }
}