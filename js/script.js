//  validation script for createProduct page
function isValid(){
    // get sumitted inputs
    var name = document.getElementById("productName");
    var description = document.getElementById("description");
    var price = document.getElementById("price");
    var category = document.getElementById("category");

    // get error message box
    var errName = document.getElementById("errName");
    var errDescription = document.getElementById("errDescription");
    var errPrice = document.getElementById("errPrice");
    var errCategory = document.getElementById("errCategory");

    var flag = true;

    //condition
    if (name.value == ""){
        errName.innerHTML = "Product Name cannot be empty";
        flag = false;
        return flag;
    }else if (description.value == ""){
        errDescription.innerHTML = "Product Description cannot be empty";
        flag = false;
        return flag;
    }else if (price.value <= 0){
        errPrice.innerHTML = "Product Price cannot be less than 0";
        flag = false;
        return flag;
    }else if (category.value == "" || category.value == null){
        errCategory.innerHTML = "Pleas select category";
        flag = false;
        return flag;
    }
    return flag;
}

// alert
function successMessage(){
    if(!isValid()){
        alert("Form Not valid");
    }else{
        alert("Successfully Created .. ");
    }
}