// labelPart() proxy

SyntaxElementMorph.prototype.originalLabelPart = SyntaxElementMorph.prototype.labelPart;
SyntaxElementMorph.prototype.labelPart = function(spec) {
    var part,
        block = this;

    switch (spec) {
        case '%servoValue':
            part = new InputSlotMorph(
                    null,
                    false,
                    {
                        'angle (0-180)' : [90],
                        'stopped (1500)' : ['stopped'], 
                        'clockwise (1500-1000)' : ['clockwise'],
                        'counter-clockwise (1500-2000)' : ['counter-clockwise'],
                        'disconnected' : ['disconnected']
                    }
                    );
            break;
        case '%pinMode':
            part = new InputSlotMorph(
                    null,
                    false,
                    {
                        'digital input' : ['digital input'],
                        'digital output' : ['digital output'] ,
                        'PWM' : ['PWM'],
                        'servo' : ['servo']
                    },
                    true
                    );
            break;
        case '%digitalPin':  // All digitals have modes INPUT, OUTPUT, SERVO AND PULLUP
            part = new InputSlotMorph(
                    null,
                    true,
                    function() { 
                        // Get board associated to currentSprite
                        var sprite = ide.currentSprite,
                            board = sprite.arduino.board;

                        if (board) {
                            return sprite.arduino.pinsSettableToMode(board.MODES.INPUT);
                        } else {
                            return [];
                        }
                    }
                    );
            part.originalChanged = part.changed;
            part.changed = function () { part.originalChanged(); if (block.toggle) { block.toggle.refresh(); } };
            break;
        case '%pwmPin':
            part = new InputSlotMorph(
                    null,
                    true,
                    function() { 
                        // Get board associated to currentSprite
                        var sprite = ide.currentSprite,
                            board = sprite.arduino.board;

                        if (board) {
                            // Can't use map because we need to construct keys dynamically
                            var pins = {};
                            Object.keys(sprite.arduino.pinsSettableToMode(board.MODES.PWM)).forEach(function (each) { pins[each + '~'] = each });
                            return pins;
                        } else {
                            return [];
                        }
                    }
                    );
            break;
        case '%analogPin':
            part = new InputSlotMorph(
                    null,
                    true,
                    function() { 
                        // Get board associated to currentSprite
                        var sprite = ide.currentSprite,
                            board = sprite.arduino.board;
                        
                        if (board) { 
                            return board.analogPins.map(
                                    function (each){
                                        return (each - board.analogPins[0]).toString();
                                    });
                        } else { 
                            return [];
                        } 
                    }
                    );
            part.originalChanged = part.changed;
            part.changed = function () { part.originalChanged(); if (block.toggle) { block.toggle.refresh(); } };
            break;
        default:
            part = this.originalLabelPart(spec);
    }
    return part;
};

BlockMorph.prototype.originalUserMenu = BlockMorph.prototype.userMenu;
BlockMorph.prototype.userMenu = function () {
    var menu = this.originalUserMenu();
    if (StageMorph.prototype.enableCodeMapping && this.selector == 'receiveGo') {
        menu.addLine();
        menu.addItem(
                'export as Arduino sketch...',
                'transpileToC'
                );
    }
    return menu;
};

BlockMorph.prototype.transpileToC = function () {
    var ide = this.parentThatIsA(IDE_Morph),
        safeChars = {"??": "a", "??": "a", "??": "a",
                     "??": "e", "??": "e", "??": "e",
                     "??": "i", "??": "i", "??": "i",
                     "??": "o", "??": "o", "??": "o",
                     "??": "u", "??": "u", "??": "u",
                     "??": "A", "??": "A", "??": "A",
                     "??": "E", "??": "E", "??": "E",
                     "??": "I", "??": "I", "??": "I",
                     "??": "O", "??": "O", "??": "O",
                     "??": "U", "??": "U", "??": "U",
                     "??":"c", "??": "C", "??": "n", "??": "N"},
        fileName = ide.projectName || 'snap4arduino';

    fileName = fileName.replace(/[^\w ]/g, function(char) {
        return safeChars[char] || char;
    });
    fileName = fileName.replace(/ /g,'_')
    fileName = fileName.replace(/[^a-zA-Z0-9_]/g,'');
    try {
        ide.saveFileAs(
                this.world().Arduino.transpile(
                    this.mappedCode(),
                    this.parentThatIsA(ScriptsMorph).children.filter(
                        function (each) {
                            return each instanceof HatBlockMorph &&
                                each.selector == 'receiveMessage';
                        })),
                'application/ino;chartset=utf-8',
                fileName);
    } catch (error) {
        ide.inform('Error exporting to Arduino sketch!', error.message)
    }
};
