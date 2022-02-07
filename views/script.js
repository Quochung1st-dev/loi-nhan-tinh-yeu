/*
WHAT DO YOU WANT BRO ? 
contact me: https://www.facebook.com/quyensb1509/
*/

function getRandomArbitrary(_0xf028x2, _0xf028x3) {
    return Math['floor'](Math['random']() * (_0xf028x3 - _0xf028x2)) + _0xf028x2
}

function chayngay() {
    setInterval(function() {
        var _0xf028x5 = $(document)['height']();
        var _0xf028x6 = $(document)['width']();
        var _0xf028x7 = getRandomArbitrary(0, _0xf028x6);
        var _0xf028x8 = getRandomArbitrary(4000, 6000);
        var _0xf028x9 = Math['random']() * (1 - 0.2) + 0.2;
        var _0xf028xa = getRandomArbitrary(5, 20);
        var _0xf028xb = getRandomArbitrary(_0xf028x7 - 100, _0xf028x7 + 100);
        var _0xf028xc = document['createElement']('span');
        $(_0xf028xc)['addClass']('snow-item fa fa-heart')['css']({
            '\x70\x6F\x73\x69\x74\x69\x6F\x6E': 'absolute',
            '\x7A\x2D\x69\x6E\x64\x65\x78': 'auto',
            '\x63\x6F\x6C\x6F\x72': '#ff0000',
            '\x64\x69\x73\x70\x6C\x61\x79': 'block',
            '\x74\x6F\x70': 0,
            '\x6C\x65\x66\x74': _0xf028x7,
            '\x6F\x70\x61\x63\x69\x74\x79': _0xf028x9,
            '\x66\x6F\x6E\x74\x2D\x73\x69\x7A\x65': _0xf028xa + 'px',
            '\x70\x61\x64\x64\x69\x6E\x67': '12px'
        })['appendTo']('body')['animate']({
            '\x74\x6F\x70': _0xf028x5 - _0xf028xa,
            '\x6C\x65\x66\x74': _0xf028xb
        }, {
            duration: _0xf028x8,
            easing: 'linear',
            complete: function() {
                $(this)['fadeOut']('fast', function() {
                    $(this)['remove']()
                })
            }
        })
    }, 500)
}
$(document)['ready'](function() {
    $['ajax']()['done'](function() {
        $('#loading')['fadeOut'](1000)
    })['fail'](function() {
        console['log']('error')
    });
    $('#btn-matkhau')['click'](function(_0xf028xd) {
        let _0xf028xe = $('#password');
        let _0xf028xf = $('#error-mess');
        let _0xf028x10 = $(this)['data']('id');
        if (_0xf028xe['val']() == '') {
            _0xf028xe['focus']();
            _0xf028xf['html']('B\u1EA1n \u01A1i qu\xEAn nh\u1EADp m\u1EADt kh\u1EA9u n\xE8 \u2764')['css']('color', 'red')
        } else {
            $['ajax']({
                url: 'ajax.php',
                type: 'POST',
                data: {
                    password: _0xf028xe['val'](),
                    id: _0xf028x10
                },
                beforeSend: () => {
                    $('#btn-matkhau')['html']('\u0110ang x\u1EED l\xFD....')['attr']('disabled', 'true')
                }
            })['done'](function(_0xf028x11) {
                $('#btn-matkhau')['html']('\u0110\u1ED3ng \xFD')['removeAttr']('disabled');
                obj = JSON['parse'](_0xf028x11);
                if (obj['status'] == 99) {
                    $('.box')['fadeOut']('fast');
                    $('.flower-footer')['css']('opacity', 1);
                    $('#sun')['css']('opacity', 1);
                    setTimeout(() => {
                        $('#bee')['css']({
                            '\x6F\x70\x61\x63\x69\x74\x79': 1,
                            '\x61\x6E\x69\x6D\x61\x74\x69\x6F\x6E\x2D\x6E\x61\x6D\x65': 'bee_fly',
                            '\x61\x6E\x69\x6D\x61\x74\x69\x6F\x6E\x2D\x64\x75\x72\x61\x74\x69\x6F\x6E': '10s',
                            '\x61\x6E\x69\x6D\x61\x74\x69\x6F\x6E\x2D\x66\x69\x6C\x6C\x2D\x6D\x6F\x64\x65': 'forwards'
                        })
                    }, 1000);
                    setTimeout(() => {
                        $('.letter')['show'](500, function() {
                            $('#bee')['hide']('fast')
                        })
                    }, 10000)
                } else {
                    _0xf028xf['html'](obj['messages'])['css']('color', 'red')
                }
            })['fail'](function() {
                console['log']('error')
            })
        }
    });
    $('#password')['keyup'](function(_0xf028xd) {
        $('#error-mess')['html']('M\u1EADt kh\u1EA9u ph\u1EA3i ghi li\u1EC1n kh\xF4ng d\u1EA5u*')['css']('color', '#979797')
    });
    $('.letter')['click'](function(_0xf028xd) {
        $('.letter')['hide']('fast', function() {
            $('.box2')['addClass']('animate__backInUp')['show'](400);
            chayngay()
        })
    })
})