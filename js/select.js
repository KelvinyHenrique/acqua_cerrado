
$(".select-basico").on('change', function (e) {
    var duracao = $(this).val()
    var checkbox = $('.select-convites').val();
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
            if (checkbox == 'false') {
                $('.valor-plano-basico').html('R$ 419');
                $(`.botao-comprar-basico`).attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/66dbc52d-6efc-42c5-8e05-d33ef1619e16/express/?preference-id=192393632-6c833960-c398-4aee-91b0-65daa3a25ba8');
            } else {
                $('.valor-plano-basico').html('R$ 499');
                $(`.botao-comprar-basico`).attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/239f60a8-9731-4428-8e3a-6e3e7d81a52b/express/?preference-id=192393632-2ee2a8f9-dbd8-4309-a0be-afec17a95480');
            }
            break;
        case '2':
            if (checkbox == 'false') {
                $('.valor-plano-basico').html('R$ 640');

            } else {
                $('.valor-plano-basico').html('R$ 760');
            }
            break;
    }
});


$(".select-convites").on('change', function (e) {
    var checkbox = $(this).val()
    var duracao = $('.select-precos').val();
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
            if (checkbox == 'nao') {
                $('.valor-plano-basico').html('R$ 419');
                $(`.botao-comprar-basico`).attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/66dbc52d-6efc-42c5-8e05-d33ef1619e16/express/?preference-id=192393632-6c833960-c398-4aee-91b0-65daa3a25ba8');
            } else {
                $('.valor-plano-basico').html('R$ 499');
                $(`.botao-comprar-basico`).attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/239f60a8-9731-4428-8e3a-6e3e7d81a52b/express/?preference-id=192393632-2ee2a8f9-dbd8-4309-a0be-afec17a95480');
            }
            break;
        case '2':
            if (checkbox == 'nao') {
                $('.valor-plano-basico').html('R$ 640');

            } else {
                $('.valor-plano-basico').html('R$ 760');
            }
            break;
    }
});


/* SELECT PRO */

$(".select-pro").on('change', function (e) {
    var duracao = $(this).val()
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
                $('.valor-plano-pro').html('R$ 1.320');
                $(`.botao-comprar-pro`).attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/66dbc52d-6efc-42c5-8e05-d33ef1619e16/express/?preference-id=192393632-6c833960-c398-4aee-91b0-65daa3a25ba8');
            break;
        case '2':
                $('.valor-plano-pro').html('R$ 1.700');
                $(`.botao-comprar-pro`).attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/66dbc52d-6efc-42c5-8e05-d33ef1619e16/express/?preference-id=192393632-6c833960-c398-4aee-91b0-65daa3a25ba8');
            break;
    }
});

/* SELECT ULTRA */

$(".select-ultra").on('change', function (e) {
    var duracao = $(this).val()
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
                $('.valor-plano-ultra').html('R$ 2.000');
                $('.botao-comprar-ultra').attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/adf2ab9a-9cb1-4157-93f7-33088cd883ab/express/?preference-id=192393632-2ba12644-31cd-4d89-8615-122a24f3ea4c');
            break;
        case '2':
                $('.valor-plano-ultra').html('R$ 2.500');
                $('.botao-comprar-ultra').attr('href', 'https://www.mercadopago.com.br/checkout/v1/redirect/99ecd986-76c5-4546-ab26-d5120d4d672b/express/?preference-id=192393632-1b7c1df3-8621-4e62-8de2-d0dd48f91055');
            break;
    }
});

