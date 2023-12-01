const invoice = document.getElementById('invoice')

const quantityBtnArr = document.getElementsByClassName('quantity');


for (const quantityBtn of quantityBtnArr) {
    changeQuantityHandler(quantityBtn)
}

function changeQuantityHandler(quantityBtn) {
    quantityBtn.addEventListener('change', function () {
        // Access the current value of the input
        const parentForm = quantityBtn.parentNode
        let currentValue = quantityBtn.value;

        parentForm.submit()
    });
}

const checkBtnArr = document.getElementsByClassName('itemCheckbox')

for (const checkBtn of checkBtnArr) {
    checkBtnHandler(checkBtn)
}

function checkBtnHandler(checkBtn) {
    checkBtn.addEventListener("change", function () {
            reloadInvoice();
    });
}


function reloadInvoice() {
    const tableRows = document.getElementsByClassName('tableRow');
    let checkedRows = [];

    //kiểm tra row nào được check
    for (const row of tableRows) {
        const checkbox = row.querySelector('.itemCheckbox');
        if (checkbox.checked) {
            checkedRows.push(row);
        }
    }


    let provisional = 0
        , total = 0

    for (const row of checkedRows) {
        provisional += toNumber(row.querySelector('#spthanhtien').textContent)

        total += toNumber(row.querySelector('#spthanhtien').textContent)

    }

    const provisionalField = document.getElementById('tamtinh')
    const totalField = document.getElementById('tongcong')

    provisionalField.textContent = addThousandSeparator(provisional)
    totalField.textContent = addThousandSeparator(total)
}

function toNumber(string) {
    // Remove dots from the string
    var stringWithoutDots = string.replace(/\./g, '');

    // Convert the string to a number
    var resultNumber = parseFloat(stringWithoutDots);

    return resultNumber;
}

function addThousandSeparator(number) {
    // Use a regular expression to add commas as thousand separators
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
