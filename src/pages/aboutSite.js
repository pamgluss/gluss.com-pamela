import React, { Component } from 'react';
import Surprise from '../components/surprise';

class AboutSitePage extends Component {
    state = {
        input: '',
        submission: '',
    }

    inputChangedHandler = (e) => {
        this.setState({
            input: e.target.value
        })
    }

    submissionHandler = (input) => {
        this.setState({
            submission: input
        })
    }

    render(){
        return (
            <div>
                <h2>About this Website</h2>
                <p>I built this website with React. Which is overkill but I wanted to lay a good foundation to add functionality and keep my React skills fresh.</p>
                <p>See, isn't this fun?</p>
                <input 
                    type="text" 
                    placeholder="Type something!"
                    onChange={this.inputChangedHandler}
                    value={this.state.input} />
                <button onClick={() => this.submissionHandler(this.state.input)}>Submit</button>
                <Surprise input={this.state.submission} />
            </div>
        )
    }
};

export default AboutSitePage;
