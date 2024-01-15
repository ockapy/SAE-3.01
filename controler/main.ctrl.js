var config = {
    type: Phaser.AUTO,
    parent: 'secTwo',
    width: 1300,
    height: 900,
    scene: {
        preload: preload,
        create: create,
        update: update
    }
};

var game = new Phaser.Game(config);

function preload ()
{
    this.load.image('stars', '../assets/galaxy.jpg');
    this.load.image('start','../assets/button_start.png')
}

function create ()
{
    background = this.add.image(400,300,'stars');
    button = this.add.image(900,650,'start');

    button.setInteractive({useHandCursor: true});

    button.on('pointerover', () => {console.log("over");});
    button.on('pointerdown', () => {window.open("./logic.ctrl.php")})
}

function update ()
{

}
