import React from 'react';
import { Link } from "react-router-dom";
import '../assets/styles/nav.scss';

export default class NavBar extends React.Component{
  render(){
    return (
      <nav>
        <span id="logo"></span>
        <ul className="container">
          <li><Link path="/accueil">ACCUEIL</Link></li>
          <li><Link path="/experiences">EXPERIENCES</Link></li>
          <li><Link path="/diplomes">DIPLOMES</Link></li>
          <li><Link path="/projets">PROJETS</Link></li>
          <li><Link path="/apropos">A PROPOS</Link></li>
        </ul>
      </nav>
    );
  }
}