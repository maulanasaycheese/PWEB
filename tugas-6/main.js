const board = document.getElementById('board');
const resetButton = document.getElementById('reset');
let currentPlayer = 'X';
let boardState = ['', '', '', '', '', '', '', '', ''];

function createBoard() {
    board.innerHTML = '';
    boardState.forEach((cell, index) => {
        const cellElement = document.createElement('div');
        cellElement.classList.add('cell');
        cellElement.textContent = cell;
        cellElement.addEventListener('click', () => makeMove(index));
        board.appendChild(cellElement);
    });
}

function makeMove(index) {
    if (boardState[index] === '' && !checkWinner()) {
        boardState[index] = currentPlayer;
        if (checkWinner()) {
            setTimeout(() => alert(`${currentPlayer} menang!`), 100);
        } else if (boardState.every(cell => cell !== '')) {
            setTimeout(() => alert('Seri!'), 100);
        }
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        createBoard();
    }
}

function checkWinner() {
    const winningCombinations = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6],
    ];
    
    return winningCombinations.some(combination => {
        const [a, b, c] = combination;
        return boardState[a] && boardState[a] === boardState[b] && boardState[a] === boardState[c];
    });
}

resetButton.addEventListener('click', () => {
    boardState = ['', '', '', '', '', '', '', '', ''];
    currentPlayer = 'X';
    createBoard();
});

createBoard();