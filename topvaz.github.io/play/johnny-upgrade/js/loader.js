var LoaderState = {
    preload: function() {
        addFocusAndDesktopDetection();
        this.game.input.keyboard.addKeyCapture(Phaser.Keyboard.SPACEBAR);
        world = this;
        this.scale.scaleMode = Phaser.ScaleManager.SHOW_ALL;
        this.scale.pageAlignHorizontally = true;
        this.scale.pageAlignVertically = true;
        game.stage.backgroundColor = "#000000";
        this.lode = this.add.sprite(this.game.world.centerX, this.game.world.centerY, 'loading1');
        this.lode.anchor.setTo(0.5);
        this.preloadBar = this.add.sprite(this.game.world.centerX - 200, this.game.world.centerY, 'preloadBar');
        this.preloadBar.anchor.setTo(0, 0.5);
        this.preloadBar.sendToBack();
        this.lode.sendToBack();
        this.load.setPreloadSprite(this.preloadBar);
        var pth = 'assets/pics/';
        game.load.spritesheet('sprt', pth + 'sheetSprite.png', 200, 200);
        game.load.spritesheet('sprtGun', pth + 'sheetSpriteGun.png', 200, 200);
        game.load.spritesheet('coin', pth + 'sheetCoin.png', 60, 60);
        game.load.spritesheet('coinSymbol', pth + 'sheetCoinSymbol.png', 60, 60);
        game.load.spritesheet('platMove', pth + 'platMove.png', 220, 120);
        game.load.spritesheet('sheetBomb', pth + 'sheetBomb.png', 140, 150);
        game.load.spritesheet('sheetExplo1', pth + 'sheetExplo1.png', 320, 300);
        game.load.spritesheet('sheetHeart', pth + 'sheetHeart.png', 50, 50);
        game.load.spritesheet('sheetRobot', pth + 'sheetRobot.png', 160, 150);
        game.load.spritesheet('sheetSaw', pth + 'sheetSaw.png', 120, 120);
        game.load.spritesheet('sheetGunSymb', pth + 'sheetGunSymb.png', 120, 120);
        game.load.spritesheet('sheetBulletSplat', pth + 'sheetBulletSplat.png', 160, 220);
        game.load.spritesheet('sheetSplatterRobot', pth + 'sheetSplatterRobot.png', 160, 160);
        game.load.spritesheet('sheetSplatterBomb', pth + 'sheetSplatterBomb.png', 140, 140);
        game.load.spritesheet('sheetPad', pth + 'sheetPad.png', 120, 320);
        loadSpritesheet('sheetShopPanelDesktop', 620, 55);
        loadSpritesheet('sheetShopPanelMobile', 620, 55);
        loadSpritesheet('sheetTimeUp', 640, 160);
        loadSpritesheet('sheetBoss', 400, 320);
        loadSpritesheet('sheetBossGun', 240, 80);
        loadSpritesheet('sheetExplo2', 160, 160);
        loadSpritesheet('sheetBossBullet', 60, 60);
        loadSpritesheet('sheetBossBulletDD', 120, 120);
        loadSpritesheet('sheetBossSplatter', 420, 280);
        loadSpritesheet('btnReset', 100, 100);
        loadSpritesheet('btnMu', 100, 100);
        loadSpritesheet('btnFX', 100, 100);
        loadSpritesheet('btnSettings', 100, 100);
        game.load.image('plat', 'assets/pics/plat.gif');
        game.load.image('pauseBG', 'assets/pics/pauseBG.png');
        game.load.image('lvlGrfx1', pth + 'lvlGrfx1.png');
        game.load.image('lvlGrfx2', pth + 'lvlGrfx2.png');
        game.load.image('lvlGrfx3', pth + 'lvlGrfx3.png');
        game.load.image('lvlGrfx4', pth + 'lvlGrfx4.png');
        game.load.image('lvlGrfx5', pth + 'lvlGrfx5.png');
        game.load.image('lvlGrfx6', pth + 'lvlGrfx6.png');
        game.load.image('bg0', pth + 'bg0.png');
        game.load.image('bg1', pth + 'bg1.png');
        game.load.image('bg2', pth + 'bg2.png');
        game.load.image('stomper', pth + 'stomper.png');
        game.load.image('laser', pth + 'laser.png');
        game.load.image('bullet', pth + 'bullet.png');
        game.load.image('dspGun', pth + 'dspGun.png');
        game.load.image('shopBG', pth + 'shopBG.png');
        game.load.image('btnShopHome', pth + 'btnShopHome.png');
        game.load.image('btnShopPlay', pth + 'btnShopPlay.png');
        loadImage('shopPanelBG');
        loadImage('shopPanelLock');
        loadImage('qm');
        loadImage('shopJohnny');
        loadImage('door');
        loadImage('bossPowScale');
        loadImage('bossPowBorder');
        loadImage('goTheEnd');
        loadImage('goText');
        loadImage('goJoe');
        loadImage('goCloud3');
        loadImage('goCloud2');
        loadImage('goCloud1');
        loadImage('goMask1');
        loadImage('goMask2');
        loadImage('btnGOHome');
        loadImage('btnSkull');
        loadImage('titleBG0');
        loadImage('titleBG1');
        loadImage('titleBGLogo');
        loadImage('titleJohnny');
        loadImage('titleCloud1');
        loadImage('titleCloud2');
        loadImage('titleCloud3');
        loadImage('btnTitlePlay');
        loadImage('btnHome');
        loadImage('btnResetCheck');
        loadImage('resetBG');
        loadAudioWav('fxJump');
        loadAudioWav('fxYykes');
        loadAudioWav('fxQuake');
        loadAudioWav('fxBomb1');
        loadAudioWav('fxBomb2');
        loadAudioWav('fxStep1');
        loadAudioWav('fxStep2');
        loadAudioWav('fxFanfare');
        loadAudioWav('fxLaser');
        loadAudioWav('fxRico');
        loadAudioWav('fxBoulder');
        loadAudioWav('fxSelect1');
        loadAudioWav('fxChing');
        loadAudioWav('fxLeaveShop');
        loadAudioWav('fxHuh');
        loadAudioWav('fxSpawnLoop');
        loadAudioWav('fxBossShoot');
        loadAudioWav('fxBossShootLoop');
        loadAudioWav('fxBoulder');
        loadAudioWav('fxYes');
        loadAudioWav('fxClick');
        loadAudioMP3('muBoss');
        loadAudioMP3('muGameOver');
        loadAudioMP3('muTitle');
        loadAudioMP3('muIngame');
    },
    create: function() {
        addLevelSFX();
        world.lode.destroy();
        world.preloadBar.destroy();
        clickFX = game.add.audio('fxClick');
        game.btnPlay = world.game.add.sprite(this.game.world.centerX, this.game.world.centerY, 'btnTitlePlay');
        game.btnPlay.anchor.setTo(0.5, 0.5);
        game.btnPlay.sendToBack();
        game.btnPlay.inputEnabled = true;
        game.btnPlay.events.onInputDown.add(startGame, this);
        var topURL = 'run';
        try {
            topURL = window.top.location.hostname.split(".").splice(-2).join('.');
        } catch (err) {}
/*
        if (arr.indexOf(topURL) < 0) {
            game.destroy();
        }
*/
        var style = {
            font: '50px gameFont',
            fill: '#FFFFFF',
            wordWrap: false,
            wordWrapWidth: null,
            align: 'center',
            backgroundColor: null
        };
        var t = game.add.text(0, 20, '1234567890', style);
        t.fontSize = 77;
        t.addColor('#FFFFFF');
        t.anchor.setTo(0, 0);
        t.visible = false;
    },
    update: function() {},
    render: function() {
        rotDeviceCheck();
    }
};
function startGame(pointer) {
    newState();
}
function loadSpritesheet(n, xx, yy) {
    var pth = 'assets/pics/';
    game.load.spritesheet(n, pth + n + '.png', xx, yy);
}
function loadImage(n) {
    var pth = 'assets/pics/';
    game.load.image(n, pth + n + '.png');
}
function loadAudioWav(n) {
    var pth = 'assets/fx/';
    game.load.audio(n, pth + n + '.wav');
}
function loadAudioMP3(n) {
    var pth = 'assets/msc/';
    game.load.audio(n, pth + n + '.mp3');
}
function addPreText(yy) {
    var style = {
        font: '50px gameFont',
        fill: '#FFFFFF',
        wordWrap: false,
        wordWrapWidth: null,
        align: 'center',
        backgroundColor: null
    };
    var t = game.add.text(0, yy, '1234567890', style);
    t.fontSize = 77;
    t.addColor('#FFFFFF');
    t.anchor.setTo(0, 0);
}
function addPreText2(yy) {
    var style = {
        font: '50px shopFont',
        fill: '#FFFFFF',
        wordWrap: false,
        wordWrapWidth: null,
        align: 'center',
        backgroundColor: null
    };
    var t = game.add.text(0, yy, '1234567890', style);
    t.fontSize = 77;
    t.addColor('#FFFFFF');
    t.anchor.setTo(0, 0);
}
