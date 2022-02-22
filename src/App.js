import React, { Component } from 'react';
import './App.css';

import { BrowserRouter, Route, Routes } from 'react-router-dom';

import Layout from './components/layout';
import LandingPage from './pages/landing';
import AboutSitePage from './pages/aboutSite';

class App extends Component {
  render() {
    return (
      <BrowserRouter>
      <Layout>
        <Routes>
          <Route path='/' element={<LandingPage />} />
          <Route path='/about-site' element={<AboutSitePage />} />
        </Routes>

      </Layout>
      </BrowserRouter>
    );
  }
}

export default App;
