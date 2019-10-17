import React from 'react';
import ReactDOM from 'react-dom';
import './assets/styles/index.css';
import Start from './Start';
import * as serviceWorker from './serviceWorker';
import { BrowserRouter as Router, Switch, Route} from 'react-router-dom';

const Root = () => (
  <Router>
      <Switch>
          <Route exact path="/" component={Start}></Route>
          <Route component={Start}></Route>
      </Switch>
  </Router>
)

ReactDOM.render(<Root />, document.getElementById('root'));

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
