import React, { Component } from "react";

class GamesPage extends Component {
    playerIcon = {
        'BLANK': '|-|',
        'ONE': 'X',
        'TWO': 'O',
    };

    state = {
        connectFourBoard: [],
        connectFourStart: false,
        connectFourRows: 6, // how tall
        connectFourColumns: 7, // how wide
        currentPlayer: 'ONE',
        connectFourWinner: '',
    }

    startGame = () => {
        const matrix = []
        for(let i = 0; i < this.state.connectFourRows; i++){
            matrix.push([]);
            for(let j = 0; j < this.state.connectFourColumns; j++){
                matrix[i].push(this.playerIcon.BLANK);
            }
        }

        this.setState({
            ...this.state,
            connectFourBoard: matrix,
            connectFourStart: true,
            connectFourWinner: '',
            currentPlayer: 'ONE',
        })
    }

    // First: Be able to render a connect four board
    renderConnectFourBoard = () => {
        const playButtons = []

        for(let idx=0; idx < this.state.connectFourColumns; idx++){
            playButtons.push(
                <td id={`footer-td-${idx}`} key={`footer-td-${idx}`}>
                    <button onClick={() => this.makePlay(idx)} disabled={this.state.connectFourWinner}>Play in Column {idx}</button>
                </td>
            );
        }

        return (
            <table>
                <tbody>
                    {this.state.connectFourBoard.map((row, rowIdx) => {
                        return(
                            <tr id={`row-${rowIdx}`} key={`row-${rowIdx}`}>
                                {row.map((cell, cellIdx) => {
                                    return(
                                        <td 
                                            id={`cell-${cellIdx}`} 
                                            key={`cell-${cellIdx}`}
                                        >
                                            {cell}
                                        </td>
                                    )
                                })}
                            </tr>
                        )
                    })}
                </tbody>
                <tfoot>
                    <tr>
                        {playButtons}
                    </tr>
                </tfoot>
            </table>
        )
    }

    // Second: Be able to make moves in that board
    makePlay = (rowIndex) => {
        // Check if column has room
        for(let i = this.state.connectFourRows - 1; i >= 0; i--){
            if(this.state.connectFourBoard[i][rowIndex] === this.playerIcon.BLANK){
                const newBoard = this.state.connectFourBoard;

                newBoard[i][rowIndex] = this.playerIcon[this.state.currentPlayer.toString()];

                const result = this.scoreMove(i, rowIndex);

                const newState = {
                    ...this.state,
                    connectFourBoard: newBoard
                }

                if(result){
                    newState['connectFourWinner'] = this.state.currentPlayer;
                } else {
                    newState['currentPlayer'] = this.state.currentPlayer === 'ONE' ? 'TWO' : 'ONE'
                }

                this.setState(newState);

                break;
            }
        }
    }

    // Third be able to score moves on the board
    scoreMove = (columnIndex, rowIndex) => {
        // Column index refers to the height, ie which row the cell is in
        // row index refers to where in the row the value was found
        // To score, you must have made 4 moves in a row in 3 possible orientations
        // You would want to count the consecutive plays from the same player in both directions 
        // until you hit a play from the other player
        let counter = 1;
        let iterator = 1;
        let stopLeft = false;
        let stopRight = false;

        // Up and down (ie column) so board[columnIndex+-1][rowIndex]
        while(true){
            if(columnIndex - iterator >= 0 && !stopLeft){
                if(this.state.connectFourBoard[columnIndex - iterator][rowIndex] === this.playerIcon[this.state.currentPlayer.toString()]){
                    counter++;
                } else {
                    stopLeft = true;
                }
            } else {
                stopLeft = true;
            }

            if(columnIndex + iterator < this.state.connectFourRows && !stopRight){
                if(this.state.connectFourBoard[columnIndex + iterator][rowIndex] === this.playerIcon[this.state.currentPlayer.toString()]){
                    counter++;
                } else {
                    stopRight = true;
                }
            } else {
                stopRight = true;
            }

            if((stopLeft && stopRight) || counter === 4){
                break;
            }

            iterator++;
        }

        if(counter === 4){
            return true;
        }

        // Reset:
        counter = 1;
        iterator = 1;
        stopLeft = false;
        stopRight = false;
    
        // left and right (ie in the same row) so board[columnIndex][rowIndex+-1]
        while(true){
            if(rowIndex - iterator >= 0 && !stopLeft){
                if(this.state.connectFourBoard[columnIndex][rowIndex - iterator] === this.playerIcon[this.state.currentPlayer.toString()]){
                    counter++;
                } else {
                    stopLeft = true;
                }
            } else {
                stopLeft = true;
            }

            if(rowIndex + iterator < this.state.connectFourColumns && !stopRight){
                if(this.state.connectFourBoard[columnIndex][rowIndex + iterator] === this.playerIcon[this.state.currentPlayer.toString()]){
                    counter++;
                } else {
                    stopRight = true;
                }
            } else {
                stopRight = true;
            }

            if((stopLeft && stopRight) || counter === 4){
                break;
            }

            iterator++;
        }

        if(counter === 4){
            return true;
        }

        // Diagonal (up and to the right, down and to the right, etc ) so board[columnIndex+-1][rowIndex+-1]
        // Since we build the matrix upside down, row and column will actually move opposite from each other
        // ie we start at 5, 0 not 0,0
        // and move to 4,1 => 3,2 => 2,3
        // Reset:
        counter = 1;
        iterator = 1;
        stopLeft = false;
        stopRight = false;

        // Reminder connectFourRows is how TALL
        // connectFourRows ==> how WIDE
        while(true){
            if(rowIndex - iterator >= 0 && columnIndex + iterator < this.state.connectFourRows && !stopLeft){
                if(this.state.connectFourBoard[columnIndex + iterator][rowIndex - iterator] === this.playerIcon[this.state.currentPlayer.toString()]){
                    counter++;
                } else {
                    stopLeft = true;
                }
            } else {
                stopLeft = true;
            }

            if(rowIndex + iterator < this.state.connectFourColumns && columnIndex - iterator >= 0 && !stopRight){
                if(this.state.connectFourBoard[columnIndex - iterator][rowIndex + iterator] === this.playerIcon[this.state.currentPlayer.toString()]){
                    counter++;
                } else {
                    stopRight = true;
                }
            } else {
                stopRight = true;
            }

            if((stopLeft && stopRight) || counter === 4){
                break;
            }

            iterator++;
        }

        if(counter === 4){
            return true;
        }
    }

    render(){
        return (
            <div className="gamesPage">
                <h2>Games</h2>
                <p>Have you ever been asked to program Connect Four during an interview? I have!</p>
                <p>Thought it might be fun to do on my own time and make it interactive as well.</p>

                <button onClick={this.startGame}>Start Game</button>

                {this.state.connectFourStart && <div>
                    {this.renderConnectFourBoard()}
                    <p>
                        Current Player: {this.state.currentPlayer.toLowerCase()}
                    </p>
                    {this.state.connectFourWinner && <p>
                        Player {this.state.connectFourWinner.toLowerCase()} has won!
                    </p>}
                </div>}
            </div>
        )
    }
}

export default GamesPage;