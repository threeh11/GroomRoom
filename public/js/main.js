let openForm = false;

document.getElementById('addBlockPets')?.addEventListener('click', () => {
    if(openForm == false)
    {
        document.getElementById('addBlockPets').innerText = 'Закрыть';
        document.getElementById('formAddPets').classList.remove('hidden');
        document.getElementById('formAddPets').classList.add('block');
        openForm = true;
    }
    else
    {
        document.getElementById('addBlockPets').innerText = 'Добавить питомца';
        document.getElementById('formAddPets').classList.add('hidden');
        document.getElementById('formAddPets').classList.remove('block');
        openForm = false;
    }
});

document.getElementById('date').addEventListener('click', () => {
    document.getElementById('date').type = 'date';
});

document.getElementById('date').addEventListener('blur', () => {
    document.getElementById('date').type = 'text';
});

//Работа с radio button
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
});
document.getElementById('maleW').addEventListener('click', () =>{
    chekRadioMaleW();
});

document.getElementById('maleM_label').addEventListener('click', () => {
    document.getElementById('maleM').checked = true;
    document.getElementById('maleW').checked = false;
});
document.getElementById('maleW_label').addEventListener('click', () => {
    document.getElementById('maleW').checked = true;
    document.getElementById('maleM').checked = false;
});
