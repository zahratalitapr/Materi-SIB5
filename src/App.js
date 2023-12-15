import React from "react";
import  Navbar from './Navbar';
import Produk from './Produk';
import ProdukCreate from './ProdukCreate';
import {BrowserRouter as Router, Routes,Route} from 'react-router-dom';
import Home from './Home';

export default function App(){
  return(
    <Router>
    <Navbar />
    <Routes>
      <Route exact path='/' element={<Home />}/>
      <Route exact path='/produk' element={<Produk />}></Route>
      <Route exact path='/produk/create' element={<ProdukCreate />}></Route>
    </Routes>
    </Router>
  );
}


