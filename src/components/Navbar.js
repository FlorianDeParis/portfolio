import React from 'react';
import { Link } from "react-router-dom";
import '../assets/styles/commons.scss';
import '../assets/styles/nav.scss';

export default class NavBar extends React.Component{
  render(){
    return (
      <nav>
        <Link to="/"><span id="logo"></span></Link>
        <ul className="container">
          <li><Link to="/accueil">ACCUEIL</Link></li>
          <li><Link to="/experiences">EXPERIENCES</Link></li>
          <li><Link to="/diplomes">DIPLOMES</Link></li>
          <li><Link to="/projets">PROJETS</Link></li>
          <li><Link to="/apropos">A PROPOS</Link></li>
        </ul>
      </nav>
    );
  }
}