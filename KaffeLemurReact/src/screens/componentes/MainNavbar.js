import React from "react";
import { Link } from "react-router-dom";
import { Navbar, Nav, Dropdown, Button } from "react-bootstrap";
//import { LinkContainer} from "react-router-bootstrap";

const MainNavbar = () => {
    return (
        /*
        <Nav.Link><Link to="/Categorias" className="nav-link NavbarText">Categorias</Link></Nav.Link>
                    <Nav.Link><Link to="/Clientes" className="nav-link NavbarText">Clientes</Link></Nav.Link>
                    */

        <Navbar className="Navbar" collapseOnSelect expand="lg" /*bg="dark" variant="dark"*/>
            <Navbar.Brand><Link className="navbar-brand NavbarText" to="/" >Kaffe Lemur</Link></Navbar.Brand>
            <Navbar.Toggle aria-controls="responsive-navbar-nav" />
            <Navbar.Collapse id="responsive-navbar-nav">
                <Nav className="mr-auto">
                    <Nav.Link><Link to="/" className="nav-link active NavbarText">Inicio</Link></Nav.Link>
                    <Nav.Link><Link to="/Categorias" className="nav-link NavbarText">Categorias</Link></Nav.Link>
                    <Nav.Link><Link to="/Clientes" className="nav-link NavbarText">Clientes</Link></Nav.Link>
                </Nav>
            </Navbar.Collapse>
            <Dropdown className="navOP2">
                <Link to="/componentes/LogIn">
                    <Button className="btns" id="dropdown-basic"> Iniciar Sesión</Button>
                </Link>
            </Dropdown>
        </Navbar>
    );
};
export default MainNavbar;


