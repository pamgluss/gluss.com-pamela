import React from 'react';
import beePNG from '../assets/fav-bee.png';
import { NavLink } from 'react-router-dom';

import './header.css'

const Header = () => {
  return (
    <header>
        <nav className='row middle-xs'>
            <div className='col-md-4'>
              <div className='box'>
                <div className='row middle-xs'>
                  <h1>Pamela Gluss</h1>
                  <img id='beeIcon' src={beePNG} alt='BZZZZZ'/>
                </div>
              </div>
            </div>

            <span className='col-md-6 navigation-links'>
              <div className='box'>
                <div className='row end-xs'>
                  <NavLink to='/' className='col-xs-2'>Home</NavLink>
                  <NavLink to='/about-site' className='col-xs-2'>About Site</NavLink>
                  <a className='col-xs-2' href='https://www.linkedin.com/in/pamelagluss/'>LinkedIn</a>
                  <a className='col-xs-2' href='https://github.com/pamgluss'>Github</a>
                  <a className='col-xs-2' href='http://wereonlyalittlelost.com/'>Adventure Blog</a>      
                </div>
              </div>
            </span>    
        </nav>
    </header>
  )
};

export default Header;
