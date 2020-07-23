import React from 'react';
import ReactTypingEffect from 'react-typing-effect';
import './assets/styles/start.scss';

export default class Start extends React.Component{
  constructor(props){
    super(props)
    this.state = {
      transparency: false
    }
  }
  
  startNavigation(){
    this.setState({ transparency: true })
    setTimeout(() => {
      window.location.href = "/home";
    }, 1000)
  }

  render(){
    return (
      <header className="Splashscreen">
        <div className="Splashscreen__header container">
          <div className="Title-block">
            <ReactTypingEffect
              text="Florian Tournay"
              speed="100"
              eraseDelay="10000"
              className="animated-title"
            />
            <p>Développeur Web passionné.</p>
          </div>
          <button onClick={() =>{this.startNavigation()}}></button>
        </div>
      </header>
    );
  }
}




