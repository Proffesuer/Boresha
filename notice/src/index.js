//import 'react' from React 
import React from 'react';
//import reactDom from react-dom
import reactDOM from 'react-dom';

import Counter from './student/index';
import Admin from './admin/index';
import 'bootstrap/dist/css/bootstrap.css';


//with a reactDom we nned to set our element on an id
reactDOM.render(<Counter/>,document.getElementById("root"));

reactDOM.render(<Admin/>,document.getElementById("roots"));