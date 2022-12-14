let openForm = false;

document.getElementById('addBlock')?.addEventListener('click', () => {
    if(openForm == false)
    {
        document.getElementById('addBlock').innerText = 'Закрыть';
        document.getElementById('form').classList.remove('hidden');
        document.getElementById('form').classList.add('block');
        openForm = true;
    }
    else
    {

        if (document.location.pathname == '/profile/my_aplications')
        {
            document.getElementById('addBlock').innerText = 'Добавить заявку';
        }
        else
        {
            document.getElementById('addBlock').innerText = 'Добавить питомца';
        }
        document.getElementById('form').classList.add('hidden');
        document.getElementById('form').classList.remove('block');
        openForm = false;
    }
});

document.getElementById('date').addEventListener('click', () => {
    document.getElementById('date').type = 'date';
});

document.getElementById('date').addEventListener('blur', () => {
    document.getElementById('date').type = 'text';
});

document.getElementById('time')?.addEventListener('click', () => {
    document.getElementById('time').type = 'time';
});

document.getElementById('time')?.addEventListener('blur', () => {
    document.getElementById('time').type = 'text';
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

document.getElementById('maleM')?.addEventListener('click', () =>{
    chekRadioMaleM();
});
document.getElementById('maleW')?.addEventListener('click', () =>{
    chekRadioMaleW();
});

document.getElementById('maleM_label')?.addEventListener('click', () => {
    document.getElementById('maleM').checked = true;
    document.getElementById('maleW').checked = false;
});
document.getElementById('maleW_label')?.addEventListener('click', () => {
    document.getElementById('maleW').checked = true;
    document.getElementById('maleM').checked = false;
});
