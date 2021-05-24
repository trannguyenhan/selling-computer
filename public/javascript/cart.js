function remove_form() {
    document.getElementById("submit_delete").click();
}

function update_quantity(this_row) {
    let list = document.getElementById("table").rows;
    let lens = list.length;
    let sum = 0;

    let list_quantity = new Array();
    for (let i = 1; i < lens; i++) {
        let quantity = parseInt(document.getElementsByClassName("quantity")[i - 1].value);
        if (list[i].contains(this_row)) {
            let ele_price = document.getElementsByClassName("price")[i - 1].value;
            if (quantity >= 6) {
                alert("Chọn tối đa 5 sản phầm thôi! Vì chúng tôi biết chả ai mua nhiều máy tính tới thế!");
                document.getElementsByClassName("quantity")[i - 1].value = 5;
                return;
            }

            let new_price = String(parseInt(ele_price) * quantity);
            list[i].cells[2].innerHTML = new_price;
        }

        list_quantity.push(quantity);
        sum += parseInt(list[i].cells[2].innerHTML);
    }

    // let ele_price = document.getElementById("price").value;
    // let quantity = parseInt(document.getElementById("quantity").value);
    // if(quantity >= 5){
    // 		alert("5 cái thôi, ai mua máy tính mua chục cái bao giờ!");
    // 		document.getElementById("quantity").value = 5;
    // 		return;
    // }
    // let new_price = String(parseInt(ele_price) * quantity);
    // alert(new_price);

    // document.getElementById("table").rows[1].cells[2].innerHTML = new_price;
    document.getElementById("table_total").rows[0].cells[1].innerHTML = String(sum);

    let text = "";
    for (let i = 0; i < list_quantity.length; i++) {
        let t = String(list_quantity[i]);
        text += t + " ";
    }

    document.getElementById("list_quantity").value = text;
    // alert(sum);
}

function confirm_order() {
    document.getElementById("submit_insert").click();
}