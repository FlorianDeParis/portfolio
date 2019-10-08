import React from 'react';
import ReactTypingEffect from 'react-typing-effect';
import './assets/css/start.css';

export default class Start extends React.Component{
  render(){
    return (
      <div className="App">
        <header className="App-header">
          <div className="Title-block">
            <ReactTypingEffect
              text="Florian Tournay"
              speed="100"
              eraseDelay="10000"
              className="animated-title"
            />
            <p>Développeur Web passionné.</p>
          </div>
        </header>
      </div>
    );
  }
}




