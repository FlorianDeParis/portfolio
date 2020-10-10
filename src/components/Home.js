import React from 'react';
import NavBar from './Navbar';
import '../assets/styles/commons.scss';
import '../assets/styles/home.scss';

export default class Home extends React.Component{
  render(){
    console.log("this is home page")
    return (
      <section id="Accueil">
        <NavBar />
      </section>
    );
  }
}