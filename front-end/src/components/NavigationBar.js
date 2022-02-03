import React from 'react';
import {Nav, Navbar, Container, NavDropdown} from 'react-bootstrap';


export const NavigationBar = () => (
    <Navbar bg="dark" expand="sm" variant="dark" fixed="top">
        <Container>
            <Navbar.Brand href="/">Climate Watch</Navbar.Brand>
            <Navbar.Toggle aria-controls="basic-navbar-nav" />
            <Navbar.Collapse id="basic-navbar-nav">
                <Nav className="me-auto">
                    <Nav.Link href="home">Home</Nav.Link>
                    <Nav.Link href="about">About</Nav.Link>
                    <NavDropdown title="Dropdown" id="basic-nav-dropdown">
                        <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
                        <NavDropdown.Divider />
                        <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
                    </NavDropdown>
                </Nav>
                <Nav>
                    <Nav.Link href='login'>Login</Nav.Link>
                    <Nav.Link href='register'>Register</Nav.Link>
                </Nav>
            </Navbar.Collapse>
        </Container>
    </Navbar>
)