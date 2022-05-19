function updateScene(model) {
    switch (model) {
        case 'coke':
            changeBrand('Coke');
            changeSwithcer(0);
            changeDescription(0);
            break;
        case 'sprite':
            changeBrand('Sprite');
            changeSwithcer(1);
            changeDescription(1);
            break;
        case 'pepper':
            changeBrand('Dr Pepper');
            changeSwithcer(2);
            changeDescription(2);
            break;
        case 'appletiser':
            changeBrand('Appletiser');
            changeSwithcer(3);
            changeDescription(3);
            break;
        default:
            break;
    }
}

function changeBrand(brand) {
    document.getElementById("model_brand").innerHTML = brand;
}

function changeSwithcer(nodeId) {
    document.getElementById("switcher").setAttribute("whichChoice", nodeId);
}

function changeDescription(index) {
    $.getJSON('index.php/apiGetData', function (data){
        // Coca Cola
        $('#brand').html(data[index].brand);
        $('#founded').html(data[index].founded);
        $('#description').html(data[index].brandDescription);
    });
}