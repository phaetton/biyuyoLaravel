// import logo from './logo.svg';
import './App.css';
import React from 'react';
import { CreateNegButton } from './components';

const Negocios = [
  { text: 'Comideria la comida', Categoria: "comida" },
  { text: 'panaderia el pan', Categoria: "comida" },
  { text: 'restaurante el rest', Categoria: "comida" }
]

function App() {
  return (
    <React.Fragment>
      {/* { <NegCounter />} */}
      <h2>Tienes 2 negocios</h2>
      {/* {<NegSearch />} */}
      <input placeholder='Negocio' />
      {/* { <NegList>} */}
      {/* {Negocios.map(neg => (
        <NegItem />
      ))} */}
      {/* {   <NegItem />} */}
      {/* { </NegList>} */}
      <CreateNegButton/>
    </React.Fragment>
  );
}

export default App;
