import React from 'react';
import beePNG from '../assets/fav-bee.png';
import { NavLink } from 'react-router-dom';

import './header.css'

const Header = () => {
  return (
    <header>
        <nav className='row center-xs middle-xs'>
            <span className='row middle-xs'>
                <h1>Pamela Gluss</h1>
                <span>
                    <img src={beePNG} alt='BZZZZZ'/>
                </span>
            </span>

            <NavLink to='/' className='col-xs-1'>Home</NavLink>
            <a className='col-xs-2' href='https://www.linkedin.com/in/pamelagluss/'>LinkedIn</a>
            <a className='col-xs-1' href='https://github.com/pamgluss'>Github</a>
            <a className='col-xs-2' href='http://wereonlyalittlelost.com/'>Adventure Blog</a>
            <NavLink to='/about-site' className='col-xs-1'>About Site</NavLink>
        </nav>
    </header>
  )
};

export default Header;
