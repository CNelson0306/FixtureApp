
let players = [
    ' ',
    'AG',
    'AJ',
    'MC',
    'TC',
    'MQ',
    'SC',
    'IC',
    'EM',
    'KN',
    'JN',
    'CL',
    'FM',
    'OC',
    'KM',
    'EK',
    'JR',
    'TR',
    'JKO',
    'JD',
    'KC',
    'RJ',
    'LM'
]
let player = players.sort();

var option = "";
for(var i = 0; i < player.length; i ++) {
    option += '<option value="' + player[i] + '">' + player[i] + "</option>"

}

document.getElementById('motm1').innerHTML = option
document.getElementById('motm2').innerHTML = option
document.getElementById('motm3').innerHTML = option
document.getElementById('motm4').innerHTML = option
document.getElementById('motm5').innerHTML = option
document.getElementById('motm6').innerHTML = option
document.getElementById('motm7').innerHTML = option
document.getElementById('motm8').innerHTML = option
document.getElementById('motm9').innerHTML = option
document.getElementById('motm10').innerHTML = option
document.getElementById('motm11').innerHTML = option
document.getElementById('motm12').innerHTML = option
document.getElementById('motm13').innerHTML = option
document.getElementById('motm14').innerHTML = option
document.getElementById('motm15').innerHTML = option
document.getElementById('motm16').innerHTML = option
document.getElementById('motm17').innerHTML = option
document.getElementById('motm18').innerHTML = option
document.getElementById('motm19').innerHTML = option
document.getElementById('motm20').innerHTML = option

    

