const unitPrice = 1000;
const quantityInput = document.getElementById("quantity");
const totalPriceInput = document.getElementById("totalPrice");

function calculation(){
    let quantity= parseFloat(quantityInput.value) ||0;   
    if(quantity <0){
        alert("Negative quantity not allowed!"); 
        quantity = 0;
        quantityInput.value = 0;
    }
    
    let total = quantity * unitPrice * 30;
    totalPriceInput.value = total;
    
    if(total>1000){
        alert("Great job! You are eligible for a special gift coupon!");  
    }
}

quantityInput.addEventListener("input", calculation);