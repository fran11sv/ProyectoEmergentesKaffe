// resources/assets/js/components/categoriasList.js

import axios from 'axios'
import { Button, Modal, ButtonGroup} from 'react-bootstrap'
import React, { Component } from 'react'
//import { Link } from 'react-router-dom'
import AgregarCategoria from "./componentes/AgregarCategoria"

class CategoriaScreen extends Component {
  state = {
    categorias: [],
    Haydatos: "",
    show: false,
    cate:null,
  }
  componentDidMount() {
    axios.get('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/categorias').then(response => {
      this.setState({
        categorias: response.data
      }, () => { })
    }).catch(err => {
      console.log(err)
    })
  }
  handleShow = () =>{
    this.setState({
        show: true
    })
    }
    handleCancel= () =>{
      this.setState({
          cate: null,
          show: false
      })
      
      }
      handleEdit = (e) =>{
        this.setState({
            show: true,
            cate: JSON.parse(e.target.name)
        },()=> console.log(this.state) )
        }
        handleDelete = (e) =>{
          axios.delete('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/categorias/Eliminar/'+e.target.name)
          .then(res => window.location.reload());
          }
  render() {
    const { categorias } = this.state
    return (
      <div className='container py-4'>
        <div className='row justify-content-center'>
          <div className='col-md-8'>
            <div className='card'>
              <div className='card-header'>All categorias</div>

              <div className='card-body'>
                <Button variant="primary" onClick={this.handleShow}>
                  Agregar Categoria
                </Button>
                <ul className='list-group list-group-flush'>
                  <table striped bordered hover>
                    <thead>
                      <tr data-bs-toggle="modal" data-bs-target="#Editar">
                        <th>#</th>
                        <th>Categorias</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      {categorias.map((c, index) =>
                        <tr key={index} >
                          <td>{index + 1}</td>
                          <td>{c.categoria}</td>
                          <td>
                          <ButtonGroup aria-label="Basic example">
                          <Button variant="warning" name={JSON.stringify(c)} onClick={this.handleEdit}>
                          Editar
                        </Button>
                        <Button variant="danger" name={c._id} onClick={this.handleDelete}>
                          Eliminar
                        </Button>
                        </ButtonGroup>
                          </td>
                        </tr>
                      )}
                    </tbody>
                  </table>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <Modal show={this.state.show} onHide={this.handleCancel}>
          <Modal.Header closeButton>
            <Modal.Title>Modal heading</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <AgregarCategoria categoria={this.state.cate}/>
          </Modal.Body>
          <Modal.Footer>
            <Button variant="secondary" onClick={this.handleCancel}>
              Cancelar
          </Button>
          </Modal.Footer>
        </Modal>
      </div>

    )
  }
}

export default CategoriaScreen