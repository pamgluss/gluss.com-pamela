import React from 'react';

import Header from './header';

const Layout = props => {
  return (
      <div>
            <Header />
            <span className="row center-md">
                {props.children}
            </span>
      </div>
  )
};

export default Layout;
