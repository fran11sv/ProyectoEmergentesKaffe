import React from "react";
import { Link } from "react-router-dom";
import { Navbar, Nav, Dropdown } from "react-bootstrap";
//import { LinkContainer} from "react-router-bootstrap";

const MainNavbar = () => {
    return (
        /*<Navbar bg="dark" variant="dark" fixed="bttom">
            <Link className="navbar-brand" to="/" >Kaffe Lemur</Link>
            <Nav className="justify-content-end">
                <Link to="/" className="nav-link active">Inicio</Link>
                <Link to="/Categorias" className="nav-link">Categorias</Link>
                <Link to="/Clientes" className="nav-link">Clientes</Link>
            </Nav>
        </Navbar>*/

        <Navbar className="Navbar"collapseOnSelect expand="lg" /*bg="dark" variant="dark"*/>
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
                <Dropdown.Toggle variant="success" id="dropdown-basic"> Dropdown Button</Dropdown.Toggle>
                <Dropdown.Menu>
                    <Dropdown.Item href="#/action-1">Action</Dropdown.Item>
                    <Dropdown.Item href="#/action-2">Another action</Dropdown.Item>
                    <Dropdown.Item href="#/action-3">Something else</Dropdown.Item>
                </Dropdown.Menu>
            </Dropdown>
        </Navbar>
    );
};
export default MainNavbar;


