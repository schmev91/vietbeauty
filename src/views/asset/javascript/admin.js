const disableClasses = [
    'bg-none'
    , 'border-0'
    , 'text-white'
]

const updateBtnArr = document.getElementsByClassName('updateBtn')
if (updateBtnArr.length) {
    for (const btn of updateBtnArr) {
        btn.addEventListener('click', toggleUpdate)
    }
}

function toggleInput(element) {
    disableClasses.forEach(className => {
        element.classList.toggle(className);
    });

    element.toggleAttribute('disabled')
}
function toggleElement(element) {
    element.toggleAttribute('hidden')

}
function toggleUpdate(e) {
    const parentTag = e.target.parentElement.parentElement
    , inputArr = parentTag.querySelectorAll('input')
    , selectArr = parentTag.querySelectorAll('select')
    
    //Ẩn nút update
    toggleElement(e.target)
    //Hiện nút save
    toggleElement(e.target.parentElement.querySelector('.saveBtn'))
    
    inputArr.forEach(toggleInput)
    selectArr.forEach(toggleInput)
}