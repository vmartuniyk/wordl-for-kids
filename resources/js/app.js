let grid = document.querySelector('#game');
// the number of guesees (3)
let guessesAllow = 2;
let wordLength = 6;

//generate 3 rows
let fragment = document.createDocumentFragment();

let generateGrid = () => {

    Array.from({length: guessesAllow}).forEach(() =>{
        let row = document.createElement('div');

        row.classList.add('row');
        Array.from({length: wordLength}).forEach(() => {
            let tile = document.createElement('div');

            tile.classList.add('tile');
            row.appendChild(tile);
        })

        fragment.appendChild(row);
    })

    grid.appendChild(fragment);

}

generateGrid()
