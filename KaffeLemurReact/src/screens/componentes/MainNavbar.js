import React from "react";
import { Link } from "react-router-dom";
import {Navbar,Nav} from "react-bootstrap";

const MainNavbar = () => {
    return (
        <Navbar bg="dark" variant="dark" fixed="bttom">
            <Link className="navbar-brand" to="/" >Kaffe Lemur</Link>
            <Nav className="justify-content-end">
                <Link to="/" className="nav-link active">Inicio</Link>
                <Link to="/Categorias" className="nav-link">Categorias</Link>
                <Link to="/Clientes" className="nav-link">Clientes</Link>
            </Nav>
        </Navbar>
    );
};
export default MainNavbar;


