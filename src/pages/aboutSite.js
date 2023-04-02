import React, { Component } from 'react';
import Surprise from '../components/surprise';
import './aboutSite.css';

class AboutSitePage extends Component {
    state = {
        input: '',
        submission: '',
    }

    inputChangedHandler = (e) => {
        this.setState({
            input: e.target.value,
            submission: ''
        })
    }

    submissionHandler = (input) => {
        this.setState({
            submission: input
        })
    }

    render(){
        return (
            <div class="aboutSitePage">
                <h2>About this Website</h2>
                <p>I built this website with React. Which is overkill but I wanted to lay a good foundation to add functionality and keep my React skills fresh.</p>
                <p>See, isn't this fun?</p>
                <span class="growing-search">
                    <div class="input">
                        <input 
                            type="text" 
                            placeholder="Type something!"
                            onChange={this.inputChangedHandler}
                            value={this.state.input} />
                    </div>
                    <div class="submit">
                        <button onClick={() => this.submissionHandler(this.state.input)}>Submit</button>
                    </div>
                </span>
                
                <Surprise input={this.state.submission} />

                <p>Also, I finally set up automated deployments to Github pages with Github actions. It's really easy!</p>
                <p>Visit my Github page from the navigation header to see my workflow.yaml</p>
            </div>
        )
    }
};

export default AboutSitePage;
