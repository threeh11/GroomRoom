function chekRadioMaleM()
{
    document.getElementById('maleM').checked = true;
    document.getElementById('maleW').checked = false; 
}

function chekRadioMaleW()
{
    document.getElementById('maleW').checked = true;
    document.getElementById('maleM').checked = false; 
}

document.getElementById('maleM').addEventListener('click', () =>{
    chekRadioMaleM();
})
document.getElementById('maleW').addEventListener('click', () =>{
    chekRadioMaleW();
})

document.getElementById('maleM_label').addEventListener('click', () => {
    document.getElementById('maleM').checked = true;
    document.getElementById('maleW').checked = false;
});
document.getElementById('maleW_label').addEventListener('click', () => {
    document.getElementById('maleW').checked = true;
    document.getElementById('maleM').checked = false;
})
