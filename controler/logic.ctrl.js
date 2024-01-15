class Noeud extends Phaser.GameObjects.Container {
    constructor(scene, x, y, grid, posX, posY, id) {
        super(scene, x, y);

        this.grid = grid
        this.posX = posX;
        this.posY = posY;
        this.id = id;
        this.type = "blank";
        this.input = [];
        this.output = [];
        this.state = false;
        this.image = scene.add.image(x, y, "blank");

    }
}

class Diode extends Noeud {
    constructor(scene, x, y, grid, posX, posY, id) {
        super(scene, x, y, grid, posX, posY, id);

        this.type = "start";
        this.input = null;
        this.output = [(this.posX + 1)];
        this.state = true;
        this.color = 0x00ff00;
        this.rect = scene.add.rectangle(x, y, this.grid.cellSize, this.grid.cellSize, this.color);    // A dissocier plus tard;
        this.image = scene.add.image(x, y, "diode");

    }
}

class Cable extends Noeud {
    constructor(scene, x, y, grid, posX, posY, id) {
        super(scene, x, y, grid, posX, posY, id);

        this.type = "cable";
        this.input = this.RetrieveInputs();
        this.output = this.RetrieveOutputs();
        this.color = 0xff0000;
        this.state = this.CheckStatus(this.input);
        this.rect = scene.add.rectangle(x, y, this.grid.cellSize, this.grid.cellSize, this.color);    // A dissocier plus tard;
        this.image = scene.add.image(x, y, "cable");
    }

    RetrieveInputs() {
        return this.grid.NodeAtPos(this.posX - 1, this.posY);
    }

    RetrieveOutputs() {
        return this.grid.NodeAtPos(this.posX + 1, this.posY);
    }

    CheckStatus(input) {
        if (input) {
            if (input.state == true) {
                this.color = 0x00ff00;
                return true;
            }
        }
    }
}

class Join extends Noeud {
    constructor(scene, x, y, grid, posX, posY, id) {
        super(scene, x, y, grid, posX, posY, id);

        this.type = "join";
        this.input = this.RetrieveInputs();
        this.output = this.RetrieveOutputs();
        this.inputsStatus = this.CheckStatus(this.input);
        this.rect = this.ConstructRects(this.inputsStatus);
        this.image = scene.add.image(x, y, "join-left");
    }

    RetrieveInputs() {
        return [this.grid.NodeAtPos(this.posX, this.posY - 1), this.grid.NodeAtPos(this.posX, this.posY + 1)];
    }

    RetrieveOutputs() {
        return this.grid.NodeAtPos(this.posX + 1, this.posY);
    }

    CheckStatus() {
        let status = [];
        if (this.input[0] && this.input[1]) {        //VERIFIER TOUT LES VALEURS POSSIBLES
            status[0] = this.input[0].status;
            status[1] = this.input[1].status;
        }
    }

    ConstructRects(status) {
        if (status[0] == status[1] == true) {
            this.rect = scene.add.rectangle(x, y, this.grid.cellSize, this.grid.cellSize, 0x00ff00);
        } else if (status[0] == status[1] == false) {
            this.rect = scene.add.rectangle(x, y, this.grid.cellSize, this.grid.cellSize, 0xff0000);
        }
        else if (status[0] == true && status[1] == false) {
            let size = this.grid.cellSize / 2;
            this.rect = scene.add.rectangle(x, y, this.grid.cellSize / 2, this.grid.cellSize / 2, 0x00ff00);
            this.rect = scene.add.rectangle(x, y + size, this.grid.cellSize / 2, this.grid.cellSize / 2, 0xff0000);
        }
        else {
            let size = this.grid.cellSize / 2;
            this.rect = scene.add.rectangle(x, y, this.grid.cellSize / 2, this.grid.cellSize / 2, 0xff0000);
            this.rect = scene.add.rectangle(x, y + size, this.grid.cellSize / 2, this.grid.cellSize / 2, 0x00ff00);
        }
    }
}

class Grid {
    constructor(scene, gridSize) {
        this.scene = scene
        this.gridSize = gridSize;
        this.cellSize = 100;
        this.cells = []
    }

    InitPatern(param) {
        for (let i = 0; i < this.gridSize; i++) {
            for (let j = 0; j < this.gridSize; j++) {

                const x = j * this.cellSize + 100;
                const y = i * this.cellSize + 100;


                try {
                    let item = param[i][j];

                    switch (item) {
                        case "blank":
                            this.cells.push(new Noeud(this.scene, x, y, this, j, i, (5 * i) + j));
                            break;
                        case "diode":
                            this.cells.push(new Diode(this.scene, x, y, this, j, i, (5 * i) + j));
                            break;
                        case "cable":
                            this.cells.push(new Cable(this.scene, x, y, this, j, i, (5 * i) + j));
                            break;
                        case "join-left":
                            this.cells.push(new Join(this.scene, x, y, this, j, i, (5 * i) + j));
                            break;
                    }
                } catch (error) {
                    this.cells.push(new Noeud(this.scene,x,y,this,j,i, (5*i) + j));
                }

            }
        }
    }

    NodeAtPos(x, y) {
        let found = null
        this.cells.forEach(node => {
            if (node.posX == x && node.posY == y) {
                found = node;
            }
        })
        return found;
    }

    get nodes() {
        return this.cells;
    }
}

let test = [
    ["diode", "cable", "join-left"],
    ["blank", "cable"]
]

let conf = [
    ["diode", "cable", "turn-left-down", "blank", "blank"],
    ["blank", "blank", "join-left", "XOR", "cable"],
    ["diode", "cable", "turn-left-up", "blank", "blank"],
    ["blank", "blank", "blank", "blank", "blank"],
    ["diode", "blank", "blank", "blank", "blank"],
];


var config = {
    type: Phaser.AUTO,
    width: 1300,
    height: 900,
    scene: {
        preload: preload,
        create: create,
        update: update
    }
};


var game = new Phaser.Game(config);

function preload() {
    const progress = this.add.graphics();

    this.load.on('progress', value => {

        progress.clear();
        progress.fillStyle(0xffffff, 1);
        progress.fillRect(0, 270, 800 * value, 60);

    });

    this.load.on('complete', () => {

        progress.destroy();

    });

    this.load.image('cable', '../assets/LogicGateGame/Cable.png');
    this.load.image('diode', '../assets/LogicGateGame/Diode.png');
    this.load.image('blank', '../assets/LogicGateGame/Blank.png');
    this.load.image('turn-left-down', '../assets/LogicGateGame/turn-left-down.png');
    this.load.image('turn-left-up', '../assets/LogicGateGame/turn-left-up.png');
    this.load.image('turn-right-down', '../assets/LogicGateGame/turn-right-down.png');
    this.load.image('turn-right-up', '../assets/LogicGateGame/turn-right-up.png');
    this.load.image('join-left', '../assets/LogicGateGame/join-left.png');
    this.load.image('XOR', '../assets/LogicGateGame/XOR.png');
    this.load.image('AND', '../assets/LogicGateGame/AND.png');
};




function create() {

    let grid = new Grid(this, 5);
    grid.cells = grid.InitPatern(test);

};


function update() {

};
