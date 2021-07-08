const fullname = document.getElementById('fullName')
const phoneNumber = document.getElementById('phoneNumber')
const nextOfKin = document.getElementById('nextOfKin')
const nextPhoneNumber = document.getElementById('nextPhoneNumber')
const carPlateNumber = document.getElementById('plateNumber')
const carColor = document.getElementById('carColor')
const carModel = document.getElementById('carModel')
const carChassis = document.getElementById('carChassis')
const fullNameError = document.getElementById("fullNameError")
const phoneError = document.getElementById("phoneError")
const nextOfKinError = document.getElementById("nextOfKinError")
const nextOfKinPhoneError = document.getElementById("nextOfKinPhoneError")
const carPlateError = document.getElementById("carPlateError")
const carColorError = document.getElementById("carColorError")
const carModelError = document.getElementById("carModelError")
const carChassisError = document.getElementById("carChassisError")
const form = document.getElementById("myform")

function validate() {
    // fullNameError.innerHTML = ""
    const regFullname = /^[a-zA-Z][a-zA-Z\s]*$/
    const regNextOfKin = /^[a-zA-Z][a-zA-Z\s]*$/
    const regPlateNumber = /^A-ZA-ZA-Z[-]0-90-90-9A-Z $/

    let errors = 0
    if (!regFullname.test(fullname.value)) {
        fullNameError.innerHTML = 'Fullname can only contain letters and spaces'
        errors++
    } else {
        fullNameError.innerHTML = ""
    }

    if (!regNextOfKin.test(nextOfKin.value)) {
        nextOfKinError.innerHTML = 'Next of kin can only contain letters and spaces'
        errors++
    } else {
        nextOfKinError.innerHTML = ""
    }

    if (phoneNumber.value.length > 11 || phoneNumber.value.length < 11) {
        phoneError.innerHTML = 'Phone Number Must Contain 11 digits Only'
        errors++
    } else {
        phoneError.innerHTML = ""
    }

    if (nextPhoneNumber.value.length > 11 || nextPhoneNumber.value.length < 11) {
        nextOfKinPhoneError.innerHTML = 'Phone Number Must Contain 11 digits Only'
        errors++
    } else {
        nextOfKinPhoneError.innerHTML = ""
    }

    if (carPlateNumber.value.length > 9 || carPlateNumber.value.length < 9) {
        carPlateError.innerHTML = 'Plate number must contain 9 characters only'
        errors++
    } else {
        carPlateError.innerHTML = ""
    }

    if (!regPlateNumber.test(carPlateNumber.value)) {
        carPlateError.innerHTML = 'Plate Number is incorrect'
        errors++
    } else {
        carPlateError.innerHTML = ""
    }

    if (carColor.value == "") {
        carColorError.innerHTML = "Car color is required"
        errors++
    } else {
        carColorError.innerHTML = ""
    }

    if (carModel.value == "") {
        carModelError.innerHTML = "Car model is required"
        errors++
    } else {
        carModelError.innerHTML = ""
    }

    if (carChassis.value == "") {
        carChassisError.innerHTML = "Car chassis number is required"
        errors++
    } else {
        carChassisError.innerHTML = ""
    }

    if (errors < 1) {
        form.submit()
    }
}
