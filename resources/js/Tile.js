export  default class Tile {
    letter = '';
    status = '' // corect,present, absent

    fill(key){
        this.letter = key.toLowerCase();
    }
    empty(){
        this.letter = '';
    }
}
