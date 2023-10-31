function validateMobileNumber(mobileNumber) {
    const pattern = /^[6789]\d{9}$/;
    return pattern.test(mobileNumber);
    }
    
    // Testing the function
    const mobileNumbers = ['9135036704'];
    let text;
    if (validateMobileNumber(mobileNumbers)) {
        text = `is a valid mobile number`;
    } else {
        text = `is an invalid mobile number`;
    }
    console.log(text);