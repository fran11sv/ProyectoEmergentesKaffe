import React from "react";
import { BrowserRouter as Router, Switch, Route} from "react-router-dom";
import WelcomeScreen from "./screens/WelcomeScreen";
import CategoriaScreen from "./screens/CategoriaScreen"
import ClienteScreen from "./screens/ClienteScreen"
import AgregarCategoria from "./screens/componentes/AgregarCategoria"
import AgregarCliente from "./screens/componentes/AgregarCliente"
import 'bootstrap/dist/css/bootstrap.min.css';
import MainNavbar from "./screens/componentes/MainNavbar";
import "./assets/css/styles.css"

const App = () => {
  return (
        <Router>
          <MainNavbar />
          <Switch>
            <Route path="/" exact component={WelcomeScreen} />
            <Route path="/Clientes" component={ClienteScreen} />
            <Route path="/Categorias" component={CategoriaScreen} />
            <Route path="/componentes/AgregarCategoria" component={AgregarCategoria} />
            <Route path="/componentes/AgregarCliente" component={AgregarCliente} />
          </Switch>
        </Router>
  );
};
export default App;