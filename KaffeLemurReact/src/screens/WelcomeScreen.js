import axios from 'axios'
import React, { Component } from "react";
import { Carousel, Card } from "react-bootstrap";

class WelcomeScreen extends Component {
    state = {
        productos: [],
        Haydatos: "",
        show: false,
        cate: null,
    }

    componentDidMount() {
        axios.get('http://localhost/ProyectoEmergentesKaffe/KaffeLemurLaravel/public/api/productos').then(response => {
            this.setState({
                productos: response.data
            }, () => { })
        }).catch(err => {
            console.log(err)
        })
    }

    handleShow = () => {
        this.setState({
            show: true
        })
    }

    render() {
        const { productos } = this.state
        return (
            /*<Carousel>
                <Carousel.Item>
                    <img
                        className="d-block w-100 imgSlide"
                        src="https://www.italiano-al-caffe.com/wp-content/uploads/2018/10/Cafe-pendiente-Italiano-al-Caffe.png"
                        alt="First slide"
                    />
                    <Carousel.Caption>
                        <h3>First slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </Carousel.Caption>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                        className="d-block w-100 imgSlide"
                        src="https://clubdelcafe.net/wp-content/uploads/2020/06/Taza-con-capuchino-y-galleta-scaled.jpg"
                        alt="Second slide"
                    />

                    <Carousel.Caption>
                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </Carousel.Caption>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                        className="d-block w-100 imgSlide"
                        src="https://www.cocinayvino.com/wp-content/uploads/2017/01/54713302_l.jpg"
                        alt="Third slide"
                    />

                    <Carousel.Caption>
                        <h3>Third slide label</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </Carousel.Caption>
                </Carousel.Item>
            </Carousel>*/
            
            <Card style={{ width: '18rem' }}>
                {productos.map((p, index) =>
                <Card.Body>
                    <Card.Title>{index + 1} - {p.nombre_prod}</Card.Title>
                    <Card.Subtitle className="mb-2 text-muted">Card Subtitle</Card.Subtitle>
                    <Card.Text>
                        {p.descripcion_prod}
                    </Card.Text>
                    <Card.Text> ${p.precio_prod}</Card.Text>
                    <Card.Text> ${p.precio2_prod}</Card.Text>
                    <Card.Text> {p.estado_prod}</Card.Text>
                </Card.Body>
                )}
            </Card>
            
        )
    }
};


/*const WelcomeScreen = () => {
    return (


        <Carousel>
            <Carousel.Item>
                <img
                    className="d-block w-100 imgSlide"
                    src="https://www.italiano-al-caffe.com/wp-content/uploads/2018/10/Cafe-pendiente-Italiano-al-Caffe.png"
                    alt="First slide"
                />
                <Carousel.Caption>
                    <h3>First slide label</h3>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block w-100 imgSlide"
                    src="https://clubdelcafe.net/wp-content/uploads/2020/06/Taza-con-capuchino-y-galleta-scaled.jpg"
                    alt="Second slide"
                />

                <Carousel.Caption>
                    <h3>Second slide label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block w-100 imgSlide"
                    src="https://www.cocinayvino.com/wp-content/uploads/2017/01/54713302_l.jpg"
                    alt="Third slide"
                />

                <Carousel.Caption>
                    <h3>Third slide label</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </Carousel.Caption>
            </Carousel.Item>
        </Carousel>


    )
};*/
export default WelcomeScreen;