import React from 'react';

import Iris from '../assets/iris_cropped.png'
import Iris2 from '../assets/iris_cropped_2.png'

const Surprise = (props) => {
    let outputJSX = null
    if(props.input){
        const fixedInput = props.input.toLowerCase();
        if(fixedInput === 'iris'){
            const picArray = [Iris, Iris2];
            return <img src={picArray[~~(Math.random() * picArray.length)]} alt='kitty!' />
        } else if (fixedInput === 'butts'){
            return <p>Ha, you said "butts"</p>
        } else {
            return <p>Wow! You have an incredible way with words when you said "{props.input}"</p>
        }
    }

    return outputJSX
};

export default Surprise;
