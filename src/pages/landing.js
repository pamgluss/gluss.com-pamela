import React from 'react';

import './landing.css';

const LandingPage = () => {
  return (
    <div className='landing__body'>
        <h2>Hi, you've found my personal site</h2>

        <div className='row'>
            <span className='col-md-offset-2'>
                <div className="hexagon hexagon1"><div className="hexagon-in1"><div className="hexagon-in2"></div></div></div>
            </span>
            
            <span className='col-md-4'>
                <p>
                    My name is Pam. I'm a software engineer living in San Francisco, California. I'm currently <a href='https://slack.com/'>loving it at Slack</a> working on the Build team. 
                </p>
                <p>
                    For fun, I love to travel, ride my motorcycle, watch movies and tv shows, draw, paint, read, knit, and so much more!
                </p>
                <p>
                    What's with the bees? When I was Rochester Institute of Technology studying animation, I took a Bees and Beekeeping course. It was so interesting learning about bees and how important they are that I made my senior thesis about bees!
                </p>
            </span>
        </div>
    </div>
  )
};

export default LandingPage;
