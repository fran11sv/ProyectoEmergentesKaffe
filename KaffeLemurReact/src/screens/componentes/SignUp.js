import React, { Component } from 'react';
import Avatar from '@material-ui/core/Avatar';
import Button from '@material-ui/core/Button';
import CssBaseline from '@material-ui/core/CssBaseline';
import TextField from '@material-ui/core/TextField';
import Link from '@material-ui/core/Link';
import Grid from '@material-ui/core/Grid';
import Box from '@material-ui/core/Box';
import LockOutlinedIcon from '@material-ui/icons/LockOutlined';
import Typography from '@material-ui/core/Typography';
import { makeStyles } from '@material-ui/core/styles';
import Container from '@material-ui/core/Container';
import { Link as RouteLink } from "react-router-dom"
import axios from 'axios';
const useStyles = makeStyles((theme) => ({
  paper: {
    marginTop: theme.spacing(8),
    display: 'flex',
    flexDirection: 'column',
    alignItems: 'center',
  },
  avatar: {
    margin: theme.spacing(1),
    backgroundColor: theme.palette.secondary.main,
  },
  form: {
    width: '100%', // Fix IE 11 issue.
    marginTop: theme.spacing(3),
  },
  submit: {
    margin: theme.spacing(3, 0, 2),
  },
}));
export default class SignUp extends Component {
  constructor() {
    super();
    this.onChangeValor = this.onChangeValor.bind(this);
    this.onSubmit = this.onSubmit.bind(this);
    this.state = {
      nombre: '',
      apellido: '',
      email: '',
      usuario: '',
      contra: '',
      telefono: '',
      direccion: '',
    }
  }
  onChangeValor(e) {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onSubmit(e) {
    e.preventDefault();
    const clientes = {
      nombre_cli: this.state.nombre,
      apellido_cli: this.state.apellido,
      email_cli: this.state.email,
      usuario_cli: this.state.usuario,
      contra_cli: this.state.contra,
      telefono_cli: this.state.telefono,
      direccion_cli: this.state.direccion,
    }
    axios.post('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/clientes/Crear', clientes)
      .then(res => window.location.reload()).catch(err => console.log(err));
  }

  render() {
    return (
      <Container component="main" maxWidth="xs">
        <CssBaseline />
        <div className={useStyles.paper}>
          <Avatar className={useStyles.avatar}>
            <LockOutlinedIcon />
          </Avatar>
          <Typography component="h1" variant="h5">
            Registrarse
            </Typography>
          <form noValidate>
            <Grid container spacing={2}>
              <Grid item xs={12} sm={6}>
                <TextField
                  name="usuario"
                  value={this.state.usuario}
                  onChange={this.onChangeValor}
                  variant="outlined"
                  required
                  fullWidth
                  label="Nombre de Usuario"
                  autoFocus
                />
              </Grid>
              <Grid item xs={12} sm={6}>
                <TextField
                  name="telefono"
                  value={this.state.telefono}
                  onChange={this.onChangeValor}
                  variant="outlined"
                  required
                  fullWidth
                  label="Teléfono"
                />
              </Grid>
              <Grid item xs={12} sm={6}>
                <TextField
                  name="nombre"
                  value={this.state.nombre}
                  onChange={this.onChangeValor}
                  variant="outlined"
                  required
                  fullWidth
                  label="Nombres"
                  autoFocus
                />
              </Grid>
              <Grid item xs={12} sm={6}>
                <TextField
                  name="apellido"
                  value={this.state.apellido}
                  onChange={this.onChangeValor}
                  variant="outlined"
                  required
                  fullWidth
                  label="Apellidos"
                />
              </Grid>
              <Grid item xs={12}>
                <TextField
                  name="direccion"
                  value={this.state.direccion}
                  onChange={this.onChangeValor}
                  variant="outlined"
                  required
                  fullWidth
                  label="Dirección"
                />
              </Grid>
              <Grid item xs={12}>
                <TextField
                  name="email"
                  value={this.state.email}
                  onChange={this.onChangeValor}
                  variant="outlined"
                  required
                  fullWidth
                  label="Email"
                />
              </Grid>
              <Grid item xs={12}>
                <TextField
                  name="contra"
                  dvalue={this.state.direccion}
                  onChange={this.onChangeValor}
                  variant="outlined"
                  required
                  fullWidth
                  label="Password"
                  type="password"
                  autoComplete="current-password"
                />
              </Grid>
            </Grid>
            <Button
              type="submit"
              fullWidth
              variant="contained"
              color="primary"
            >
              Registrarse
              </Button>
            <Grid container justify="flex-end">
              <Grid item>
                <RouteLink to="/componentes/SignIn">
                  ¿Ya tienes una cuenta? Inicia Sesión
                  </RouteLink>
              </Grid>
            </Grid>
          </form>
        </div>
        <Box mt={5}>
        <Typography variant="body2" color="textSecondary" align="center">
        {'Copyright © '}
        <Link color="inherit" href="https://material-ui.com/">
          Kaffe Lemur
        </Link>{' '}
        {new Date().getFullYear()}
        {'.'}
      </Typography>
        </Box>
      </Container>
    );
  }
}
  
