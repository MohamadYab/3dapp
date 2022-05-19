$(document).ready(function(){
    $.getJSON('index.php/apiGetData', function (data){

        // Coca Cola
        $('#coca_cola_brand').html('<h2>' + data[0].brand + '<h2>');
        $('#coca_cola_founded').html('<h3>' + data[0].founded + '</h3>');
        $('#coca_cola_description').html('<p>' + data[0].brandDescription + '</p>');
        $('#coca_cola_more').attr('href', `${data[0].moreInfo}`);

        // Sprite
        $('#sprite_brand').html('<h2>' + data[1].brand + '<h2>');
        $('#sprite_founded').html('<h3>' + data[1].founded + '</h3>');
        $('#sprite_description').html('<p>' + data[1].brandDescription + '</p>');
        $('#sprite_more').attr('href', `${data[1].moreInfo}`);

        // Dr Pepper
        $('#pepper_brand').html('<h2>' + data[2].brand + '<h2>');
        $('#pepper_founded').html('<h3>' + data[2].founded + '</h3>');
        $('#pepper_description').html('<p>' + data[2].brandDescription + '</p>');
        $('#pepper_more').attr('href', `${data[2].moreInfo}`);

        // Appletiser
        $('#appletiser_brand').html('<h2>' + data[3].brand + '<h2>');
        $('#appletiser_founded').html('<h3>' + data[3].founded + '</h3>');
        $('#appletiser_description').html('<p>' + data[3].brandDescription + '</p>');
        $('#appletiser_more').attr('href', `${data[3].moreInfo}`);
    });
});