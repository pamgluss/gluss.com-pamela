import React from "react";
import Iris from "../assets/iris_cropped.png";
import Iris2 from "../assets/iris_cropped_2.png";
import Iris3 from "../assets/iris_cropped_3.png";

import "./surprise.css";

const Surprise = (props) => {
  let outputJSX = null;
  if (props.input) {
    const fixedInput = props.input.toLowerCase();
    if (fixedInput === "iris") {
      const picArray = [Iris, Iris2, Iris3];
      outputJSX = (
        <>
          <p>Meet my cat, Iris:</p>
          <img
            src={picArray[~~(Math.random() * picArray.length)]}
            alt="kitty!"
          />
        </>
      );
    } else if (fixedInput === "butts") {
      outputJSX = <p>Ha, you said "butts"</p>;
    } else {
      outputJSX = (
        <p>
          Wow! You have an incredible way with words when you say "{props.input}
          "
        </p>
      );
    }
  }

  return <div class="surprise">{outputJSX}</div>;
};

export default Surprise;
