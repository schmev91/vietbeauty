

try {
    const changingAddressBtn = document.getElementById('changingAddress-btn')
        , addressInput = document.querySelector('#address .form-control')

    let disableClasses = ['bg-light', 'border-0', 'border-3', 'border-start', 'rounded-0']

    changingAddressBtn.addEventListener('click', toggleAddressInput)

    function toggleAddressInput() {
        disableClasses.forEach(className => {
            addressInput.classList.toggle(className);
        });

        addressInput.toggleAttribute('disabled')
        changingAddressBtn.remove()
    }

} catch (error) {

}
