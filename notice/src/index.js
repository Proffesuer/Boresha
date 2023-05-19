//import 'react' from React 
import React from 'react';
//import reactDom from react-dom
import reactDOM from 'react-dom';

import Counter from './My_component/counter';
import 'bootstrap/dist/css/bootstrap.css';

//with a reactDom we nned to set our element on an id
reactDOM.render(<Counter/>,document.getElementById("root"));

